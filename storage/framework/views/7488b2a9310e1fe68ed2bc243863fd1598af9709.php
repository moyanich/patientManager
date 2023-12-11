<!-- Vertical Navbar -->
<nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 py-lg-0 navbar-dark bg-dark border-end-lg scrollbar" id="navbarVertical" data-bs-theme="dark">
    <div class="container-fluid">
		<!-- Toggler -->
		<button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<!-- Brand -->
		<a class="navbar-brand py-lg-5 mb-lg-5 px-lg-6 me-0" href="#">
			<img src="https://preview.webpixels.io/web/img/logos/clever-primary.svg" alt="...">
		</a>
		<!-- User menu (mobile) -->
		<div class="navbar-user d-lg-none">
			<!-- Dropdown -->
			<div class="dropdown">
				<!-- Toggle -->
				<a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<div class="avatar bg-warning rounded-circle text-white">
					<img alt="..." src="https://images.unsplash.com/photo-1579463148228-138296ac3b98?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80">
					</div>
				</a>
				<!-- Menu -->
				<div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
					<div class="dropdown-item">
						<span class="d-block text-sm text-muted mb-1">Signed in as <?php echo e(Auth::user()->name); ?></span>
						<span class="d-block text-heading font-semibold"><?php echo e(Auth::user()->name); ?></span>
					</div>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<a class="dropdown-item" href="#">Something else here</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Separated link</a>
				</div>
			</div>
		</div>
		<!-- Collapse -->
		<div class="collapse navbar-collapse" id="sidebarCollapse">
			<!-- Navigation -->
			<ul class="navbar-nav">
				<li class="nav-item">
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
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">
					<i class="bi bi-bookmarks"></i> Collections
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">
					<i class="bi bi-people"></i> Users
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link collapsed" href="#sidebar-patients" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebar-patients">
						<i class="bi bi-person-rolodex"></i> <?php echo e(__('Patients')); ?>

					</a>
					<div class="collapse" id="sidebar-patients" style="">
						<ul class="nav nav-sm flex-column">
							<li class="nav-item">
								<?php if (isset($component)) { $__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Navlink::class, []); ?>
<?php $component->withName('navlink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('patients.create')),'class' => ''.e(request()->routeIs('patients.create') ? 'active' : '').' ']); ?>
									<i class="bi bi-plus-circle-fill"></i>
									<?php echo e(__('Create Patient')); ?>

								 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee)): ?>
<?php $component = $__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee; ?>
<?php unset($__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee); ?>
<?php endif; ?>
							</li>
							<li class="nav-item">
								<?php if (isset($component)) { $__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Navlink::class, []); ?>
<?php $component->withName('navlink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('patients.index')),'class' => ''.e(request()->routeIs('patients.index') ? 'active' : '').' ']); ?>
									<i class="bi bi-card-list"></i>
									<?php echo e(__('All Patients')); ?>

								 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee)): ?>
<?php $component = $__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee; ?>
<?php unset($__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee); ?>
<?php endif; ?>
							</li>
						</ul>
					</div>
				</li>

				<!-- Doctors -->
				<li class="nav-item">
					<a class="nav-link collapsed <?php echo e(request()->routeIs('doctors.create') ? 'active' : ''); ?>" href="#sidebar-doctors" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebar-doctors">
						<i class="bi bi-person-video2"></i> <?php echo e(__('Doctors')); ?>

					</a>
					<div class="collapse" id="sidebar-doctors" style="">
						<ul class="nav nav-sm flex-column">
							<li class="nav-item">
								<?php if (isset($component)) { $__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Navlink::class, []); ?>
<?php $component->withName('navlink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('doctors.index')),'class' => ''.e(request()->routeIs('doctors.index') ? 'active' : '').' ']); ?>
									<i class="bi bi-card-list"></i>
									<?php echo e(__('List Doctors')); ?>

								 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee)): ?>
<?php $component = $__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee; ?>
<?php unset($__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee); ?>
<?php endif; ?>
							</li>
							<li class="nav-item">
								<?php if (isset($component)) { $__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Navlink::class, []); ?>
<?php $component->withName('navlink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('doctors.create')),'class' => ''.e(request()->routeIs('doctors.create') ? 'active' : '').' ']); ?>
									<i class="bi bi-plus-circle-fill"></i>
									<?php echo e(__('Add Doctor')); ?>

								 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee)): ?>
<?php $component = $__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee; ?>
<?php unset($__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee); ?>
<?php endif; ?>
							</li>
							
						</ul>
					</div>
				</li>

				<!-- Departments -->
				<li class="nav-item">
					<a class="nav-link collapsed <?php echo e(request()->routeIs('departments.create') ? 'active' : ''); ?>" href="#sidebar-departments" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebar-departments">
						<i class="bi bi-building"></i> <?php echo e(__('Department')); ?>

					</a>
					<div class="collapse" id="sidebar-departments" style="">
						<ul class="nav nav-sm flex-column">
							<li class="nav-item">
								<?php if (isset($component)) { $__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Navlink::class, []); ?>
<?php $component->withName('navlink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('departments.index')),'class' => ''.e(request()->routeIs('departments.index') ? 'active' : '').' ']); ?>
									<i class="bi bi-card-list"></i>
									<?php echo e(__('List Departments')); ?>

								 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee)): ?>
<?php $component = $__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee; ?>
<?php unset($__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee); ?>
<?php endif; ?>
							</li>
							<li class="nav-item">
								<?php if (isset($component)) { $__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Navlink::class, []); ?>
<?php $component->withName('navlink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('departments.create')),'class' => ''.e(request()->routeIs('departments.create') ? 'active' : '').' ']); ?>
									<i class="bi bi-plus-circle-fill"></i>
									<?php echo e(__('Add Department')); ?>

								 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee)): ?>
<?php $component = $__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee; ?>
<?php unset($__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee); ?>
<?php endif; ?>
							</li>
							
						</ul>
					</div>
				</li>
			</ul>

			<!-- Divider -->
			<hr class="navbar-divider my-5 opacity-20">
			<!-- Navigation -->
			<ul class="navbar-nav mb-md-4">
				<li class="nav-item">
					<a class="nav-link active" href="#settings-collapse" data-bs-toggle="collapse" href="#settings-collapse" role="button" aria-expanded="false" aria-controls="settings-collapse">
						<i class="bi bi-sliders text-lg"></i> <?php echo e(__('Settings')); ?>

					</a>
					<li>
						<div class="collapse show" id="settings-collapse">
							<ul class="nav flex-column mb-2">
								<li class="nav-item">
									<?php if (isset($component)) { $__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Navlink::class, []); ?>
<?php $component->withName('navlink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('roles.index')),'class' => ''.e(request()->routeIs('roles.index') ? 'active' : '').' ']); ?>
										<i class="bi bi-gear"></i>
										<?php echo e(__('Roles')); ?>

									 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee)): ?>
<?php $component = $__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee; ?>
<?php unset($__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee); ?>
<?php endif; ?>
								</li>
							</ul>
						</div>
					</li>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">
						<i class="bi bi-bell"></i> Notifications
						<span class="badge bg-soft-danger text-danger rounded-pill d-inline-flex align-items-center ms-auto">23</span>
					</a>
				</li>


				<!-- Users -->
				<li class="nav-item">
					<a class="nav-link collapsed <?php echo e(request()->routeIs('users.create') ? 'active' : ''); ?>" href="#sidebar-users" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebar-users">
						<i class="bi bi-people"></i> <?php echo e(__('Users')); ?>

					</a>
					<div class="collapse" id="sidebar-users" style="">
						<ul class="nav nav-sm flex-column">
							<li class="nav-item">
								<?php if (isset($component)) { $__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Navlink::class, []); ?>
<?php $component->withName('navlink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('users.create')),'class' => ''.e(request()->routeIs('users.create') ? 'active' : '').' ']); ?>
									<i class="bi bi-plus-circle-fill"></i>
									<?php echo e(__('Create User')); ?>

								 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee)): ?>
<?php $component = $__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee; ?>
<?php unset($__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee); ?>
<?php endif; ?>
							</li>
							<li class="nav-item">
								<?php if (isset($component)) { $__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Navlink::class, []); ?>
<?php $component->withName('navlink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('users.index')),'class' => ''.e(request()->routeIs('users.index') ? 'active' : '').' ']); ?>
									<i class="bi bi-card-list"></i>
									<?php echo e(__('List Users')); ?>

								 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee)): ?>
<?php $component = $__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee; ?>
<?php unset($__componentOriginal7c1f351690b4e4304dbb05fd31d44aff77e172ee); ?>
<?php endif; ?>
							</li>
						</ul>
					</div>
				</li>

			</ul>
			
			<!-- Push content down -->
			<div class="mt-auto"></div>
			<!-- User (md) -->
			<ul class="navbar-nav mb-5">
				<li class="nav-item">
					<a class="nav-link" href="#">
					<i class="bi bi-person-square"></i> Account
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo e(route('logout')); ?>"
						onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
						<i class="bi bi-box-arrow-left"></i>  <?php echo e(__('Logout')); ?>

					</a>

					<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
						<?php echo csrf_field(); ?>
					</form>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">
						<i class="bi bi-bell"></i> Notifications
						<span class="badge bg-soft-danger text-danger rounded-pill d-inline-flex align-items-center ms-auto">23</span>
					</a>
				</li>
			</ul>

			
		</div>
    </div>
</nav>
  <?php /**PATH /Applications/MAMP/htdocs/patientManager/resources/views/partials/sidebar.blade.php ENDPATH**/ ?>