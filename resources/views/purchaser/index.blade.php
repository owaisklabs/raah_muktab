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
    <li class="breadcrumb-item">Sales</li>
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
                                <th scope="col">Purchaser</th>
                                <th scope="col">Date</th>
                                <th scope="col">NIC | NTN</th>
                                <th scope="col">Address</th>
                                <th scope="col">strn</th>
                                <th scope="col">phone</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rows as $item)
                                <tr >
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                    <td>{{ $item->nic }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->strn }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td class="d-inline-flex">
                                        <form action="{{ route('purchaser.destroy', $item->id) }}" method="POST" class="px-1">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger p-1"  type="submit"> <i data-feather="trash-2"></i></button>
                                        </form>
                                        {{-- <a href="void(0)" class="delete-button"> <i
                                                data-feather="trash-2"></i></a> &nbsp; --}}
                                        <a class="btn btn-primary  p-1" href="{{ route('purchaser.edit', $item->id) }}"> <i data-feather="edit"></i></a>
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
<script>
    $('.delete-button').click(function(e){
        e.preventDefault();
        var result = confirm("Warning!\nAre You sure you want to delete.");
        if (result == true) {

            } else {
               return false;
            }
    })
</script>
@endsection
