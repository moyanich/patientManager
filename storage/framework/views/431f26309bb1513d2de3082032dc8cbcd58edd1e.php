<?php $__env->startSection('content'); ?>

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2"><?php echo e(__('Patients')); ?></h1>
		<div class="btn-toolbar mb-2 mb-md-0">
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

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="row">
				<div class="col-6">
					<h6 class="m-0 font-weight-bold text-primary w-75 p-2">All Patients</h6>
				</div> 
				<div class="col-4">
					<form action="https://demo.getdoctorino.com/patient/search" method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
						<div class="input-group">
							<input type="text" name="term" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" class="form-control bg-light border-0 small"> 
							<input type="hidden" name="_token" value="RvuQmhyHBagU8oDi3jHfen7AGWgZemGRsEHvH9jF"> 
							<div class="input-group-append">
								<button type="submit" class="btn btn-primary"><i class="fas fa-search fa-sm"></i></button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-2">
					<a href="https://demo.getdoctorino.com/patient/create" class="btn btn-primary btn-sm float-right "><i class="fa fa-plus"></i> New Patient</a>
				</div>
			</div>
		</div>
		<div class="card-body">

			<div class="table-responsive">
				<table class="table table-striped table-sm">
					<thead class="table-dark">
						<tr>
							<th scope="col"><?php echo e(__('#')); ?></th>
							<th scope="col"><?php echo e(__('Name')); ?></th>
							<th scope="col"><?php echo e(__('Phone')); ?></th>
							<th scope="col"><?php echo e(__('Blood Group')); ?></th>
							<th scope="col"><?php echo e(__('Actions')); ?></th>
						</tr>
					</thead>
					<tbody class="table-group-divider">
						<?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($loop->iteration); ?></td>
								<td><?php echo e($patient->name . ' ' .$patient->last_name); ?></td>
								<td><?php echo e($patient->home_phone); ?></td>
								<td><?php echo e($patient->registration_date); ?></td>
							</tr>
						
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/patientManager/resources/views/admin/patients/index.blade.php ENDPATH**/ ?>