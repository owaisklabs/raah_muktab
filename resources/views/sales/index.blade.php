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
                            <th scope="col">Date</th>
                            <th scope="col">Total Amount</th>
                            <th scope="col">Paid Amount</th>
                            <th scope="col">Balance</th>
                            <th scope="col">Status</th>

                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($sales as $item)
                            @php
                                $statusClass = [
                                    'open'      => 'bg-warning text-dark',
                                    'paid'      => 'bg-success',
                                    'cancelled' => 'bg-danger',
                                    'refund'    => 'bg-orange text-white', // custom color needed
                                ][$item->status] ?? 'bg-secondary';

                            $balance= $item->total_amount - $item->paid_amount;
                            @endphp

                            <tr>
                                <td scope="row">{{$item->id}}</td>
                                <th >{{$item->invoice_no}}</th>
                                <td>{{$item->sale_date}}</td>
                                <td>{{number_format($item->total_amount,2)}}</td>
                                <td>{{number_format($item->paid_amount,2)}}</td>
                                <td>{{number_format($balance,2) }}</td>
                                <td><span class="badge rounded-pill {{ $statusClass }}">{{ ucfirst($item->status) }}</span></td>
                                <td class="">
                                    <div class="d-flex  gap-1">
                                        {{-- View --}}
                                        <a href="{{ route('publisher.edit', $item->id) }}" class="btn btn-sm btn-primary p-1">
                                            <i data-feather="eye"></i>
                                        </a>

                                        {{-- Edit --}}
                                        <a href="{{ route('publisher.edit', $item->id) }}" class="btn btn-sm btn-primary p-1">
                                            <i data-feather="edit"></i>
                                        </a>

                                        {{-- Payment --}}
                                        <button  class="btn btn-sm btn-success p-1 payment-received" data-sales-id="{{$item->id}}" data-receive-amount="{{$balance}}">
                                            <i data-feather="dollar-sign"></i>
                                        </button>

                                        {{-- Delete --}}
                                        <form action="{{ route('publisher.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" class="m-0 p-0">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger p-1">
                                                <i data-feather="trash-2"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                {{ $sales->links('pagination::bootstrap-5')}}
            </div>
        </div>
    </div>
@endsection

@section('script')

    <script>
        $(".payment-received").click(function () {
            var saleId = $(this).data("sales-id");
            const receiveAmount = $(this).data("receive-amount");
            console.log(saleId,receiveAmount)
            Swal.fire({
                title:  "Received Amount",
                input: "text",
                inputValue: receiveAmount,
                showCancelButton: true,
                confirmButtonText: "Confirm",
            }).then(result => {
                if (!result.value) return;
                console.log(result.value)
                $.get(`http://localhost/raah_muktab/public/dashboard/payment-receive?sale_id=${saleId}&receive_amount=${result.value}`, function (response) {
                    window.location.href=response.redirect_url
                }).fail(err => {
                    Swal.fire("Error!", err.responseJSON.message, "error");
                });
            })
        })

    </script>
@endsection
