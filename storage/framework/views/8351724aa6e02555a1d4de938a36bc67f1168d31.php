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

	
	<?php echo Form::open(['action' => ['App\Http\Controllers\PatientsController@update', $patient->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>


		<div class="row align-items-center py-4">
			<div class="col-sm col-12">
				<h4><?php echo e(__('Patient Information')); ?></h4>
			</div>
			<div class="col-sm-auto col-12 mt-4 mt-sm-0">
				<div class="hstack gap-2 justify-content-sm-end">
					<?php echo e(Form::submit('Save', ['class' => 'btn btn-sm btn-primary'])); ?>


					<a href="#modalExport" class="btn btn-sm btn-neutral border-base" data-bs-toggle="modal"><span class="pe-2"><i class="bi bi-people-fill"></i> </span><span>Share</span> </a>
				
				</div>
			</div>
		</div>

		<div class="row align-items-start gx-2 bg-white p-4">

			<div class="col-12 col-md-4">
				<h4 class="d-block my-4"><?php echo e(__('Personal Information')); ?></h4>

				<div class="row mb-3">
					<?php echo e(Form::label('patientno', 'Patient No', ['class' => 'col-sm-4 col-form-label'])); ?>

					<div class="col-sm-8">
						<?php echo e(Form::text('patientno', $patient->patient_no, ['class' => 'form-control', 'placeholder' => '', 'disabled' ])); ?>

					</div>
				</div>

				<div class="row mb-3">
					<?php echo e(Form::label('salutation', 'Salutation', ['class' => 'col-sm-4 col-form-label'])); ?>

					<div class="col-sm-8">
						
						<?php echo Form::select('salutation', [
							'Mr.' => 'Mr.',
							'Mrs.' => 'Mrs.',
							'Ms.' => 'Ms.',
							'Miss' => 'Miss'], $patient->salutation ?? '', ['class' => 'form-select form-control']); ?>


						<?php $__errorArgs = ['salutation'];
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

				<div class="row mb-3">
					<?php echo e(Form::label('firstname', 'First Name', ['class' => 'col-sm-4 col-form-label'])); ?>

					<div class="col-sm-8">
						<?php echo e(Form::text('firstname', $patient->first_name, ['class' => 'form-control', 'placeholder' => '' ])); ?>

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

				<div class="row mb-3">
					<?php echo e(Form::label('middlename', 'Middle Name', ['class' => 'col-sm-4 col-form-label'])); ?>

					<div class="col-sm-8">
						<?php echo e(Form::text('middlename', $patient->middle_name, ['class' => 'form-control', 'placeholder' => '' ])); ?>

						<?php $__errorArgs = ['middlename'];
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

				<div class="row mb-3">
					<?php echo e(Form::label('lastname', 'Last Name', ['class' => 'col-sm-4 col-form-label'])); ?>

					<div class="col-sm-8">
						<?php echo e(Form::text('lastname', $patient->last_name, ['class' => 'form-control', 'placeholder' => '' ])); ?>

						<?php $__errorArgs = ['lastname'];
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

				<div class="row mb-3">
					<?php echo e(Form::label('trn', 'TRN', ['class' => 'col-sm-4 col-form-label'])); ?>

					<div class="col-sm-8">
						<?php echo e(Form::text('trn',  $patient->trn, ['class' => 'form-control', 'placeholder' => '' ])); ?>

						<?php $__errorArgs = ['trn'];
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

				<div class="row mb-3">
					<?php echo e(Form::label('nis', 'NIS', ['class' => 'col-sm-4 col-form-label'])); ?>

					<div class="col-sm-8">
						<?php echo e(Form::text('nis',  $patient->nis, ['class' => 'form-control', 'placeholder' => '' ])); ?>

						<?php $__errorArgs = ['nis'];
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

				<div class="row mb-3">
					<?php echo e(Form::label('gender', 'Gender', ['class' => 'col-sm-4 col-form-label'])); ?>

					<div class="col-sm-8">
						<?php echo Form::select('gender', $genders, $patient->gender_id ?? '', ['class' => 'form-select form-control']); ?>


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

				<div class="row mb-3">
					<?php echo e(Form::label('dob', 'Date of Birth', ['class' => 'col-sm-4 col-form-label'])); ?>

					<div class="col-sm-8">
						<?php echo e(Form::date('dob', $patient->dob, ['class' => 'form-control'])); ?>


						<?php $__errorArgs = ['dob'];
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
				
			</div>

			<div class="col-12 col-md-4 ps-4">
				<h4 class="d-block my-4"><?php echo e(__('Residential Information')); ?></h4>

				<div class="row mb-3">
					<?php echo e(Form::label('address1', 'Address 1', ['class' => 'col-sm-4 col-form-label'])); ?>

					<div class="col-sm-8">
						<?php echo e(Form::text('address1', $address->address1 ?? '', ['class' => 'form-control', 'placeholder' => '' ])); ?>


						<?php $__errorArgs = ['address1'];
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

				<div class="row mb-3">
					<?php echo e(Form::label('address2', 'Address 2', ['class' => 'col-sm-4 col-form-label'])); ?>

					<div class="col-sm-8">
						<?php echo e(Form::text('address2', $address->address2 ?? '', ['class' => 'form-control', 'placeholder' => '' ])); ?>


						<?php $__errorArgs = ['address2'];
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

				<div class="row mb-3">
					<?php echo e(Form::label('city', 'City', ['class' => 'col-sm-4 col-form-label'])); ?>

					<div class="col-sm-8">
						<?php echo e(Form::text('city', $address->city ?? '', ['class' => 'form-control', 'placeholder' => '' ])); ?>


						<?php $__errorArgs = ['city'];
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

				<div class="row mb-3">
					<?php echo e(Form::label('parish_id', 'Parish', ['class' => 'col-sm-4 col-form-label'])); ?>

					<div class="col-sm-8">
						<?php echo Form::select('parish_id', $parishes, $patient->parish_id ?? '', ['class' => 'form-select form-control']); ?>

						<?php $__errorArgs = ['parish_id'];
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

				<h4 class="d-block my-4 pt-5"><?php echo e(__('Contact Information')); ?></h4>

				<div class="row mb-3">
					<?php echo e(Form::label('email', 'Email Address', ['class' => 'col-sm-4 col-form-label'])); ?>

					<div class="col-sm-8">
						<?php echo e(Form::email('email', $patient->email, ['class' => 'form-control', 'placeholder' => '' ])); ?>


						<?php $__errorArgs = ['email'];
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

				<div class="row mb-3">
					<?php echo e(Form::label('homephone', 'Home Phone', ['class' => 'col-sm-4 col-form-label'])); ?>

					<div class="col-sm-8">
						<?php echo e(Form::text('homephone', $patient->home_phone, ['class' => 'form-control', 'placeholder' => '' ])); ?>


						<?php $__errorArgs = ['homephone'];
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

				<div class="row mb-3">
					<?php echo e(Form::label('cellnumber', 'Cell Phone', ['class' => 'col-sm-4 col-form-label'])); ?>

					<div class="col-sm-8">
						<?php echo e(Form::text('cellnumber', $patient->cell_number, ['class' => 'form-control', 'placeholder' => '' ])); ?>


						<?php $__errorArgs = ['cellnumber'];
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

			</div>

			<div class="col-12 col-md-4 ps-4">

				<h4 class="d-block my-4"><?php echo e(__('Next of Kin')); ?></h4>

				<div class="row mb-3">
					<?php echo e(Form::label('kin_name', 'Name', ['class' => 'col-sm-4 col-form-label'])); ?>

					<div class="col-sm-8">
						<?php echo e(Form::text('kin_name', $patient->kin_name, ['class' => 'form-control', 'placeholder' => '' ])); ?>


						<?php $__errorArgs = ['kin_name'];
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

				<div class="row mb-3">
					<?php echo e(Form::label('kin_phone', 'Phone Number', ['class' => 'col-sm-4 col-form-label'])); ?>

					<div class="col-sm-8">
						<?php echo e(Form::text('kin_phone', $patient->kin_phone, ['class' => 'form-control', 'placeholder' => '' ])); ?>


						<?php $__errorArgs = ['kin_phone'];
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

				<div class="row mb-3">
					<?php echo e(Form::label('kin_address', 'Address', ['class' => 'col-sm-4 col-form-label'])); ?>

					<div class="col-sm-8">
						<?php echo e(Form::textarea('kin_address', $patient->kin_address, ['class' => 'form-control', 'placeholder' => '' ])); ?>


						<?php $__errorArgs = ['kin_address'];
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


				<h4 class="d-block my-4 pt-5"><?php echo e(__('Employer Information')); ?></h4>

				<div class="row mb-3">
					<?php echo e(Form::label('employer', 'Employer', ['class' => 'col-sm-4 col-form-label'])); ?>

					<div class="col-sm-8">
						<?php echo e(Form::text('employer', $patient->employer, ['class' => 'form-control', 'placeholder' => '' ])); ?>


						<?php $__errorArgs = ['employer'];
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

				<div class="row mb-3">
					<?php echo e(Form::label('workphone', 'Work Phone', ['class' => 'col-sm-4 col-form-label'])); ?>

					<div class="col-sm-8">
						<?php echo e(Form::text('workphone', $patient->work_phone, ['class' => 'form-control', 'placeholder' => '' ])); ?>


						<?php $__errorArgs = ['workphone'];
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

				<div class="row mb-3">
					<?php echo e(Form::label('work_email', 'Work Email', ['class' => 'col-sm-4 col-form-label'])); ?>

					<div class="col-sm-8">
						<?php echo e(Form::text('work_email', $patient->work_email, ['class' => 'form-control', 'placeholder' => '' ])); ?>


						<?php $__errorArgs = ['work_email'];
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

				<div class="row mb-3">
					<?php echo e(Form::label('emp_address', 'Employer Address', ['class' => 'col-sm-4 col-form-label'])); ?>

					<div class="col-sm-8">
						<?php echo e(Form::textarea('emp_address', $patient->emp_address, ['class' => 'form-control', 'placeholder' => '' ])); ?>


						<?php $__errorArgs = ['emp_address'];
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
			</div>
			
		</div>
		

	<?php echo e(Form::hidden('_method', 'PUT')); ?>

	<?php echo Form::close(); ?>

		

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.dashboard', ['page' => __('Patient Management')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/patientManager/resources/views/patients/show.blade.php ENDPATH**/ ?>