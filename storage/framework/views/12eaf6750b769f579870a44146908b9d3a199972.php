<?php $__env->startSection('header'); ?>
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight"><?php echo e(__('Department Edit')); ?></h1>
        </div>
        <!-- Actions -->
        <div class="col-md-6 col-12 text-md-end">
            <div class="mx-n1">
                <a href="<?php echo e(route('departments.index')); ?>" class="btn d-inline-flex btn-sm btn-primary mx-1">
					<span class=" pe-2">
						<i class="bi bi-arrow-left"></i>
					</span>
                	<span><?php echo e(__('Back to Deparment List')); ?></span>
                </a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-body">

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

                    <div class="py-4 border-bottom">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="d-flex align-items-center gap-4">
                                <h1 class="h3 ls-tight"><?php echo e($department->name); ?></h1>
                                </div>
                            </div>
                            <div class="col-auto d-none d-md-block">
                                <div class="hstack gap-2 justify-content-end">
                                    
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('department-delete')): ?>
                                        <a href="#" class="btn btn-sm btn-danger d-inline-flex cursor-pointer ms-2 text-white" data-bs-toggle="modal" data-bs-target="#sDelDepModal-<?php echo e($department->id); ?>">
                                            <span class="pe-2"><i class="bi bi-trash"></i> </span><span>Delete</span>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form action="<?php echo e(route('departments.update', $department->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo method_field('PUT'); ?>
                        <?php echo csrf_field(); ?>
                    
                        <div class="row align-items-center g-3 mt-2">
                            <div class="col-md-2">
                                <label for="name" class="form-label mb-0 required-text">Department Name</label>
                            </div>
                            <div class="col-md-10">
                                <input id="name"
                                type="text"
                                name="name"
                                value="<?php echo e($department->name); ?>"
                                class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="mt-2 invalid-feedback"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="row align-items-center g-3 mt-2">
                            <div class="col-md-2">
                                <label for="description" class="form-label">Description</label>
                            </div>
                            <div class="col-md-10">
                                <textarea id="description"
                                    name="description"
                                    style="height: 150px"
                                    class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e($department->description); ?>

                                </textarea>
                                
                                <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="mt-2 invalid-feedback"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="row align-items-center g-3 mt-2">
                            <div class="col-md-2">
                                <label for="deptHead" class="form-label required-text">Department Head</label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-floating">
                                    <select name="deptHead" class="form-select <?php $__errorArgs = ['deptHead'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="doctorsSelect" aria-label="doctors">
                                        <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor_key => $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($doctor_key); ?>" 
                                                <?php $__currentLoopData = $department_head_doctor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $head_doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($doctor_key == $head_doctor->id): ?> selected <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>>
                                                <?php echo e($doctor); ?> 
                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <label for="doctorsSelect">Assign Head of Department</label>
                                </div>

                                <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="mt-2 invalid-feedback"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="row align-items-center g-3 mt-2">
                            <div class="col-md-2">
                                <label for="title" class="form-label required-text">Status</label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-floating">
                                    <select name="status" class="form-select <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="floatingSelect" aria-label="Floating label select example">
                                        <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($key); ?>" <?php if($key == $department->status): ?> selected <?php endif; ?>>
                                                <?php echo e($value); ?> 
                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <label for="floatingSelect">Choose a status</label>
                                </div>

                                <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="mt-2 invalid-feedback"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="text-end mt-5 pt-5">
                                <a href="<?php echo e(route('departments.index')); ?>" class="btn btn-sm bg-gray-100 me-2">
                                    <?php echo e(__('Cancel')); ?>

                                </a>
                                <input type="submit" value="Update" class="btn btn-sm btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3>Department Doctors</h3>
                    <hr/>
                    <ul class="list-group list-group-flush">
                        <?php $__currentLoopData = $department_doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e(route('doctors.show', $doctor->id)); ?>" class="list-group-item list-group-item-action"><?php echo e($doctor->fullName); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('department-delete')): ?>
        <!-- Modal -->
        <div class="modal" id="sDelDepModal-<?php echo e($department->id); ?>" tabindex="-1" aria-labelledby="delDepModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content shadow-3">
                    <div class="modal-header">
                        <h5 class="modal-title"><span class="text-danger text-md"><i class="bi bi-exclamation-diamond-fill"></i></span> <?php echo e(__('Delete Department')); ?></h5>
                        <div class="text-xs ms-auto">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <p class="text-sm text-gray-500">
                            <?php echo e(__('Are you sure you want to delete the department record for ')); ?><strong><?php echo e($department->name); ?></strong><?php echo e(__('? All of your data will be permanently removed. This action cannot be undone.')); ?>

                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
                        
                        <form action="<?php echo e(route('departments.destroy', $department->id)); ?>" method="POST" style="display: inline">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button href="" class="btn btn-sm btn-danger cursor-pointer">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', ['page' => __('Department Management')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/patientManager/resources/views/departments/edit.blade.php ENDPATH**/ ?>