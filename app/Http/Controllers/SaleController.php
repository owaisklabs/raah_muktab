<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Sale;
use App\Models\SaleItem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sale::latest()->paginate(10);
        return view('sales.index',compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('sales.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'amount'       => 'required|numeric|min:0',
            'cartData'     => 'required|array|min:1',
            'cartData.*.book_id'  => 'required|integer|exists:books,id',
            'cartData.*.qty'       => 'required|numeric|min:1',
            'cartData.*.price'     => 'required|numeric|min:0',
            'cartData.*.discount'  => 'nullable|numeric|min:0|max:100',
            'cartData.*.line_total'=> 'required|numeric|min:0',
        ]);

        DB::beginTransaction();

        try {

            $lastSale = Sale::latest('id')->first();
            $nextId   = $lastSale ? $lastSale->id + 1 : 1;

            $invoiceNumber = str_pad($nextId, 6, '0', STR_PAD_LEFT);

            $sale = Sale::create([
                'invoice_no'   => $invoiceNumber,
                'sale_date'    => now(),
                'total_amount' => $request->amount,
                'created_by'   => auth()->id(),
            ]);

            foreach ($request->cartData as $item) {

                $quantity    = $item['qty'];
                $unitPrice   = $item['price'];
                $discount    = $item['discount'] ?? 0;

                $afterDiscount = $unitPrice * (1 - ($discount / 100));

                SaleItem::create([
                    'sale_id'     => $sale->id,
                    'book_id'     => $item['book_id'],
                    'quantity'    => $quantity,
                    'unit_price'  => $unitPrice,
                    'sale_price'  => $afterDiscount,
                    'line_total'  => $quantity * $unitPrice,
                    'discount'    => $discount,
                    'total'       => $item['line_total'],
                ]);
                $inventory = Inventory::where('book_id', $item['book_id'])->first();
                if ($inventory) {
                    $inventory->decrement('quantity', $quantity);
                }
            }

            DB::commit();
            $data = $sale->load('items');
            $request->user()->cart()->detach();
            return response()->json(['message' => 'success', 'data' => $data], 201);

        } catch (\Exception $e) {

            DB::rollBack();
            return response()->json([
                'message' => 'error',
                'error'   => $e->getMessage()
            ], 500);
        }
    }
    public function printA5Receipt($id){
        $sale = Sale::with('items.book')->findOrFail($id);
        return view('reports.sale-receipt-a5',compact('sale'));
        $pdf = PDF::loadView('reports.sale-receipt-a5', compact('sale'))
            ->setPaper('a5', 'landscape');

        return $pdf->stream('receipt-'.$sale->invoice_no.'.pdf'); // open in browser
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        //
    }
}
