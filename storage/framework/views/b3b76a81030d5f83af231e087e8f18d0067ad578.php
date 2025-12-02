<?php $__env->startSection('title', 'Bootstrap Border Table'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>update Author</h3>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="card">

        <div class="card-body">
            <form class="needs-validation" novalidate="" action="<?php echo e(route('customer.update',$customer->id)); ?>" METHOD="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Name</label>
                        <input class="form-control" id="validationCustom01" type="text" value="<?php echo e($customer->name); ?>" name="name" placeholder="Name" required="" data-bs-original-title="" title="">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Phone</label>
                        <input class="form-control" id="validationCustom02" type="text" value="<?php echo e($customer->phone); ?>" name="phone" placeholder="Bio" required="" data-bs-original-title="" title="">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Address</label>
                        <input class="form-control" id="validationCustom02" type="text" value="<?php echo e($customer->address); ?>" name="address" placeholder="Bio" required="" data-bs-original-title="" title="">
                    </div>

                </div>


                <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Update</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('ui.layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\raah_muktab\resources\views/customer/update.blade.php ENDPATH**/ ?>