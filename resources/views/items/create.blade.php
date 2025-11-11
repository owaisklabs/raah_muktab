@extends('ui.layouts.simple.master')
@section('title', 'Bootstrap Border Table')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Item</h3>


@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Bootstrap Tables</li>
<li class="breadcrumb-item active">Bootstrap Border Table</li>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Create Item</h5>
    </div>
    <div class="card-body">
        <form class="needs-validation" action="{{route('items.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Name</label>
                    <input class="form-control" id="validationCustom01" type="text" placeholder="First name" required="" name="name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom02">HS Code</label>
                    <input class="form-control" id="validationCustom02" type="text" placeholder="Last name" required="" name="hs_code">
                </div>
            </div>


            <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Create</button>
        </form>
    </div>
</div>
@endsection
