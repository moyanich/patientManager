<!-- Vertical Navbar -->
<nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 py-lg-0 navbar-light bg-light border-end-lg" id="navbarVertical">
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
						<span class="d-block text-sm text-muted mb-1">Signed in as {{ Auth::user()->name }}</span>
						<span class="d-block text-heading font-semibold">{{ Auth::user()->name }}</span>
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
					<x-navlink :href="route('admin.dashboard')" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }} ">
						<span data-feather="file-text"></span>
						{{ __('Dashboard') }}
					</x-navlink>
				</li>
				<li class="nav-item">
					<x-navlink :href="route('admin.patients.index')" class="{{ request()->routeIs('admin.patients.index') ? 'active' : '' }} ">
						<span data-feather="file-text"></span>
						{{ __('Patients') }}
					</x-navlink>
				</li>
				<li class="nav-item">
					<x-navlink :href="route('admin.patients.create')" class="{{ request()->routeIs('admin.patients.create') ? 'active' : '' }}">
						<span data-feather="file-plus"></span>
						{{ __('New Patient') }}
					</x-navlink>
					<span class="badge bg-soft-primary text-primary rounded-pill d-inline-flex align-items-center ms-auto">6</span>
					</a>
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
			</ul>
			<!-- Divider -->
			<hr class="navbar-divider my-5 opacity-20">
			<!-- Navigation -->
			<ul class="navbar-nav mb-md-4">
			<li class="nav-item">
				<a class="nav-link" href="#settings-collapse" data-bs-toggle="collapse" href="#settings-collapse" role="button" aria-expanded="false" aria-controls="settings-collapse">
					<i data-feather="gear"></i> Settings
				</a>
				<li>
					<div class="collapse show" id="settings-collapse">
						<ul class="nav flex-column mb-2">
							<li class="nav-item">
								<x-navlink :href="route('users.index')" class="{{ request()->routeIs('users.index') ? 'active' : '' }} ">
									<i data-feather="circle"></i>
									{{ __('Manage Users') }}
								</x-navlink>
							</li>
							<li class="nav-item">
								<x-navlink :href="route('roles.index')" class="{{ request()->routeIs('roles.index') ? 'active' : '' }} ">
									<i data-feather="circle"></i>
									{{ __('Manage Roles') }}
								</x-navlink>
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
				<a class="nav-link" href="#">
				<i class="bi bi-box-arrow-left"></i> Logout
				</a>
			</li>
			</ul>
		</div>
    </div>
</nav>
  