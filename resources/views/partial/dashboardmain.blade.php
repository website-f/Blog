<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blogzine - Blog and Magazine Bootstrap 5 Theme</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Bootstrap based News, Magazine and Blog Theme">

	<!-- Dark mode -->
	<script>
		const storedTheme = localStorage.getItem('theme')
 
		const getPreferredTheme = () => {
			if (storedTheme) {
				return storedTheme
			}
			return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
		}

		const setTheme = function (theme) {
			if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
				document.documentElement.setAttribute('data-bs-theme', 'dark')
			} else {
				document.documentElement.setAttribute('data-bs-theme', theme)
			}
		}

		setTheme(getPreferredTheme())

		window.addEventListener('DOMContentLoaded', () => {
		    var el = document.querySelector('.theme-icon-active');
			if(el != 'undefined' && el != null) {
				const showActiveTheme = theme => {
				const activeThemeIcon = document.querySelector('.theme-icon-active use')
				const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
				const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

				document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
					element.classList.remove('active')
				})

				btnToActive.classList.add('active')
				activeThemeIcon.setAttribute('href', svgOfActiveBtn)
			}

			window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
				if (storedTheme !== 'light' || storedTheme !== 'dark') {
					setTheme(getPreferredTheme())
				}
			})

			showActiveTheme(getPreferredTheme())

			document.querySelectorAll('[data-bs-theme-value]')
				.forEach(toggle => {
					toggle.addEventListener('click', () => {
						const theme = toggle.getAttribute('data-bs-theme-value')
						localStorage.setItem('theme', theme)
						setTheme(theme)
						showActiveTheme(theme)
					})
				})

			}
		})
		
	</script>

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/font-awesome/css/all.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/apexcharts/css/apexcharts.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/overlay-scrollbar/css/OverlayScrollbars.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/quill/css/quill.snow.css')}}">

	<!-- Theme CSS -->
	<link id="style-switch" rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
	 
</head>

<body>
<!-- =======================
Header START -->
<header class="navbar-light navbar-sticky header-static border-bottom navbar-dashboard">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-xl">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand me-3" href="/">
				<img class="navbar-brand-item light-mode-item" src="{{asset('assets/images/logo.svg')}}" alt="logo">			
				<img class="navbar-brand-item dark-mode-item" src="{{asset('assets/images/logo-light.svg')}}" alt="logo">			
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="text-body h6 d-none d-sm-inline-block">Menu</span>
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Main navbar START -->
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav navbar-nav-scroll mx-auto">

					<!-- Nav item 1 Demos -->
					<li class="nav-item"><a class="nav-link" href="/dashboard"><i class="bi bi-house-door me-1"></i>Dashboard</a></li>

					<!-- Nav item 2 Post -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="postMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-pencil me-1"></i>Post</a>
						<ul class="dropdown-menu" aria-labelledby="postMenu">
							<!-- dropdown submenu -->
							<li> <a class="dropdown-item" href="/dashboard/post-list">Post List</a> </li>
							<li> <a class="dropdown-item" href="/dashboard/post-category">Post Categories</a> </li>
							<li> <a class="dropdown-item" href="/dashboard/post-create">Create a Post</a> </li>
							<li> <a class="dropdown-item" href="/dashboard/post-edit">Edit Post</a> </li>
						</ul>
					</li>

					<!-- Nav item 3 Pages -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-folder me-1"></i>Pages</a>
						<ul class="dropdown-menu" aria-labelledby="pagesMenu">
							<li> <a class="dropdown-item" href="/dashboard/author-list">Author List</a></li>
							<li> <a class="dropdown-item" href="/dashboard/profile-edit">Edit Profile</a></li>
						</ul>
					</li>
				</ul>
				
				<!-- Search dropdown START -->
				<div class="nav my-3 my-xl-0 px-4 px-lg-1 flex-nowrap align-items-center">
					<div class="nav-item w-100">
						<form class="position-relative">
							<input class="form-control pe-5 bg-transparent" type="search" placeholder="Search" aria-label="Search">
							<button class="btn bg-transparent border-0 px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 "></i></button>
						</form>
					</div>
				</div>
				<!-- Search dropdown END -->
			</div>
		  <!-- Main navbar END -->

			<!-- Nav right START -->
			<div class="nav flex-nowrap align-items-center">

				<!-- Notification dropdown START -->
				<div class="nav-item ms-2 ms-md-3 dropdown">
					<!-- Notification button -->
					<a class="btn btn-primary-soft btn-round mb-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
						<i class="bi bi-bell fa-fw"></i>
					</a>
					<!-- Notification dote -->
					<span class="notif-badge animation-blink"></span>

					<!-- Notification dropdown menu START -->
					<div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0">
						<div class="card bg-transparent">
							<div class="card-header bg-transparent border-bottom p-3 d-flex justify-content-between align-items-center">
								<h6 class="m-0">Notifications <span class="badge bg-danger bg-opacity-10 text-danger ms-2">2 new</span></h6>
								<a class="small" href="#">Clear all</a>
							</div>
							<div class="card-body p-0">
								<ul class="list-group list-unstyled list-group-flush">
									<!-- Notif item -->
									<li>
										<a href="#" class="list-group-item-action border-0 border-bottom d-flex p-3">
											<div class="me-3">
												<div class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" src="{{asset('assets/images/avatar/08.jpg')}}" alt="avatar">
												</div>
											</div>
											<div>
                        <h6 class="mb-1">12 new members joined</h6>
												<span class="small"> <i class="bi bi-clock"></i> 3 min ago</span>
											</div>
										</a>
									</li>

									<!-- Notif item -->
									<li>
										<a href="#" class="list-group-item-action border-0 border-bottom d-flex p-3">
											<div class="me-3">
												<div class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="avatar">
												</div>
											</div>
											<div>
												<h6 class="mb-1">Larry Lawson deleted account</h6>
												<span class="small"> <i class="bi bi-clock"></i> 6 min ago</span>
											</div>
										</a>
									</li>

									<!-- Notif item -->
									<li>
										<a href="#" class="list-group-item-action border-0 border-bottom d-flex p-3">
											<div class="me-3">
												<div class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="avatar">
												</div>
											</div>
											<div>
												<h6 class="mb-1">Byan commented on your post</h6>
												<span class="small"> <i class="bi bi-clock"></i> 10 min ago</span>
											</div>
										</a>
									</li>

									<!-- Notif item -->
									<li>
										<a href="#" class="list-group-item-action border-0 border-bottom d-flex p-3">
											<div class="me-3">
												<div class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
												</div>
											</div>
											<div>
												<h6 class="mb-1">Settings updated</h6>
												<span class="small"> <i class="bi bi-clock"></i> Yesterday</span>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<!-- Button -->
							<div class="card-footer bg-transparent border-0 py-3 text-center position-relative">
								<a href="#" class="stretched-link">See all incoming activity</a>
							</div>
						</div>
					</div>
					<!-- Notification dropdown menu END -->
				</div>
				<!-- Notification dropdown END -->

				<!-- Profile dropdown START -->
				<div class="nav-item ms-2 ms-md-3 dropdown">
					<!-- Avatar -->
					<a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
						<img class="avatar-img rounded-circle" src="{{asset('assets/images/avatar/03.jpg')}}" alt="avatar">
					</a>

					<!-- Profile dropdown START -->
					<ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
						<!-- Profile info -->
						<li class="px-3">
							<div class="d-flex align-items-center">
								<!-- Avatar -->
								<div class="avatar me-3">
									<img class="avatar-img rounded-circle shadow" src="{{asset('assets/images/avatar/03.jpg')}}" alt="avatar">
								</div>
								<div>
									<a class="h6 mt-2 mt-sm-0" href="#"> Louis Ferguson</a>
									<p class="small m-0">example@gmail.com</p>
								</div>
							</div>
							<hr>
						</li>
						<!-- Links -->
						<li><a class="dropdown-item" href="#"><i class="bi bi-person fa-fw me-2"></i>Edit Profile</a></li>
						<li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Account Settings</a></li>
						<li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Help</a></li>
						<li><a class="dropdown-item" href="#"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
						<li class="dropdown-divider mb-2"></li>
						<li>
							<div class="align-items-center text-center py-0">
								<span class="me-3">mode:</span>
								<div class="btn-group theme-icon-active" role="group" aria-label="Default button group">
									<button type="button" class="btn btn-light btn-sm mb-0" data-bs-theme-value="light">
										<svg width="16" height="16" fill="currentColor" class="bi bi-brightness-high-fill fa-fw mode-switch" viewBox="0 0 16 16">
											<path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
											<use href="#"></use>
										</svg>
									</button>
									<button type="button" class="btn btn-light btn-sm mb-0" data-bs-theme-value="dark">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill fa-fw mode-switch" viewBox="0 0 16 16">
											<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
											<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
											<use href="#"></use>
										</svg>
									</button>
									<button type="button" class="btn btn-light btn-sm mb-0 active" data-bs-theme-value="auto">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch" viewBox="0 0 16 16">
											<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
											<use href="#"></use>
										</svg>
									</button>
								</div>
							</div>
						</li>
					</ul>
					<!-- Profile dropdown END -->
				</div>
				<!-- Profile dropdown END -->

			<!-- Nav right END -->
			</div>
		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- =======================
Header END -->

@yield('content')

<!-- =======================
Footer START -->
<footer class="mb-3">
    <div class="container">
      <div class="card card-body bg-light">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-6">
            <!-- Copyright -->
            <div class="text-center text-lg-start">©2023 <a href="https://www.webestica.com/" class="text-reset btn-link" target="_blank">Webestica</a>. All rights reserved
            </div>
          </div>
          <div class="col-lg-6 d-sm-flex align-items-center justify-content-center justify-content-lg-end">
            <!-- Language switcher -->
            <div class="dropup me-0 me-sm-3 mt-3 mt-md-0 text-center text-sm-end">
              <a class="dropdown-toggle text-body" href="#" role="button" id="languageSwitcher" data-bs-toggle="dropdown" aria-expanded="false">
                English Edition
              </a>
              <ul class="dropdown-menu min-w-auto" aria-labelledby="languageSwitcher">
                <li><a class="dropdown-item" href="#">English</a></li>
                <li><a class="dropdown-item" href="#">German </a></li>
                <li><a class="dropdown-item" href="#">French</a></li>
              </ul>
            </div>
            <!-- Links -->
            <ul class="nav text-center text-sm-end justify-content-center justify-content-center mt-3 mt-md-0">
              <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
              <li class="nav-item"><a class="nav-link pe-0" href="#">Cookies</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- =======================
  Footer END -->
  
  <!-- Back to top -->
  <div class="back-top"><i class="bi bi-arrow-up-short"></i></div>
  
  <!-- =======================
  JS libraries, plugins and custom scripts -->
  
  <!-- Bootstrap JS -->
  <script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  
  <!-- Vendors -->
  <script src="{{asset('assets/vendor/apexcharts/js/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/vendor/overlay-scrollbar/js/OverlayScrollbars.min.js')}}"></script>
  <script src="{{asset('assets/vendor/quill/js/quill.min.js')}}"></script>
  
  <!-- Template Functions -->
  <script src="{{asset('assets/js/functions.js')}}"></script>
  
  </body>
  </html>