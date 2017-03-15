<div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">
    <?php $__currentLoopData = $carreras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carrera): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li><a href="/carreras/<?php echo e($carrera->id); ?>"><?php echo e($carrera->nombre); ?></a></li>    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </ul>
</div>
