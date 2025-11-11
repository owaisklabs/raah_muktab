<?php $__env->startSection('title', 'Bootstrap Border Table'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Sales</h3>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item"> <a href="<?php echo e(route('sales.index')); ?>">Sales</a></li>
<li class="breadcrumb-item active">Create</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('ui.layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Cuba\resources\views/sales/create.blade.php ENDPATH**/ ?>