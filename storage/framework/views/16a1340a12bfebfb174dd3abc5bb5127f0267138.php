<?php switch($status):

    case ('1'): ?> 
        <span class="badge rounded-pill bg-success">
            <i class="bg-success"></i> 
            <?php echo e($slot); ?>

        </span>
    <?php break; ?>

    <?php case ('2'): ?> 
        <span class="badge rounded-pill bg-danger">
            <i class="bg-danger"></i>  
            <?php echo e($slot); ?>

        </span>
    <?php break; ?>

    <?php case ('3'): ?> 
        <span class="badge badge-lg badge-dot text-black <?php echo e($status); ?>">
            <i class="bg-tertiary"></i>  
            <?php echo e($slot); ?>

        </span>
    <?php break; ?>

    <?php case ('4'): ?> 
    <span class="badge badge-lg badge-dot text-black <?php echo e($status); ?>">
        <i class="bg-secondary"></i>  
        <?php echo e($slot); ?>

    </span>
    <?php break; ?>
   
    <?php case ('5'): ?> 
    <span class="badge badge-lg badge-dot text-black <?php echo e($status); ?>">
        <i class="bg-secondary"></i>  
        <?php echo e($slot); ?>

    </span>
    <?php break; ?>

    <?php case ('6'): ?> 
        <span class="badge badge-lg badge-dot text-black">
            <i class="bg-warning"></i>  
            <?php echo e($slot); ?>

        </span>
    <?php break; ?>

    <?php case ('7'): ?> 
        <span class="badge badge-lg badge-dot text-black">
            <i class="bg-opacity-30 bg-danger text-danger"></i>  
            <?php echo e($slot); ?>

        </span>
    <?php break; ?>

    <?php case ('8'): ?> 
        <span class="badge badge-lg badge-dot text-black <?php echo e($status); ?>">
            <i class="bg-opacity-30 bg-secondary"></i>  
            <?php echo e($slot); ?>

        </span>
    <?php break; ?>

    <?php default: ?>
        <span class="badge rounded-pill bg-opacity-30 bg-primary text-primary">
            <i class="bg-opacity-30 bg-secondary text-dark"></i>  
            <?php echo e($slot); ?>

        </span>
    <?php break; ?>

<?php endswitch; ?>

<?php /**PATH /Applications/MAMP/htdocs/patientManager/resources/views/components/badges-inner.blade.php ENDPATH**/ ?>