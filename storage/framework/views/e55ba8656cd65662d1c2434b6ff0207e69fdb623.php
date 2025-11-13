<?php $__env->startSection('title', 'Bootstrap Border Table'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Update Publisher</h3>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="card">

        <div class="card-body">
            <form class="needs-validation" method="POST" action="<?php echo e(route('publisher.update',$publisher->id)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom01">Name</label>
                        <input class="form-control"  type="text" value="<?php echo e($publisher->name); ?>" name="name" placeholder="Name" required="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Contact</label>
                        <input class="form-control" type="text" name="contact" value="<?php echo e($publisher->contact); ?>" placeholder="Contact" >
                    </div><div class="col-md-12 mb-3">
                        <label for="validationCustom02">Address</label>
                        <textarea class="form-control" name="address" id="" placeholder="Address" cols="30" rows="05"  ><?php echo e($publisher->address); ?></textarea>
                    </div>
                </div>


                <button class="btn btn-primary" type="submit" title="">Update</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('ui.layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\raah_muktab\resources\views/publisher/update.blade.php ENDPATH**/ ?>