<?php $__env->startSection('title', 'Bootstrap Border Table'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="row" id="pos-app">
        <div class="col-md-6 col-lg-4">

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
            </div>

            <!-- CART -->
            <div class="card">
                <table class="table table-striped" id="cart-table">
                    <thead>
                    <tr>
                        <th>Books</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Discount</th>

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
        <div class="col-md-6 col-lg-8">
            <input id="search" class="form-control mb-2" placeholder="Search Product...">

            <div id="product-list" class="order-product row text-center"></div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function () {

            // loadTranslations();
            // loadCustomers();
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
            // function loadCustomers() {
            //     $.get("/admin/customers", function (customers) {
            //         customers.forEach(c => {
            //             $("#customer_id").append(
            //                 `<option value="${c.id}">${c.first_name} ${c.last_name}</option>`
            //             );
            //         });
            //     });
            // }

            // -----------------------------
            // LOAD PRODUCTS
            // -----------------------------
            function loadProducts(search = "") {
                $.get(`http://localhost/raah_muktab/public/dashboard/get-book-by-title?search=${search}`, function (res) {
                    const products = res.data || [];
                    const list = $("#product-list");
                    console.log(products)
                    list.html("");
                    products.forEach(p => {
                        list.append(`
                <div class="col-6 col-md-3 mb-4">

                    <div class="item"  data-barcode="${p.id}">
                        <img src="<?php echo e(asset('storage')); ?>/${p.cover_image}" class="class="img-fluid"" style=" height: 150px;" />
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
                $.get("http://localhost/raah_muktab/public/dashboard/cart", function (cart) {
                    renderCart(cart);
                });
            }

            function renderCart(cart) {
                const tbody = $("#cart-table tbody");
                tbody.html("");

                let total = 0;

                cart.forEach(item => {
                    const lineTotal = item.price * item.pivot.quantity;
                    total += lineTotal;

                    tbody.append(`
                <tr>
                    <td>${item.name}</td>
                    <td>
                        <input type="text" class="form-control form-control-sm qty-input"
                               value="${item.pivot.quantity}" data-id="${item.id}">
                        <button class="btn btn-danger btn-sm btn-del" data-id="${item.id}">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                    <td class="text-right">${window.APP.currency_symbol} ${lineTotal.toFixed(2)}</td>
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

                $.post("/admin/cart", { barcode }, function () {
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
                $.ajaxSetup({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                    }
                });
                console.log()
                $.post("http://localhost/raah_muktab/public/dashboard/cart", { bookId }, function () {
                    loadCart();
                }).fail(err => {
                    Swal.fire("Error!", err.responseJSON.message, "error");
                });
            }

            // -----------------------------
            // UPDATE QTY
            // -----------------------------
            $("#cart-table").on("change", ".qty-input", function () {
                const id = $(this).data("id");
                const qty = $(this).val();

                $.post("/admin/cart/change-qty", { product_id: id, quantity: qty }, function () {
                    loadCart();
                }).fail(err => {
                    Swal.fire("Error!", err.responseJSON.message, "error");
                });
            });

            // -----------------------------
            // DELETE ITEM
            // -----------------------------
            $("#cart-table").on("click", ".btn-del", function () {
                const id = $(this).data("id");

                $.post("/admin/cart/delete", { product_id: id, _method: "DELETE" }, function () {
                    loadCart();
                });
            });

            // -----------------------------
            // EMPTY CART
            // -----------------------------
            $("#btn-empty").click(function () {
                $.post("/admin/cart/empty", { _method: "DELETE" }, function () {
                    loadCart();
                });
            });

            // -----------------------------
            // SEARCH PRODUCTS
            // -----------------------------
            $("#search").keydown(function (e) {
                if (e.keyCode === 13) {
                    loadProducts($(this).val());
                }
            });

            // -----------------------------
            // CHECKOUT
            // -----------------------------
            $("#btn-checkout").click(function () {
                const total = $("#cart-total").text();

                Swal.fire({
                    title: window.T["received_amount"] || "Received Amount",
                    input: "text",
                    inputValue: total,
                    showCancelButton: true,
                    confirmButtonText: window.T["confirm_pay"] || "Confirm",
                }).then(result => {
                    if (!result.value) return;

                    $.post("/admin/orders", {
                        customer_id: $("#customer_id").val(),
                        amount: result.value
                    }, function () {
                        loadCart();
                    }).fail(err => {
                        Swal.fire("Error!", err.responseJSON.message, "error");
                    });
                });
            });
        });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('ui.layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\raah_muktab\resources\views/sales/create.blade.php ENDPATH**/ ?>