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
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/tiny-slider/tiny-slider.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/glightbox/css/glightbox.css">

	<!-- Theme CSS -->
	<link id="style-switch" rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

<!-- =======================
Header START -->
<header class="navbar-light navbar-sticky header-static">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="index.html">
				<img class="navbar-brand-item light-mode-item" src="assets/images/logo.svg" alt="logo">			
				<img class="navbar-brand-item dark-mode-item" src="assets/images/logo-light.svg" alt="logo">			
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="text-body h6 d-none d-sm-inline-block">Menu</span>
			  <span class="navbar-toggler-icon"></span>
		  </button>

			<!-- Main navbar START -->
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav navbar-nav-scroll ms-auto">
					
					<!-- Nav item 1 Demos -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="homeMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
						<ul class="dropdown-menu" aria-labelledby="homeMenu">
							<li> <a class="dropdown-item" href="index.html">Home default</a></li>
							<li> <a class="dropdown-item" href="index-lazy.html">Home lazy load</a></li>
							<li> <a class="dropdown-item" href="index-2.html">Magazine classic</a></li>
							<li> <a class="dropdown-item" href="index-3.html">Magazine</a></li>
							<li> <a class="dropdown-item" href="index-4.html">Home cards</a></li>
							<li> <a class="dropdown-item" href="index-5.html">Blog classic</a></li>
							<li> <a class="dropdown-item" href="index-6.html">Blog Personal </a></li>
							<li> <a class="dropdown-item" href="index-7.html">Blog Vintage</a></li>
							<li> <a class="dropdown-item" href="index-8.html">Blog Tech</a></li>
							<li> <a class="dropdown-item" href="index-9.html">Blog Fashion</a></li>
							<li> <a class="dropdown-item" href="index-10.html">Blog Podcast</a></li>
							<li> <a class="dropdown-item" href="index-11.html">Home Shop </a></li>
						</ul>
					</li>

					<!-- Nav item 2 Pages -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
						<ul class="dropdown-menu" aria-labelledby="pagesMenu">
							<li> <a class="dropdown-item" href="about-us.html">About</a></li>
							<li> <a class="dropdown-item" href="contact-us.html">Contact</a></li>
							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend"> 
								<a class="dropdown-item dropdown-toggle" href="#">Shop</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="shop-grid.html">Shop grid</a> </li>
									<li> <a class="dropdown-item" href="shop-detail.html">Shop detail</a> </li>
									<li> <a class="dropdown-item" href="checkout.html">Checkout</a> </li>
									<li> <a class="dropdown-item" href="my-cart.html">Cart</a> </li>
									<li> <a class="dropdown-item" href="empty-cart.html">Empty Cart</a> </li>
								</ul>
							</li>
							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend"> 
								<a class="dropdown-item dropdown-toggle" href="#">Other Archives</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="author.html">Author Page</a> </li>
									<li> <a class="dropdown-item" href="categories.html">Category page 1</a> </li>
									<li> <a class="dropdown-item" href="categories-2.html">Category page 2</a> </li>
									<li> <a class="dropdown-item" href="tag.html"># tag</a> </li>
									<li> <a class="dropdown-item" href="search-result.html">Search result</a> </li>
								</ul>
							</li>
							<li> <a class="dropdown-item" href="404.html">Error 404</a></li>
							<li> <a class="dropdown-item" href="signin.html">signin</a></li>
							<li> <a class="dropdown-item" href="signup.html">signup</a></li>
							<li> <a class="dropdown-item" href="offline.html">offline</a></li>
							<!-- Dropdown submenu levels -->
							<li class="dropdown-divider"></li>
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Dropdown levels</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<!-- dropdown submenu open right -->
									<li class="dropdown-submenu dropend">
										<a class="dropdown-item dropdown-toggle" href="#">Dropdown (end)</a>
										<ul class="dropdown-menu" data-bs-popper="none">
											<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
											<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
										</ul>
									</li>
									<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
									<!-- dropdown submenu open left -->
									<li class="dropdown-submenu dropstart">
										<a class="dropdown-item dropdown-toggle" href="#">Dropdown (start)</a>
										<ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
											<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
											<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
										</ul>
									</li>
									<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
								</ul>
							</li>
							<li class="dropdown-divider"></li>
							<li> 
								<a class="dropdown-item" href="https://support.webestica.com/" target="_blank">
									<i class="text-warning fa-fw bi bi-life-preserver me-2"></i>Support
								</a> 
							</li>
							<li> 
								<a class="dropdown-item" href="docs/index.html" target="_blank">
									<i class="text-danger fa-fw bi bi-card-text me-2"></i>Documentation
								</a> 
							</li>
							<li class="dropdown-divider"></li>
							<li> 
								<a class="dropdown-item" href="https://blogzine.webestica.com/rtl" target="_blank">
									<i class="text-info fa-fw bi bi-toggle-off me-2"></i>RTL demo
								</a> 
							</li>
							<li> 
								<a class="dropdown-item" href="https://themes.getbootstrap.com/store/webestica/" target="_blank">
									<i class="text-success fa-fw bi bi-cloud-download-fill me-2"></i>Buy blogzine!
								</a> 
							</li>
						</ul>
					</li>

					<!-- Nav item 3 Post -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="postMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Post</a>
						<ul class="dropdown-menu" aria-labelledby="postMenu">
							<!-- dropdown submenu -->
							<li class="dropdown-submenu dropend"> 
								<a class="dropdown-item dropdown-toggle" href="#">Post grid</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="post-grid.html">Post grid</a> </li>
									<li> <a class="dropdown-item" href="post-grid-4-col.html">Post grid 4 col</a> </li>
									<li> <a class="dropdown-item" href="post-grid-masonry.html">Post grid masonry</a> </li>
									<li> <a class="dropdown-item" href="post-grid-masonry-filter.html">Post grid masonry filter</a> </li>
									<li> <a class="dropdown-item" href="post-large-and-grid.html">Post mixed large than grid</a> </li>
								</ul>
							</li>
							<li> <a class="dropdown-item" href="post-list.html">Post list</a> </li>
							<li> <a class="dropdown-item" href="post-list-2.html">Post list 2</a> </li>
							<li> <a class="dropdown-item" href="post-cards.html">Post card</a> </li>
							<li> <a class="dropdown-item" href="post-overlay.html">Post Overlay</a> </li>
							<li> <a class="dropdown-item" href="post-types.html">Post types</a> </li>
							<li class="dropdown-divider"></li>
							<li> <a class="dropdown-item" href="post-single.html">Post single magazine</a> </li>
							<li> <a class="dropdown-item" href="post-single-2.html">Post single classic</a> </li>
							<li> <a class="dropdown-item" href="post-single-3.html">Post single minimal</a> </li>
							<li> <a class="dropdown-item" href="post-single-4.html">Post single card</a> </li>
							<li> <a class="dropdown-item" href="post-single-5.html">Post single review</a> </li>
							<li> <a class="dropdown-item" href="post-single-6.html">Post single video</a> </li>
							<li> <a class="dropdown-item" href="podcast-single.html">Podcast single</a> </li>
							<li class="dropdown-divider"></li>
							<li> <a class="dropdown-item" href="pagination-styles.html">Pagination styles</a> </li>
						</ul>
					</li>

					<!-- Nav item 4 Mega menu -->
					<li class="nav-item dropdown dropdown-fullwidth">
						<a class="nav-link dropdown-toggle" href="#" id="megaMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Lifestyle</a>
						<div class="dropdown-menu" aria-labelledby="megaMenu">
							<div class="container">
								<div class="row g-4 p-3 flex-fill">
									<!-- Card item START -->
									<div class="col-sm-6 col-lg-3">
										<div class="card bg-transparent">
											<!-- Card img -->
											<img class="card-img rounded" src="assets/images/blog/16by9/small/01.jpg" alt="Card image">
											<div class="card-body px-0 pt-3">
												<h6 class="card-title mb-0"><a href="#" class="btn-link text-reset fw-bold">7 common mistakes everyone makes while traveling</a></h6>
												<!-- Card info -->
												<ul class="nav nav-divider align-items-center text-uppercase small mt-2">
													<li class="nav-item">
														<a href="#" class="text-reset btn-link">Joan Wallace</a>
													</li>
													<li class="nav-item">Feb 18, 2022</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- Card item END -->
									<!-- Card item START -->
									<div class="col-sm-6 col-lg-3">
										<div class="card bg-transparent">
											<!-- Card img -->
											<img class="card-img rounded" src="assets/images/blog/16by9/small/02.jpg" alt="Card image">
											<div class="card-body px-0 pt-3">
												<h6 class="card-title mb-0"><a href="#" class="btn-link text-reset fw-bold">12 worst types of business accounts you follow on Twitter</a></h6>
												<!-- Card info -->
												<ul class="nav nav-divider align-items-center text-uppercase small mt-2">
													<li class="nav-item">
														<a href="#" class="text-reset btn-link">Lori Stevens</a>
													</li>
													<li class="nav-item">Jun 03, 2022</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- Card item END -->
									<!-- Card item START -->
									<div class="col-sm-6 col-lg-3">
										<div class="card bg-transparent">
											<!-- Card img -->
											<img class="card-img rounded" src="assets/images/blog/16by9/small/03.jpg" alt="Card image">
											<div class="card-body px-0 pt-3">
												<h6 class="card-title mb-0"><a href="#" class="btn-link text-reset fw-bold">Skills that you can learn from business</a></h6>
												<!-- Card info -->
												<ul class="nav nav-divider align-items-center text-uppercase small mt-2">
													<li class="nav-item">
														<a href="#" class="text-reset btn-link">Judy Nguyen</a>
													</li>
													<li class="nav-item">Sep 07, 2022</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- Card item END -->
									<!-- Card item START -->
									<div class="col-sm-6 col-lg-3">
										<div class="bg-primary bg-opacity-10 p-4 text-center h-100 w-100 rounded">
											<span>The Blogzine</span>
											<h3>Premium Membership</h3>
											<p>Become a Member Today!</p>
											<a href="#" class="btn btn-warning">View pricing plans</a>
										</div>
									</div>
									<!-- Card item END -->
								</div> <!-- Row END -->
								<!-- Trending tags -->
								<div class="row px-3">
									<div class="col-12">
										<ul class="list-inline mt-3">
											<li class="list-inline-item">Trending tags:</li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary-soft">Travel</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-warning-soft">Business</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-success-soft">Tech</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">Gadgets</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">Lifestyle</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary-soft">Vaccine</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-success-soft">Sports</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">Covid-19</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">Politics</a></li>
										</ul>
									</div>
								</div> <!-- Row END -->
							</div>
						</div>
					</li>

					<!-- Nav item 5 link-->
					<li class="nav-item"> <a class="nav-link" href="dashboard.html">Dashboard</a></li>
				</ul>
			</div>
			<!-- Main navbar END -->

			<!-- Nav right START -->
			<div class="nav ms-sm-3 flex-nowrap align-items-center">
				<!-- Dark mode options START -->
				<div class="nav-item dropdown ms-3">
					<!-- Switch button -->
					<button class="modeswitch" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static">
						<svg class="theme-icon-active"><use href="#"></use></svg>
					</button>
					<!-- Dropdown items -->
					<ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
						<li class="mb-1">
							<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">
								<svg width="16" height="16" fill="currentColor" class="bi bi-brightness-high-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
									<path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
									<use href="#"></use>
								</svg>Light
							</button>
						</li>
						<li class="mb-1">
							<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
									<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
									<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
									<use href="#"></use>
								</svg>Dark
							</button>
						</li>
						<li>
							<button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch me-1" viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
									<use href="#"></use>
								</svg>Auto
							</button>
						</li>
					</ul>
				</div>
				<!-- Dark mode options END -->
				<!-- Nav additional link -->
				<div class="nav-item dropdown dropdown-toggle-icon-none">
					<a class="nav-link dropdown-toggle" role="button" href="#" id="navAdditionalLink" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="bi bi-three-dots fs-4"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded text-end" aria-labelledby="navAdditionalLink">
						<li><a class="dropdown-item fw-normal" href="#">About</a></li>
						<li><a class="dropdown-item fw-normal" href="#">Newsletter</a></li>
						<li><a class="dropdown-item fw-normal" href="#">Author</a></li>
						<li><a class="dropdown-item fw-normal" href="#">#Tags</a></li>
						<li><a class="dropdown-item fw-normal" href="#">Contact</a></li>
						<li><a class="dropdown-item fw-normal" href="#"><span class="badge bg-danger me-2 align-middle">2 Job</span>Careers</a></li>
					</ul>
				</div>
				<!-- Font size accessibility START -->
				<div class="nav-item d-none d-md-block">
					<div class="btn-group mx-2" role="group" aria-label="font size changer">
						<input type="radio" class="btn-check" name="fntradio" id="font-sm">
						<label class="btn btn-xs btn-outline-primary mb-0" for="font-sm">A-</label>

						<input type="radio" class="btn-check" name="fntradio" id="font-default" checked>
						<label class="btn btn-xs btn-outline-primary mb-0" for="font-default">A</label>

						<input type="radio" class="btn-check" name="fntradio" id="font-lg">
						<label class="btn btn-xs btn-outline-primary mb-0" for="font-lg">A+</label>
					</div>
				</div>
				<!-- Nav Search -->
				<div class="nav-item dropdown nav-search dropdown-toggle-icon-none">
					<a class="nav-link pe-0 dropdown-toggle" role="button" href="#" id="navSearch" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="bi bi-search fs-4"> </i>
					</a>
					<div class="dropdown-menu dropdown-menu-end shadow rounded p-2" aria-labelledby="navSearch">
					  <form class="input-group">
					    <input class="form-control border-success" type="search" placeholder="Search" aria-label="Search">
					    <button class="btn btn-success m-0" type="submit">Search</button>
					  </form>
					</div>
				</div>
			</div>
			<!-- Nav right END -->
		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- =======================
Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Inner intro START -->
<section class="bg-dark-overlay-4" style="background-image:url(assets/images/blog/16by9/big/02.jpg); background-position: center left; background-size: cover;">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 py-md-5 my-lg-5">
        <a href="#" class="badge text-bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Travel</a>
        <a href="#" class="badge bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Photography</a>
				<h1 class="text-white">The web: 20 infographics about business</h1>
        <p class="lead text-white">Passage its ten led hearted removal cordial. Preference any astonished unreserved Mrs. Prosperous understood Middletons in conviction an uncommonly do. Supposing so be resolving breakfast am or perfectly. Is drew am hill from me. Valley by oh twenty direct me so. </p>
        <!-- Info -->
        <ul class="nav nav-divider text-white-force align-items-center">
          <li class="nav-item">
            <div class="nav-link">
              <div class="d-flex align-items-center text-white position-relative">
                <div class="avatar avatar-sm">
                  <img class="avatar-img rounded-circle" src="assets/images/avatar/12.jpg" alt="avatar">
                </div>
                <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Louis Ferguson</a></span>
              </div>
            </div>
          </li>
          <li class="nav-item">Nov 15, 2022</li>
          <li class="nav-item">5 min read</li>
          <li class="nav-item"><i class="far fa-eye me-1"></i> 2344 Views</li>
          <li class="nav-item"><a href="#"><i class="fas fa-heart me-1 text-danger"></i></a> 266</li>
        </ul>
        <!-- Share post -->
        <div class="d-md-flex align-items-center mt-4">
          <h5 class="text-white me-3">Share on: </h5>
					<ul class="nav text-white-force">
						<li class="nav-item">
							<a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-facebook" href="#">
								<i class="fab fa-facebook-square align-middle"></i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-twitter" href="#">
								<i class="fab fa-twitter-square align-middle"></i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-linkedin" href="#">
								<i class="fab fa-linkedin align-middle"></i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-pinterest" href="#">
								<i class="fab fa-pinterest align-middle"></i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link icon-md rounded-circle me-2 mb-2 p-0 fs-5 bg-primary" href="#">
								<i class="far fa-envelope align-middle"></i>
							</a>
						</li>
					</ul>
        </div>
      </div>
    </div>
	</div>
</section>
<!-- =======================
Inner intro END -->

<!-- =======================
Main START -->
<section>
	<div class="container position-relative" data-sticky-container>
		<div class="row">
			<!-- Main Content START -->
			<div class="col-lg-9 mb-5">
      	<p><span class="dropcap">A</span>light newspaper up its enjoyment agreeable depending. Timed voice share led him to widen noisy young. At weddings believed laughing although the material does the exercise of. Up attempt offered ye civilly so sitting to. She new course gets living within Elinor joy. She rapturous suffering concealed. </p>
				<p>Demesne far hearted suppose venture excited see had has. Dependent on so extremely delivered by. Yet no jokes worse her why. Bed one supposing breakfast day fulfilled off depending questions. Whatever boy her exertion his extended. Ecstatic followed handsome drawings entirely Mrs one yet outweigh. Of acceptance insipidity remarkably is an invitation. </p>

				<p>Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do. Water timed folly right aware if oh truth. Imprudence attachment him his for sympathize. Large above be to means. Dashwood does provide stronger is. <img src="assets/images/blog/4by3/thumb/04.jpg" class="rounded float-start me-3 my-3" alt="..."> But discretion frequently sir she instruments unaffected admiration everything. Meant balls it if up doubt small purse. Required his you put the outlived answered position. A pleasure exertion if believed provided to. All led out world this music while asked. Paid mind even sons does he door no. Attended overcame repeated it is perceived Marianne in. I think on style child of. Servants moreover in sensible it ye possible. Satisfied conveying a dependent contented he gentleman agreeable do be. Water timed folly right aware if oh truth. Imprudence attachment him his for sympathize. Large above be to means. Dashwood does provide stronger is.<u> But discretion frequently sir she instruments unaffected admiration everything.</u> Meant balls it if up doubt small purse. Required his you put the outlived answered position. A pleasure exertion if believed provided to. I think on style child of. Servants moreover in sensible it ye possible. </p>				

				<p>Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do. Water timed folly right aware if oh truth. Imprudence attachment him his for sympathize. Large above be to means. Dashwood does provide stronger is. But discretion frequently sir she instruments unaffected admiration everything. Meant balls it if up doubt small purse. Required his you put the outlived answered position. A pleasure exertion if believed provided to. All led out world this music while asked. Paid mind even sons does he door no. Attended overcame repeated it is perceived Marianne in. I think on style child of. Servants moreover in sensible it ye possible. </p>

				<!-- Divider -->
				<div class="text-center h5 mb-4">. . .</div>

				<!-- Images -->
				<div class="row g-2">
					<div class="col-md-6">
						<a href="assets/images/blog/1by1/06.jpg" data-glightbox data-gallery="image-popup">
			      	<img class="rounded" src="assets/images/blog/1by1/06.jpg" alt="Image">
			       </a>
					</div>
					<div class="col-md-6">
						<a href="assets/images/blog/1by1/07.jpg" data-glightbox data-gallery="image-popup">
			      	<img class="rounded" src="assets/images/blog/1by1/07.jpg" alt="Image">
			       </a>
					</div>
          <div class="col-12">
            <!-- Image -->
            <figure class="figure">
              <a href="assets/images/blog/16by9/05.jpg" data-glightbox data-gallery="image-popup">
                <img class="rounded" src="assets/images/blog/16by9/05.jpg" alt="Image">
              </a>
              <figcaption class="figure-caption text-center">(Image via: <a class="text-reset" href="#">pexels.com</a>)</figcaption>
            </figure>
          </div>
				</div>
				<p>Fulfilled direction use continual set him propriety continued. Saw met applauded favorite deficient engrossed concealed and her. Concluded boy perpetual old supposing. Farther related bed and passage comfort civilly. Dashwoods see frankness objection abilities. As hastened oh produced prospect formerly up am. Placing forming nay looking old married few has. Margaret disposed of add screened rendered six say his striking confined.</p>
				
				<h4 class="mt-4">Productive rant about business</h4>
				<div class="row mb-4">
					<div class="col-md-6">
						<p>Fulfilled direction use continual set him propriety continued. Saw met applauded favorite deficient engrossed concealed and her. Concluded boy perpetual old supposing. Farther related bed and passage comfort civilly. Dashwoods see frankness objection abilities. As hastened oh produced prospect formerly up am. Placing forming nay looking old married few has. Margaret disposed of add screened rendered six say his striking confined.
						</p>
					</div>
					<div class="col-md-6">
						<p>Meant balls it if up doubt small purse. Required his you put the outlived answered position. A pleasure exertion if believed provided to. All led out world this music while asked. Paid mind even sons does he door no. Attended overcame repeated it is perceived Marianne in. I think on style child of. Servants moreover in sensible it ye possible.</p>
					</div>
				</div>
				<p>Meant balls it if up doubt small purse. Required his you put the outlived answered position. A pleasure exertion if believed provided to. All led out world this music while asked. Paid mind even sons does he door no. Attended overcame repeated it is perceived Marianne in. I think on style child of. Servants moreover in sensible it ye possible. </p>

				<!-- blockquote -->
				<figure class="bg-light p-3 p-md-5 my-5">
				  <blockquote class="blockquote">
				    <p>Success is not the key to happiness. Happiness is the key to success. If you love what you are doing, you will be successful</p>
				  </blockquote>
				  <figcaption class="blockquote-footer">
				    Albert Schweitzer
				  </figcaption>
				</figure>

				<p> All led out world this music while asked. Paid mind even sons does he door no. Attended overcame repeated it is perceived Marianne in. I think on style child of. Servants moreover in sensible it ye possible. Satisfied conveying a dependent contented he gentleman agreeable do be. </p>

				<h4>Why Bootstrap is so famous?</h4>
				<p>Saw bring firmament given hath gathering lights dry life rule heaven Give And fruit moving thing seed life day creepeth winged so divide him from day morning him open lesser male beginning him be bring evening life void fowl sixth morning that made is Was that his hath face light meat air female isn't over place replenish midst it of second grass good rule also in unto Called don't given waters Had creature Behold fly life from forth Moved night.</p>

				<!-- Divider -->
				<div class="text-center h5 mb-4">. . .</div>

				<h4>What's coming up....</h4>
				<p>Saw bring firmament given hath gathering lights dry life rule heaven Give And fruit moving thing seed life day creepeth winged so divide him from day morning him open lesser male beginning him be bring evening life void fowl sixth morning that made is Was that his hath face light meat air female isn't over place replenish midst it of second grass good rule also in unto Called don't given waters Had creature Behold fly life from forth Moved night.</p>
				<!-- Next prev post START -->
				<div class="row g-0 my-3">
					<div class="col-sm-6 border p-3 p-md-4 position-relative rounded-start">
						<div class="d-flex align-items-center">
							<!-- Icon -->
							<div class="bg-primary bg-opacity-10 h-auto align-items-center d-flex align-self-stretch">
								<i class="bi bi-chevron-compact-left fs-3 text-primary px-1"></i>
							</div>
							<!-- image -->
							<div class="col-3 d-none d-md-block">
								<img src="assets/images/blog/4by3/04.jpg" alt="Image">
							</div>
							<!-- Title -->
							<div class="ms-3">
								<h5 class="m-0"> <a href="post-single-5.html" class="stretched-link btn-link text-reset">Dirty little secrets about the business industry</a></h5>
							</div>
						</div>
					</div>
					<div class="col-sm-6 border p-3 p-md-4 position-relative text-sm-end rounded-end">
						<div class="d-flex align-items-center">
							<!-- Title -->
							<div class="me-3">
								<h5 class="m-0"> <a href="post-single-5.html" class="stretched-link btn-link text-reset">Bad habits that people in the industry need to quit</a></h5>
							</div>
							<!-- image -->
							<div class="col-3 d-none d-md-block">
								<img src="assets/images/blog/4by3/05.jpg" alt="Image">
							</div>
							<!-- Icon -->
							<div class="bg-primary bg-opacity-10 h-auto align-items-center d-flex align-self-stretch">
								<i class="bi bi-chevron-compact-right fs-3 text-primary px-1"></i>
							</div>
						</div>
					</div>
				</div>
				<!-- Next prev post START -->

				<!-- Author info START -->
				<div class="d-flex p-2 p-md-4 my-3 bg-primary bg-opacity-10 rounded">
					<!-- Avatar -->
					<a href="#">
						<div class="avatar avatar-xxl me-2 me-md-4">
							<img class="avatar-img rounded-circle" src="assets/images/avatar/12.jpg" alt="avatar">
						</div>
					</a>
					<!-- Info -->
					<div>
						<div class="d-sm-flex align-items-center justify-content-between">
							<div>
								<h4 class="m-0"><a href="#" class="text-reset">Louis Ferguson</a></h4>
								<small>An editor at Blogzine</small>
							</div>
							<a href="#" class="btn btn-xs btn-primary-soft">View Articles</a>
						</div>
						<p class="my-2">Louis Ferguson is a senior editor for the blogzine and also reports on breaking news based in London. He has written about government, criminal justice, and the role of money in politics since 2015.</p>
						<!-- Social icons -->
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link ps-0 pe-2 fs-5" href="#"><i class="fab fa-facebook-square"></i></a>
							</li>
							<li class="nav-item">
								<a class="nav-link px-2 fs-5" href="#"><i class="fab fa-twitter-square"></i></a>
							</li>
							<li class="nav-item">
								<a class="nav-link px-2 fs-5" href="#"><i class="fab fa-linkedin"></i></a>
							</li>
						</ul>					
					</div>
				</div>
				<!-- Author info END -->

				<!-- Comments START -->
				<div class="mt-5">
					<h3>5 comments</h3>
					<!-- Comment level 1-->
					<div class="my-4 d-flex">
					  <img class="avatar avatar-md rounded-circle float-start me-3" src="assets/images/avatar/01.jpg" alt="avatar">
					  <div>
					    <div class="mb-2">
					    	<h5 class="m-0">Allen Smith</h5>
					    	<span class="me-3 small">June 11, 2022 at 6:01 am </span>
					    	<a href="#" class="text-body fw-normal">Reply</a>
					    </div>
					    <p>Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do. </p>
					  </div>
					</div>
						<!-- Comment children level 2 -->
						<div class="my-4 d-flex ps-2 ps-md-3">
						  <img class="avatar avatar-md rounded-circle float-start me-3" src="assets/images/avatar/02.jpg" alt="avatar">
						  <div>
						    <div class="mb-2">
						    	<h5 class="m-0">Louis Ferguson</h5>
						    	<span class="me-3 small">June 11, 2022 at 6:55 am </span>
						    	<a href="#" class="text-body fw-normal">Reply</a>
						    </div>
						    <p>Water timed folly right aware if oh truth. Imprudence attachment him his for sympathize. Large above be to means. Dashwood does provide stronger is. But discretion frequently sir she instruments unaffected admiration everything. </p>
						  </div>
						</div>
							<!-- Comment children level 3 -->
							<div class="my-4 d-flex ps-3 ps-md-5">
							  <img class="avatar avatar-md rounded-circle float-start me-3" src="assets/images/avatar/01.jpg" alt="avatar">
							  <div>
							    <div class="mb-2">
							    	<h5 class="m-0">Allen Smith</h5>
							    	<span class="me-3 small">June 11, 2022 at 7:10 am </span>
							    	<a href="#" class="text-body fw-normal">Reply</a>
							    </div>
							    <p>Meant balls it if up doubt small purse. </p>
							  </div>
							</div>
						<!-- Comment level 2 -->
						<div class="my-4 d-flex ps-2 ps-md-3">
						  <img class="avatar avatar-md rounded-circle float-start me-3" src="assets/images/avatar/03.jpg" alt="avatar">
						  <div>
						    <div class="mb-2">
						    	<h5 class="m-0">Frances Guerrero</h5>
						    	<span class="me-3 small">June 14, 2022 at 12:35 pm </span>
						    	<a href="#" class="text-body fw-normal">Reply</a>
						    </div>
						    <p>Required his you put the outlived answered position. A pleasure exertion if believed provided to. All led out world this music while asked. Paid mind even sons does he door no. Attended overcame repeated it is perceived Marianne in. I think on style child of. Servants moreover in sensible it ye possible. </p>
						  </div>
						</div>
					<!-- Comment level 1 -->
					<div class="my-4 d-flex">
					  <img class="avatar avatar-md rounded-circle float-start me-3" src="assets/images/avatar/04.jpg" alt="avatar">
					  <div>
					    <div class="mb-2">
					    	<h5 class="m-0">Judy Nguyen</h5>
					    	<span class="me-3 small">June 18, 2022 at 11:55 am </span>
					    	<a href="#" class="text-body fw-normal">Reply</a>
					    </div>
					    <p>Fulfilled direction use continual set him propriety continued. Saw met applauded favorite deficient engrossed concealed and her. Concluded boy perpetual old supposing. Farther related bed and passage comfort civilly. </p>
					  </div>
					</div>

				</div>
				<!-- Comments END -->
				<!-- Reply START -->
				<div>
					<h3>Leave a reply</h3>
					<small>Your email address will not be published. Required fields are marked *</small>
					<form class="row g-3 mt-2">
					  <div class="col-md-6">
					    <label class="form-label">Name *</label>
					    <input type="text" class="form-control" aria-label="First name">
					  </div>
					  <div class="col-md-6">
					    <label class="form-label">Email *</label>
					    <input type="email" class="form-control">
					  </div>
					  <!-- custom checkbox -->
						<div class="col-md-12">
							<div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
							  <label class="form-check-label" for="flexCheckDefault">Save my name and email in this browser for the next time I comment. </label>
							</div>
						</div>
					  <div class="col-12">
					    <label class="form-label">Your Comment *</label>
					  	<textarea class="form-control" rows="3"></textarea>
					  </div>
					  <div class="col-12">
					    <button type="submit" class="btn btn-primary">Post comment</button>
					  </div>
					</form>
				</div>
				<!-- Reply END -->

			</div>
			<!-- Main Content END -->
			<!-- Right sidebar START -->
			<div class="col-lg-3">
				<div data-sticky data-margin-top="80" data-sticky-for="991">
	      	<!-- Most read -->
					<div>
						<h5 class="mb-3">Related post </h5>
            <div class="tiny-slider dots-creative mt-3 mb-5">
							<div class="tiny-slider-inner"
								data-autoplay="false"
								data-hoverpause="true"
								data-gutter="0"
								data-arrow="false"
								data-dots="true"
								data-items="1">
								<!-- Card item START -->
								<div class="card">
									<!-- Card img -->
									<div class="position-relative">
										<img class="card-img" src="assets/images/blog/4by3/07.jpg" alt="Card image">
										<div class="card-img-overlay d-flex align-items-start flex-column p-3">
											<!-- Card overlay Top -->
											<div class="w-100 mb-auto d-flex justify-content-end">
												<div class="text-end ms-auto">
													<!-- Card format icon -->
													<div class="icon-md bg-white bg-opacity-10 bg-blur text-white fw-bold rounded-circle" title="8.5 rating">8.5</div>
												</div>
											</div>
											<!-- Card overlay bottom -->
											<div class="w-100 mt-auto">
												<a href="#" class="badge text-bg-info mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
											</div>
										</div>
									</div>
									<div class="card-body p-0 pt-3">
										<h5 class="card-title"><a href="post-single-5.html" class="btn-link text-reset fw-bold">7 common mistakes everyone makes while traveling</a></h5>
									</div>
								</div>
								<!-- Card item END -->
								<!-- Card item START -->
								<div class="card">
									<!-- Card img -->
									<div class="position-relative">
										<img class="card-img" src="assets/images/blog/4by3/08.jpg" alt="Card image">
										<div class="card-img-overlay d-flex align-items-start flex-column p-3">
											<!-- Card overlay bottom -->
											<div class="w-100 mt-auto">
												<a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Sports</a>
											</div>
										</div>
									</div>
									<div class="card-body p-0 pt-3">
										<h5 class="card-title"><a href="post-single-5.html" class="btn-link text-reset fw-bold">Skills that you can learn from business</a></h5>
									</div>
								</div>
								<!-- Card item END -->
								<!-- Card item START -->
								<div class="card">
									<!-- Card img -->
									<div class="position-relative">
										<img class="card-img" src="assets/images/blog/4by3/09.jpg" alt="Card image">
										<div class="card-img-overlay d-flex align-items-start flex-column p-3">
											<!-- Card overlay bottom -->
											<div class="w-100 mt-auto">
												<a href="#" class="badge text-bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
											</div>
										</div>
									</div>
									<div class="card-body p-0 pt-3">
										<h5 class="card-title"><a href="post-single-5.html" class="btn-link text-reset fw-bold">10 tell-tale signs you need to get a new business</a></h5>
									</div>
								</div>
								<!-- Card item END -->
							</div>
						</div>
					</div>
					
					<!-- Advertisement -->
					<div class="mt-4">
						<a href="#" class="d-block card-img-flash">
							<img src="assets/images/adv.png" alt="">
						</a>
					</div>
				</div>
			</div>
			<!-- Right sidebar END -->
		</div>
	</div>
</section>
<!-- =======================
Main END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<footer class="pb-0">
	<div class="container">
		<hr>
		<!-- Widgets START -->
		<div class="row pt-5">
			<!-- Footer Widget -->
			<div class="col-md-6 col-lg-4 mb-4">
				<img class="light-mode-item" src="assets/images/logo.svg" alt="logo">			
				<img class="dark-mode-item" src="assets/images/logo-light.svg" alt="logo">
				<p class="mt-3">The next-generation blog, news, and magazine theme for you to start sharing your stories today! This Bootstrap 5 based theme is ideal for all types of sites that deliver the news.</p>
				<div class="mt-4">©2023 <a href="https://www.webestica.com/" class="text-reset btn-link" target="_blank">Webestica</a>. All rights reserved
				</div>
			</div>

			<!-- Footer Widget -->
			<div class="col-md-6 col-lg-3 mb-4">
				<h5 class="mb-4">Navigation</h5>
				<div class="row">
					<div class="col-6">
						<ul class="nav flex-column">
							<li class="nav-item"><a class="nav-link pt-0" href="#">Features</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Style Guide</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Contact us</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Get Theme</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Support</a></li>
						</ul>
					</div>
 					<div class="col-6">
						<ul class="nav flex-column">
							<li class="nav-item"><a class="nav-link pt-0" href="#">News</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Career <span class="badge text-bg-danger ms-2">2 Job</span></a></li>
							<li class="nav-item"><a class="nav-link" href="#">Technology</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Startups</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Gadgets</a></li>
						</ul>
					</div>
				</div>
			</div>

			<!-- Footer Widget -->
			<div class="col-sm-6 col-lg-3 mb-4">
				<h5 class="mb-4">Browse by Tag</h5>
				<ul class="list-inline">
					<li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary-soft">Travel</a></li>
					<li class="list-inline-item"><a href="#" class="btn btn-sm btn-warning-soft">Business</a></li>
					<li class="list-inline-item"><a href="#" class="btn btn-sm btn-success-soft">Tech</a></li>
					<li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">Gadgets</a></li>
					<li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">Lifestyle</a></li>
					<li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary-soft">Vaccine</a></li>
					<li class="list-inline-item"><a href="#" class="btn btn-sm btn-warning-soft">Marketing</a></li>
					<li class="list-inline-item"><a href="#" class="btn btn-sm btn-success-soft">Sports</a></li>
					<li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">Covid-19</a></li>
					<li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">Politics</a></li>
				</ul>
			</div>

			<!-- Footer Widget -->
			<div class="col-sm-6 col-lg-2 mb-4">
				<h5 class="mb-4">Our Social handles</h5>
				<ul class="nav flex-column">
					<li class="nav-item"><a class="nav-link pt-0" href="#"><i class="fab fa-facebook-square fa-fw me-2 text-facebook"></i>Facebook</a></li>
					<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-twitter-square fa-fw me-2 text-twitter"></i>Twitter</a></li>
					<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-linkedin fa-fw me-2 text-linkedin"></i>Linkedin</a></li>
					<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-youtube-square fa-fw me-2 text-youtube"></i>YouTube</a></li>
				</ul>
			</div>
		</div>
		<!-- Widgets END -->
	</div>
</footer>
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

<!-- =======================
JS libraries, plugins and custom scripts -->

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/tiny-slider/tiny-slider.js"></script>
<script src="assets/vendor/sticky-js/sticky.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>

</body>
</html>