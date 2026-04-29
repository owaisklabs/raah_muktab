
<?php $__env->startSection('title', 'Bootstrap Border Table'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h5 class="mb-0">Sales  Details</h5>
    </div>

    <div class="card-body">

        <div class="row mb-3">
            <div class="col-md-6">
                <strong>Invoice No:</strong>
                <p class="mb-0"><?php echo e($sale->invoice_no); ?></p>
            </div>

            <div class="col-md-6">
                <strong>Sale Date:</strong>
                <p class="mb-0"><?php echo e($sale->sale_date); ?></p>
            </div>
        </div>

        <div class="row mb-3">

            <div class="col-md-6">
                <strong>Customer ID:</strong>
                <p class="mb-0">
                    <?php echo e($sale->customer->name ?? 'N/A'); ?>

                </p>
            </div>

            <div class="col-md-6">
                <strong>Status:</strong>
                <p class="mb-0">
                    <span class="badge bg-<?php echo e($sale->status=='open' ? 'secondary' : ($sale->status=='paid'
                     ? 'success' : ($sale->status=='refunded' ? 'warning' : ($sale->status=='cancelled' 
                     ? 'danger' : 'secondary')))); ?>">
                        <?php echo e(ucfirst($sale->status)); ?>

                    </span>
                </p>
            </div>

        </div>

        <div class="row mb-3">

            <div class="col-md-6">
                <strong>Total Amount:</strong>
                <p class="mb-0">
                    <?php echo e(number_format($sale->total_amount, 2)); ?>

                </p>
            </div>

            <div class="col-md-6">
                <strong>Paid Amount:</strong>
                <p class="mb-0">
                    <?php echo e(number_format($sale->paid_amount, 2)); ?>

                </p>
            </div>

        </div>

        <div class="row mb-3">

            <div class="col-md-6">
                <strong>Created By:</strong>
                <p class="mb-0"><?php echo e($sale->created_by ?? 'N/A'); ?></p>
            </div>

            <div class="col-md-6">
                <strong>Created At:</strong>
                <p class="mb-0">
                    <?php echo e($sale->created_at?->format('d M Y H:i')); ?>

                </p>
            </div>

        </div>

        <hr>

<h5 class="mb-3">Sale Items</h5>

<div class="table-responsive">
    <table class="table table-bordered table-striped align-middle">
        <thead class="table-light">
            <tr>
                <th>#</th>
                <th>Book ID</th>
                <th>Quantity</th>
                <th>Unit Price</th>
                <th>Sale Price</th>
                <th>Line Total</th>
                <th>Discount</th>
                <th>Total After Discount</th>
            </tr>
        </thead>

        <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $sale->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

            <tr>
                <td><?php echo e($index + 1); ?></td>

                <td><?php echo e($item->book->title); ?></td>

                <td><?php echo e($item->quantity); ?></td>

                <td><?php echo e(number_format($item->unit_price, 2)); ?></td>

                <td><?php echo e(number_format($item->sale_price, 2)); ?></td>

                <td><?php echo e(number_format($item->line_total, 2)); ?></td>

                <td>
                    <?php echo e($item->discount ?? 0); ?>%
                </td>

                <td>
                    <?php echo e(number_format($item->total, 2)); ?>

                </td>
            </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

            <tr>
                <td colspan="8" class="text-center">
                    No items added for this sale.
                </td>
            </tr>

        <?php endif; ?>
        </tbody>
    </table>
</div>
<hr>

<h5 class="mb-3">Payment Records</h5>

<div class="table-responsive">
    <table class="table table-bordered table-striped align-middle">
        <thead class="table-light">
            <tr>
                <th>#</th>
                <th>Amount Received</th>
                <th>Payment Type</th>
                <th>Account / Cheque No</th>
                <th>Remarks</th>
                <th>Created By</th>
                <th>Created At</th>
            </tr>
        </thead>

        <tbody>

        <?php $__empty_1 = true; $__currentLoopData = $sale->salesPaymentsDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $pay): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($index + 1); ?></td>

                <td><?php echo e(number_format($pay->amount_received, 2)); ?></td>

                <td class="text-capitalize"><?php echo e($pay->payment_type); ?></td>

                <td>
                    <?php if($pay->payment_type == 'cheque'): ?>
                        Cheque #: <?php echo e($pay->cheque_number); ?>

                    <?php elseif($pay->payment_type == 'online'): ?>
                        Account #: <?php echo e($pay->account_number); ?>

                    <?php else: ?>
                        ---
                    <?php endif; ?>
                </td>

                <td><?php echo e($pay->remarks ?? '---'); ?></td>

                <td><?php echo e($pay->user->name ?? 'N/A'); ?></td>

                <td>
                    <?php echo e($pay->created_at->format('d M Y H:i')); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="7" class="text-center">
                    No payment history found.
                </td>
            </tr>
        <?php endif; ?>

        </tbody>
    </table>
</div>



        <div class="row mt-3">
            <div class="col-md-12 text-end">

                <a href="<?php echo e(url('/dashboard/sales/'.$sale->id.'/edit')); ?>"
                   class="btn btn-warning ">
                   Edit
                </a>

                <form action="<?php echo e(url('/dashboard/sales/'.$sale->id)); ?>"
                    method="POST" class="d-inline">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <button type="submit"
                            class="btn btn-danger"
                            onclick="return confirm('Delete this sale?')">
                        Delete
                    </button>
                </form>

                <a href="<?php echo e(url('/dashboard/sales')); ?>"
                   class="btn btn-secondary ">
                    Back
                </a>

            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('ui.layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\raah_muktab\resources\views/sales/detail.blade.php ENDPATH**/ ?>