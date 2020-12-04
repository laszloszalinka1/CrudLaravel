<?php $__env->startSection('content'); ?>
	<section class="container">
		<div class="row">
			<article class="col-md-12">
				<form action="<?php echo e(route('statuses/show')); ?>" method="post" novalidate class="form-inline">
					<?php echo csrf_field(); ?>
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control">

					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-default">Buscar</button>
						<a href="<?php echo e(route('statuses.index')); ?>" class="btn btn-primary">Todo</a>
						<a href="<?php echo e(route('statuses.create')); ?>" class="btn btn-primary">Crear</a>
					</div>
				</form>
			</article>
			<article class="col-md-12">
				<table class="table table-condensed table-striped table-bordered">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Tipo de estado</th>
							<th>Acción</th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statuse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($statuse->name); ?></td>
							<td><?php echo e($statuse->type_status_id); ?></td>
							<td>
								<a class="btn btn-primary btn-xs" href="<?php echo e(route('statuses.edit', ['id' => $statuse->id])); ?>">Editar</a>
								<a class="btn btn-danger btn-xs" href="<?php echo e(route('statuses.destroy', ['id' => $statuse->id])); ?>">Eliminar</a>
							</td>

						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
				
			</article>
		</div>

		
	</section>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cursophpadsi\ExampleCRUD\resources\views/statuses/list.blade.php ENDPATH**/ ?>