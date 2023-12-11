<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-0 py-3">
	<div class="container-xl">
	  	<!-- Logo -->
		<a class="navbar-brand" href="#">
			<img src="https://preview.webpixels.io/web/img/logos/clever-light.svg" class="h-8" alt="...">
		</a>
		<!-- Navbar toggle -->
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<!-- Collapse -->
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<!-- Nav -->
			<div class="navbar-nav mx-lg-auto">
				<?php if (isset($component)) { $__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Navlink::class, []); ?>
<?php $component->withName('navlink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('dashboard')),'class' => ''.e(request()->routeIs('dashboard') ? 'active' : '').' ']); ?>
					<i class="bi bi-speedometer2 text-lg"></i>
					<?php echo e(__('Dashboard')); ?>

				 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee)): ?>
<?php $component = $__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee; ?>
<?php unset($__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee); ?>
<?php endif; ?>
				
				<a class="nav-item nav-link" href="#" aria-current="page">Home</a>
				<a class="nav-item nav-link" href="#">Product</a>
				<a class="nav-item nav-link" href="#">Features</a>
				<a class="nav-item nav-link" href="#">Pricing</a>

                <div class="dropdown">
                    <a class="nav-item nav-link dropdown-toggle" href="#" id="dropdownSettings" data-bs-toggle="dropdown" aria-expanded="false">  <?php echo e(__('Settings')); ?></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownSettings">
                        <?php if (isset($component)) { $__componentOriginal3d20c91b95f1130683b1d769ab999401b836a05e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\MenuDropdown::class, []); ?>
<?php $component->withName('menu-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('users.index')),'class' => ''.e(request()->routeIs('users.index') ? 'active' : '').' ']); ?>
                            <i class="bi bi-people"></i>
                            <?php echo e(__('Users')); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3d20c91b95f1130683b1d769ab999401b836a05e)): ?>
<?php $component = $__componentOriginal3d20c91b95f1130683b1d769ab999401b836a05e; ?>
<?php unset($__componentOriginal3d20c91b95f1130683b1d769ab999401b836a05e); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal3d20c91b95f1130683b1d769ab999401b836a05e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\MenuDropdown::class, []); ?>
<?php $component->withName('menu-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('roles.index')),'class' => ''.e(request()->routeIs('roles.index') ? 'active' : '').' ']); ?>
                            <i class="bi bi-gear"></i>
                            <?php echo e(__('Roles')); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3d20c91b95f1130683b1d769ab999401b836a05e)): ?>
<?php $component = $__componentOriginal3d20c91b95f1130683b1d769ab999401b836a05e; ?>
<?php unset($__componentOriginal3d20c91b95f1130683b1d769ab999401b836a05e); ?>
<?php endif; ?>
                    
                        <?php if (isset($component)) { $__componentOriginal3d20c91b95f1130683b1d769ab999401b836a05e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\MenuDropdown::class, []); ?>
<?php $component->withName('menu-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('departments.index')),'class' => ''.e(request()->routeIs('roles.index') ? 'active' : '').' ']); ?>
                            <i class="bi bi-gear"></i>
                            <?php echo e(__('Departments')); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3d20c91b95f1130683b1d769ab999401b836a05e)): ?>
<?php $component = $__componentOriginal3d20c91b95f1130683b1d769ab999401b836a05e; ?>
<?php unset($__componentOriginal3d20c91b95f1130683b1d769ab999401b836a05e); ?>
<?php endif; ?>
                    



                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                  </div>

			</div>
			<!-- Right navigation -->
			<div class="navbar-nav ms-lg-4">
				<a class="nav-item nav-link" href="#">Sign in</a>
			</div>
				<!-- Action -->
			<div class="d-flex align-items-lg-center mt-3 mt-lg-0">
				<a class="btn btn-sm btn-primary w-full w-lg-auto" href="<?php echo e(route('logout')); ?>"
					onclick="event.preventDefault();
					document.getElementById('logout-form').submit();">
					<i class="bi bi-box-arrow-left"></i>  <?php echo e(__('Logout')); ?>

				</a>

				<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
					<?php echo csrf_field(); ?>
				</form>
			</div>
		</div>
	</div>
</nav>




<?php /**PATH /Applications/MAMP/htdocs/patientManager/resources/views/partials/navbar.blade.php ENDPATH**/ ?>