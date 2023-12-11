<?php $__env->startSection('header'); ?>
    <div class="row align-items-center">
        <div class="col">
            <div class="d-flex align-items-center gap-4">
                <h1 class="h3 ls-tight"><?php echo e($department->name . __(' Department')); ?></h1>

                <?php if (isset($component)) { $__componentOriginal48897432217a77f4857fd2f0be2909fcfaaa204c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\BadgesInner::class, ['status' => strtolower($department->status)]); ?>
<?php $component->withName('badges-inner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                    <?php echo e(statusConvert($department->status)); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal48897432217a77f4857fd2f0be2909fcfaaa204c)): ?>
<?php $component = $__componentOriginal48897432217a77f4857fd2f0be2909fcfaaa204c; ?>
<?php unset($__componentOriginal48897432217a77f4857fd2f0be2909fcfaaa204c); ?>
<?php endif; ?>
            </div>
        </div>

        <!-- Actions -->
        <div class="col-md-6 col-12 text-md-end">
            <div class="mx-n1">
                <a href="<?php echo e(route('departments.index')); ?>" type="button" class="text-xs" aria-label="Close"><i class="bi bi-list-task"></i><?php echo e(__(' Departments List')); ?></a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row align-items-center justify-content-end">
        <div class="col-auto d-none d-md-block">
            <a href="<?php echo e(route('departments.edit', $department->id)); ?>" class="btn btn-sm bg-gray-100 me-2">
                <?php echo e(__('Edit')); ?>

            </a>
        </div>
    </div>


    <div class="row align-items-center g-3 mt-3">
        <?php if (isset($component)) { $__componentOriginal271382f1358b7315b5ae7a740b130b864a84d074 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Messages::class, []); ?>
<?php $component->withName('messages'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal271382f1358b7315b5ae7a740b130b864a84d074)): ?>
<?php $component = $__componentOriginal271382f1358b7315b5ae7a740b130b864a84d074; ?>
<?php unset($__componentOriginal271382f1358b7315b5ae7a740b130b864a84d074); ?>
<?php endif; ?>
    </div>

    <div class="row align-items-center g-3 mt-2">
        <div class="col-10">
            <h4>Description:</h4>
            <p class="mb-3"><?php echo e($department->description); ?></p>
        </div>
    </div>

    <div class="row align-items-center g-3 mt-2">
        <div class="col-10">
            <h4>Head of Department:</h4>
            <p class="mb-3"></p>

            
        </div>
    </div>

    <div class="row align-items-center g-3 mt-5 pt-4">
        <div class="col-6 bg-gray-100 p-4">
            <h3 class="mb-3"><?php echo e(__('List of Doctors')); ?></h3>
            
            <table class="table table-hover table-borderless">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                    </tr>
                </thead>

            </table>
        </div>
    </div>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', ['page' => __('Department Management')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/patientManager/resources/views/departments/show.blade.php ENDPATH**/ ?>