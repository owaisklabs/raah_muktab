<?php

namespace App\Http\Controllers;

use App\Models\Purchaser;
use App\services\purchaser\PurchaserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PurchaserController extends Controller
{

    private PurchaserService $purchaser;
    public function __construct(PurchaserService $purchaser)
    {
        $this->purchaser = $purchaser;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $data['rows'] = $this->purchaser->dataTable();

        return view('purchaser.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('purchaser.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->purchaser->store($request);
        return Redirect::route('purchaser.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Purchaser  $purchaser
     * @return \Illuminate\Http\Response
     */
    public function show(Purchaser $purchaser)
    {
        dd("here");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Purchaser  $purchaser
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = $this->purchaser->getById($id);
        return view('purchaser.update',compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Purchaser  $purchaser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchaser $purchaser)
    {
        $this->purchaser->update($request,$purchaser);
        return Redirect::route('purchaser.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Purchaser  $purchaser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchaser $purchaser)
    {
        $purchaser->delete();
        return Redirect::route('purchaser.index');
    }
}
