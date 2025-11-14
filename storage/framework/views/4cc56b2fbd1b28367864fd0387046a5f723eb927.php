<?php $__env->startSection('title', 'Bootstrap Border Table'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Create Book</h3>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="card">

        <div class="card-body">
            <form class="needs-validation" novalidate="" action="<?php echo e(route('book.store')); ?>" METHOD="post">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">SKU</label>
                        <input class="form-control" id="validationCustom01" type="text" name="name" placeholder="Name" required="" data-bs-original-title="" title="">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Barcode</label>
                        <input class="form-control" id="validationCustom02" type="text" name="bio" placeholder="Bio" required="" data-bs-original-title="" title="">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Title</label>
                        <input class="form-control" id="validationCustom02" type="text" name="bio" placeholder="Bio" required="" data-bs-original-title="" title="">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Sub Title</label>
                        <input class="form-control" id="validationCustom02" type="text" name="bio" placeholder="Bio" required="" data-bs-original-title="" title="">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Barcode</label>
                        <input class="form-control" id="validationCustom02" type="text" name="bio" placeholder="Bio" required="" data-bs-original-title="" title="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Barcode</label>

                            <select id="country_id" class="form-control select2 " name="select">
                                <option value="">Select Country</option>
                                <option value="opt1">Featured</option>
                                <option value="opt2">Lowest Prices</option>
                                <option value="opt3">Highest Prices</option>
                            </select>


                    </div>

                </div>


                <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Create</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: "Select an option",
                allowClear: true
            });
        });
    </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('ui.layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\raah_muktab\resources\views/book/create.blade.php ENDPATH**/ ?>