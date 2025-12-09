@extends('ui.layouts.simple.master')
@section('title', 'Bootstrap Border Table')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Purchases</h3>
@endsection

{{--@section('breadcrumb-items')--}}
{{--    <li class="breadcrumb-item">Authors</li>--}}
{{--@endsection--}}


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
                <input class="form-control" name="from_date" id="validationCustom02" type="date"  >
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom02">To Date</label>
                <input class="form-control" name="to_date" id="validationCustom02" type="date"  >
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
                            <th scope="col">Invoice #</th>
                            <th scope="col">Supplier</th>
                            <th scope="col">Date</th>
                            <th scope="col">Total Amount</th>
                            <th scope="col">Status</th>

                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($purchases as $item)

                            <tr>
                                <td scope="row">{{$item->id}}</td>
                                <th >{{$item->invoice_no}}</th>
                                <td>{{$item->supplier->name}}</td>
                                <td>{{$item->purchase_date}}</td>
                                <td>{{$item->total_amount}}</td>
                                <td>{{$item->status}}</td>
                                <td class="d-flex align-items-center gap-2">
                                    <a href="{{ route('purchase.edit', $item->id) }}" class="btn btn-sm btn-primary p-1 d-flex align-items-center justify-content-center">
                                        <i data-feather="eye"></i>
                                    </a>

                                    {{-- Delete --}}
                                    <form action="{{ route('purchase.destroy', $item->id) }}" method="POST"
                                          onsubmit="return confirm('Are you sure you want to delete this purchase?');" class="m-0 p-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger p-1 d-flex align-items-center justify-content-center">
                                            <i data-feather="trash-2"></i>
                                        </button>
                                    </form>

                                    {{-- Edit --}}

                                    <a href="{{ route('purchase.edit', $item->id) }}" class="btn btn-sm btn-primary p-1 d-flex align-items-center justify-content-center">
                                        <i data-feather="edit"></i>
                                    </a>

                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                {{ $purchases->links('pagination::bootstrap-5')}}
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
