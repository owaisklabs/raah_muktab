
<?php $__env->startSection('title', 'Bootstrap Border Table'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Expenses</h3>
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
                <input class="form-control" name="from_date" id="validationCustom02" type="date"  >
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom02">To Date</label>
                <input class="form-control" name="to_date" id="validationCustom02" type="date"  >
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
                            <th scope="col">Title</th>
                            <th scope="col">Type</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Date</th>

                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                                $total_expense = 0;
                            ?>
                        <?php $__currentLoopData = $expenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>
                            <?php
                                
                                $total_expense += $item->amount;
                            ?>
                            <th scope="row"><?php echo e($item->id); ?></th>
                            <td><?php echo e($item->title); ?></td>
                            <td><?php echo e($item->expense_type); ?></td>
                            <td><?php echo e($item->amount); ?></td>
                            <td><?php echo e($item->date); ?></td>
                            <td class="d-flex align-items-center gap-2">

                                
                                <form action="<?php echo e(route('expenses.destroy', $item->id)); ?>" method="POST"
                                      onsubmit="return confirm('Are you sure you want to delete this author?');" class="m-0 p-0">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-sm btn-danger p-1 d-flex align-items-center justify-content-center">
                                        <i data-feather="trash-2"></i>
                                    </button>
                                </form>

                                
                                <a href="<?php echo e(route('expenses.edit', $item->id)); ?>" class="btn btn-sm btn-primary p-1 d-flex align-items-center justify-content-center">
                                    <i data-feather="edit"></i>
                                </a>

                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td colspan="3">Total Expense</td>
                            <td><?php echo e(number_format($total_expense,2)); ?></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                    <?php echo e($expenses->links('pagination::bootstrap-5')); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('ui.layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\raah_muktab\resources\views/expense/index.blade.php ENDPATH**/ ?>