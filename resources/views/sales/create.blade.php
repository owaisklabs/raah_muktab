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
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mb-3">
                <h4 class="mb-3">Point of Sale</h4>
            </div>

            <!-- Left Column: Cart -->
            <div class="col-lg-6 col-12 mb-3">
                <table class="table">
                    <thead>
                    <tr class="table-light">
                        <th>Name</th>
                        <th>QTY</th>
                        <th>Price</th>
                        <th>SubTotal</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>excepturi</td>
                        <td style="min-width: 140px;">
                            <form action="http://127.0.0.1:8000/pos/update/064c8a2fda8451c8c23926d6d3592023" method="POST">
                                <input type="hidden" name="_token" value="9Brx75LSSBXCHjFMQ2pfCW23tay6MjbrUGcZgr9V" autocomplete="off">                                <div class="input-group">
                                    <input type="number" class="form-control" name="qty" required="" value="1">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-success border-none" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sumbit"><i class="fas fa-check"></i></button>
                                    </div>
                                </div>
                            </form>
                        </td>
                        <td>88</td>
                        <td>88.00</td>
                        <td>
                            <a href="http://127.0.0.1:8000/pos/delete/064c8a2fda8451c8c23926d6d3592023" class="btn btn-danger border-none" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa-solid fa-trash mr-0"></i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <div class="row text-center mb-3">
                    <div class="col-4 mb-2">
                        <p class="h4 text-primary">Quantity: 0</p>
                    </div>
                    <div class="col-4 mb-2">
                        <p class="h4 text-primary">Subtotal: 0</p>
                    </div>
                    <div class="col-4 mb-2">
                        <p class="h4 text-primary">Total: 0</p>
                    </div>
                </div>

                <form action="/pos/invoice/create" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="mb-3">
                        <select class="form-select" name="customer_id">
                            <option selected disabled>-- Select Customer --</option>
                            <!-- Customer options -->
                        </select>
                    </div>
                    <div class="d-flex justify-content-center gap-2">
                        <a href="/customers/create" class="btn btn-primary">Add Customer</a>
                        <button type="submit" class="btn btn-success">Create Invoice</button>
                    </div>
                </form>
            </div>

            <!-- Right Column: Product List -->
            <div class="col-lg-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3 mb-3" method="get">
                            <div class="col-auto d-flex align-items-center">
                                <label for="row" class="me-2 mb-0">Row:</label>
                                <select class="form-select" name="row">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>

                            <div class="col-auto d-flex align-items-center">
                                <label for="search" class="me-2 mb-0">Search:</label>
                                <div class="input-group">
                                    <input type="text" id="search" name="search" class="form-control" placeholder="Search product">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                    <a href="/products" class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </div>
                            </div>
                        </form>

                        <div class="table-responsive rounded mb-3">
                            <table class="table mb-0">
                                <thead class="bg-white text-uppercase">
                                <tr>
                                    <th>No.</th>
                                    <th>Photo</th>
                                    <th>Name <i class="fa fa-sort"></i></th>
                                    <th>Price <i class="fa fa-sort"></i></th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <img class="avatar-60 rounded" src="http://127.0.0.1:8000/assets/images/product/default.webp">
                                    </td>
                                    <td>excepturi</td>
                                    <td>88</td>
                                    <td>
                                        <form action="http://127.0.0.1:8000/pos/add" method="POST" style="margin-bottom: 5px">
                                            <input type="hidden" name="_token" value="9Brx75LSSBXCHjFMQ2pfCW23tay6MjbrUGcZgr9V" autocomplete="off">                                            <input type="hidden" name="id" value="1">
                                            <input type="hidden" name="name" value="excepturi">
                                            <input type="hidden" name="price" value="88">

                                            <button type="submit" class="btn btn-primary border-none" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add"><i class="far fa-plus mr-0"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
