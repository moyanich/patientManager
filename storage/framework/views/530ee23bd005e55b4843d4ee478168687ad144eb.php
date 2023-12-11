<?php $__env->startSection('header'); ?>
    <div class="row align-items-center">
        <div class="col-md-8 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h6 class="text-uppercase"><?php echo e(__('Patient Profile')); ?></h6>
			<h1 class="h2 mb-0 ls-tight"><?php echo e($patient->salutation . ' ' . $patient->first_name . ' ' . ' ' . $patient->middle_name . ' ' . $patient->last_name); ?></h1>
        </div>
        <!-- Actions -->

		<div class="col-md-4 col-12 text-md-end">
			<div class="mx-n1">
			  <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1">
				<span class=" pe-2">
				  <i class="bi bi-pencil"></i>
				</span>
				<span>Edit</span>
			  </a>
				<a href="<?php echo e(route('patients.create')); ?>" class="btn d-inline-flex btn-sm btn-primary mx-1">
					<span class=" pe-2">
						<i class="bi bi-plus-lg"></i>
					</span>
					<span><?php echo e(__('Create New Patient')); ?></span>
				</a>
			</div>
		</div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <div class="row">
        <div class="col-12">
            <h4 class="d-block my-4"><?php echo e(__('Patient Information')); ?></h4>
        </div>
    </div>

    <div class="row p-2">
        <div class="col-12 col-md-2 bg-dark">
            <ul class="nav flex-column">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Active</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
        </div>

        <div class="col-12 col-md-3 bg-light">

            1
        </div>

        <div class="col-12 col-md-7 bg-light">

            1
        </div>

       

    </div>

    <div class="row gx-2 align-items-start bg-white p-2">

        <div class="col-12 col-md-4">
            <div class="card card-profile mb-2">
                <div class="card-body">
                    photo
                    <img src="..." class="card-img" alt="...">
                </div>
            </div>

            <div class="card card-profile mb-2">
                <div class="card-body">
                    <h4 class="mb-1">Profile</h4>
                    <div class="list-group">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1"><?php echo e(__('TRN:')); ?></h6>
                            </div>
                            <p class="mb-1"><?php echo e($patient->trn ?? ''); ?></p>
                        </div>

                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1"><?php echo e(__('NIS:')); ?></h6>
                            </div>
                            <p class="mb-1"><?php echo e($patient->nis ?? ''); ?></p>
                        </div>

                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1"><?php echo e(__('Gender/Sex:')); ?></h6>
                            </div>
                            <p class="mb-1"><?php echo e($gender->name ?? ''); ?></p>
                        </div>

                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1"><?php echo e(__('D.O.B.:')); ?></h6>
                            </div>
                            <p class="mb-1"><?php echo e(format_date_long($patient->dob) ?? ''); ?></p>
                        </div>

                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1"><?php echo e(__('Age:')); ?></h5>
                            </div>
                            <p class="mb-1"><?php echo e(calc_age($patient->dob)); ?></p>
                        </div>
                       
                    </div>
                </div>
            </div>

            <div class="card card-profile mb-2">
                <div class="card-body">
                    <h4 class="mb-1">Address</h4>
                    <p><?php echo e($address->address1 ?? ''); ?></p> 
                    <p><?php echo e($address->address2 ?? ''); ?></p> 
                    <p><?php echo e($address->city ?? ''); ?></p> 
                    <p><?php echo e($parish->name ?? ''); ?></p>
                </div>
            </div>



        </div>

        <div class="col-12 col-md-4">
            <div class="card card-profile mb-2">
                <div class="card-body">
                    <h4 class="mb-1">Contact Information</h4>

                    <div class="list-group">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1"><?php echo e(__('Email:')); ?></h6>
                            </div>
                            <p class="mb-1"><?php echo e($patient->email); ?></p>
                        </div>

                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1"><?php echo e(__('Home Phone #:')); ?></h6>
                            </div>
                            <p class="mb-1"><?php echo e(hyphenate($patient->home_phone)); ?></p>
                        </div>

                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1"><?php echo e(__('Mobile Phone #:')); ?></h6>
                            </div>
                            <p class="mb-1"><?php echo e(hyphenate($patient->cell_number)); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card card-profile mb-2">
                <div class="card-body">
                    <h4 class="mb-1">Employment Information</h4>

                    <div class="list-group">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1"><?php echo e(__('Employer:')); ?></h6>
                            </div>
                            <p class="mb-1"><?php echo e($patient->employer); ?></p>
                        </div>
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1"><?php echo e(__('Employer Address:')); ?></h6>
                            </div>
                            <p class="mb-1"><?php echo e($patient->emp_address); ?></p>
                        </div>
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1"><?php echo e(__('Work Email:')); ?></h6>
                            </div>
                            <p class="mb-1"><?php echo e($patient->work_email); ?></p>
                        </div>

                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1"><?php echo e(__('Work Phone #:')); ?></h6>
                            </div>
                            <p class="mb-1"><?php echo e(hyphenate($patient->work_phone)); ?></p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card card-profile mb-2">
                <div class="card-body">
                    <h4 class="mb-1">Emergency Contact Information</h4>

                    <div class="list-group">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1"><?php echo e(__('Employer:')); ?></h6>
                            </div>
                            <p class="mb-1"></p>
                        </div>
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1"><?php echo e(__('Employer Address:')); ?></h6>
                            </div>
                            <p class="mb-1"></p>
                        </div>
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1"><?php echo e(__('Work Email:')); ?></h6>
                            </div>
                            <p class="mb-1"></p>
                        </div>

                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1"><?php echo e(__('Work Phone #:')); ?></h6>
                            </div>
                            <p class="mb-1">----</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>


        <div class="col-12 col-md-4">
            <div class="card card-profile mb-4">
                <div class="card-body">
                    <h4 class="mb-1">Docket Information</h4>
                    <div class="list-group">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1"><?php echo e(__('Patient Number:')); ?></h6>
                            </div>
                            <p class="mb-1"><strong><?php echo e($patient->patient_no); ?></strong></p>
                        </div>
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1"><?php echo e(__('Document Number:')); ?></h6>
                            </div>
                            <p class="mb-1"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', ['page' => __('Patient Management')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/patientManager/resources/views/patients/summary.blade.php ENDPATH**/ ?>