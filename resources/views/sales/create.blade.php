@extends('ui.layouts.simple.master')
@section('title', 'Bootstrap Border Table')

@section('css')
@endsection

@section('style')
@endsection


@section('content')
    <div class="row" id="pos-app">
        <div class="col-md-6 col-lg-5">

            <!-- Barcode + Customer -->
            <div class="row mb-2">
                <div class="col">
                    <form id="barcode-form">
                        <input type="text" id="barcode" class="form-control" placeholder="Scan Barcode">
                    </form>
                </div>

                <div class="col">
                    <select id="customer_id" class="form-control">
                        <option value="">General Customer</option>
                    </select>
                </div>
                <div class="col">
                    <select id="status" class="form-control">
                        <option value="open">Open</option>
                        <option value="paid">Paid</option>
                    </select>
                </div>
            </div>

            <!-- CART -->
            <div class="card">
                <table class="table table-striped" id="cart-table">
                    <thead>
                    <tr>
                        <th>Books</th>
                        <th>Book Price</th>
                        <th>Quantity</th>
                        <th>Discount</th>
                        <th>Line Total</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>

            <!-- TOTAL -->
            <div class="row mt-2">
                <div class="col-9">Total:</div>
                <div class="col text-right" id="cart-total">0</div>
            </div>

            <!-- Buttons -->
            <div class="row mt-2">
                <div class="col">
                    <button id="btn-empty" class="btn btn-danger btn-block">Cancel</button>
                </div>
                <div class="col">
                    <button id="btn-checkout" class="btn btn-primary btn-block">Checkout</button>
                </div>
            </div>
        </div>

        <!-- PRODUCTS -->
        <div class="col-md-6 col-lg-7">
            <input id="search" class="form-control mb-2" placeholder="Search Product...">

            <div id="product-list" class="order-product row text-center"></div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        var BASE_URL = "{{ url('') }}";
        function validateNumber(input) {
            const regex = /^-?\d*\.?\d*$/;
            if (!regex.test(input.value)) {
                input.value = input.value.slice(0, -1);
            }
        }
        $(document).ready(function () {

            // loadTranslations();
            loadCustomers();
            loadProducts();
            loadCart();

            // -----------------------------
            // LOAD TRANSLATIONS
            // -----------------------------
            // function loadTranslations() {
            //     $.get("/admin/locale/cart", function (res) {
            //         window.T = res;
            //     }).fail(() => window.T = {});
            // }

            // -----------------------------
            // LOAD CUSTOMERS
            // -----------------------------
            function loadCustomers() {
                $.get(BASE_URL+"/dashboard/get-all-customer", function (customers) {
                    customers.data.forEach(c => {
                        $("#customer_id").append(
                            `<option value="${c.id}">${c.name} </option>`
                        );
                    });
                });
            }

            // -----------------------------
            // LOAD PRODUCTS
            // -----------------------------
            function loadProducts(search = "") {
                $.get(`${BASE_URL}/dashboard/get-book-by-title?search=${search}`, function (res) {
                    const products = res.data || [];
                    const list = $("#product-list");
                    list.html("");
                    products.forEach(p => {
                        list.append(`
                <div class="col-6 col-md-3 col-xl-2 mb-4">

                    <div class="item"  data-barcode="${p.id}">
                        <img src="{{asset('storage')}}/${p.cover_image}" class="class="img-fluid"" style=" height: 150px;" />
                        <h5 ">
                            ${p.title}
                        </h5>
                    </div>
                 </div>
                `);
                    });
                });
            }

            // Click to add product
            $("#product-list").on("click", ".item", function () {
                const bookId = $(this).data("barcode");

                addProductToCart(bookId);
            });

            // -----------------------------
            // LOAD CART
            // -----------------------------
            function loadCart() {
                $.get(BASE_URL+"/dashboard/cart", function (cart) {
                    renderCart(cart.data);
                });
            }

            function renderCart(cart) {
                const tbody = $("#cart-table tbody");
                tbody.html("");

                let total = 0;
                cart.forEach(item => {
                    const quantity = item.pivot.quantity;
                    const discount = item.pivot.discount || 0; // default 0
                    const lineTotal = quantity * item.sell_price * (1 - discount / 100);
                    total += lineTotal;

                    tbody.append(`
                <tr>
                    <td>${item.title}</td>
                    <td class="text-right">${item.sell_price}</td>

                    <td class="">

                        <input type="text" oninput="validateNumber(this)" class="form-control form-control-sm qty-input"
                              name="qty[]" value="${quantity}" data-id="${item.id}">

                    </td>
                    <input type="hidden" name="book_id[]" value="${item.id}">
                    <input type="hidden" name="book_price[]" value="${item.sell_price}">
                    <input type="hidden" name="cost_price[]" value="${item.cost_price}">
                    <input type="hidden" name="line_total[]" value="${lineTotal.toFixed(2)}">
                    <td><input type="text" name="discount[]" class="form-control form-control-sm discount-input" value="${discount}" data-id="${item.id}"></td>
                    <td class="text-right">${lineTotal.toFixed(2)}</td>
                     <td>
                            <button class="btn btn-danger btn-sm btn-del" data-id="${item.id}"  style="padding: 4px;">
                             <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"/>
                                <line x1="6" y1="6" x2="18" y2="18"/>
                             </svg>
                        </button>
                     </td>
                </tr>
            `);
                });

                $("#cart-total").text(total.toFixed(2));
            }

            // -----------------------------
            // SCAN BARCODE
            // -----------------------------
            $("#barcode-form").submit(function (e) {
                e.preventDefault();
                const barcode = $("#barcode").val();

                if (!barcode) return;

                $.post(BASE_URL+"/admin/cart", { barcode }, function () {
                    $("#barcode").val("");
                    loadCart();
                }).fail(err => {
                    Swal.fire("Error!", err.responseJSON.message, "error");
                });
            });

            // -----------------------------
            // ADD PRODUCT TO CART
            // -----------------------------
            function addProductToCart(bookId) {
                $('.loader-wrapper').fadeIn();
                $.ajaxSetup({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                    }
                });
                $.post(BASE_URL+"/dashboard/cart", { bookId }, function () {
                    loadCart();
                    $('.loader-wrapper').fadeOut();
                }).fail(err => {
                    Swal.fire("Error!", err.responseJSON.message, "error");
                    $('.loader-wrapper').fadeOut();
                });
            }

            // -----------------------------
            // UPDATE QTY
            // -----------------------------
            $("#cart-table").on("change", ".qty-input, .discount-input", function () {

                const id = $(this).data("id");
                // const qty = $(this).val();
                const row = $(this).closest("tr");
                const qty = parseFloat(row.find(".qty-input").val());
                const discount = parseFloat(row.find(".discount-input").val()) || 0;
                $('.loader-wrapper').fadeIn();
                $.ajaxSetup({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                    }
                });

                $.post(BASE_URL+"/dashboard/cart/change-qty", { product_id: id, quantity: qty,discount: discount}, function () {
                    loadCart();
                    $('.loader-wrapper').fadeOut();
                }).fail(err => {
                    Swal.fire("Error!", err.responseJSON.message, "error");
                    $('.loader-wrapper').fadeOut();
                });
            });

            // -----------------------------
            // DELETE ITEM
            // -----------------------------
            $("#cart-table").on("click", ".btn-del", function () {
                const id = $(this).data("id");
                $.ajaxSetup({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                    }
                });
                $('.loader-wrapper').fadeIn();
                $.post(BASE_URL+"/dashboard/cart/delete", { product_id: id, _method: "DELETE" }, function () {
                    loadCart();
                    $('.loader-wrapper').fadeOut();
                });
            });

            // -----------------------------
            // EMPTY CART
            // -----------------------------
            $("#btn-empty").click(function () {
                $('.loader-wrapper').fadeIn();
                $.ajaxSetup({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                    }
                });
                $.post(BASE_URL+"/dashboard/cart/empty", { _method: "DELETE" }, function () {
                    loadCart();
                    $('.loader-wrapper').fadeOut();
                });
            });

            // -----------------------------
            // SEARCH PRODUCTS
            // -----------------------------
            $("#search").keydown(function (e) {
                if (e.keyCode === 13) {
                    $('.loader-wrapper').fadeIn();
                    loadProducts($(this).val());
                    $('.loader-wrapper').fadeOut();
                }
            });

            // -----------------------------
            // CHECKOUT
            // -----------------------------
            $("#btn-checkout").click(function () {
                let cartData = [];
                $('#cart-table tbody tr').each(function () {
                    cartData.push({
                        qty: $(this).find('input[name="qty[]"]').val(),
                        discount: $(this).find('input[name="discount[]"]').val(),
                        price: $(this).find('input[name="book_price[]"]').val(),
                        cost_price: $(this).find('input[name="cost_price[]"]').val(),
                        line_total: $(this).find('input[name="line_total[]"]').val(),
                        book_id: $(this).find('input[name="book_id[]"]').val(),
                    });
                });
                const total = $("#cart-total").text();

                Swal.fire({
                    title:  "Received Amount",
                    input: "text",
                    inputValue: total,
                    showCancelButton: true,
                    confirmButtonText: "Confirm",
                }).then(result => {
                    if (!result.value) return;

                    $.ajaxSetup({
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                        }
                    });
                    $.post(BASE_URL+"/dashboard/sales", {
                        customer_id: $("#customer_id").val(),
                        sales_status:$("#status").val(),
                        amount: result.value,
                        cartData : cartData
                    }, function (res) {
                        console.log(res.data.id)
                        window.location.href =  `${BASE_URL}/dashboard/print-receipt/${res.data.id} `;

                        loadCart();

                    }).fail(err => {
                        Swal.fire("Error!", err.responseJSON.message, "error");
                    });
                });
            });
        });

    </script>
@endsection
