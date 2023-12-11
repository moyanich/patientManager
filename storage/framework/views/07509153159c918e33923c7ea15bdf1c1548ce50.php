<?php $__env->startSection('header'); ?>
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight"><?php echo e(__('New Patient Onboarding')); ?></h1>
        </div>
        <!-- Actions -->
        <div class="col-md-6 col-12 text-md-end">
            <div class="mx-n1">
                <a href="<?php echo e(route('patients.index')); ?>" class="btn d-inline-flex btn-sm btn-primary mx-1">
					<span class=" pe-2">
						<i class="bi bi-arrow-left"></i>
					</span>
                	<span><?php echo e(__('Back')); ?></span>
                </a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <div class="card mb-7 p-5">
        <div class="card-header">
            <h5 class="mb-0"><?php echo e(__('Create Patient')); ?></h5>
        </div>
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

            <?php echo Form::open(['action' => 'App\Http\Controllers\PatientsController@store', 'method' => 'POST']); ?>

                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <?php echo e(Form::label('firstname', 'First Name', ['class' => 'form-label mb-2'])); ?>


                            <?php echo e(Form::text('firstname', '', ['class' => 'form-control', 'placeholder' => ''])); ?>


                            <?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-xs text-danger"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <?php echo e(Form::label('middlename', 'Middle Name', ['class' => 'form-label mb-2'])); ?>


                            <?php echo e(Form::text('middlename', '', ['class' => 'form-control', 'placeholder' => ''])); ?>


                            <?php $__errorArgs = ['middlename'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-xs text-danger"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div><!--end col-->
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <?php echo e(Form::label('lastname', 'Last Name', ['class' => 'form-label mb-2'])); ?>


                            <?php echo e(Form::text('lastname', '', ['class' => 'form-control', 'placeholder' => ''])); ?>


                            <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-xs text-danger"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>                    
                </div>
                <div class="row"><!--end col-->
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <?php echo e(Form::label('patient_no', 'Patient No.', ['class' => 'form-label mb-2'])); ?>


                            <?php echo e(Form::text('patient_no', '', ['class' => 'form-control', 'placeholder' => ''])); ?>


                            <?php $__errorArgs = ['patient_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-xs text-danger"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <?php echo e(Form::label('dob', 'Date of Birth', ['class' => 'form-label mb-2'])); ?>


                            <?php echo e(Form::date('dob', '', ['class' => 'form-control', 'placeholder' => ''])); ?>


                            <?php $__errorArgs = ['dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-xs text-danger"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <?php echo e(Form::label('gender', 'Gender', ['class' => 'form-label mb-2'])); ?>


                            <?php echo Form::select('gender', $genders, '', ['class' => 'form-select']); ?>


                            <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-xs text-danger"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>
                <div class="row">   
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <?php echo e(Form::label('home_phone', 'Phone Number (Home)', ['class' => 'form-label mb-2'])); ?>


                            <?php echo e(Form::tel('home_phone', '', ['class' => 'form-control', 'placeholder' => ''])); ?>


                            <?php $__errorArgs = ['home_phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-xs text-danger"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <?php echo e(Form::label('cell_number', 'Phone Number (Mobile)', ['class' => 'form-label mb-2'])); ?>


                            <?php echo e(Form::text('cell_number', '', ['class' => 'form-control', 'placeholder' => ''])); ?>


                            <?php $__errorArgs = ['cell_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-xs text-danger"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <?php echo e(Form::label('registration_date', 'Registration Date', ['class' => 'form-label mb-2'])); ?>


                            <?php echo e(Form::date('registration_date', '', ['class' => 'form-control', 'placeholder' => ''])); ?>


                            <?php $__errorArgs = ['registration_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-xs text-danger"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>
                <div class="row">   
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                           
                        </div>
                    </div>
                </div>


                
                <div class="row">
                    <div class="text-end mt-4">
                        <a href="<?php echo e(route('patients.index')); ?>" class="btn btn-sm bg-gray-100 me-2">
                            <?php echo e(__('Cancel')); ?>

                        </a>
                        <?php echo e(Form::submit('Save', ['class' => 'btn btn-sm btn-primary'])); ?>

                    </div>
                </div><!--end row-->
            
            <?php echo Form::close(); ?>


        </div>
    </div>





<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.dashboard', ['page' => __('Patient Management')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/patientManager/resources/views/patients/create.blade.php ENDPATH**/ ?>