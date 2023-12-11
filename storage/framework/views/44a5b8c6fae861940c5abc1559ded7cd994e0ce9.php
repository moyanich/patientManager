<?php if(count($errors) > 0): ?>
    <div class="alert alert-warning alert-dismissible fade show mb-5" role="alert">
        <strong><?php echo e(__('Whoops! ')); ?></strong><?php echo e(__('Something went wrong.')); ?><br><br>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <button type="button" class="btn-close text-xs text-success" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>


<?php if(session('success')): ?>
    <div class="row">
        <div class="col">
            <div class="alert alert-success alert-dismissible fade show mb-5" role="alert">
                <strong>Success!</strong> <?php echo e(session('success')); ?>

                <button type="button" class="btn-close text-xs text-success" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
<?php endif; ?>


<?php if(session('error')): ?>
    <div class="row">
        <div class="col m-5">
            <div class="alert alert-danger alert-dismissible fade show mb-5" role="alert">
                <span class="text-red-500 font-semibold">Error</span>
                <p class="text-gray-600 text-sm"><?php echo e(session('error')); ?></p>

                <button type="button" class="btn-close text-xs text-danger" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>

<?php endif; ?><?php /**PATH /Applications/MAMP/htdocs/patientManager/resources/views/components/messages.blade.php ENDPATH**/ ?>