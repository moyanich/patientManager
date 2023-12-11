<?php $__env->startSection('header'); ?>
    <div class="row align-items-center">
        <div class="col-md-6 col-12 mb-3 mb-md-0">
            <!-- Title -->
            <h1 class="h2 mb-0 ls-tight"><?php echo e(__('Doctors')); ?></h1>
        </div>
        <!-- Actions -->
        <div class="col-md-6 col-12 text-md-end">
            <div class="mx-n1">
                <a href="<?php echo e(route('doctors.create')); ?>" class="btn d-inline-flex btn-sm btn-primary mx-1">
					<span class=" pe-2">
						<i class="bi bi-plus"></i>
					</span>
                	<span><?php echo e(__('New Doctor')); ?></span>
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
            <table id="doctors-datatable" class="table table-hover table-nowrap compact doctors-datatable">
                <thead>
                    <tr>
                        <th scope="col"><?php echo e(__('id')); ?></th>
                        <th scope="col"><?php echo e(__('First Name')); ?></th>
                        <th scope="col"><?php echo e(__('Last Name')); ?></th>
                        <th scope="col"><?php echo e(__('Email Address')); ?></th>
                        <th scope="col"><?php echo e(__('Phone Numbers')); ?></th>
                        <th scope="col"><?php echo e(__('Specialist Area')); ?></th>

                        

                        <th scope="col"><?php echo e(__('Status')); ?></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>


    
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('doctor-delete')): ?>
        <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- Modal -->
            <div class="modal" id="delDepModal-<?php echo e($doctor->id); ?>" tabindex="-1" aria-labelledby="delDepModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content shadow-3">
                        <div class="modal-header">
                            <h5 class="modal-title"><span class="text-danger text-md"><i class="bi bi-exclamation-diamond-fill"></i></span> <?php echo e(__('Delete doctor')); ?></h5>
                            <div class="text-xs ms-auto">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        </div>
                        <div class="modal-body">
                            <p class="text-sm text-gray-500">
                                <?php echo e(__('Are you sure you want to delete the doctor record for ')); ?><strong><?php echo e($doctor->name); ?></strong><?php echo e(__('? All of your data will be permanently removed. This action cannot be undone.')); ?>

                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>

                            <form action="<?php echo e(route('doctors.destroy', $doctor->id)); ?>" method="POST" style="display: inline">
                                <?php echo method_field('DELETE'); ?>
                                <?php echo csrf_field(); ?>
                                <button href="" class="btn btn-sm btn-danger text-danger-hover cursor-pointer">Delete</button>
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
        $('#doctors-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "<?php echo route('doctors.index'); ?>",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'first_name', name: 'first_name'},
                { data: 'last_name', name: 'last_name'},
                { data: 'email', name: 'email'},
                { data: 'contact_1', name: 'contact_1'},
                { data: 'specialist_area', name: 'specialist_area'},
                //{ data: 'departments', name: 'departments', className: 'dept_name'},

               // { data: 'specialist_area', name: 'specialist_area'},




               /* {
                    data: 'status',
                    name: 'status',
                    orderable: true,
                    searchable: true
                }, */
                {
                    data: 'action',
                    name: 'action'
                },
            ]
        });


    });
</script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard', ['page' => __('Patient Management')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/patientManager/resources/views/doctors/index.blade.php ENDPATH**/ ?>