<?php $__env->startSection('content'); ?>
	<section class="container">
		<div class="row">
			<article class="col-md-12">
				<form action="<?php echo e(route('categorie/show')); ?>" method="post" novalidate class="form-inline">
					<?php echo csrf_field(); ?>
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control">

					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-default">Buscar</button>
						<a href="<?php echo e(route('categorie.index')); ?>" class="btn btn-primary">Todo</a>
						<a href="<?php echo e(route('categorie.create')); ?>" class="btn btn-primary">Crear</a>
					</div>
				</form>
			</article>
			<article class="col-md-12">
				<table class="table table-condensed table-striped table-bordered">
					<thead>
						<tr>
							<th>Fecha inicio</th>
							<th>Fecha fin</th>
							<th>Total</th>
							<th>Usuario</th>
							<th>Estado</th>
							<th>Acción</th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($categorie->start_date); ?></td>
							<td><?php echo e($categorie->end_date); ?></td>
							<td><?php echo e($categorie->total); ?></td>
							<td><?php echo e($categorie->user_id); ?></td>
							<td><?php echo e($categorie->status_id); ?></td>
							<td>
								<a class="btn btn-primary btn-xs" href="<?php echo e(route('categorie.edit', ['id' => $categorie->id])); ?>">Editar</a>
								<a class="btn btn-danger btn-xs" href="<?php echo e(route('categorie.destroy', ['id' => $categorie->id])); ?>">Eliminar</a>
							</td>

						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
				
			</article>
		</div>

		
	</section>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cursophpadsi\ExampleCRUD\resources\views/categories/list.blade.php ENDPATH**/ ?>