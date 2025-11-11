@extends('ui.layouts.simple.master')
@section('title', 'Bootstrap Border Table')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Purchase</h3>


@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Bootstrap Tables</li>
<li class="breadcrumb-item active">Bootstrap Border Table</li>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Create Purchase</h5>
    </div>
    <div class="card-body">
        <form class="needs-validation" method="POST" action="{{route('purchase.store')}}">
            @csrf
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="nic_ntn">Date</label>
                    <input class="form-control" id="nic_ntn" type="date" name="purchase_date" placeholder="NIC | NTN" required="" data-bs-original-title="" title="">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="strn">Supplier</label>
                    <select name="supplier_id" id="" class="form-control" required>
                        <option value="" selected> Select Supplier</option>
                        @foreach(App\Models\Supplier::all() as $supplier )
                            <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                        @endforeach
                    </select>
                    {{-- <input class="form-control" id="strn" type="text" name="strn" placeholder="STRN" required="" data-bs-original-title="" title=""> --}}
                </div>
                <div class="col-md-4 mb-3">
                    <label for="phone">Item</label>
                    <select name="item_id" id="" class="form-control" required>
                        <option value="" selected> Select Item</option>
                        @foreach(App\Models\Item::all() as $item )
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="address">QTY</label>
                    <input class="form-control" id="address" type="number" name="qty" placeholder="QTY" required="" data-bs-original-title="" title="">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="address">Sale Mode</label>
                    <select name="purchase_mode_id" id="" class="form-control">
                        <option value="" selected> Select Sale Mode</option>
                        @foreach(App\Models\PurchaseMode::all() as $item )
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Create</button>
        </form>
    </div>
</div>
@endsection
