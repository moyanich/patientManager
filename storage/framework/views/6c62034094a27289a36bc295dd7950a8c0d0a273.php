<?php $__env->startSection('content'); ?>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?php echo e(__('New Patient Onboarding')); ?></h1>
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
    

    <div class="card shadow p-0">
        <div class="card-header">
            <h2>Onboard Patient</h2>
        </div>
        <div class="card-body p-4">
            
            <?php echo Form::open(['action' => 'App\Http\Controllers\Admin\PatientsController@store', 'method' => 'POST']); ?>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <?php echo e(Form::label('firstname', 'First Name', ['class' => 'form-label mb-2'])); ?>


                            <?php echo e(Form::text('firstname', '', ['class' => 'form-control', 'placeholder' => 'First Name'])); ?>


                            <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-red-600"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div><!--end col-->
                    <div class="col-6">
                        <div class="mb-3">
                            <?php echo e(Form::label('lastname', 'Last Name', ['class' => 'form-label mb-2'])); ?>


                            <?php echo e(Form::text('lastname', '', ['class' => 'form-control', 'placeholder' => 'Last Name'])); ?>


                            <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-red-600"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div><!--end col-->
                    <div class="col-12">
                        <div class="mb-3">
                            <?php echo e(Form::label('patientID', 'Patient No.', ['class' => 'form-label mb-2'])); ?>


                            <?php echo e(Form::number('patientID', '', ['class' => 'form-control', 'placeholder' => ''])); ?>


                            <?php $__errorArgs = ['patientID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-xs text-red-600"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <?php echo e(Form::label('registration_date', 'Registration Date', ['class' => 'form-label mb-2'])); ?>


                            <?php echo e(Form::date('registration_date', '', ['class' => 'form-control', 'placeholder' => ''])); ?>


                            <?php $__errorArgs = ['registration_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-xs text-red-600"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    
                    <!--end col-->
                    <div class="col-6">
                        <div class="mb-3">
                            home_phone

                            
                            <label for="phonenumberInput" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" placeholder="+(245) 451 45123" id="phonenumberInput">
                        </div>
                    </div><!--end col-->
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="emailidInput" class="form-label">Email Address</label>
                            <input type="email" class="form-control" placeholder="example@gamil.com" id="emailidInput">
                        </div>
                    </div><!--end col-->
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="address1ControlTextarea" class="form-label">Address</label>
                            <input type="text" class="form-control" placeholder="Address 1" id="address1ControlTextarea">
                        </div>
                    </div><!--end col-->
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="citynameInput" class="form-label">City</label>
                            <input type="email" class="form-control" placeholder="Enter your city" id="citynameInput">
                        </div>
                    </div><!--end col-->
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="ForminputState" class="form-label">State</label>
                            <select id="ForminputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div><!--end col-->
                    <div class="col-6">
                        <div class="mb-3">
                            <?php echo e(Form::label('gender', 'Gender', ['class' => 'block uppercase text-blueGray-600 text-xs font-bold mb-2'])); ?>


                            <?php echo Form::select('gender', $genders, '', ['class' => 'form-select']); ?>


                            <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-xs text-red-600"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="text-end">
                            <a href="<?php echo e(route('admin.patients.index')); ?>" class="btn btn-outline">
                                <?php echo e(__('Cancel')); ?>

                            </a>

                            <?php echo e(Form::submit('Save', ['class' => 'btn btn-secondary'])); ?>                           
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            
            <?php echo Form::close(); ?>

        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/patientManager/resources/views/admin/patients/create.blade.php ENDPATH**/ ?>