
<?php $__env->startSection('title', 'Bootstrap Border Table'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Create Supplier</h3>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="card">

        <div class="card-body">
            <form class="needs-validation" method="POST" action="<?php echo e(route('supplier.store')); ?>">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Name</label>
                        <input class="form-control"  type="text" name="name" placeholder="Name" required="">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Contact Person</label>
                        <input class="form-control" type="text" name="contact_person" placeholder="Contact" >
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Phone</label>
                        <input class="form-control" type="text" name="phone" placeholder="Contact" >
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Email</label>
                        <input class="form-control" type="email" name="email" placeholder="Contact" >
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Address</label>
                        <input class="form-control" type="text" name="address" placeholder="Contact" >
                    </div>

                </div>


                <button class="btn btn-primary" type="submit" title="">Create</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('ui.layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\raah_muktab\resources\views/supplier/create.blade.php ENDPATH**/ ?>