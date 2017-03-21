






<?php 
$idCarreraSeleccionada = null;
if(isset($carrera)){
	$idCarreraSeleccionada = $carrera->id;
}
 ?>

<div class="col-sm-3 col-md-2 sidebar">
	<ul class="nav nav-sidebar">
		
		<?php $__currentLoopData = $carreras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			
			<li <?php echo e(($idCarreraSeleccionada == $carea->id)?'class=active':''); ?> ><a href="/carreras/<?php echo e($carea->id); ?>"><?php echo e($carea->nombre); ?></a></li>    
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
</div>
