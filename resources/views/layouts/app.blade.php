<!DOCTYPE html>
<html lang="pl">
	<head>
        {{-- UserWay --}}
        <script src="https://cdn.userway.org/widget.js" data-account="USYwad0qta"></script>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-LW8159EGCL"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-LW8159EGCL');
        </script>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>WORK-ON7 - Włącz się na lepszą pracę</title>

		<meta name="keywords" content="projekt, projekt unijny, efs, szkolenia, dofinansowane, aktywizacja zawodowa" />
		<meta name="description" content="Projekt aktywizacji zawodowej finansowany z funduszy unijnych dla osób z woj. kujawsko-pomorskiego.">
		<meta name="author" content="Ośrodek Szkoleniowo-Wdrożeniowy">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">

        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Shadows+Into+Light&display=swap" rel="stylesheet">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/animate/animate.compat.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.min.css') }}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('css/theme.css') }}">
		<link rel="stylesheet" href="{{ asset('css/theme-elements.css') }}">
		<link rel="stylesheet" href="{{ asset('css/theme-blog.css') }}">
		<link rel="stylesheet" href="{{ asset('css/theme-shop.css') }}">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="{{ asset('vendor/circle-flip-slideshow/css/component.css') }}">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{ asset('css/skins/default.css') }}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        <!-- Meta Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1741843062695989');
            fbq('track', 'PageView');
            </script>
            <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1741843062695989&ev=PageView&noscript=1"
            /></noscript>
            <!-- End Meta Pixel Code -->

	</head>
	<body data-plugin-page-transition>

		<div class="body">
			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 45, 'stickySetTop': '-45px', 'stickyChangeLogo': true}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="{{ route('home') }}">
											<img alt="Work-ON" height="48" data-sticky-height="40" data-sticky-top="25" src="{{ asset('img/logo-workon.png') }}">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row pt-3">
									<nav class="header-nav-top">
										<ul class="nav nav-pills">
											<li class="nav-item nav-item-anim-icon d-none d-md-block ">
												<a class="nav-link" href="tel:+48509705517"><i class="fas fa-phone"></i> (+48) 509 705 517 </a>
											</li>
                                            <li class="nav-item nav-item-anim-icon d-none d-md-block">
												<a class="nav-link" href="mailto:projekt@work-on.pl"><i class="fas fa-envelope"></i> projekt@work-on.pl </a>
											</li>
										</ul>
									</nav>

								</div>
								<div class="header-row">
									<div class="header-nav pt-1">
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown">
														<a class="dropdown-item @if(request()->routeIs('home')) active @endif" href="{{ route('home') }}">Strona Główna</a>
													</li>

                                                    <li class="dropdown">
														<a class="dropdown-item dropdown-toggle @if(request()->routeIs('project.*')) active @endif" href="#">O projekcie</a>
														<ul class="dropdown-menu">
															<li>
																<a class="dropdown-item" href="{{ route('project.it') }}">Ścieżka IT </a>
															</li>
                                                            <li>
																<a class="dropdown-item" href="{{ route('project.fizjo') }}">Ścieżka FIZJO <span class="tip tip-primary">new</span></a>
															</li>
                                                            <li>
																<a class="dropdown-item" href="{{ route('rekrutacja') }}">Rektutacja </a>
															</li>
                                                            <li>
																<a class="dropdown-item" href="{{ route('project.faq') }}">FAQ </a>
															</li>
                                                            {{-- <li>
																<a class="dropdown-item" href="#">Targi pracy </a>
															</li>
                                                            <li>
																<a class="dropdown-item" href="#">Równość szans </a>
															</li> --}}
														</ul>
													</li>

                                                    <li class="dropdown">
														<a class="dropdown-item @if(request()->routeIs('rekrutacja')) active @endif" href="{{ route('rekrutacja') }}">Rekrutacja</a>
													</li>

													<li class="dropdown dropdown-mega">
														<a class="dropdown-item dropdown-toggle @if(request()->routeIs('course.*')) active @endif" href="#">Szkolenia</a>
														<ul class="dropdown-menu">
															<li>
																<div class="dropdown-mega-content">
																	<div class="row">
																		<div class="col-lg-6">
																			<span class="dropdown-mega-sub-title">Ścieżka IT</span>
																			<ul class="dropdown-mega-sub-nav">
																				<li><a class="dropdown-item" href="{{ route('course.cisco') }}">Administrator sieci Cisco (CCNA)</a></li>
																				<li><a class="dropdown-item" href="{{ route('course.frontend') }}">Front-end developer</a></li>
																				<li><a class="dropdown-item" href="{{ route('course.marketing') }}">Marketing internetowy </a></li>
                                                                                <li><a class="dropdown-item" href="{{ route('course.english') }}">Business English (TOEIC) </a></li>
																			</ul>
																		</div>
																		<div class="col-lg-6">
																			<span class="dropdown-mega-sub-title">Ścieżka FIZJO <span class="tip tip-primary">new</span></span>
																			<ul class="dropdown-mega-sub-nav">
																				<li><a class="dropdown-item" href="{{ route('course.mtg') }}">Masaż Tkanek Głębokich</a></li>
																				<li><a class="dropdown-item" href="{{ route('course.iastm') }}">IASTM - kurs terapii narzędziowej</a></li>
																				<li><a class="dropdown-item" href="{{ route('course.rocktape') }}">RockTape - kurs tapingu </a></li>
																			</ul>
																		</div>

																	</div>
																</div>
															</li>
														</ul>
													</li>

                                                    <li class="dropdown">
														<a class="dropdown-item @if(request()->routeIs('contact')) active @endif" href="{{ route('contact') }}">Kontakt</a>
													</li>
												</ul>
											</nav>
										</div>
										<ul class="header-social-icons social-icons d-none d-sm-block">
											<li class="social-icons-facebook"><a href="https://www.facebook.com/workonacademy" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
											<li class="social-icons-instagram ms-1"><a href="https://www.instagram.com/projekt_work_on/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
										</ul>
										<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>

                    <div class="container py-0">
                        <img src="{{ asset('img/logo_ue_poziom_kolor.jpg') }}" class="img-fluid" alt="Logo UE FEKP">
                    </div>

				</div>
			</header>

            @yield('content')

			<footer id="footer">
				<div class="container">
					<div class="footer-ribbon">
						<span>Dołącz do projektu...</span>
					</div>
					<div class="row py-5 my-4">
						<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
							<h5 class="text-3 mb-3">Menu</h5>
							<ul class="list-unstyled mb-0">
								<li class="mb-2 pb-1">
									<a href="{{ route('home') }}">
										<p class="text-3 text-color-light opacity-8 mb-0"><i class="fas fa-angle-right text-color-primary"></i><strong class="ms-2 font-weight-semibold">Strona główna</strong></p>
									</a>
								</li>
								<li class="mb-2 pb-1">
									<a href="{{ route('project.it') }}">
										<p class="text-3 text-color-light opacity-8 mb-0"><i class="fas fa-angle-right text-color-primary"></i><strong class="ms-2 font-weight-semibold">Ścieżka IT</strong></p>
									</a>
								</li>
                                <li class="mb-2 pb-1">
									<a href="{{ route('project.fizjo') }}">
										<p class="text-3 text-color-light opacity-8 mb-0"><i class="fas fa-angle-right text-color-primary"></i><strong class="ms-2 font-weight-semibold">Ścieżka FIZJO</strong></p>
									</a>
								</li>
								<li class="mb-2 pb-1">
									<a href="{{ route('rekrutacja') }}">
										<p class="text-3 text-color-light opacity-8 mb-0"><i class="fas fa-angle-right text-color-primary"></i><strong class="ms-2 font-weight-semibold">Rekrutacja</strong></p>
									</a>
								</li>
                                <li class="mb-2 pb-1">
									<a href="{{ route('contact') }}">
										<p class="text-3 text-color-light opacity-8 mb-0"><i class="fas fa-angle-right text-color-primary"></i><strong class="ms-2 font-weight-semibold">Kontakt</strong></p>
									</a>
								</li>
							</ul>
						</div>
                        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
							<h5 class="text-3 mb-3">Szkolenia IT</h5>
							<ul class="list-unstyled mb-0">
								<li class="mb-2 pb-1">
									<a href="{{ route('course.cisco') }}">
										<p class="text-3 text-color-light opacity-8 mb-0"><i class="fas fa-angle-right text-color-primary"></i><strong class="ms-2 font-weight-semibold">Administrator sieci Cisco</strong></p>
									</a>
								</li>
								<li class="mb-2 pb-1">
									<a href="{{ route('course.frontend') }}">
										<p class="text-3 text-color-light opacity-8 mb-0"><i class="fas fa-angle-right text-color-primary"></i><strong class="ms-2 font-weight-semibold">Front-end developer</strong></p>
									</a>
								</li>
								<li class="mb-2 pb-1">
									<a href="{{ route('course.marketing') }}">
										<p class="text-3 text-color-light opacity-8 mb-0"><i class="fas fa-angle-right text-color-primary"></i><strong class="ms-2 font-weight-semibold">Marketing internetowy</strong></p>
									</a>
								</li>
                                <li class="mb-2 pb-1">
									<a href="{{ route('course.english') }}">
										<p class="text-3 text-color-light opacity-8 mb-0"><i class="fas fa-angle-right text-color-primary"></i><strong class="ms-2 font-weight-semibold">Business English </strong></p>
									</a>
								</li>

							</ul>
						</div>
						<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
							<h5 class="text-3 mb-3">Szkolenia FIZJO</h5>
							<ul class="list-unstyled mb-0">
								<li class="mb-2 pb-1">
									<a href="{{ route('course.mtg') }}">
										<p class="text-3 text-color-light opacity-8 mb-0"><i class="fas fa-angle-right text-color-primary"></i><strong class="ms-2 font-weight-semibold">Masaż Tkanek Głębokich</strong></p>
									</a>
								</li>
								<li class="mb-2 pb-1">
									<a href="{{ route('course.iastm') }}">
										<p class="text-3 text-color-light opacity-8 mb-0"><i class="fas fa-angle-right text-color-primary"></i><strong class="ms-2 font-weight-semibold">IASTM - kurs terapii narzędziowej</strong></p>
									</a>
								</li>
								<li>
									<a href="{{ route('course.rocktape') }}">
										<p class="text-3 text-color-light opacity-8 mb-0"><i class="fas fa-angle-right text-color-primary"></i><strong class="ms-2 font-weight-semibold">RockTape - kurs tapingu</strong></p>
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
							<div class="contact-details">
								<h5 class="text-3 mb-3">Kontakt</h5>
								<ul class="list list-icons list-icons-lg">
									<li class="mb-1"><i class="far fa-building text-color-primary"></i><p class="m-0">Ośrodek Szkoleniowo-Wdrożeniowy</p></li>
									<li class="mb-1"><i class="fas fa-map-marker-alt text-color-primary"></i><p class="m-0"><a href="https://maps.app.goo.gl/FxffK1gPzPAoCHwg7" target="_blank">ul. Piotrowskiego 11/36,<br>85-098 Bydgoszcz</a></p></li>
									<li class="mb-1"><i class="fa-solid fa-phone text-color-primary"></i><p class="m-0"><a href="tel:+48509705517">(+48) 509 705 517</a></p></li>
									<li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:projekt@work-on.pl">projekt@work-on.pl</a></p></li>
								</ul>
                                <ul class="social-icons">
                                    <li class="social-icons-envelope"><a href="tel:+48509705517" target="_blank" title="Zadzwoń"><i class="fa-solid fa-phone"></i></a></li>
                                    <li class="social-icons-envelope ms-1"><a href="mailto:projekt@work-on.pl" target="_blank" title="Napisz do nas"><i class="fas fa-envelope"></i></a></li>
                                    <li class="social-icons-facebook ms-1"><a href="https://www.facebook.com/workonacademy" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-icons-instagram ms-1"><a href="https://www.instagram.com/projekt_work_on/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                </ul>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
								<a href="https://www.osw.bydgoszcz.pl/" target="_blank" class="logo pe-0 pe-lg-3">
									<img alt="Logo OSW" src="{{ asset('img/logo-footer-osw.png') }}" class="opacity-5" height="22" data-plugin-options="{'appearEffect': 'fadeIn'}">
								</a>
							</div>
							<div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                                <nav id="sub-menu">
									<ul>
										<li>Copyright 2024 © <a href="https://www.osw.bydgoszcz.pl/" target="_blank" class="ms-1 text-decoration-none"> Ośrodek Szkoleniowo-Wdrożeniowy</a></li>
									</ul>
								</nav>
							</div>
							<div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
								<nav id="sub-menu">
									<ul>
										<li><i class="fas fa-angle-right"></i> Designed by <a href="https://www.freepik.com" target="_blank" class="ms-1 text-decoration-none">Freepik</a></li>
										<li><i class="fas fa-angle-right"></i><a href="documents/regulamin_workon7.pdf" target="_blank" class="ms-1 text-decoration-none"> Regulamin projektu</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="{{ asset('vendor/plugins/js/plugins.min.js') }}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('js/theme.js') }}"></script>

		<!-- Circle Flip Slideshow Script -->
		<script src="{{ asset('vendor/circle-flip-slideshow/js/jquery.flipshow.min.js') }}"></script>

		<!-- Current Page Views -->
		<script src="{{ asset('js/views/view.home.js') }}"></script>

		<!-- Theme Custom -->
		<script src="{{ asset('js/custom.js') }}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{ asset('js/theme.init.js') }}"></script>

        @stack('scripts')

	</body>
</html>
