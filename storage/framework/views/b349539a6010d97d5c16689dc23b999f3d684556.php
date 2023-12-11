<?php $__env->startSection('header'); ?>
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight"><?php echo e(__('Role Management')); ?></h1>
        </div>
        <!-- Actions -->
        <div class="col-md-6 col-12 text-md-end">
            <div class="mx-n1">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-create')): ?>
                    <a href="<?php echo e(route('roles.create')); ?>" class="btn d-inline-flex btn-sm btn-primary mx-1">
                        <span class=" pe-2">
                            <i class="bi bi-plus-lg"></i>
                        </span>
                        <span><?php echo e(__('Create New Role')); ?></span>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="card mb-7">
        <div class="card-header">
            <h5 class="mb-0"><?php echo e(__('Users')); ?></h5>
        </div>

           

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

        <div class="table-responsive">
            <table class="table table-hover table-nowrap">
                <thead class="table-light">
                    <tr>
                        <th scope="col"><?php echo e(__('#')); ?></th>
                        <th scope="col"><?php echo e(__('Name')); ?></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(++$i); ?></td>
                            <td><?php echo e($role->name); ?></td>
                            <td>
                                <a href="<?php echo e(route('roles.show', $role->id)); ?>" class="btn btn-sm btn-outline-primary">View</a>
                                
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-edit')): ?>
                                    <a class="btn btn-sm btn-outline-warning" href="<?php echo e(route('roles.edit', $role->id)); ?>">Edit</a>
                                <?php endif; ?>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-delete')): ?>
                                    <a href="#" class="btn btn-outline-danger btn-circle btn-sm" data-bs-toggle="modal" data-bs-target="#delRoleModal">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                <?php endif; ?>

                                
                            
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

        <?php echo $roles->render(); ?>

        
    </div>


    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-delete')): ?>
        <!-- Modal -->
        <div class="modal" id="delRoleModal" tabindex="-1" aria-labelledby="delRoleModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content shadow-3">
                    <div class="modal-header">
                        <h5 class="modal-title"><span class="text-red-500 text-md"><i class="bi bi-exclamation-diamond-fill"></i></span> <?php echo e(__('Delete User')); ?></h5>
                        <div class="text-xs ms-auto">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <p class="text-sm text-gray-500">
                            <?php echo e(__('Are you sure you want to delete this record? All of your data will be permanently removed. This action cannot be undone.')); ?>

                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>

                        <?php echo Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id],'style'=>'display:inline']); ?>


                            <?php echo Form::submit('Delete', ['class' => 'btn btn-sm btn-danger cursor-pointer']); ?>


                        <?php echo Form::close(); ?>


                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/patientManager/resources/views/roles/index.blade.php ENDPATH**/ ?>