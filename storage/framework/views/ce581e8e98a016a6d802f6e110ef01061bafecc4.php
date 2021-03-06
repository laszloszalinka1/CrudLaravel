<?php $__env->startSection('content'); ?>
<section class="containter">
	<div class="row">
		<article class="col-md-10 col-md-offset-1">
			<form action="<?php echo e(route('user/update',['id' => $user->id])); ?>" method="post" novalidate>
				<?php echo csrf_field(); ?>
				<div class="form-group">
					<label>Nombre</label>
					<input type="text" name="name" class="form-control" required value="<?php echo e($user->name); ?>">
				</div>
				<div class="form-group">
					<label>Correo eléctronico</label>
					<input type="text" name="email" class="form-control" required value="<?php echo e($user->email); ?>">
				</div>
				<div class="form-group">
					<label>Contraseña</label>
					<input type="password" name="password" class="form-control" required value="<?php echo e($user->password); ?>">
				</div>
				<div class="form-group">
					<label>Estado</label>
					<input type="text" name="status_id" class="form-control" required value="<?php echo e($user->status_id); ?>">
				</div>
				<div class="form-group">
					<label>Rol</label>
					<input type="text" name="role_id" class="form-control" required value="<?php echo e($user->role_id); ?>">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Enviar</button>
				</div>
			</form>
		</article>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cursophpadsi\ExampleCRUD\resources\views/users/update.blade.php ENDPATH**/ ?>