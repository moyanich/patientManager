<?php $__env->startSection('header'); ?>
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight"><?php echo e(__('All Users')); ?></h1>
        </div>
        <!-- Actions -->
        <div class="col-md-6 col-12 text-md-end">
            <div class="mx-n1">
                <a href="<?php echo e(route('users.create')); ?>" class="btn d-inline-flex btn-sm btn-primary mx-1">
					<span class=" pe-2">
						<i class="bi bi-plus-lg"></i>
					</span>
                	<span><?php echo e(__('Create New User')); ?></span>
                </a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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

	<div class="mb-7">
		<div class="table-responsive">
			<table id="users-datatable" class="table table-hover table-striped table-sm table-nowrap compact users-datatable">
				<thead>
					<tr>
						<th scope="col"><?php echo e(__('#')); ?></th>
						<th scope="col"><?php echo e(__('First Name')); ?></th>
						<th scope="col"><?php echo e(__('Last Name')); ?></th>
						<th scope="col"><?php echo e(__('Username')); ?></th>
						<th scope="col"><?php echo e(__('Email')); ?></th>
						<th scope="col"><?php echo e(__('Roles')); ?></th>
						<th scope="col"><?php echo e(__('Status')); ?></th>
						<th></th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
		</div>
	</div>

		
	<!-- Modal -->
	<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-delete')): ?>
		<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="modal" id="delUserModal-<?php echo e($user->id); ?>" tabindex="-1" aria-labelledby="delUserModal" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content shadow-3">
					<div class="modal-header">
						<h5 class="modal-title"><?php echo e(__('Delete User')); ?></h5>
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
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('child-scripts'); ?>
	<script>
		$(document).ready( function () {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$('#users-datatable').DataTable({
				processing: true,
				serverSide: true,
				ajax: "<?php echo route('users.index'); ?>",
				columns: [
					{ data: 'DT_RowIndex', name: 'DT_RowIndex' },
					{ data: 'first_name', name: 'first_name'},
					{ data: 'last_name', name: 'last_name'},
					{ data: 'username', name: 'username'},
					{ data: 'email', name: 'email'},
					{
						data: 'roles', 
						name: 'roles'
					},
					{
						data: 'status', 
						name: 'status', 
						orderable: true, 
						searchable: true
					},
					{
						data: 'action', 
						name: 'action'
					},
				]
			});
		});
	</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.dashboard', ['page' => __('User Management')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/patientManager/resources/views/users/index.blade.php ENDPATH**/ ?>