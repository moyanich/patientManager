<?php $__env->startSection('header'); ?>
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight"><?php echo e(__('All Patients')); ?></h1>
        </div>
        <!-- Actions -->
        <div class="col-md-6 col-12 text-md-end">
            <div class="mx-n1">
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

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<div class="btn-toolbar mb-2 mb-md-0 ms-auto">
			<div class="btn-group me-2">
			<button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
			<button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
			</div>
			<button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
			<span data-feather="calendar"></span>
			This week
			</button>
		</div>
	</div>

	<div class="card mb-7">
		<div class="card-header">
			<h5 class="mb-0"><?php echo e(__('All Patients')); ?></h5>
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
							<th scope="col"><?php echo e(__('Patient Name')); ?></th>
							<th scope="col"><?php echo e(__('Patient No.')); ?></th>
							<th scope="col"><?php echo e(__('Assigned Doctor')); ?></th>
							<th scope="col"><?php echo e(__('Registration Date')); ?></th>
							<th></th>
						</tr>
					</thead>
				<tbody>
					<?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($loop->iteration); ?></td>
							<td><?php echo e($patient->first_name . ' ' . $patient->last_name); ?></td>
							<td><?php echo e($patient->patient_no); ?></td>
							<td><?php echo e($patient->home_phone); ?></td>
							<td><?php echo e(format_date_long($patient->registration_date)); ?></td>

							<td class="text-end">
								<a href="<?php echo e(route('patients.summary', $patient->id)); ?>" class="btn btn-sm btn-outline-primary">View</a>
								<a href="<?php echo e(route('patients.show', $patient->id)); ?>" class="btn btn-sm btn-outline-primary">View</a>
								<a href="<?php echo e(route('patients.edit', $patient->id)); ?>" class="btn btn-sm btn-outline-warning">Edit</a>
								<a href="#" class="btn btn-outline-danger btn-circle btn-sm" data-bs-toggle="modal" data-bs-target="#delPatientModal">
									<i class="bi bi-trash"></i>
								</a>
							</td>
						</tr>					
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.dashboard', ['page' => __('Patients')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/patientManager/resources/views/patients/index.blade.php ENDPATH**/ ?>