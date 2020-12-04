<?php $__env->startSection('content'); ?>
<section class="containter">
	<div class="row">
		<article class="col-md-10 col-md-offset-1">
			<form action="<?php echo e(route('rental/update',['id' => $rental->id])); ?>" method="post" novalidate>
				<?php echo csrf_field(); ?>
				<div class="form-group">
					<label>Fecha inicio</label>
					<input type="text" name="start_date" class="form-control" required value="<?php echo e($rental->start_date); ?>">
				</div>
				<div class="form-group">
					<label>Fecha fin</label>
					<input type="text" name="end_date" class="form-control" required value="<?php echo e($rental->end_date); ?>">
				</div>
				<div class="form-group">
					<label>Total</label>
					<input type="text" name="total" class="form-control" required value="<?php echo e($rental->total); ?>">
				</div>
				<div class="form-group">
					<label>Usuario</label>
					<input type="text" name="user_id" class="form-control" required value="<?php echo e($rental->user_id); ?>">
				</div>
				<div class="form-group">
					<label>Estado</label>
					<input type="text" name="status_id" class="form-control" required value="<?php echo e($rental->status_id); ?>">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Enviar</button>
				</div>
			</form>
		</article>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cursophpadsi\ExampleCRUD\resources\views/rentals/update.blade.php ENDPATH**/ ?>