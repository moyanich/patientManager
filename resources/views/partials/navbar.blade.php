<nav class="navbar navbar-top navbar-expand-lg" id="navbarTop">
    <div class="navbar-logo">
        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
        <a class="navbar-brand me-1 me-sm-3" href="index.html">
            <div class="d-flex align-items-center">
            <div class="d-flex align-items-center">
                <p class="logo-text ms-2 d-none d-sm-block">Phoenix Medical</p>
            </div>
            </div>
        </a>
    </div>


    <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarTopCollapse">
		<ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
			<li class="nav-item">
				<x-navlink :href="route('dashboard')" class="{{ request()->routeIs('dashboard') ? 'active' : '' }} ">
					<i class="bi bi-speedometer2 text-lg"></i>
					{{ __('Dashboard') }}
				</x-navlink>
			</li>

    
			<li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="appss">Apps</a>
			<div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="appss">
				<div class="dropdown-menu-content navbar-top-card p-3">
				<div class="scrollbar max-h-dropdown">
					<div class="row gx-0">
					<div class="col-6">
						<div class="nav flex-column">
						<p class="nav-link mb-0 fw-bold">Admin</p><a class="nav-link fw-semi-bold" href="apps/e-commerce/admin/add-product.html">Add product</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/admin/products.html">Products</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/admin/customers.html">Customers</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/admin/customer-details.html">Customer details</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/admin/orders.html">Orders</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/admin/order-details.html">Order details</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/admin/refund.html">Refund</a>
						<p class="nav-link mb-0 fw-bold">Landing</p><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/homepage.html">Homepage</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/product-details.html">Product details</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/products-filter.html">Products filter</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/cart.html">Cart</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/checkout.html">Checkout</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/shipping-info.html">Shipping info</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/profile.html">Profile</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/favourite-stores.html">Favourite stores</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/wishlist.html">Wishlist</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/order-tracking.html">Order tracking</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/invoice.html">Invoice</a>
						</div>
					</div>
					<div class="col-6">
						<div class="nav flex-column">
						<p class="nav-link mb-0 fw-bold">Projects</p><a class="nav-link fw-semi-bold" href="apps/project-management/create-new.html">Create new</a><a class="nav-link fw-semi-bold" href="apps/project-management/project-list-view.html">Project list view</a><a class="nav-link fw-semi-bold" href="apps/project-management/project-card-view.html">Project card view</a><a class="nav-link fw-semi-bold" href="apps/project-management/project-board-view.html">Project board view</a><a class="nav-link fw-semi-bold" href="apps/project-management/todo-list.html">Todo list</a><a class="nav-link fw-semi-bold" href="apps/project-management/project-details.html">Project details</a>
						<p class="nav-link mb-0 fw-bold">Email</p><a class="nav-link fw-semi-bold" href="apps/chat.html">Chat</a><a class="nav-link fw-semi-bold" href="apps/email/inbox.html">Inbox</a><a class="nav-link fw-semi-bold" href="apps/email/email-detail.html">Email detail</a>
						<p class="nav-link mb-0 fw-bold">Events</p><a class="nav-link fw-semi-bold" href="apps/email/compose.html">Compose</a><a class="nav-link fw-semi-bold" href="apps/events/create-an-event.html">Create an event</a>
						<p class="nav-link mb-0 fw-bold">Social</p><a class="nav-link fw-semi-bold" href="apps/events/event-detail.html">Event detail</a><a class="nav-link fw-semi-bold" href="apps/social/profile.html">Profile</a>
						</div>
					</div>
					</div>
				</div>
				</div>
			</div>
			</li>
			<li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="pagess">Pages</a>
			<div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="pagess">
				<div class="dropdown-menu-content navbar-top-card p-3">
				<div class="scrollbar max-h-dropdown">
					<div class="row gx-0">
					<div class="col-6">
						<div class="nav flex-column"><a class="nav-link fw-semi-bold" href="pages/starter.html">Starter</a><a class="nav-link fw-semi-bold" href="pages/pages/faq.html">Faq</a>
						<p class="nav-link mb-0 fw-bold">Pricing</p><a class="nav-link fw-semi-bold" href="pages/pages/pricing/pricing-column.html">Pricing column</a><a class="nav-link fw-semi-bold" href="pages/pages/pricing/pricing-grid.html">Pricing grid</a><a class="nav-link fw-semi-bold" href="pages/pages/notifications.html">Notifications</a><a class="nav-link fw-semi-bold" href="pages/pages/members.html">Members</a>
						<p class="nav-link mb-0 fw-bold">Split</p><a class="nav-link fw-semi-bold" href="pages/authentication/simple/lock-screen.html">Lock screen</a><a class="nav-link fw-semi-bold" href="pages/authentication/split/sign-in.html">Sign in</a><a class="nav-link fw-semi-bold" href="pages/authentication/split/sign-up.html">Sign up</a><a class="nav-link fw-semi-bold" href="pages/authentication/split/sign-out.html">Sign out</a><a class="nav-link fw-semi-bold" href="pages/authentication/split/forgot-password.html">Forgot password</a>
						</div>
					</div>
					<div class="col-6">
						<div class="nav flex-column">
						<p class="nav-link mb-0 fw-bold">Errors</p><a class="nav-link fw-semi-bold" href="pages/pages/timeline.html">Timeline</a><a class="nav-link fw-semi-bold" href="pages/errors/404.html">404</a>
						<p class="nav-link mb-0 fw-bold">Simple</p><a class="nav-link fw-semi-bold" href="pages/errors/500.html">500</a><a class="nav-link fw-semi-bold" href="pages/authentication/simple/sign-in.html">Sign in</a><a class="nav-link fw-semi-bold" href="pages/authentication/simple/sign-up.html">Sign up</a><a class="nav-link fw-semi-bold" href="pages/authentication/simple/sign-out.html">Sign out</a><a class="nav-link fw-semi-bold" href="pages/authentication/simple/forgot-password.html">Forgot password</a><a class="nav-link fw-semi-bold" href="pages/authentication/simple/reset-password.html">Reset password</a>
						</div>
					</div>
					</div>
				</div>
				</div>
			</div>
			</li>
			<li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="moduless">Modules</a>
			<div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="moduless">
				<div class="dropdown-menu-content navbar-top-card p-3">
				<div class="scrollbar max-h-dropdown">
					<div class="row gx-0">
					<div class="col-6">
						<div class="nav flex-column"><a class="nav-link fw-semi-bold" href="modules/forms/basic/form-control.html">Form control</a><a class="nav-link fw-semi-bold" href="modules/forms/basic/input-group.html">Input group</a><a class="nav-link fw-semi-bold" href="modules/forms/basic/select.html">Select</a><a class="nav-link fw-semi-bold" href="modules/forms/basic/checks.html">Checks</a><a class="nav-link fw-semi-bold" href="modules/forms/basic/range.html">Range</a><a class="nav-link fw-semi-bold" href="modules/forms/basic/floating-labels.html">Floating labels</a><a class="nav-link fw-semi-bold" href="modules/forms/basic/layout.html">Layout</a><a class="nav-link fw-semi-bold" href="modules/forms/advance/advance-select.html">Advance select</a><a class="nav-link fw-semi-bold" href="modules/forms/advance/date-picker.html">Date picker</a><a class="nav-link fw-semi-bold" href="modules/forms/advance/editor.html">Editor</a></div>
					</div>
					<div class="col-6">
						<div class="nav flex-column"><a class="nav-link fw-semi-bold" href="modules/forms/advance/file-uploader.html">File uploader</a><a class="nav-link fw-semi-bold" href="modules/forms/advance/rating.html">Rating</a><a class="nav-link fw-semi-bold" href="modules/forms/validation.html">Validation</a><a class="nav-link fw-semi-bold" href="modules/forms/wizard.html">Wizard</a><a class="nav-link fw-semi-bold" href="modules/icons/feather.html">Feather</a><a class="nav-link fw-semi-bold" href="modules/icons/font-awesome.html">Font awesome</a><a class="nav-link fw-semi-bold" href="modules/icons/unicons.html">Unicons</a><a class="nav-link fw-semi-bold" href="modules/tables/basic-tables.html">Basic tables</a><a class="nav-link fw-semi-bold" href="modules/tables/advance-tables.html">Advance tables</a><a class="nav-link fw-semi-bold" href="modules/tables/bulk-select.html">Bulk Select</a></div>
					</div>
					</div>
				</div>
				</div>
			</div>
			</li>

			<li class="nav-item dropdown">
				<x-navlink-dropdown :href="route('dashboard')" class="{{ request()->routeIs('dashboard') ? 'active' : '' }} "  id="settings">
					<i class="bi bi-speedometer2 text-lg"></i>
					{{ __('Settings') }}
				</x-navlink-dropdown>

				<div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="settings">
					<div class="dropdown-menu-content py-2">

							<x-navlink :href="route('users.index')" class="{{ request()->routeIs('users.index') ? 'active' : '' }} ">
								<i class="bi bi-people"></i>
								{{ __('Users') }}
							</x-navlink>

							<x-navlink :href="route('roles.index')" class="{{ request()->routeIs('roles.index') ? 'active' : '' }} ">
								<i class="bi bi-gear"></i>
								{{ __('Roles') }}
							</x-navlink>
						
							<x-navlink :href="route('departments.index')" class="{{ request()->routeIs('roles.index') ? 'active' : '' }} ">
								<i class="bi bi-gear"></i>
								{{ __('Departments') }}
							</x-navlink>
						

						<a class="dropdown-item fw-semi-bold" href="documentation/customization/styling.html">Styling</a>

						<a class="dropdown-item fw-semi-bold" href="documentation/customization/plugin.html">Plugin</a>

						<a class="dropdown-item fw-semi-bold" href="documentation/layouts/vertical-navbar.html">Vertical navbar</a>
						
						<a class="dropdown-item fw-semi-bold" href="documentation/layouts/horizontal-navbar.html">Horizontal navbar</a>
						
						<a class="dropdown-item fw-semi-bold" href="documentation/layouts/combo-navbar.html">Combo navbar</a>
						
						<a class="dropdown-item fw-semi-bold" href="documentation/gulp.html">Gulp</a>
						
						<a class="dropdown-item fw-semi-bold" href="documentation/design-file.html">Design file</a>
						
						<a class="dropdown-item fw-semi-bold" href="changelog.html">Changelog</a>
						
						<a class="dropdown-item fw-semi-bold" href="showcase.html">Showcase</a>
					</div>
				</div>
			</li>



      	</ul>
    </div>

	{{-- 
    <ul class="navbar-nav navbar-nav-icons flex-row">
      <li class="nav-item">
        <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle"><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Switch theme" data-bs-original-title="Switch theme"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon icon"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Switch theme" data-bs-original-title="Switch theme"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun icon"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg></label></div>
      </li>
      <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search" style="height:19px;width:19px;margin-bottom: 2px;"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></a></li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell" style="height:20px;width:20px;"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg></a>
        <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
          <div class="card position-relative border-0">
            <div class="card-header p-2">
              <div class="d-flex justify-content-between">
                <h5 class="text-black mb-0">Notificatons</h5><button class="btn btn-link p-0 fs--1 fw-normal" type="button">Mark all as read</button>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="scrollbar-overlay" style="height: 27rem;" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
                <div class="border-300">
                  <div class="p-3 border-300 notification-card position-relative read border-bottom">
                    <div class="d-flex align-items-center justify-content-between position-relative">
                      <div class="d-flex">
                        <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="assets/img/team/30.png" alt=""></div>
                        <div class="me-3 flex-1">
                          <h4 class="fs--1 text-black">Jessie Samson</h4>
                          <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class="me-1 fs--2">💬</span>Mentioned you in a comment.<span class="ms-2 text-400 fw-bold fs--2">10m</span></p>
                          <p class="text-800 fs--1 mb-0"><svg class="svg-inline--fa fa-clock me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512zM232 256C232 264 236 271.5 242.7 275.1L338.7 339.1C349.7 347.3 364.6 344.3 371.1 333.3C379.3 322.3 376.3 307.4 365.3 300L280 243.2V120C280 106.7 269.3 96 255.1 96C242.7 96 231.1 106.7 231.1 120L232 256z"></path></svg><!-- <span class="me-1 fas fa-clock"></span> Font Awesome fontawesome.com --><span class="fw-bold">10:41 AM </span>August 7,2021</p>
                        </div>
                      </div>
                      <div class="font-sans-serif d-none d-sm-block"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs--2 text-900" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M120 256C120 286.9 94.93 312 64 312C33.07 312 8 286.9 8 256C8 225.1 33.07 200 64 200C94.93 200 120 225.1 120 256zM280 256C280 286.9 254.9 312 224 312C193.1 312 168 286.9 168 256C168 225.1 193.1 200 224 200C254.9 200 280 225.1 280 256zM328 256C328 225.1 353.1 200 384 200C414.9 200 440 225.1 440 256C440 286.9 414.9 312 384 312C353.1 312 328 286.9 328 256z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--2 text-900"></span> Font Awesome fontawesome.com --></button>
                        <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                    <div class="d-flex align-items-center justify-content-between position-relative">
                      <div class="d-flex">
                        <div class="avatar avatar-m status-online me-3">
                          <div class="avatar-name rounded-circle"><span>J</span></div>
                        </div>
                        <div class="me-3 flex-1">
                          <h4 class="fs--1 text-black">Jane Foster</h4>
                          <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class="me-1 fs--2">📅</span>Created an event.<span class="ms-2 text-400 fw-bold fs--2">20m</span></p>
                          <p class="text-800 fs--1 mb-0"><svg class="svg-inline--fa fa-clock me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512zM232 256C232 264 236 271.5 242.7 275.1L338.7 339.1C349.7 347.3 364.6 344.3 371.1 333.3C379.3 322.3 376.3 307.4 365.3 300L280 243.2V120C280 106.7 269.3 96 255.1 96C242.7 96 231.1 106.7 231.1 120L232 256z"></path></svg><!-- <span class="me-1 fas fa-clock"></span> Font Awesome fontawesome.com --><span class="fw-bold">10:20 AM </span>August 7,2021</p>
                        </div>
                      </div>
                      <div class="font-sans-serif d-none d-sm-block"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs--2 text-900" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M120 256C120 286.9 94.93 312 64 312C33.07 312 8 286.9 8 256C8 225.1 33.07 200 64 200C94.93 200 120 225.1 120 256zM280 256C280 286.9 254.9 312 224 312C193.1 312 168 286.9 168 256C168 225.1 193.1 200 224 200C254.9 200 280 225.1 280 256zM328 256C328 225.1 353.1 200 384 200C414.9 200 440 225.1 440 256C440 286.9 414.9 312 384 312C353.1 312 328 286.9 328 256z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--2 text-900"></span> Font Awesome fontawesome.com --></button>
                        <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                    <div class="d-flex align-items-center justify-content-between position-relative">
                      <div class="d-flex">
                        <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="assets/img/team/avatar.png" alt=""></div>
                        <div class="me-3 flex-1">
                          <h4 class="fs--1 text-black">Jessie Samson</h4>
                          <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class="me-1 fs--2">👍</span>Liked your comment.<span class="ms-2 text-400 fw-bold fs--2">1h</span></p>
                          <p class="text-800 fs--1 mb-0"><svg class="svg-inline--fa fa-clock me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512zM232 256C232 264 236 271.5 242.7 275.1L338.7 339.1C349.7 347.3 364.6 344.3 371.1 333.3C379.3 322.3 376.3 307.4 365.3 300L280 243.2V120C280 106.7 269.3 96 255.1 96C242.7 96 231.1 106.7 231.1 120L232 256z"></path></svg><!-- <span class="me-1 fas fa-clock"></span> Font Awesome fontawesome.com --><span class="fw-bold">9:30 AM </span>August 7,2021</p>
                        </div>
                      </div>
                      <div class="font-sans-serif d-none d-sm-block"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs--2 text-900" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M120 256C120 286.9 94.93 312 64 312C33.07 312 8 286.9 8 256C8 225.1 33.07 200 64 200C94.93 200 120 225.1 120 256zM280 256C280 286.9 254.9 312 224 312C193.1 312 168 286.9 168 256C168 225.1 193.1 200 224 200C254.9 200 280 225.1 280 256zM328 256C328 225.1 353.1 200 384 200C414.9 200 440 225.1 440 256C440 286.9 414.9 312 384 312C353.1 312 328 286.9 328 256z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--2 text-900"></span> Font Awesome fontawesome.com --></button>
                        <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="border-300">
                  <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                    <div class="d-flex align-items-center justify-content-between position-relative">
                      <div class="d-flex">
                        <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="assets/img/team/57.png" alt=""></div>
                        <div class="me-3 flex-1">
                          <h4 class="fs--1 text-black">Kiera Anderson</h4>
                          <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class="me-1 fs--2">💬</span>Mentioned you in a comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                          <p class="text-800 fs--1 mb-0"><svg class="svg-inline--fa fa-clock me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512zM232 256C232 264 236 271.5 242.7 275.1L338.7 339.1C349.7 347.3 364.6 344.3 371.1 333.3C379.3 322.3 376.3 307.4 365.3 300L280 243.2V120C280 106.7 269.3 96 255.1 96C242.7 96 231.1 106.7 231.1 120L232 256z"></path></svg><!-- <span class="me-1 fas fa-clock"></span> Font Awesome fontawesome.com --><span class="fw-bold">9:11 AM </span>August 7,2021</p>
                        </div>
                      </div>
                      <div class="font-sans-serif d-none d-sm-block"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs--2 text-900" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M120 256C120 286.9 94.93 312 64 312C33.07 312 8 286.9 8 256C8 225.1 33.07 200 64 200C94.93 200 120 225.1 120 256zM280 256C280 286.9 254.9 312 224 312C193.1 312 168 286.9 168 256C168 225.1 193.1 200 224 200C254.9 200 280 225.1 280 256zM328 256C328 225.1 353.1 200 384 200C414.9 200 440 225.1 440 256C440 286.9 414.9 312 384 312C353.1 312 328 286.9 328 256z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--2 text-900"></span> Font Awesome fontawesome.com --></button>
                        <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="p-3 border-300 notification-card position-relative unread border-bottom">
                    <div class="d-flex align-items-center justify-content-between position-relative">
                      <div class="d-flex">
                        <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="assets/img/team/59.png" alt=""></div>
                        <div class="me-3 flex-1">
                          <h4 class="fs--1 text-black">Herman Carter</h4>
                          <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class="me-1 fs--2">👤</span>Tagged you in a comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                          <p class="text-800 fs--1 mb-0"><svg class="svg-inline--fa fa-clock me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512zM232 256C232 264 236 271.5 242.7 275.1L338.7 339.1C349.7 347.3 364.6 344.3 371.1 333.3C379.3 322.3 376.3 307.4 365.3 300L280 243.2V120C280 106.7 269.3 96 255.1 96C242.7 96 231.1 106.7 231.1 120L232 256z"></path></svg><!-- <span class="me-1 fas fa-clock"></span> Font Awesome fontawesome.com --><span class="fw-bold">10:58 PM </span>August 7,2021</p>
                        </div>
                      </div>
                      <div class="font-sans-serif d-none d-sm-block"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs--2 text-900" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M120 256C120 286.9 94.93 312 64 312C33.07 312 8 286.9 8 256C8 225.1 33.07 200 64 200C94.93 200 120 225.1 120 256zM280 256C280 286.9 254.9 312 224 312C193.1 312 168 286.9 168 256C168 225.1 193.1 200 224 200C254.9 200 280 225.1 280 256zM328 256C328 225.1 353.1 200 384 200C414.9 200 440 225.1 440 256C440 286.9 414.9 312 384 312C353.1 312 328 286.9 328 256z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--2 text-900"></span> Font Awesome fontawesome.com --></button>
                        <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="p-3 border-300 notification-card position-relative read ">
                    <div class="d-flex align-items-center justify-content-between position-relative">
                      <div class="d-flex">
                        <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="assets/img/team/58.png" alt=""></div>
                        <div class="me-3 flex-1">
                          <h4 class="fs--1 text-black">Benjamin Button</h4>
                          <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class="me-1 fs--2">👍</span>Liked your comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                          <p class="text-800 fs--1 mb-0"><svg class="svg-inline--fa fa-clock me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512zM232 256C232 264 236 271.5 242.7 275.1L338.7 339.1C349.7 347.3 364.6 344.3 371.1 333.3C379.3 322.3 376.3 307.4 365.3 300L280 243.2V120C280 106.7 269.3 96 255.1 96C242.7 96 231.1 106.7 231.1 120L232 256z"></path></svg><!-- <span class="me-1 fas fa-clock"></span> Font Awesome fontawesome.com --><span class="fw-bold">10:18 AM </span>August 7,2021</p>
                        </div>
                      </div>
                      <div class="font-sans-serif d-none d-sm-block"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-stop-propagation="data-stop-propagation" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs--2 text-900" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M120 256C120 286.9 94.93 312 64 312C33.07 312 8 286.9 8 256C8 225.1 33.07 200 64 200C94.93 200 120 225.1 120 256zM280 256C280 286.9 254.9 312 224 312C193.1 312 168 286.9 168 256C168 225.1 193.1 200 224 200C254.9 200 280 225.1 280 256zM328 256C328 225.1 353.1 200 384 200C414.9 200 440 225.1 440 256C440 286.9 414.9 312 384 312C353.1 312 328 286.9 328 256z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--2 text-900"></span> Font Awesome fontawesome.com --></button>
                        <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div>
            </div>
            <div class="card-footer p-0 border-top border-0">
              <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder" href="pages/pages/notifications.html">Notification history</a></div>
            </div>
          </div>
        </div>
      </li>
      


      <li class="nav-item dropdown">
        
        <a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
          <div class="avatar avatar-l ">
            <img class="rounded-circle " src="assets/img/team/57.png" alt="">
          </div>
        </a>
        <div class="dropdown-menu navbar-dropdown-caret py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
          <div class="card position-relative border-0">
            <div class="card-body p-0">
              <div class="text-center pt-4 pb-3">
                <div class="avatar avatar-xl ">
                  <img class="rounded-circle " src="assets/img/team/57.png" alt="">
                </div>
                <h6 class="mt-2 text-black">Jerry Seinfield</h6>
              </div>
              <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status"></div>
            </div>
            <div class="overflow-auto scrollbar" style="height: 10rem;">
              <ul class="nav d-flex flex-column mb-2 pb-1">
                <li class="nav-item"><a class="nav-link px-3" href="#!"> <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user me-2 text-900"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg><span>Profile</span></a></li>
                <li class="nav-item"><a class="nav-link px-3" href="#!"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart me-2 text-900"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>Dashboard</a></li>
                <li class="nav-item"><a class="nav-link px-3" href="#!"> <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock me-2 text-900"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>Posts &amp; Activity</a></li>
                <li class="nav-item"><a class="nav-link px-3" href="#!"> <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings me-2 text-900"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>Settings &amp; Privacy </a></li>
                <li class="nav-item"><a class="nav-link px-3" href="#!"> <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle me-2 text-900"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>Help Center</a></li>
                <li class="nav-item"><a class="nav-link px-3" href="#!"> <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 text-900"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Language</a></li>
              </ul>
            </div>
            <div class="card-footer p-0 border-top">
              <ul class="nav d-flex flex-column my-3">
                <li class="nav-item"><a class="nav-link px-3" href="#!"> <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus me-2 text-900"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>Add another account</a></li>
              </ul>
              <hr>
              <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out me-2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>Sign out</a></div>
              <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy policy</a>•<a class="text-600 mx-1" href="#!">Terms</a>•<a class="text-600 ms-1" href="#!">Cookies</a></div>
            </div>
          </div>
        </div>
      </li>
    </ul>

	 --}}
</nav>