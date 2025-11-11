<?php $__env->startSection('title', 'Bootstrap Border Table'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Purchase</h3>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Bootstrap Tables</li>
<li class="breadcrumb-item active">Bootstrap Border Table</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h5>Create Purchase</h5>
    </div>
    <div class="card-body">
        <form class="needs-validation" method="POST" action="<?php echo e(route('purchase.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="nic_ntn">Date</label>
                    <input class="form-control" id="nic_ntn" type="date" name="purchase_date" placeholder="NIC | NTN" required="" data-bs-original-title="" title="">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="strn">Supplier</label>
                    <select name="supplier_id" id="" class="form-control" required>
                        <option value="" selected> Select Supplier</option>
                        <?php $__currentLoopData = App\Models\Supplier::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($supplier->id); ?>"><?php echo e($supplier->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    
                </div>
                <div class="col-md-4 mb-3">
                    <label for="phone">Item</label>
                    <select name="item_id" id="" class="form-control" required>
                        <option value="" selected> Select Item</option>
                        <?php $__currentLoopData = App\Models\Item::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="address">QTY</label>
                    <input class="form-control" id="address" type="number" name="qty" placeholder="QTY" required="" data-bs-original-title="" title="">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="address">Sale Mode</label>
                    <select name="purchase_mode_id" id="" class="form-control">
                        <option value="" selected> Select Sale Mode</option>
                        <?php $__currentLoopData = App\Models\PurchaseMode::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>


            <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Create</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('ui.layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Cuba\resources\views/purchase/create.blade.php ENDPATH**/ ?>