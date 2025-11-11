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
        <h5>Update Purchaser</h5>
    </div>
    <div class="card-body">
        <form class="needs-validation" method="POST" action="{{route('purchaser.update',$row->id)}}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="name">Purcahser</label>
                    <input class="form-control" id="name" type="text" name="name" value="{{$row->name}}" placeholder="Purchaser" required="" data-bs-original-title="" title="">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="nic_ntn">NIC | NTN</label>
                    <input class="form-control" id="nic_ntn" type="text" name="nic" value="{{$row->nic}}" placeholder="NIC | NTN" required="" data-bs-original-title="" title="">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="strn">STRN</label>
                    <input class="form-control" id="strn" type="text" name="strn" value="{{$row->strn}}" placeholder="STRN" required="" data-bs-original-title="" title="">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="phone">Phone</label>
                    <input class="form-control" id="phone" type="text" name="phone" value="{{$row->phone}}" placeholder="Phone" required="" data-bs-original-title="" title="">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="address">Address</label>
                    <input class="form-control" id="address" type="text" name="address" value="{{$row->address}}" placeholder="Address" required="" data-bs-original-title="" title="">
                </div>
            </div>


            <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Create</button>
        </form>
    </div>
</div>
@endsection
