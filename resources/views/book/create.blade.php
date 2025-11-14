@extends('ui.layouts.simple.master')
@section('title', 'Bootstrap Border Table')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Create Book</h3>


@endsection


@section('content')
    <div class="card">

        <div class="card-body">
            <form class="needs-validation" novalidate="" action="{{route('book.store')}}" METHOD="post">
                @csrf
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">SKU</label>
                        <input class="form-control" id="validationCustom01" type="text" name="name" placeholder="Name" required="" data-bs-original-title="" title="">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Barcode</label>
                        <input class="form-control" id="validationCustom02" type="text" name="bio" placeholder="Bio" required="" data-bs-original-title="" title="">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Title</label>
                        <input class="form-control" id="validationCustom02" type="text" name="bio" placeholder="Bio" required="" data-bs-original-title="" title="">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Sub Title</label>
                        <input class="form-control" id="validationCustom02" type="text" name="bio" placeholder="Bio" required="" data-bs-original-title="" title="">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Barcode</label>
                        <input class="form-control" id="validationCustom02" type="text" name="bio" placeholder="Bio" required="" data-bs-original-title="" title="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Barcode</label>

                            <select id="country_id" class="form-control select2 " name="select">
                                <option value="">Select Country</option>
                                <option value="opt1">Featured</option>
                                <option value="opt2">Lowest Prices</option>
                                <option value="opt3">Highest Prices</option>
                            </select>


                    </div>

                </div>


                <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Create</button>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: "Select an option",
                allowClear: true
            });
        });
    </script>
@endsection


