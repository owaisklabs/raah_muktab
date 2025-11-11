<?php $__env->startSection('title', 'Bootstrap Border Table'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Sales</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Sales</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        
        <form action="#" class="row" method="GET">
            <div class="col-md-3 mb-3">
                <label for="validationCustom01">Query</label>
                <input class="form-control" name="query" type="text" placeholder="First name" required="">
                <div class="valid-feedback">Looks good!</div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom02">From Date</label>
                <input class="form-control" name="from_date" id="validationCustom02" type="date">
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom02">To Date</label>
                <input class="form-control" name="to_date" id="validationCustom02" type="date">
            </div>
            <div class="col-md-3 mb-3" style="margin-top: 25px;">
                <button class="btn btn-pill btn-primary btn-air-primary btn-lg" type="submit">Search</button>
            </div>
        </form>
        
        <div class="row">

            <div class="col-sm-12">

                <div class="table-responsive">
                    <table class="table table-border-vertical " style="background-color: white;">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Purchaser</th>
                                <th scope="col">Date</th>
                                <th scope="col">NIC | NTN</th>
                                <th scope="col">Address</th>
                                <th scope="col">strn</th>
                                <th scope="col">phone</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr >
                                    <th scope="row"><?php echo e($loop->iteration); ?></th>
                                    <td><?php echo e($item->name); ?></td>
                                    <td><?php echo e($item->created_at->format('d-m-Y')); ?></td>
                                    <td><?php echo e($item->nic); ?></td>
                                    <td><?php echo e($item->address); ?></td>
                                    <td><?php echo e($item->strn); ?></td>
                                    <td><?php echo e($item->phone); ?></td>
                                    <td class="d-inline-flex">
                                        <form action="<?php echo e(route('purchaser.destroy', $item->id)); ?>" method="POST" class="px-1">
                                            <?php echo method_field('DELETE'); ?>
                                            <?php echo csrf_field(); ?>
                                            <button class="btn btn-danger p-1"  type="submit"> <i data-feather="trash-2"></i></button>
                                        </form>
                                        
                                        <a class="btn btn-primary  p-1" href="<?php echo e(route('purchaser.edit', $item->id)); ?>"> <i data-feather="edit"></i></a>
                                    </td>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
    $('.delete-button').click(function(e){
        e.preventDefault();
        var result = confirm("Warning!\nAre You sure you want to delete.");
        if (result == true) {

            } else {
               return false;
            }
    })
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('ui.layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Cuba\resources\views/purchaser/index.blade.php ENDPATH**/ ?>