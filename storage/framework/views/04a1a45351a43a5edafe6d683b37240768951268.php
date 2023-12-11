<?php $__env->startSection('header'); ?>
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight"><?php echo e(__('Role Management')); ?></h1>
        </div>
        <!-- Actions -->
        <div class="col-md-6 col-12 text-md-end">
            <div class="mx-n1">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-edit')): ?>
                    <a href="<?php echo e(route('roles.edit', $role->id)); ?>" class="btn d-inline-flex btn-sm btn-primary mx-1">
                        <span class=" pe-2">
                            <span data-feather="plus"></span>
                        </span>
                        <span><?php echo e(__('Edit Role')); ?></span>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="col-12 mx-auto">
        <div class="card mb-7 p-5">
            <div class="card-header">
                <h5 class="mb-0"><?php echo e(__('View Role')); ?></h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-nowrap">
                        <thead class="table-light">
                            <tr>
                                <th scope="col"><?php echo e(__('Role Name')); ?></th>
                                <th scope="col"><?php echo e(__('Permissions')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo e($role->name); ?></td>
                                <td> 
                                    <div class="d-flex flex-wrap">
                                        <?php if(!empty($rolePermissions)): ?>
                                            <?php $__currentLoopData = $rolePermissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <label class="badge rounded-pill text-dark bg-gradient bg-info px-4 py-2 m-1"><?php echo e($v->name); ?></label>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/patientManager/resources/views/roles/show.blade.php ENDPATH**/ ?>