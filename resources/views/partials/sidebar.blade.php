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
					<x-navlink :href="route('dashboard')" class="{{ request()->routeIs('dashboard') ? 'active' : '' }} ">
						<i class="bi bi-speedometer2 text-lg"></i>
						{{ __('Dashboard') }}
					</x-navlink>
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
					<a class="nav-link" href="#patients-collapse" data-bs-toggle="collapse" href="#patients-collapse" role="button" aria-expanded="false" aria-controls="settings-collapse">
						<i class="bi bi-person-video2 text-lg"></i> {{ __('Patients') }}
					</a>
					<li>
						<div class="collapse show" id="patients-collapse">
							<ul class="nav flex-column mb-2">
								<li class="nav-item">
									<x-navlink :href="route('patients.index')" class="{{ request()->routeIs('patients.index') ? 'active' : '' }} ">
										<i class="bi bi-person-rolodex"></i>
										{{ __('All Patients') }}
									</x-navlink>
								</li>
								<li class="nav-item">
									<x-navlink :href="route('patients.create')" class="{{ request()->routeIs('patients.create') ? 'active' : '' }} ">
										<i class="bi bi-person-plus"></i>
										{{ __('New Patient') }}
									</x-navlink>
								</li>
							</ul>
						</div>
					</li>
				</li>
			</ul>
			<!-- Push content down -->


			<!-- Divider -->
			<hr class="navbar-divider my-5 opacity-20">
			<!-- Navigation -->
			<ul class="navbar-nav mb-md-4">
				<li class="nav-item">
					<a class="nav-link" href="#doctor-collapse" data-bs-toggle="collapse" href="#doctor-collapse" role="button" aria-expanded="false" aria-controls="settings-collapse">
						<i class="bi bi-person-video2 text-lg"></i> {{ __('Doctors') }}
					</a>
					<li>
						<div class="collapse show" id="doctor-collapse">
							<ul class="nav flex-column mb-2">
								<li class="nav-item">
									<x-navlink :href="route('doctors.index')" class="{{ request()->routeIs('doctors.index') ? 'active' : '' }} ">
										<i class="bi bi-person-rolodex"></i>
										{{ __('All Doctors') }}
									</x-navlink>
								</li>
								<li class="nav-item">
									<x-navlink :href="route('doctors.create')" class="{{ request()->routeIs('doctors.create') ? 'active' : '' }} ">
										<i class="bi bi-person-plus"></i>
										{{ __('New Doctor') }}
									</x-navlink>
								</li>
							</ul>
						</div>
					</li>
				</li>
			</ul>
			<!-- Push content down -->


			<!-- Divider -->
			<hr class="navbar-divider my-5 opacity-20">
			<!-- Navigation -->
			<ul class="navbar-nav mb-md-4">
				<li class="nav-item">
					<a class="nav-link" href="#settings-collapse" data-bs-toggle="collapse" href="#settings-collapse" role="button" aria-expanded="false" aria-controls="settings-collapse">
						<i class="bi bi-sliders text-lg"></i> {{ __('Settings') }}
					</a>
					<li>
						<div class="collapse show" id="settings-collapse">
							<ul class="nav flex-column mb-2">
								<li class="nav-item">
									<x-navlink :href="route('users.index')" class="{{ request()->routeIs('users.index') ? 'active' : '' }} ">
										<i class="bi bi-people"></i>
										{{ __('Users') }}
									</x-navlink>
								</li>
								<li class="nav-item">
									<x-navlink :href="route('roles.index')" class="{{ request()->routeIs('roles.index') ? 'active' : '' }} ">
										<i class="bi bi-gear"></i>
										{{ __('Roles') }}
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
					<a class="nav-link" href="{{ route('logout') }}"
						onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
						<i class="bi bi-box-arrow-left"></i>  {{ __('Logout') }}
					</a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
						@csrf
					</form>
				</li>
			</ul>
		</div>
    </div>
</nav>
  