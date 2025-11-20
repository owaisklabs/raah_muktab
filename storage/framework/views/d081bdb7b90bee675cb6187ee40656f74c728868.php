<?php $__env->startSection('title', 'Bootstrap Border Table'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="flex-grow-1 p-3">

        <!-- Search -->
        <div class="position-relative mb-4">
            <i class="bi bi-search position-absolute top-50 translate-middle-y ms-3 text-info fs-5"></i>
            <input type="text" class="form-control form-control-lg ps-5 rounded-pill shadow-sm"
                   placeholder="Search products...">
        </div>

        <!-- Products Grid -->
        <div class="row g-4">

            <!-- Product -->
            <div class="col-md-3">
                <div class="card product-card shadow-sm">
                    <img src="https://via.placeholder.com/150" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title mb-1">Burger</h6>
                        <p class="fw-bold text-success">$5.99</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card product-card shadow-sm">
                    <img src="https://via.placeholder.com/150">
                    <div class="card-body">
                        <h6 class="card-title mb-1">Pizza</h6>
                        <p class="fw-bold text-success">$10.00</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card product-card shadow-sm">
                    <img src="https://via.placeholder.com/150">
                    <div class="card-body">
                        <h6 class="card-title mb-1">Fries</h6>
                        <p class="fw-bold text-success">$3.50</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card product-card shadow-sm">
                    <img src="https://via.placeholder.com/150">
                    <div class="card-body">
                        <h6 class="card-title mb-1">Ice Cream</h6>
                        <p class="fw-bold text-success">$2.49</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Store Menu -->


    <!-- Right Sidebar (Cart) -->
    <div class="bg-white shadow p-3" style="width:380px; height:100vh; overflow-y:auto;">
        <h5 class="mb-3 text-center">
            <i class="bi bi-cart3"></i> Cart (2)
        </h5>

        <!-- Cart item -->
        <div class="d-flex align-items-center bg-light p-2 rounded mb-3">
            <img src="https://via.placeholder.com/50" class="rounded me-2">
            <div class="flex-grow-1">
                <strong>Burger</strong>
                <div>$5.99</div>
            </div>
            <div class="d-flex flex-column">
                <button class="btn btn-sm btn-secondary mb-1">+</button>
                <button class="btn btn-sm btn-secondary">−</button>
            </div>
        </div>

        <div class="d-flex align-items-center bg-light p-2 rounded mb-3">
            <img src="https://via.placeholder.com/50" class="rounded me-2">
            <div class="flex-grow-1">
                <strong>Pizza</strong>
                <div>$10.00</div>
            </div>
            <div class="d-flex flex-column">
                <button class="btn btn-sm btn-secondary mb-1">+</button>
                <button class="btn btn-sm btn-secondary">−</button>
            </div>
        </div>

        <hr>

        <h5>Total: <span class="float-end">$15.99</span></h5>

        <button class="btn btn-info w-100 mt-3 text-white fw-bold">Checkout</button>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('ui.layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\raah_muktab\resources\views/sales/create.blade.php ENDPATH**/ ?>