@extends('ui.layouts.simple.master')
@section('title', 'Bootstrap Border Table')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Sales</h3>


@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item"> <a href="{{route('sales.index')}}">Sales</a></li>
<li class="breadcrumb-item active">Create</li>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Create Sales</h5>
    </div>
    <div class="card-body">
        <form class="needs-validation" novalidate="">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom01">First name</label>
                    <input class="form-control" id="validationCustom01" type="text" placeholder="First name" required="" data-bs-original-title="" title="">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Last name</label>
                    <input class="form-control" id="validationCustom02" type="text" placeholder="Last name" required="" data-bs-original-title="" title="">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Last name</label>
                    <input class="form-control" id="validationCustom02" type="text" placeholder="Last name" required="" data-bs-original-title="" title="">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Last name</label>
                    <input class="form-control" id="validationCustom02" type="text" placeholder="Last name" required="" data-bs-original-title="" title="">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Last name</label>
                    <input class="form-control" id="validationCustom02" type="text" placeholder="Last name" required="" data-bs-original-title="" title="">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Last name</label>
                    <input class="form-control" id="validationCustom02" type="text" placeholder="Last name" required="" data-bs-original-title="" title="">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Last name</label>
                    <input class="form-control" id="validationCustom02" type="text" placeholder="Last name" required="" data-bs-original-title="" title="">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Last name</label>
                    <input class="form-control" id="validationCustom02" type="text" placeholder="Last name" required="" data-bs-original-title="" title="">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Last name</label>
                    <input class="form-control" id="validationCustom02" type="text" placeholder="Last name" required="" data-bs-original-title="" title="">
                </div>


            </div>


            <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Create</button>
        </form>
    </div>
</div>
@endsection
