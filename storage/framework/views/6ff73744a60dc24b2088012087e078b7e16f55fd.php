<?php $__env->startSection('title', 'Bootstrap Border Table'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Purchase</h3>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Bootstrap Tables</li>
<li class="breadcrumb-item active">Bootstrap Border Table</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h5>Update Purchaser</h5>
    </div>
    <div class="card-body">
        <form class="needs-validation" method="POST" action="<?php echo e(route('purchaser.update',$row->id)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="name">Purcahser</label>
                    <input class="form-control" id="name" type="text" name="name" value="<?php echo e($row->name); ?>" placeholder="Purchaser" required="" data-bs-original-title="" title="">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="nic_ntn">NIC | NTN</label>
                    <input class="form-control" id="nic_ntn" type="text" name="nic" value="<?php echo e($row->nic); ?>" placeholder="NIC | NTN" required="" data-bs-original-title="" title="">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="strn">STRN</label>
                    <input class="form-control" id="strn" type="text" name="strn" value="<?php echo e($row->strn); ?>" placeholder="STRN" required="" data-bs-original-title="" title="">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="phone">Phone</label>
                    <input class="form-control" id="phone" type="text" name="phone" value="<?php echo e($row->phone); ?>" placeholder="Phone" required="" data-bs-original-title="" title="">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="address">Address</label>
                    <input class="form-control" id="address" type="text" name="address" value="<?php echo e($row->address); ?>" placeholder="Address" required="" data-bs-original-title="" title="">
                </div>
            </div>


            <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Create</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('ui.layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Cuba\resources\views/purchaser/update.blade.php ENDPATH**/ ?>