<?php $__env->startSection('header'); ?>
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight"><?php echo e(__('User Information')); ?></h1>
        </div>
        <!-- Actions -->
        <div class="col-md-6 col-12 text-md-end">
            <div class="mx-n1">
                <a href="<?php echo e(route('users.create')); ?>" class="btn d-inline-flex btn-sm btn-primary mx-1">
					<span class=" pe-2">
						<span data-feather="plus"></span>
					</span>
                	<span><?php echo e(__('Create New User')); ?></span>
                </a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

    <div class="col-xl-7 mx-auto">

        <div class="card mb-7">
            <div class="card-header">
                <h5 class="mb-0">User Information</h5>
            </div>

            <div class="card-body">

                <?php echo Form::open(['action' => ['App\Http\Controllers\UserController@update', $user->id], 'method' => 'PATCH', 'enctype' => 'multipart/form-data']); ?>


                    <div class="row mb-5 g-5">
                        <div class="col-md-12">
                            <div class="">
                                <?php echo e(Form::label('name', 'Name', ['class' => 'form-label'])); ?>

                                <?php echo e(Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => ''])); ?>


                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-red-500"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="">
                                <?php echo e(Form::label('username', 'Username', ['class' => 'form-label'])); ?>

                                <?php echo e(Form::text('username', $user->username, ['class' => 'form-control', 'disabled'])); ?>


                                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-red-500"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row g-5">
                        <div class="col-md-12">
                            <div class="">
                                <?php echo e(Form::label('email', 'Email', ['class' => 'form-label'])); ?>

                                <?php echo e(Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => ' '])); ?>


                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-red-500"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="">
                                <?php echo e(Form::label('password', 'Password', ['class' => 'form-label'])); ?>

                                <?php echo Form::password('password', array('class' => 'form-control')); ?>


                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-red-500"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="">
                                <?php echo e(Form::label('confirm-password', 'Confirm Password', ['class' => 'form-label'])); ?>

                                <?php echo Form::password('confirm-password', array('class' => 'form-control')); ?>


                                <?php $__errorArgs = ['confirm-password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-red-500"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="">
                                <?php echo e(Form::label('role', 'Role', ['class' => 'form-label'])); ?>


                                <?php echo Form::select('roles[]', $roles, $userRole, array('class' => 'form-control multiple-selec', 'multiple')); ?>

                            </div>
                        </div>
                    </div>

                    <div class="text-end mt-4">
                        <button type="button" class="btn btn-sm btn-neutral me-2">Cancel</button>
                        <?php echo e(Form::submit('Update', ['class' => 'btn btn-sm btn-primary'])); ?>

                    </div>

                <?php echo Form::close(); ?>


            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/patientManager/resources/views/users/show.blade.php ENDPATH**/ ?>