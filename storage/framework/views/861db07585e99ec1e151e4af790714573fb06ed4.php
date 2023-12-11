<?php $attributes = $attributes->exceptProps(['active']); ?>
<?php foreach (array_filter((['active']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php

$classes = ($active ?? false)
    ? 'nav-link dropdown-toggle'
    : 'nav-link dropdown-toggle';

$roles = 'button'

?>

<a <?php echo e($attributes->merge(['class' => $classes, 'role' => 'button', 'data-bs-toggle' => 'dropdown', 'aria-haspopup' => 'true', 'aria-expanded' => 'false'])); ?>>
    <?php echo e($slot); ?>

</a>



<?php /**PATH /Applications/MAMP/htdocs/patientManager/resources/views/components/navlink-dropdown.blade.php ENDPATH**/ ?>