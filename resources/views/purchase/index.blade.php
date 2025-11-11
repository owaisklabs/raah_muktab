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
    <div class="container-fluid">
        {{-- <div class="row"> --}}
        <form action="#" class="row" method="GET">
            <div class="col-md-3 mb-3">
                <label for="validationCustom01">Query</label>
                <input class="form-control" name="query" type="text" placeholder="First name" required="">
                <div class="valid-feedback">Looks good!</div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom02">From Date</label>
                <input class="form-control" name="from_date" id="validationCustom02" type="date">
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom02">To Date</label>
                <input class="form-control" name="to_date" id="validationCustom02" type="date">
            </div>
            <div class="col-md-3 mb-3" style="margin-top: 25px;">
                <button class="btn btn-pill btn-primary btn-air-primary btn-lg" type="submit">Search</button>
            </div>
        </form>
        {{-- </div> --}}
        <div class="row">

            <div class="col-sm-12">

                <div class="table-responsive">
                    <table class="table table-border-vertical " style="background-color: white;">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Purchase Date</th>
                                <th scope="col">Supplier</th>
                                <th scope="col">Item</th>
                                <th scope="col">QTY</th>
                                <th scope="col">Putchase Mode</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rows as $item)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $item->purchase_date }}</td>
                                    <td>{{ $item->supplier->name }}</td>
                                    <td>{{ $item->item->name }}</td>
                                    <td>{{ $item->qty }}</td>
                                    <td>{{ $item->purchaseMode->name }}</td>
                                    <td>
                                        <a href=""> <i data-feather="trash-2"></i></a> &nbsp;
                                        <a href="{{ route('purchase.edit', 1) }}"> <i data-feather="edit"></i></a>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
