<?php $__env->startSection('title', 'Bootstrap Border Table'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Payments</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Payment</li>
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
								<th scope="col">First Name</th>
								<th scope="col">Last Name</th>
								<th scope="col">Username</th>
								<th scope="col">Role</th>
								<th scope="col">Country</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Alexander</td>
								<td>Orton</td>
								<td>@mdorton</td>
								<td>Admin</td>
								<td>USA</td>
								<td>
                                    <a href=""> <i data-feather="trash-2"></i></a> &nbsp;
                                    <a href="<?php echo e(route('payment.edit',1)); ?>"> <i data-feather="edit"></i></a>
                                </td>
							</tr>

						</tbody>
					</table>
				</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('ui.layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Cuba\resources\views/payments/index.blade.php ENDPATH**/ ?>