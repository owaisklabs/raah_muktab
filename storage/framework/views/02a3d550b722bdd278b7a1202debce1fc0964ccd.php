<?php $__env->startSection('title', 'Bootstrap Border Table'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Item</h3>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Bootstrap Tables</li>
<li class="breadcrumb-item active">Bootstrap Border Table</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h5>Create Item</h5>
    </div>
    <div class="card-body">
        <form class="needs-validation" action="<?php echo e(route('items.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Name</label>
                    <input class="form-control" id="validationCustom01" type="text" placeholder="First name" required="" name="name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom02">HS Code</label>
                    <input class="form-control" id="validationCustom02" type="text" placeholder="Last name" required="" name="hs_code">
                </div>
            </div>


            <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Create</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('ui.layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Cuba\resources\views/items/create.blade.php ENDPATH**/ ?>