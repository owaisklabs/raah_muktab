<?php $__env->startSection('title', 'Bootstrap Border Table'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Update Supplier</h3>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="card">

        <div class="card-body">
            <form class="needs-validation" method="POST" action="<?php echo e(route('supplier.update',$supplier->id)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Name</label>
                        <input class="form-control"  value="<?php echo e($supplier->name); ?>" type="text" name="name" placeholder="Name" required="">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Contact Person</label>
                        <input class="form-control" type="text" value="<?php echo e($supplier->contact_person); ?>" name="contact_person" placeholder="Contact" >
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Phone</label>
                        <input class="form-control" type="text" value="<?php echo e($supplier->phone); ?>" name="phone" placeholder="Contact" >
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Email</label>
                        <input class="form-control" type="email" value="<?php echo e($supplier->email); ?> "name="email" placeholder="Contact" >
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Address</label>
                        <input class="form-control" type="text" value="<?php echo e($supplier->address); ?> "name="address" placeholder="Contact" >
                    </div>

                </div>


                <button class="btn btn-primary" type="submit" title="">Update</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('ui.layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\raah_muktab\resources\views/supplier/update.blade.php ENDPATH**/ ?>