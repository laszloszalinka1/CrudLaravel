<?php $__env->startSection('content'); ?>
	<section class="container">
		<div class="row">
			<article class="col-md-12">
				<form action="<?php echo e(route('type_status/show')); ?>" method="post" novalidate class="form-inline">
					<?php echo csrf_field(); ?>
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control">

					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-default">Buscar</button>
						<a href="<?php echo e(route('type_status.index')); ?>" class="btn btn-primary">Todo</a>
						<a href="<?php echo e(route('type_status.create')); ?>" class="btn btn-primary">Crear</a>
					</div>
				</form>
			</article>
			<article class="col-md-12">
				<table class="table table-condensed table-striped table-bordered">
					<thead>
						<tr>
							<th>Nombre</th>
							
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $type_status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type_status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($type_status->name); ?></td>
							
							<td>
								<a class="btn btn-primary btn-xs" href="<?php echo e(route('type_status.edit', ['id' => $type_status->id])); ?>">Editar</a>
								<a class="btn btn-danger btn-xs" href="<?php echo e(route('type_status.destroy', ['id' => $type_status->id])); ?>">Eliminar</a>
							</td>

						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
				
			</article>
		</div>

		
	</section>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cursophpadsi\ExampleCRUD\resources\views/type_status/list.blade.php ENDPATH**/ ?>