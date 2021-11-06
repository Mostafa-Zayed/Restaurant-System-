<div id="app-sidepanel" class="app-sidepanel">
	<div id="sidepanel-drop" class="sidepanel-drop"></div>
	<div class="sidepanel-inner d-flex flex-column">
		<a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
		<div class="app-branding">
			<a class="app-logo" href="index.html"><img class="logo-icon me-2" src="assets/images/app-logo.svg" alt="logo"><span class="logo-text">PORTAL</span></a>
		</div>
		<nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
			<ul class="app-menu list-unstyled accordion" id="menu-accordion">
				<li class="nav-item">
					<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					<a class="nav-link active" href="index.html">
						<span class="nav-icon">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z" />
								<path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
							</svg>
						</span>
						<span class="nav-link-text">Dashboard</span>
					</a>
				</li>
				<!-- pages -->
				<li class="nav-item has-submenu">
					<a class="nav-link submenu-toggle" href="" data-bs-toggle="collapse" data-bs-target="#submenu-1" aria-expanded="false" aria-controls="submenu-1">
						<span class="nav-icon">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z" />
								<path d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z" />
							</svg>
						</span>
						<span class="nav-link-text">Pages</span>
						<span class="submenu-arrow">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
							</svg>
						</span>
					</a>
					<div id="submenu-1" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
						<ul class="submenu-list list-unstyled">
							<li class="submenu-item"><a class="submenu-link" href="{{route('managment.pages.index')}}">all</a></li>
							<li class="submenu-item"><a class="submenu-link" href="{{route('managment.pages.create')}}">Create</a></li>
							<li class="submenu-item"><a class="submenu-link" href="#">Trashed</a></li>
						</ul>
					</div>
				</li>
				<!-- categories -->
				<li class="nav-item has-submenu">
					<a class="nav-link submenu-toggle" href="" data-bs-toggle="collapse" data-bs-target="#submenu-2" aria-expanded="false" aria-controls="submenu-2">
						<span class="nav-icon">
							<i class="fas fa-bars"></i>
						</span>
						<span class="nav-link-text">Categories</span>
						<span class="submenu-arrow">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
							</svg>
						</span>
					</a>
					<div id="submenu-2" class="collapse submenu submenu-2" data-bs-parent="#menu-accordion">
						<ul class="submenu-list list-unstyled">
							<li class="submenu-item"><a class="submenu-link" href="{{route('managment.categories.index')}}">all</a></li>
							<li class="submenu-item"><a class="submenu-link" href="{{route('managment.categories.create')}}">Create</a></li>
							<li class="submenu-item"><a class="submenu-link" href="#">Trashed</a></li>
						</ul>
					</div>
				</li>
				<!-- slider -->
				<li class="nav-item has-submenu">
					<a class="nav-link submenu-toggle" href="" data-bs-toggle="collapse" data-bs-target="#submenu-3" aria-expanded="false" aria-controls="submenu-3">
						<span class="nav-icon">
							<i class="fas fa-sliders-h"></i>
						</span>
						<span class="nav-link-text">Sliders</span>
						<span class="submenu-arrow">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
							</svg>
						</span>
					</a>
					<div id="submenu-3" class="collapse submenu submenu-2" data-bs-parent="#menu-accordion">
						<ul class="submenu-list list-unstyled">
							<li class="submenu-item"><a class="submenu-link" href="{{route('managment.sliders.index')}}">all</a></li>
							<li class="submenu-item"><a class="submenu-link" href="{{route('managment.sliders.create')}}">Create</a></li>
							<li class="submenu-item"><a class="submenu-link" href="#">Trashed</a></li>
						</ul>
					</div>
				</li>
				<!-- menus -->
				<li class="nav-item has-submenu">
					<a class="nav-link submenu-toggle" href="" data-bs-toggle="collapse" data-bs-target="#submenu-4" aria-expanded="false" aria-controls="submenu-4">
						<span class="nav-icon">
							<i class="fas fa-hamburger"></i>
						</span>
						<span class="nav-link-text">Menus</span>
						<span class="submenu-arrow">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
							</svg>
						</span>
					</a>
					<div id="submenu-4" class="collapse submenu submenu-4" data-bs-parent="#menu-accordion">
						<ul class="submenu-list list-unstyled">
							<li class="submenu-item"><a class="submenu-link" href="{{route('managment.menus.index')}}">all</a></li>
							<li class="submenu-item"><a class="submenu-link" href="{{route('managment.menus.create')}}">Create</a></li>
							<li class="submenu-item"><a class="submenu-link" href="#">Trashed</a></li>
						</ul>
					</div>
				</li>
				<!-- Chefs -->
				<li class="nav-item">
					<a class="nav-link" href="{{route('managment.chefs.index')}}">
						<span class="nav-icon">
							<i class="fas fa-bread-slice"></i>
						</span>
						<span class="nav-link-text">Chefs</span>
					</a>
				</li>
				<!-- galleries -->
				<li class="nav-item has-submenu">
					<a class="nav-link submenu-toggle" href="" data-bs-toggle="collapse" data-bs-target="#submenu-6" aria-expanded="false" aria-controls="submenu-6">
						<span class="nav-icon">
							<i class="fas fa-bars"></i>
						</span>
						<span class="nav-link-text">Galleries</span>
						<span class="submenu-arrow">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
							</svg>
						</span>
					</a>
					<div id="submenu-6" class="collapse submenu submenu-6" data-bs-parent="#menu-accordion">
						<ul class="submenu-list list-unstyled">
							<li class="submenu-item"><a class="submenu-link" href="{{route('managment.galleries.index')}}">all</a></li>
							<li class="submenu-item"><a class="submenu-link" href="{{route('managment.galleries.create')}}">Create</a></li>
							<li class="submenu-item"><a class="submenu-link" href="#">Trashed</a></li>
						</ul>
					</div>
				</li>
				<!-- profiles -->
				<li class="nav-item">
					<a class="nav-link" href="{{route('managment.profiles.index')}}">
						<span class="nav-icon">
							<i class="far fa-id-badge"></i>
						</span>
						<span class="nav-link-text">Profiles</span>
					</a>
				</li>
				<!-- images -->
				<li class="nav-item has-submenu">
					<a class="nav-link submenu-toggle" href="" data-bs-toggle="collapse" data-bs-target="#submenu-9" aria-expanded="false" aria-controls="submenu-9">
						<span class="nav-icon">
							<i class="fas fa-images"></i>
						</span>
						<span class="nav-link-text">Images</span>
						<span class="submenu-arrow">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
							</svg>
						</span>
					</a>
					<div id="submenu-9" class="collapse submenu submenu-9" data-bs-parent="#menu-accordion">
						<ul class="submenu-list list-unstyled">
							<li class="submenu-item"><a class="submenu-link" href="{{route('managment.images.index')}}">all</a></li>
							<li class="submenu-item"><a class="submenu-link" href="{{route('managment.images.create')}}">Create</a></li>
							<li class="submenu-item"><a class="submenu-link" href="#">Trashed</a></li>
						</ul>
					</div>
				</li>
				<!-- specials -->
				<li class="nav-item has-submenu">
					<a class="nav-link submenu-toggle" href="" data-bs-toggle="collapse" data-bs-target="#submenu-9" aria-expanded="false" aria-controls="submenu-9">
						<span class="nav-icon">
							<i class="fas fa-images"></i>
						</span>
						<span class="nav-link-text">Specials</span>
						<span class="submenu-arrow">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
							</svg>
						</span>
					</a>
					<div id="submenu-9" class="collapse submenu submenu-9" data-bs-parent="#menu-accordion">
						<ul class="submenu-list list-unstyled">
							<li class="submenu-item"><a class="submenu-link" href="{{route('managment.images.index')}}">all</a></li>
							<li class="submenu-item"><a class="submenu-link" href="{{route('managment.images.create')}}">Create</a></li>
							<li class="submenu-item"><a class="submenu-link" href="#">Trashed</a></li>
						</ul>
					</div>
				</li>
				<!-- why -->
				<li class="nav-item has-submenu">
					<a class="nav-link submenu-toggle" href="" data-bs-toggle="collapse" data-bs-target="#submenu-9" aria-expanded="false" aria-controls="submenu-9">
						<span class="nav-icon">
							<i class="fas fa-images"></i>
						</span>
						<span class="nav-link-text">Why</span>
						<span class="submenu-arrow">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
							</svg>
						</span>
					</a>
					<div id="submenu-9" class="collapse submenu submenu-9" data-bs-parent="#menu-accordion">
						<ul class="submenu-list list-unstyled">
							<li class="submenu-item"><a class="submenu-link" href="{{route('managment.images.index')}}">all</a></li>
							<li class="submenu-item"><a class="submenu-link" href="{{route('managment.images.create')}}">Create</a></li>
							<li class="submenu-item"><a class="submenu-link" href="#">Trashed</a></li>
						</ul>
					</div>
				</li>
				<!-- events -->
				<li class="nav-item has-submenu">
					<a class="nav-link submenu-toggle" href="" data-bs-toggle="collapse" data-bs-target="#submenu-9" aria-expanded="false" aria-controls="submenu-9">
						<span class="nav-icon">
							<i class="fas fa-images"></i>
						</span>
						<span class="nav-link-text">Events</span>
						<span class="submenu-arrow">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
							</svg>
						</span>
					</a>
					<div id="submenu-9" class="collapse submenu submenu-9" data-bs-parent="#menu-accordion">
						<ul class="submenu-list list-unstyled">
							<li class="submenu-item"><a class="submenu-link" href="{{route('managment.images.index')}}">all</a></li>
							<li class="submenu-item"><a class="submenu-link" href="{{route('managment.images.create')}}">Create</a></li>
							<li class="submenu-item"><a class="submenu-link" href="#">Trashed</a></li>
						</ul>
					</div>
				</li>
				<!-- pages -->
				<li class="nav-item">
					<a class="nav-link" href="{{route('managment.pages.index')}}">
						<span class="nav-icon">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z" />
								<path d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z" />
							</svg>
						</span>
						<span class="nav-link-text">Pages</span>
					</a>
				</li>
				<!-- abouts -->
				<!-- pages -->
				<li class="nav-item has-submenu">
					<a class="nav-link submenu-toggle" href="" data-bs-toggle="collapse" data-bs-target="#submenu-144" aria-expanded="false" aria-controls="submenu-144">
						<span class="nav-icon">
						<i class="fas fa-hamburger"></i>
						</span>
						<span class="nav-link-text">Items</span>
						<span class="submenu-arrow">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
							</svg>
						</span>
					</a>
					<div id="submenu-144" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
						<ul class="submenu-list list-unstyled">
							<li class="submenu-item"><a class="submenu-link" href="{{route('managment.items.index')}}">all</a></li>
							<li class="submenu-item"><a class="submenu-link" href="{{route('managment.items.create')}}">Create</a></li>
							<li class="submenu-item"><a class="submenu-link" href="#">Trashed</a></li>
						</ul>
					</div>
				</li>
			<!-- pages -->
			<li class="nav-item has-submenu">
					<a class="nav-link submenu-toggle" href="" data-bs-toggle="collapse" data-bs-target="#submenu-10" aria-expanded="false" aria-controls="submenu-10">
						<span class="nav-icon">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z" />
								<path d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z" />
							</svg>
						</span>
						<span class="nav-link-text">Abouts</span>
						<span class="submenu-arrow">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
							</svg>
						</span>
					</a>
					<div id="submenu-10" class="collapse submenu submenu-10" data-bs-parent="#menu-accordion">
						<ul class="submenu-list list-unstyled">
							<li class="submenu-item"><a class="submenu-link" href="{{route('managment.abouts.index')}}">all</a></li>
							<li class="submenu-item"><a class="submenu-link" href="{{route('managment.abouts.create')}}">Create</a></li>
							<li class="submenu-item"><a class="submenu-link" href="#">Trashed</a></li>
						</ul>
					</div>
				</li>
				<!--//nav-item-->
				<li class="nav-item has-submenu">
					<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					<a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-2" aria-expanded="false" aria-controls="submenu-2">
						<span class="nav-icon">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-columns-gap" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M6 1H1v3h5V1zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12h-5v3h5v-3zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8H1v7h5V8zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6h-5v7h5V1zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z" />
							</svg>
						</span>
						<span class="nav-link-text">External</span>
						<span class="submenu-arrow">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
							</svg>
						</span>
						<!--//submenu-arrow-->
					</a>
					<!--//nav-link-->
					<div id="submenu-2" class="collapse submenu submenu-2" data-bs-parent="#menu-accordion">
						<ul class="submenu-list list-unstyled">
							<li class="submenu-item"><a class="submenu-link" href="login.html">Login</a></li>
							<li class="submenu-item"><a class="submenu-link" href="signup.html">Signup</a></li>
							<li class="submenu-item"><a class="submenu-link" href="reset-password.html">Reset password</a></li>
							<li class="submenu-item"><a class="submenu-link" href="404.html">404 page</a></li>
						</ul>
					</div>
				</li>
				<!--//nav-item-->


				<li class="nav-item">
					<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					<a class="nav-link" href="charts.html">
						<span class="nav-icon">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bar-chart-line" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z" />
							</svg>
						</span>
						<span class="nav-link-text">Charts</span>
					</a>
					<!--//nav-link-->
				</li>
				<!--//nav-item-->

				<li class="nav-item">
					<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					<a class="nav-link" href="help.html">
						<span class="nav-icon">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
								<path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
							</svg>
						</span>
						<span class="nav-link-text">Help</span>
					</a>
					<!--//nav-link-->
				</li>
				<!--//nav-item-->
			</ul>
			<!--//app-menu-->
		</nav>

		
		<!--//app-sidepanel-footer-->

	</div>
	<!--//sidepanel-inner-->
</div>