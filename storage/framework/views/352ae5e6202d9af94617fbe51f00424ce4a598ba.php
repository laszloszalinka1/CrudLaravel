<?php $__env->startSection('content'); ?>
	<section class="container">
		<div class="row">
			<article class="col-md-10 col-md-offset-1">
				<form action="<?php echo e(route('statuses/update',['id' => $statuses->id])); ?>" method="POST" novalidate>
					<?php echo csrf_field(); ?>
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control" required value="<?php echo e($statuses->name); ?>">
					</div>

					<div class="form-group">
						<label>tipo de estado</label>
						<input type="text" name="type_status_id" class="form-control" required value="<?php echo e($statuses->type_status_id); ?>">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Enviar</button>
					</div>
				</form>
			</article>
		</div>
	</section>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cursophpadsi\ExampleCRUD\resources\views/statuses/update.blade.php ENDPATH**/ ?>