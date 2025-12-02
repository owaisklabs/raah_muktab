<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Inventory;
use App\Models\Purchase;
use App\Models\PurchaseItem;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchases = Purchase::latest()->paginate(10);
        return view('purchase.index',compact('purchases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = Supplier::all();
        $books = Book::all();
        return  view('purchase.create',compact('suppliers','books'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $totalAmount = 0;
        $purchase = Purchase::create([
            'supplier_id'   => $request->supplier_id,
            'invoice_no'    => $request->invoice_no,
            'purchase_date' => $request->purchase_date,
            'status'        => 'pending',
            'created_by'    => auth()->id(),
        ]);
        foreach ($request->items as $item) {

            $lineTotal = $item['quantity'] * $item['unit_cost'];
            $totalAmount += $lineTotal;

            PurchaseItem::create([
                'purchase_id' => $purchase->id,
                'book_id'     => $item['book_id'],
                'quantity'    => $item['quantity'],
                'unit_cost'   => $item['unit_cost'],
                'line_total'  => $lineTotal,
            ]);
            Book::where('id', $item['book_id'])
                ->update(['cost_price' => $item['unit_cost']]);
            $inventory = Inventory::where('book_id', $item['book_id'])->first();

            if ($inventory) {
                $inventory->quantity += $item['quantity'];
                $inventory->save();
            } else {
                // ➕ Create new inventory record
                Inventory::create([
                    'book_id'  => $item['book_id'],
                    'quantity' => $item['quantity'],
                    'location' => null,
                    'reorder_level' => 10,
                ]);
            }
        }
        $purchase->update(['total_amount' => $totalAmount]);
        return redirect()->route('purchase.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase)
    {
        return view('purchase.update',compact('purchase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
    {
        //
    }
}
