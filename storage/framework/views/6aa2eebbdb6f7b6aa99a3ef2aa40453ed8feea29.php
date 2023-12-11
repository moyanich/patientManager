<section class="patient-profile bg-white">

    <div class="row g-6 mb-6 p-4">

        <div class="col-xl-4 col-sm-4 col-12 border-end">
            <div class="d-flex align-items-center">
                <h4 class="d-block my-4"><?php echo e(__('General Information')); ?></h4>
                <div class="ms-auto">
                    <a href="<?php echo e(route('patients.edit', $patient->id)); ?>" class="btn d-inline-flex btn-sm btn-primary mx-2">
                        <span><?php echo e(__('Edit Profile')); ?></span>
                    </a>
                </div>
            </div>
        
            <div class="table-responsive">
                <table class="table table-hover table-nowrap table-no-padding">
                    <tbody>
                        <tr>
                            <td><div class="font-bold"><?php echo e(__('Patient No:')); ?></div></td>
                            <td><div class="font-bold"><?php echo e($patient->patient_no); ?></div></td>
                        </tr>
                        <tr>
                            <td><div class="font-bold"><?php echo e(__('Status:')); ?></div></td>
                            <td><div class="font-bold">--</div></td>
                        </tr>
                        <tr>
                            <td><div class="font-bold"><?php echo e(__('D.O.B.:')); ?></div></td>
                            <td><?php echo e(format_date_long($patient->dob)); ?></td>
                        </tr>
                        <?php if(@empty($patient->dob)): ?>
                            <tr>
                                <td><div class="font-bold"><?php echo e(__('Update DOB Field')); ?></div></td>
                            </tr>
                        <?php else: ?>
                            <tr>
                                <td><div class="font-bold"><?php echo e(__('Age:')); ?></div>
                                </td>
                                <td><?php echo e(calc_age($patient->dob)); ?></td>
                            </tr>
                        <?php endif; ?>
                        <tr>
                            <td><div class="font-bold"><?php echo e(__('Gender:')); ?></div></td>
                            <td><?php echo e($gender->name); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="d-flex align-items-center">
                <h4 class="d-block my-4"><?php echo e(__('Contact Information')); ?></h4>
                <div class="ms-auto">
                    <a href="<?php echo e(route('patients.edit', $patient->id)); ?>" class="btn d-inline-flex btn-sm btn-primary mx-2">
                        <span><?php echo e(__('Edit Profile')); ?></span>
                    </a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-hover table-nowrap table-no-padding">
                    <tbody>
                        <tr>
                            <td><div class="font-bold"><?php echo e(__('Address:')); ?></div></td>
                            <td><div class="font-bold">--</div></td>
                        </tr>
                        <tr>
                            <td><div class="font-bold"><?php echo e(__('Home Phone:')); ?></div></td>
                            <td><div class="font-bold"><?php echo e($patient->home_phone); ?></div></td>
                        </tr>
                        <tr>
                            <td><div class="font-bold"><?php echo e(__('Mobile Phone:')); ?></div></td>
                            <td><?php echo e($patient->cell_number); ?></td>
                        </tr>
                        <tr>
                            <td><div class="font-bold"><?php echo e(__('Email:')); ?></div></td>
                            <td><?php echo e($patient->email); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-xl-6 col-sm-6 col-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted font-weight-medium">Blood Type</p>
                                    <h4 class="mb-0"></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</section>
<?php /**PATH /Applications/MAMP/htdocs/patientManager/resources/views/components/summary.blade.php ENDPATH**/ ?>