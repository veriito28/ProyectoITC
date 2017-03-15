<?php $__env->startSection('content'); ?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Materias de <?php echo e($carrera->nombre); ?>

	<a target="_blank" href="<?php echo e(asset($carrera->url_reticula)); ?>"><span class="badge btn-warning text-right">Reticula</span></a>
    </h1>
	<ul class="list-group">
		<?php $__currentLoopData = $carrera->materias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $materia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li class="list-group-item">
				<?php echo e($materia->nombre); ?>

				<a href="<?php echo e(asset($materia->url_plan_estudio)); ?>" target="_blank"><span class="badge btn-primary pull-right">Plan de Estudios</span></a>
			</li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilla', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>