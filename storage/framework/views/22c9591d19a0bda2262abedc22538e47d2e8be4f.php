
<?php $__env->startSection('title', 'Bootstrap Border Table'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Create Expense</h3>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="card">

        <div class="card-body">
            <form class="needs-validation" novalidate="" action="<?php echo e(route('expenses.store')); ?>" METHOD="post">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom01">Title</label>
                        <input class="form-control" id="validationCustom01" type="text" name="title" placeholder="Expense Title" required="" data-bs-original-title="" title="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Expense Type</label>
                        <select id=" publisher_id" required class="form-control " name="expense_type">
                            <option value="">Select Expense Type</option>
                            <option value="utility">Utility</option>
                            <option value="salary">Salary</option>
                            <option value="others">Others</option>

                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Amount</label>
                        <input class="form-control" id="validationCustom02" type="number" step="0.01" name="amount" placeholder="Expense Amounts" required="" data-bs-original-title="" title="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Expense Date</label>
                        <input class="form-control" id="validationCustom02" type="date" name="date" placeholder="Bio" required="" data-bs-original-title="" title="">
                    </div>
                </div>


                <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Create</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('ui.layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\raah_muktab\resources\views/expense/create.blade.php ENDPATH**/ ?>