
<?php $__env->startSection('content'); ?>

<div class="pull-left">
	<h2>Staff Management</h2>
</div>

<div class="row">

	<div class="col-lg-12 margin-tb">

		<div class="pull-right">
			<a class="btn btn-success" href="<?php echo e(route('staff.create')); ?>">Create New Staff</a>
</div>
</div>
</div>

<?php if($message=Session::get('success')): ?>
<div class="alert alert-success">
	<p><?php echo e($message); ?></p>
</div>

<?php endif; ?>

<table class="table table-bordered">
	<tr>
		<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Username</th>
		<th>Password</th>
		<th width="280px">Action</th>
	</tr>
<?php $__currentLoopData = $staff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $staff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	<tr>
		<td><?php echo e($staff->id); ?></td>
		<td><?php echo e($staff->fname); ?></td>
		<td><?php echo e($staff->lname); ?></td>
		<td><?php echo e($staff->uname); ?></td>
		<td><?php echo e($staff->password); ?></td>
		<td>
			<form action="<?php echo e(route('staff.destroy', $staff->id)); ?>" method="POST">
				

				<a class="btn btn-primary" href="<?php echo e(route('staff.edit', $staff->id)); ?>">Edit</a>

				<?php echo csrf_field(); ?>
				<?php echo method_field('DELETE'); ?>

				<button type="submit" class="btn btn-danger">Delete</button>
			</form>
		</td>
	</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>

<?php echo $__env->make('staff.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\staffmanagement\resources\views/staff/index.blade.php ENDPATH**/ ?>