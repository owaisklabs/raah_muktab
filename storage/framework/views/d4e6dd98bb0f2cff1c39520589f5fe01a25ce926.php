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
            <form class="needs-validation"  action="<?php echo e(route('book.store')); ?>" METHOD="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="sku">SKU <span class="text-danger">*</span></label>
                        <input class="form-control abc" id="sku" type="text" name="sku" placeholder="SKU" required="" data-bs-original-title="" title="">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="bar_code">Barcode <span class="text-danger">*</span></label>
                        <input class="form-control" id="bar_code" type="text" name="bar_code" placeholder="Barcode" required="" data-bs-original-title="" title="">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="title">Title <span class="text-danger">*</span></label>
                        <input class="form-control" id="title" type="text" name="title" placeholder="Title" required="" data-bs-original-title="" title="">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="subtitle">Sub Title</label>
                        <input class="form-control" id="subtitle" type="text" name="subtitle" placeholder="Sub Title"  data-bs-original-title="" title="">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="publisher_id">Publisher <span class="text-danger">*</span></label>

                            <select id=" publisher_id" required class="form-control " name="publisher_id">
                                <option value="">Select Publisher</option>
                                <?php $__currentLoopData = $publishers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publisher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($publisher->id); ?>"  ><?php echo e($publisher->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>


                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="author_id">Author <span class="text-danger">*</span></label>

                            <select id=" author_id" required class="form-control " name="author_id[]">
                                <option value="">Select Publisher</option>
                                <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($author->id); ?>"  ><?php echo e($author->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="published_at">Published At</label>
                        <input class="form-control" id="published_at" type="date" name="published_at" placeholder="Published At"  data-bs-original-title="" title="">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="description">Description</label>
                        <input class="form-control" id="description" type="text" name="description" placeholder="Description"  data-bs-original-title="" title="">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="cost_price">Cost Price <span class="text-danger">*</span></label>
                        <input class="form-control" id="cost_price" type="number" name="cost_price" placeholder="Cost Price" required="" data-bs-original-title="" title="">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="sell_price">Sell Price <span class="text-danger">*</span></label>
                        <input class="form-control" id="sell_price" type="number" name="sell_price" placeholder="Sell Price" required="" data-bs-original-title="" title="">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="cover_image">Cover Image <span class="text-danger">*</span></label>
                        <input class="form-control" id="cover_image" type="file" name="cover_image" placeholder="Cover Image" required="" data-bs-original-title="" title="">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="pages">Pages</label>
                        <input class="form-control" id="pages" type="number" name="pages" placeholder="Pages"  data-bs-original-title="" title="">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="language">Language</label>
                        <input class="form-control" id="language" type="text" name="language" placeholder="Language"  data-bs-original-title="" title="">
                    </div>
                    <img id="preview-image" src="#" alt="Preview" style="max-width: 250px; display: none; border: 1px solid #ccc; padding: 5px;">

                </div>


                <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Create</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

    <style>

    </style>


<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>
    <script>
        // $(document).ready(function() {
        //     $('.select2').select2({
        //         placeholder: "Select an option",
        //         allowClear: true
        //     });
        // });
        document.getElementById('cover_image').addEventListener('change', function(event){
            const file = event.target.files[0];

            if (file) {
                const preview = document.getElementById('preview-image');
                preview.src = URL.createObjectURL(file);
                preview.style.display = 'block';
            }
        });
    </script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('ui.layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\raah_muktab\resources\views/book/create.blade.php ENDPATH**/ ?>