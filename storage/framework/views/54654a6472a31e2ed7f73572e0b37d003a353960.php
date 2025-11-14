<?php $__env->startSection('title', 'Bootstrap Border Table'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Books</h3>
<?php $__env->stopSection(); ?>






<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        
        <form action="#" class="row" method="GET">
            <div class="col-3 mb-3">
                <label for="validationCustom01">Bar Code</label>
                <input class="form-control" name="query" type="text" placeholder="First name" required="">
            </div>
            <div class="col-3 mb-3">
                <label for="validationCustom01">Title</label>
                <input class="form-control" name="query" type="text" placeholder="First name" required="">
            </div>

            <div class="col-2 mb-3">
                <label for="validationCustom02">From Date</label>
                <input class="form-control" name="from_date" id="validationCustom02" type="date"  >
            </div>
            <div class="col-2 mb-3">
                <label for="validationCustom02">To Date</label>
                <input class="form-control" name="to_date" id="validationCustom02" type="date"  >
            </div>
            <div class="col-2 mb-3" style="margin-top: 25px;">
                <button class="btn btn-pill btn-primary btn-air-primary btn-lg" type="submit">Search</button>
            </div>
        </form>
        
        <div class="row">

            <div class="col-sm-12">

                <div class="table-responsive">
                    <table class="table table-border-vertical " >
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">SKU</th>
                            <th scope="col">Title</th>
                            <th scope="col">Publisher</th>
                            <th scope="col">Authors</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Cover</th>
                            <th scope="col">Cost Price</th>
                            <th scope="col">Sell price</th>
                            <th scope="col">Language</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($item->id); ?></th>
                            <td><?php echo e($item->sku); ?></td>
                            <td><?php echo e($item->title); ?></td>
                            <td><strong><?php echo e($item->publisher->name); ?> </strong></td>
                            <td>
                                <?php $__currentLoopData = $item->authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <p><strong> <?php echo e($author->name); ?> </strong></p>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </td>
                            <td>0</td>
                            <td><img src="<?php echo e(asset('storage/' . $item->cover_image)); ?>" style="height: 150px;" alt="<?php echo e($item->title); ?>"></td>
                            <td><?php echo e($item->cost_price); ?></td>
                            <td><?php echo e($item->sell_price); ?></td>
                            <td><?php echo e($item->language); ?></td>
                            <td class="d-flex align-items-center gap-2">

                                
                                <form action="<?php echo e(route('book.destroy', $item->id)); ?>" method="POST"
                                      onsubmit="return confirm('Are you sure you want to delete this book?');" class="m-0 p-0">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-sm btn-danger p-1 d-flex align-items-center justify-content-center">
                                        <i data-feather="trash-2"></i>
                                    </button>
                                </form>

                                
                                <a href="<?php echo e(route('book.edit', $item->id)); ?>" class="btn btn-sm btn-primary p-1 d-flex align-items-center justify-content-center">
                                    <i data-feather="edit"></i>
                                </a>

                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <?php echo e($books->links('pagination::bootstrap-5')); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('ui.layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\raah_muktab\resources\views/book/index.blade.php ENDPATH**/ ?>