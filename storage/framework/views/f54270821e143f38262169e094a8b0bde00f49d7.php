<div class="row align-items-start">
    <div class="col p-0">
        <ul class="nav nav-pills mb-3" id="pills-tab">
            <li class="nav-item">
                <?php if (isset($component)) { $__componentOriginaldabc365176488a847a98b6003d304ad8864f8183 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\PatientNavLink::class, []); ?>
<?php $component->withName('patient-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('patients.summary', $patient->id)),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('patients.summary', $patient->id))]); ?>
                    <?php echo e(__('Summary')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldabc365176488a847a98b6003d304ad8864f8183)): ?>
<?php $component = $__componentOriginaldabc365176488a847a98b6003d304ad8864f8183; ?>
<?php unset($__componentOriginaldabc365176488a847a98b6003d304ad8864f8183); ?>
<?php endif; ?>
            </li>
            <li class="nav-item">
                <?php if (isset($component)) { $__componentOriginaldabc365176488a847a98b6003d304ad8864f8183 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\PatientNavLink::class, []); ?>
<?php $component->withName('patient-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('patients.show', $patient->id)),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('patients.show', $patient->id))]); ?>
                    <?php echo e(__('Patient Profile')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldabc365176488a847a98b6003d304ad8864f8183)): ?>
<?php $component = $__componentOriginaldabc365176488a847a98b6003d304ad8864f8183; ?>
<?php unset($__componentOriginaldabc365176488a847a98b6003d304ad8864f8183); ?>
<?php endif; ?>
            </li>

        </ul>
    </div>
</div>

<?php /**PATH /Applications/MAMP/htdocs/patientManager/resources/views/partials/nav.blade.php ENDPATH**/ ?>