
<?php $__env->startSection('content'); ?>

<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Add New Staff</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="<?php echo e(route('staff.index')); ?>">Back</a>
		</div>
	</div>
</div>

<?php if($errors->any()): ?>
<div class="alert alert-danger">
	<strong>Oops!</strong>There's a problem.<br><br>

	<ul>
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li><?php echo e($error); ?></li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
</div>

<?php endif; ?>
<form action="<?php echo e(route('staff.store')); ?>" method="POST">
	<?php echo csrf_field(); ?>

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>First Name: </strong>
				<input type="text" name="fname" class="form-control" placeholder="first name">
			</div>
		</div>

	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Last Name: </strong>
			<input type="text" name="lname" class="form-control" placeholder="last name">
		</div>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Username: </strong>
			<input type="text" name="uname" class="form-control" placeholder="username">
		</div>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Password: </strong>
			<input type="text" name="password" class="form-control" placeholder="password">
		</div>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-12 text-center">
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>
</div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('staff.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\staffmanagement\resources\views/staff/create.blade.php ENDPATH**/ ?>