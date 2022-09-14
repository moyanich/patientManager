<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
	<div class="position-sticky pt-3">
		<ul class="nav flex-column">
			<li class="nav-item nav-profile">
				<div class="nav-link">
					<div class="user-wrapper d-flex">
						<div class="profile-image">
							<img src="https://www.bootstrapdash.com/demo/star-laravel-free/template/assets/images/faces/face8.jpg" alt="profile image">
						</div> 
						<div class="text-wrapper">
							<p class="profile-name">{{ Auth::user()->name }}</p> 
							<div data-display="static" class="dropdown">
								<a href="#" id="UsersettingsDropdown" data-toggle="dropdown" aria-expanded="false" class="nav-link d-flex user-switch-dropdown-toggler">
									<small class="designation text-muted">Manager</small> 
									<span class="status-indicator online"></span>
								</a> 
								<div aria-labelledby="UsersettingsDropdown" class="dropdown-menu">
									<a class="dropdown-item p-0">
										<div class="d-flex border-bottom">
											<div class="py-3 px-4 d-flex align-items-center justify-content-center">
												<i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
											</div> 
											<div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
												<i class="mdi mdi-account-outline mr-0 text-gray"></i>
											</div> <div class="py-3 px-4 d-flex align-items-center justify-content-center">
												<i class="mdi mdi-alarm-check mr-0 text-gray"></i>
											</div>
										</div>
									</a> 
									<a class="dropdown-item mt-2"> Manage Accounts </a> 
									<a class="dropdown-item"> Change Password </a>
									<a class="dropdown-item"> Check Inbox </a> 
									<a class="dropdown-item"> Sign Out </a>
								</div>
							</div>
						</div>
					</div> 
					<button class="btn btn-success btn-block">
						New Patient <i class="mdi mdi-plus"></i>
					</button>
				</div>
			</li>

			<li class="nav-item">
				<a class="nav-link" aria-current="page" href="#">
					<span data-feather="home"></span>
					Dashboard
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">
					<span data-feather="file"></span>
					Orders
				</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">
				<span data-feather="shopping-cart"></span>
				Products
			</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">
				<span data-feather="users"></span>
				Customers
			</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">
				<span data-feather="bar-chart-2"></span>
				Reports
			</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">
				<span data-feather="layers"></span>
				Integrations
			</a>
			</li>
		</ul>

		<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
			<span>Patient Records</span>
			<a class="link-secondary" href="#" aria-label="Add a new report">
			<span data-feather="plus-circle"></span>
			</a>
		</h6>
		<ul class="nav flex-column mb-2">
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
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">
					<span data-feather="file-text"></span>
					Social engagement
				</a>
			</li>
			<li class="nav-item">
			<a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false" href="#">
				<span data-feather="file-text"></span>
				Year-end sale
			</a>
			
			  <div class="collapse" id="dashboard-collapse">
				<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
					<li class="nav-item">
						<a href="#" class="link-dark rounded">Overview</a>
					</li>
					<li class="nav-item"><a href="#" class="link-dark rounded">Weekly</a></li>
					<li class="nav-item"><a href="#" class="link-dark rounded">Monthly</a></li>
					<li class="nav-item"><a href="#" class="link-dark rounded">Annually</a></li>
				</ul>
			  </div>
			</li>
		</ul>



		<a class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted" data-bs-toggle="collapse" href="#settings-collapse" role="button" aria-expanded="false" aria-controls="settings-collapse">
			<span>Settings</span>
			<span data-feather="plus-circle"></span>
		</a>
		<div class="collapse show" id="settings-collapse">
			<ul class="nav flex-column mb-2">
				<li class="nav-item">
					<x-navlink :href="route('users.index')" class="{{ request()->routeIs('users.index') ? 'active' : '' }} ">
						<span data-feather="file-text"></span>
						{{ __('Manage Users') }}
					</x-navlink>
				</li>
				<li class="nav-item">
					<x-navlink :href="route('roles.index')" class="{{ request()->routeIs('roles.index') ? 'active' : '' }} ">
						<span data-feather="file-text"></span>
						{{ __('Manage Roles') }}
					</x-navlink>
				</li>
			</ul>
		</div>

	
	</div>
</nav>