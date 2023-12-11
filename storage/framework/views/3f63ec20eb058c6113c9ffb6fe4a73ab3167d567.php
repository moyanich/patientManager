<?php $__env->startSection('header'); ?>
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight"><?php echo e(__('User Edit')); ?></h1>
        </div>
        <!-- Actions -->
        <div class="col-md-6 col-12 text-md-end">
            <div class="mx-n1">
                <a href="<?php echo e(route('users.index')); ?>" class="btn d-inline-flex btn-sm btn-primary mx-1">
					<span class=" pe-2">
						<i class="bi bi-arrow-left"></i>
					</span>
                	<span><?php echo e(__('Back to Users List')); ?></span>
                </a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <form action="<?php echo e(route('users.update', $user->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>

        <div class="py-4 border-bottom">
            <div class="row align-items-center">
                <div class="col">
                    <div class="d-flex align-items-center gap-4"><div>
                    <a href="<?php echo e(route('users.index')); ?>" type="button" class="btn-close text-xs" aria-label="Close"></a>
                </div>
                    <div class="vr opacity-20 my-1"></div>
                    <h1 class="h3 ls-tight"><?php echo e(__('Edit User')); ?></h1>
                    </div>
                </div>
                <div class="col-auto d-none d-md-block">
                    <div class="hstack gap-2 justify-content-end">
                        
                        <a href="<?php echo e(route('users.index')); ?>" class="btn btn-sm bg-gray-100 me-2">
                            <?php echo e(__('Cancel')); ?>

                        </a>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-edit', $user)): ?>
                            <a href="#" class="btn btn-sm btn-circle btn-outline-dark link-warning-hover" data-bs-toggle="modal" data-bs-target="#passUpdate-<?php echo e($user->id); ?>">
                                <?php echo e(__('Change user password')); ?>

                            </a>
                        <?php endif; ?>
                        
                        <input type="submit" value="Update" class="btn btn-sm btn-primary">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-delete')): ?>
                            <a href="#" class="btn d-inline-flex btn-sm btn-neutral ms-2 text-danger" data-bs-toggle="modal" data-bs-target="#sDelUser-<?php echo e($user->id); ?>">
                                <span class="pe-2"><i class="bi bi-trash"></i> </span><span>Remove</span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
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
            <div class="col-md-2">
                <label for="roles" class="form-label mb-0 required-text">Roles</label>
            </div>
            <div class="col-md-8 col-xl-5">

                <div class="form-floating">
                    <select name="roles" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Choose One</option>
                        <option ></option>
                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($value); ?>" <?php $__currentLoopData = $user->getRoleNames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $createdUser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                <?php if($value == $createdUser): ?> selected <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>> <?php echo e($key); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     
                    </select>
                    <label for="floatingSelect">Assigned a role</label>
                </div>
            </div>
        </div>

        <div class="row align-items-center g-3 mt-2">
            <div class="col-md-2">
                <label for="first_name" class="form-label mb-0 required-text">First Name</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <input id="firstname"
                type="text"
                name="first_name"
                value="<?php echo e($user->first_name); ?>"
                class="form-control <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            
                <?php $__errorArgs = ['first_name'];
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
                <label for="last_name" class="form-label mb-0 required-text">Last Name</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <input id="lastname"
                type="text"
                name="last_name"
                value="<?php echo e($user->last_name); ?>"
                class="form-control <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            
                <?php $__errorArgs = ['last_name'];
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
                <label for="username" class="form-label mb-0 required-text">Username</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <input id="username"
                    type="text"
                    name="username"
                    value="<?php echo e($user->username); ?>"
                    class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" disabled/>
                
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
                <label for="name" class="form-label mb-0 required-text">Email Address</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <input id="email"
                    type="email"
                    name="email"
                    value="<?php echo e($user->email); ?>"
                    class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                
                <?php $__errorArgs = ['email'];
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
                <label for="name" class="form-label mb-0 required-text">Email Address</label>
            </div>
            <div class="col-md-8 col-xl-5">
                <input id="email"
                    type="email"
                    name="email"
                    value="<?php echo e($user->email); ?>"
                    class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                
                <?php $__errorArgs = ['email'];
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
            <div class="col-md-8 col-xl-5">
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
                            <option value="<?php echo e($key); ?>" <?php if($key == $user->status): ?> selected <?php endif; ?>>
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

    </form>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-edit', $user)): ?>
        <div class="modal" id="passUpdate-<?php echo e($user->id); ?>" tabindex="-1" aria-labelledby="modal_example" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content shadow-3">
                    <div class="modal-header">
                        <h5 class="modal-title"><?php echo e(__('Update User Password')); ?></h5>
                        <div class="text-xs ms-auto">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>

                    <form action="<?php echo e(route('users.updatePassword', $user->id)); ?>" method="POST" style="display: inline">
                        <?php echo method_field('PUT'); ?>
                        <?php echo csrf_field(); ?>
                        <div class="modal-body">

                            <div class="row mb-4">
                                <div class="mb-3">
                                    <div class="d-flex align-items-center mb-2">
                                        <label for="email" class="form-label required-text">Password</label>
                                        <div class="ms-auto">
                                        <span class="text-sm text-muted">Required</span>
                                        </div>
                                    </div>
                                    <input id="pass"
                                        type="password"
                                        name="password"
                                        class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                
                                    <?php $__errorArgs = ['password'];
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
                                <div class="mb-3">
                                    <div class="d-flex align-items-center mb-2">
                                        <label for="email" class="form-label required-text">Confirm Password</label>
                                        <div class="ms-auto">
                                        <span class="text-sm text-muted">Required</span>
                                        </div>
                                    </div>
                                    <input id="pass-confirm"
                                        type="password"
                                        name="confirm-password"
                                        class="form-control <?php $__errorArgs = ['confirm-password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                
                                    <?php $__errorArgs = ['confirm-password'];
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
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
                            <button href="" class="btn btn-sm btn-success cursor-pointer"><?php echo e(__('Update Password')); ?></button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-delete')): ?>
        <!-- Modal -->
        <div class="modal" id="sDelUser-<?php echo e($user->id); ?>" tabindex="-1" aria-labelledby="delDepModal" aria-hidden="true">
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
                            <?php echo e(__('Are you sure you want to delete the user record for ')); ?><strong><?php echo e($user->first_name . ' ' . $user->last_name); ?></strong><?php echo e(__('? All of your data will be permanently removed. This action cannot be undone.')); ?>

                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
                        
                        <form action="<?php echo e(route('users.destroy', $user->id)); ?>" method="POST" style="display: inline">
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



<?php echo $__env->make('layouts.dashboard', ['page' => __('User Management')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/patientManager/resources/views/users/edit.blade.php ENDPATH**/ ?>