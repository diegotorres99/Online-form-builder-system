
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Globals Plus Formularios</title>
	<meta name="description" content="Description">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Material+Icons%7CMaterial+Icons+Outlined%7CMaterial+Icons+Two+Tone%7CMaterial+Icons+Round%7CMaterial+Icons+Sharp" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Istok+Web:400,400i,700,700i%7CMontserrat:400,400i,500,500i,600,600i,700,700i&display=swap&subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="css/style.min.css">
	<link rel="stylesheet" href="../SCSS/style.css" type="text/css">
</head>
<style>

@font-face
{
   font-family: "../fonts/../Oraqle Script";
   src: url("fuentefancy.eot");
   src: url("fuentefancy.eot?#amocristalab") format("embedded-opentype"),
        url("fuentefancy.woff") format("woff"),
        url("fuentefancy.ttf") format("truetype"),
        url("fuentefancy.svg#IDdelafuente") format("svg");
}

h1
{
   font-family: "Oraqle Script";
    font-size: 418%;
}
h2
{
   font-family: "Oraqle Script";
    font-size: 350%;
}

h3
{
   font-family: "Oraqle Script";
    font-size: 300%;
}
</style>
<body style="background-color:#F0F4F8;"> 

	<main class="main">
		
		<div class="main-inner">

			<!-- Begin mobile main menu -->
			<nav class="mob-main-mnu">
				<div class="mob-main-mnu-content">
					<ul class="mob-main-mnu-list">
						<li>
							<a href="index.html">Inicio</a>
							<div class="mmm-btn"><i class="material-icons md-24">expand_more</i></div>
							<div class="mob-main-submnu">
								<div class="mob-main-submnu-item">
									<ul>
										<li><a href="index.html">Inicio 1</a></li>
										<li><a href="home-2.html">Inicio 2</a></li>
										<li><a href="home-3.html">Inicio 3</a></li>
										<li><a href="home-4.html">Inicio 4</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li><a href="about-us.html">Sobre nosotros</a></li>
						<li>
							<a href="services.html">Servicios</a>
							<div class="mmm-btn"><i class="material-icons md-24">expand_more</i></div>
							<div class="mob-main-submnu">
								<div class="mob-main-submnu-item">
									<ul>
										<li><a href="services.html">Servicios 1</a></li>
										<li><a href="services-2.html">Servicios 2</a></li>
										<li><a href="services-3.html">Servicios 3</a></li>
										<li><a href="services-4.html">Servicios 4</a></li>
										
									</ul>
								</div>
							</div>
						</li>
						<li>
							<a href="#!">Formularios</a>
							<div class="mmm-btn"><i class="material-icons md-24">expand_more</i></div>
							<div class="mob-main-submnu">
								<div class="mob-main-submnu-item">
									<h5 class="mob-main-submnu-item-title">Features</h5>
									<ul>
										<li><a href="ui.html">UI elements</a></li>
						
									</ul>
								</div>
								<div class="mob-main-submnu-item">
									<h5 class="mob-main-submnu-item-title">Additional Pages</h5>
									<ul>
										<li><a href="testimonials.html">Testimonials</a></li>
					
									</ul>
								</div>
							</div>
						</li>
						<li>
							<a href="gallery.html">Galeria</a>
							<div class="mmm-btn"><i class="material-icons md-24">expand_more</i></div>
							<div class="mob-main-submnu">
								<div class="mob-main-submnu-item">
									<ul>
										<li><a href="gallery.html">Grid Padding Gallery</a></li>
										<li><a href="gallery-2.html">Grid No Padding Gallery</a></li>
										<li><a href="gallery-3.html">Grid Masonry</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<a href="blog.html">Blog</a>
							<div class="mmm-btn"><i class="material-icons md-24">expand_more</i></div>
							<div class="mob-main-submnu">
								<div class="mob-main-submnu-item">
									<ul>
										<li><a href="blog.html">List Blog</a></li>
										<li><a href="blog-grid.html">Grid Blog</a></li>
										<li><a href="blog-grid-2.html">Grid Blog 2</a></li>
										<li><a href="blog-grid-3.html">Grid Blog 3</a></li>
										<li><a href="blog-post.html">Blog Post</a></li>
										<li><a href="blog-timeline.html">Timeline</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<a href="contact-us.html">Contacto</a>
							<div class="mmm-btn"><i class="material-icons md-24">expand_more</i></div>
							<div class="mob-main-submnu">
								<div class="mob-main-submnu-item">
									<ul>
										<li><a href="contact-us.html">Dev. Luis Diego Torres</a></li>
										<li><a href="contact-us-2.html">Contacto</a></li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="mob-main-mnu-footer">
					<ul class="mob-main-mnu-lang">
						<li class="active"><a href="#!"><span>En</span></a></li>
						<li><a href="#!"><span>Sp</span></a></li>
						<li><a href="#!"><span>It</span></a></li>
						<li><a href="#!"><span>Uk</span></a></li>
						<li><a href="#!"><span>Ru</span></a></li>
					</ul>
				</div>
			</nav><!-- End mobile main menu -->
			
			<!-- Begin header -->
			<header class="header">
				<!-- Begin header top -->
				<nav class="header-top">
					<div class="container">
						<div class="row align-items-center justify-content-between">
							<div class="col-auto">
								<!-- Begin header top info -->
								<ul class="header-top-info">
									<li>
										<a href="mailto:luis.torres.alvarez@cuc.cr">
											<i class="material-icons">email</i>
											<span>luis.torres.alvarez@cuc.cr</span>
										</a>
									</li>
									<li>
										<b>24/7 Support:</b>
										<a href="#!" class="formingHrefTel">506-8993-6404</a>
									</li>
								</ul><!-- Ennd header top info -->
							</div>
							<div class="col-auto">
								<div class="header-top-links">
									<!-- Begin social links -->
									<ul class="social-links">
										<li>
											<a href="#!" title="Facebook">
												<svg viewBox="0 0 320 512"><use xlink:href="img/sprite.svg#facebook-ico"></use></svg>
											</a>
										</li>
										<li>
											<a href="#!" title="Instagram">
												<svg viewBox="0 0 448 512"><use xlink:href="img/sprite.svg#instagram-ico"></use></svg>
											</a>
										</li>
										<li>
											<a href="#!" title="LinkedIn">
												<svg viewBox="0 0 448 512"><use xlink:href="img/sprite.svg#linkedin-in-ico"></use></svg>
											</a>
										</li>
										<li>
											<a href="#!" title="Twitter">
												<svg viewBox="0 0 512 512"><use xlink:href="img/sprite.svg#twitter-ico"></use></svg>
											</a>
										</li>
									</ul><!-- End social links -->
									<div class="header-top-btn">
										<a href="#??allback_popup" class="header-call-back-link ??allback_popup_open">
											<i class="material-icons">ring_volume</i>
											<span>Callback</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</nav><!-- End header top -->
				<!-- Begin header fixed -->
				<nav class="header-fixed">
					<div class="container">
						<div class="row flex-nowrap align-items-center justify-content-between">
							<div class="col-auto d-block d-lg-none header-fixed-col">
								<div class="main-mnu-btn">
									<span class="bar bar-1"></span>
									<span class="bar bar-2"></span>
									<span class="bar bar-3"></span>
									<span class="bar bar-4"></span>
								</div>
							</div>
							<div class="col-auto header-fixed-col">
								<!-- Begin logo -->
								<a href="/" class="logo logo-ico-widht-text" title="Globals+ Formularios">
									<img class="lazy logo-ico" data-src="img/logo-ico.png" width="36" height="35" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
									<span class="logo-text">Globals<span span style="color: #a1cc1b">+</span> Formularios</span>
								</a>
							</div>
							<div class="col-lg col-auto col-static header-fixed-col">
								<div class="row flex-nowrap align-items-center justify-content-end">
									<div class="col-auto header-fixed-col d-none d-lg-block col-static">
										<!-- Begin main menu -->
										<nav class="main-mnu">
											<ul class="main-mnu-list">
												<li class="main-mnu-item-has-child">
													<a href="index.html" data-title="Inicio">
														<span>Inicio</span>
														<i class="material-icons">expand_more</i>
													</a>
													<ul>
														<li><a href="index.html" data-title="Home 1"><span>Inicio 1</span></a></li>
														<li><a href="home-2.html" data-title="Home 2"><span>Inicio 2</span></a></li>
														<li><a href="home-3.html" data-title="Home 3"><span>Inicio 3</span></a></li>
														<li><a href="home-4.html" data-title="Home 4"><span>Inicio 4</span></a></li>
													</ul>
												</li>
												<li>
													<a href="about-us.html" data-title="Sobre nosotros">
														<span>Sobre nosotros</span>
													</a>
												</li>
												<li class="main-mnu-item-has-child">
													<a href="services.html" data-title="Formularios">
														<span>Formularios</span>
														<i class="material-icons">expand_more</i>
													</a>
													<ul>
														<li><a href="services.html" data-title="Formularios"><span>Formularios 1</span></a></li>
														<li><a href="services-2.html" data-title="Formularios 2"><span>Formularios 2</span></a></li>
														<li><a href="services-3.html" data-title="Formularios 3"><span>Formularios 3</span></a></li>
														<li><a href="services-4.html" data-title="Formularios 4"><span>Formularios 4</span></a></li>
														<li><a href="single-services.html" data-title="Single service"><span>Crear Formulario</span></a></li>
													</ul>
												</li>
												<li class="main-mnu-item-has-child open main-mnu-item-mega-mnu">
													<a href="#!" data-title="Pages">
														<span>Servicios</span>
														<i class="material-icons">expand_more</i>
													</a>
													<div class="main-sub-mnu">
														<div class="container">
															<div class="row">
																<div class="col-lg-9">
																	<div class="row main-sub-mnu-links">
																		<div class="col-6 mega-mnu-item">
																			<h5 class="mega-mnu-title">Features</h5>
																			<ul class="main-sub-mnu-list">
																				<li><a href="ui.html" data-title="UI elements"><span>UI elements</span><div class="mnu-label">hot</div></a></li>
																				<li><a href="index-6.html" data-title="Header/Footer Default"><span>Header/Footer Default</span></a></li>
																				<li><a href="index-2.html" data-title="Header/Footer Minimal"><span>Header/Footer Minimal</span></a></li>
																				<li><a href="index-3.html" data-title="Header/Footer Center"><span>Header/Footer Center</span></a></li>
																				<li><a href="index-4.html" data-title="Footer Light"><span>Footer Light</span></a></li>
																				<li><a href="index-5.html" data-title="Footer Minimal Light"><span>Footer Minimal Light</span></a></li>
																				<li><a href="index-6.html" data-title="Footer Widget Dark"><span>Footer Widget Dark</span></a></li>
																				<li><a href="index-7.html" data-title="Footer Widget Light"><span>Footer Widget Light</span></a></li>
																			</ul>
																		</div>
																		<div class="col-6 mega-mnu-item">
																			<h5 class="mega-mnu-title">Additional Pages</h5>
																			<ul class="main-sub-mnu-list">
																				<li><a href="coming-soon.html" data-title="Coming Soon"><span>Coming Soon</span></a></li>
																				<li><a href="team.html" data-title="Our Team"><span>Our Team</span></a></li>
																				<li><a href="pricing.html" data-title="Pricing"><span>Pricing</span></a></li>
																				<li><a href="team-2.html" data-title="Our Team"><span>Our Team 2</span></a></li>
																				<li><a href="single-project.html" data-title="Single project"><span>Single project</span><div class="mnu-label">new</div></a></li>
																				<li><a href="faq.html" data-title="FAQ"><span>FAQ</span></a></li>
																				<li><a href="testimonials.html" data-title="Testimonials"><span>Testimonials</span></a></li>
																				<li><a href="search-results.html" data-title="Search results"><span>Search results</span></a></li>
																				<li><a href="privacy-policy.html" data-title="Privacy policy"><span>Privacy policy</span></a></li>
																				<li><a href="brands.html" data-title="Brands"><span>Brands</span></a></li>
																				<li><a href="terms-and-conditions.html" data-title="Terms and Conditions"><span>Terms and Conditions</span></a></li>
																				<li><a href="forms.html" data-title="Forms"><span>Forms</span></a></li>
																				<li><a href="404.html" data-title="404 Page"><span>404 Page</span></a></li>
																				<li><a href="404-2.html" data-title="404 Page 2"><span>404 Page 2</span><div class="mnu-label">new</div></a></li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="col-lg-3 main-sub-mnu-banner">
																	<div class="main-sub-mnu-slider" data-flickity='{ "bgLazyLoad": 1, "bgLazyLoad": true, "fade": true, "prevNextButtons": true, "pageDots": false, "pauseAutoPlayOnHover": false }'>
																		<a href="#!" class="mnu-slider-item align-items-end" data-flickity-bg-lazyload="img/mnu-banner.jpg">
																			<div>
																				<h5 class="mnu-slider-item-subtitle">UX AND DESIGN</h5>
																				<h4 class="mnu-slider-item-title">Mobile App Finance</h4>
																			</div>
																		</a>
																		<a href="#!" class="mnu-slider-item align-items-end" data-flickity-bg-lazyload="img/mnu-banner.jpg">
																			<div>
																				<h5 class="mnu-slider-item-subtitle">UI AND DESIGN</h5>
																				<h4 class="mnu-slider-item-title">Mobile App</h4>
																			</div>
																		</a>
																		<a href="#!" class="mnu-slider-item align-items-end" data-flickity-bg-lazyload="img/mnu-banner.jpg">
																			<div>
																				<h5 class="mnu-slider-item-subtitle">UX AND DESIGN</h5>
																				<h4 class="mnu-slider-item-title">Web App</h4>
																			</div>
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</li>
										
                                        
												<li class="main-mnu-item-has-child">
													<a href="gallery.html" data-title="Gallery">
														<span>Gallery</span>
														<i class="material-icons">expand_more</i>
													</a>
													<ul>
														<li><a href="gallery.html" data-title="Grid Padding Gallery"><span>Grid Padding Gallery</span></a></li>
														<li><a href="gallery-2.html" data-title="Grid No Padding Gallery"><span>Grid No Padding Gallery</span></a></li>
														<li><a href="gallery-3.html" data-title="Grid Masonry"><span>Grid Masonry</span></a></li>
													</ul>
												</li>
                                                <li>
													<a href="#" data-title="Log in">
														<span>Log in</span>
													</a>
												</li>
											</ul>
										</nav><!-- End main menu -->
									</div>
									<div class="col-auto header-fixed-col d-none d-lg-block">
	
									</div>
									<div class="col-auto header-fixed-col col-static">
										<!-- Begin header search -->
										<div class="header-search">
											<div class="header-search-ico">
												<i class="material-icons md-22 header-search-ico-search">search</i>
												<i class="material-icons md-22 header-search-ico-close">close</i>
											</div>
											<form action="#!" method="post" class="header-search-form">
												<div class="container">
													<div class="row">
														<div class="col-12">
															<div class="form-field">
																<label for="field-search" class="form-field-label">Search...</label>
																<input type="search" class="form-field-input" name="Search" value="" autocomplete="off" required="required" id="field-search">
																<button type="submit" class="header-search-btn"><i class="material-icons md-22">search</i></button>
															</div>
														</div>
													</div>
												</div>
											</form>
										</div><!-- End header search -->
									</div>
									<div class="col-auto d-block d-lg-none col-static header-fixed-col">
										<div class="header-navbar">
											<div class="header-navbar-btn">
												<i class="material-icons md-24">more_vert</i>
											</div>
											<ul class="header-navbar-content">
												<li>
													<a href="mailto:mail@example.com">
														<i class="material-icons">email</i>
														<span>mail@example.com</span>
													</a>
												</li>
												<li>
													<b>24/7 Support:</b>
													<a href="#!" class="formingHrefTel">1-888-777-1234</a>
												</li>
												<li>
													<a href="#??allback_popup" class="header-call-back-link ??allback_popup_open">
														<i class="material-icons">ring_volume</i>
														<span>Callback</span>
													</a>
												</li>
												<li>
													<!-- Begin social links -->
													<ul class="social-links">
														<li>
															<a href="#!" title="Facebook">
																<svg viewBox="0 0 320 512"><use xlink:href="img/sprite.svg#facebook-ico"></use></svg>
															</a>
														</li>
														<li>
															<a href="#!" title="Instagram">
																<svg viewBox="0 0 448 512"><use xlink:href="img/sprite.svg#instagram-ico"></use></svg>
															</a>
														</li>
														<li>
															<a href="#!" title="LinkedIn">
																<svg viewBox="0 0 448 512"><use xlink:href="img/sprite.svg#linkedin-in-ico"></use></svg>
															</a>
														</li>
														<li>
															<a href="#!" title="Twitter">
																<svg viewBox="0 0 512 512"><use xlink:href="img/sprite.svg#twitter-ico"></use></svg>
															</a>
														</li>
													</ul><!-- End social links -->
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</nav><!-- End header fixed -->
			</header><!-- End header -->

			<!-- Begin intro -->
			<div class="section-bg intro">
				<div class="intro-slider flickity-dots-absolute" data-flickity='{ "bgLazyLoad": 1, "bgLazyLoad": true, "fade": true, "prevNextButtons": false, "autoPlay": 8000, "pauseAutoPlayOnHover": false }'>
					<div class="intro-slider-item" data-flickity-bg-lazyload="img/intro-img1.jpg">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="intro-content">
										<h1 >Globals<span span style="color: #a1cc1b">+</span> Formularios</h1>
										<div class="intro-desc">
											<p>Formularios Empresariales a la Medida con Trazabilidad, Gesti??n y Control de Tickets y Datos en todo Momento !</p>
										</div>
										<div class="intro-btns">
											<a href="login.php" class="btn btn-with-icon btn-small ripple">
												<span> Entrar al Sitio</span>
												<svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9"><use xlink:href="img/sprite.svg#arrow-right"></use></svg>
											</a>
											<a href="nuevo_usuario.php" class="btn btn-with-icon btn-border btn-small ripple">
												<span>Registrate</span>
												<svg class="btn-icon-right" viewBox="0 0 13 9" width="10" height="9"><use xlink:href="img/sprite.svg#arrow-right"></use></svg>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="intro-slider-item" data-flickity-bg-lazyload="img/intro-img2.jpg">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="intro-content">
										<h2 ><span span style="color: #a1cc1b">Estad??sticas</span> Utilizando  TI</h2>
										<div class="intro-desc">
											<p>Utilizamos el Avance Tecnol??gico para utilizar la Informaci??n que Recolectas en la Toma de Decisiones Estrat??gicas.</p>
										</div>
										<div class="intro-btns">
										<a href="login.php" class="btn btn-with-icon btn-small ripple">
												<span> Entrar al Sitio</span>
												<svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9"><use xlink:href="img/sprite.svg#arrow-right"></use></svg>
											</a>
											<a href="nuevo_usuario.php" class="btn btn-with-icon btn-border btn-small ripple">
												<span>Registrate</span>
												<svg class="btn-icon-right" viewBox="0 0 13 9" width="10" height="9"><use xlink:href="img/sprite.svg#arrow-right"></use></svg>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="intro-slider-item" data-flickity-bg-lazyload="img/intro-img3.jpg">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="intro-content">
										<h2 >Desde Cualquier Lugar del <span span style="color: #a1cc1b">Mundo</span></h2>
										<div class="intro-desc">
											<p>Gesti??n, Administraci??n  y Seguimiento de tus Formularios desde cualquier lugar y momento.</p>
										</div>
										<div class="intro-btns">
										<a href="login.php" class="btn btn-with-icon btn-small ripple">
												<span> Entrar al Sitio</span>
												<svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9"><use xlink:href="img/sprite.svg#arrow-right"></use></svg>
											</a>
											<a href="nuevo_usuario.php" class="btn btn-with-icon btn-border btn-small ripple">
												<span>Registrate</span>
												<svg class="btn-icon-right" viewBox="0 0 13 9" width="10" height="9"><use xlink:href="img/sprite.svg#arrow-right"></use></svg>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- End intro -->
			<br><br>
			<center><h4 style="color: black">Nuestros Servicios<span span="" style="color: #a1cc1b">+</span></h1></center>

<!-- Begin our Diagonal Section -->
<div class="wrapper">
            <br><br><br><br>

            <section>
                <div class="section-content has-diagonal">
                   	<!-- Begin our services -->
			<section class="section services">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="wrapp-section-title section-title-center">
								<div class="section-subtitle">Areas a las que servimos</div>
								<h2 class="section-title">Principales Servicios</h2>
							</div> 
						</div>
						<div class="col-lg-4 col-md-6 col-12 item">
							<!-- Begin services item -->
							<a href="single-services.html" class="services-item item-style">
								<div class="services-item-ico">
									<i class="material-icons material-icons-outlined md-48">settings</i>
								</div>
								<div class="services-item-ico-bg">
									<i class="material-icons material-icons-outlined">settings</i>
								</div>
								<h4 class="services-item-title">Formularios a la Medida</h4>
								<div class="services-item-desc">Con Globals<span span style="color: #a1cc1b">+</span> tus formularios cobran vida: la edici??n y las herramientas de trazabilidad permite que sea m??s f??cil la creacion de Formularios y adem??s compartirlos de manera simple.</div>
							</a><!-- End services item -->
						</div>
						<div class="col-lg-4 col-md-6 col-12 item">
							<!-- Begin services item -->
							<a href="single-services.html" class="services-item item-style">
								<div class="services-item-ico">
									<i class="material-icons material-icons-outlined md-48">perm_phone_msg</i>
								</div>
								<div class="services-item-ico-bg">
									<i class="material-icons material-icons-outlined">perm_phone_msg</i>
								</div>
								<h4 class="services-item-title">Help Desk Solutions</h4>
								<div class="services-item-desc">Ayuda a equipos a entregar fant??sticas experiencias de servicio, conoce como trabajan tus colaboradores y Acelera el trabajo de desarrollo cr??tico e implementa cambios f??cilmente.</div>
							</a><!-- End services item -->
						</div>
						<div class="col-lg-4 col-md-12 col-12 item">
							<!-- Begin services item -->
							<a href="single-services.html" class="services-item item-style">
								<div class="services-item-ico">
									<i class="material-icons material-icons-outlined md-48">cloud_download</i>
								</div>
								<div class="services-item-ico-bg">
									<i class="material-icons material-icons-outlined">cloud_download</i>
								</div>
								<h4 class="services-item-title">Seguridad y Trazabilidad</h4>
								<div class="services-item-desc">Registros interactivos que permiten monitorear el progreso de resoluci??n de las solicitudes de los clientes, permiten que varios agentes colaboren en tareas complejas y proporcionan una visi??n contextual de la experiencia de cada cliente, y un sistema de gesti??n.</div>
							</a><!-- End services item -->
						</div>
						<div class="col-12">
							<div class="section-btns justify-content-center">
								<a href="services.html" class="btn btn-with-icon btn-w240 ripple">
									<span>See All Services</span>
									<svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9"><use xlink:href="img/sprite.svg#arrow-right"></use></svg>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section><!-- End our serveces -->
                </div>
                <div class="section-mask bg-option-2 has-parallax"></div>
            </section>
            <section>
                <div class="section-content has-padding">
                    <h1>Gracias</h1>
                </div>
            </section>
        </div>

		

			<!-- Begin why choose us -->
			<section class="section section-bg">
				<div class="container">
					<div class="row items">
						<div class="col-12">
							<div class="wrapp-section-title section-title-center">
								<div class="section-subtitle">some reasons</div>
								<h2 class="section-title">Why Choose Us</h2>
							</div> 
						</div>
						<div class="col-lg-4 col-md-6 col-12 item">
							<!-- Begin choose us item -->
							<div class="advantages-item">
								<div class="advantages-item-count">01</div>
								<div class="advantages-item-info">
									<h4 class="advantages-item-title">High Quality Hardware</h4>
									<div class="advantages-item-desc">
										<p>We use top-notch hardware to develop the most efficient apps for our customers</p>
									</div>
								</div>
							</div><!-- End choose us item -->
						</div>
						<div class="col-lg-4 col-md-6 col-12 item">
							<!-- Begin choose us item -->
							<div class="advantages-item">
								<div class="advantages-item-count">02</div>
								<div class="advantages-item-info">
									<h4 class="advantages-item-title">Dedicated 24\7 Support</h4>
									<div class="advantages-item-desc">
										<p>You can rely on our 24/7 tech support that will gladly solve any app issue you may have.</p>
									</div>
								</div>
							</div><!-- End choose us item -->
						</div>
						<div class="col-lg-4 col-md-6 col-12 item">
							<!-- Begin choose us item -->
							<div class="advantages-item">
								<div class="advantages-item-count">03</div>
								<div class="advantages-item-info">
									<h4 class="advantages-item-title">30-Day Money-back Guarantee</h4>
									<div class="advantages-item-desc">
										<p>If you are not satisfied with our apps, we will return your money in the first 30 days.</p>
									</div>
								</div>
							</div><!-- End choose us item -->
						</div>
						<div class="col-lg-4 col-md-6 col-12 item">
							<!-- Begin choose us item -->
							<div class="advantages-item">
								<div class="advantages-item-count">04</div>
								<div class="advantages-item-info">
									<h4 class="advantages-item-title">Agile and Fast Working Style</h4>
									<div class="advantages-item-desc">
										<p>This type of approach to our work helps our specialists to quickly develop better apps.</p>
									</div>
								</div>
							</div><!-- End choose us item -->
						</div>
						<div class="col-lg-4 col-md-6 col-12 item">
							<!-- Begin choose us item -->
							<div class="advantages-item">
								<div class="advantages-item-count">05</div>
								<div class="advantages-item-info">
									<h4 class="advantages-item-title">Some Apps <br> are Free</h4>
									<div class="advantages-item-desc">
										<p>We also develop free apps that can be downloaded online without any payments.</p>
									</div>
								</div>
							</div><!-- End choose us item -->
						</div>
						<div class="col-lg-4 col-md-6 col-12 item">
							<!-- Begin choose us item -->
							<div class="advantages-item">
								<div class="advantages-item-count">06</div>
								<div class="advantages-item-info">
									<h4 class="advantages-item-title">High Level of Usability</h4>
									<div class="advantages-item-desc">
										<p>All our products have high usability allowing users to easily operate the apps.</p>
									</div>
								</div>
							</div><!-- End choose us item -->
						</div>
					</div>
				</div>
			</section><!-- End why choose us -->



		

			<!-- Begin latest news -->
			<section class="section section-bg">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="wrapp-section-title section-title-center">
								<div class="section-subtitle">Informacion</div>
								<h2 class="section-title">Nuevo</h2>
							</div> 
						</div>
						<div class="col-lg-4 col-md-6 col-12 item">
							<!-- Begin news item -->
							<article class="news-item item-style">
								<a href="blog-post.html" class="news-item-img">
									<img data-src="img/news-img-1.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
								</a>
								<div class="news-item-info">
									<div class="news-item-date">07/01/2020</div>
									<h4 class="news-item-title item-title">
										<a href="blog-post.html" title="Benefits Of Async/Await">Benefits Of Async/Await</a>
									</h4>
									<div class="news-item-desc">
										<p>Asynchronous functions are a good and bad thing in JavaScript.</p>
									</div>
								</div>
							</article><!-- End news item -->
						</div>
						<div class="col-lg-4 col-md-6 col-12 item">
							<!-- Begin news item -->
							<article class="news-item item-style">
								<a href="blog-post.html" class="news-item-img">
									<img data-src="img/news-img-2.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
								</a>
								<div class="news-item-info">
									<div class="news-item-date">05/01/2020</div>
									<h4 class="news-item-title item-title">
										<a href="blog-post.html" title="Key Considerations Of IPaaS">Key Considerations Of IPaaS</a>
									</h4>
									<div class="news-item-desc">
										<p>Digital transformation requires cloud appropriate adoption</p>
									</div>
								</div>
							</article><!-- End news item -->
						</div>
						<div class="col-lg-4 col-md-6 col-12 item">
							<!-- Begin news item -->
							<article class="news-item item-style">
								<a href="blog-post.html" class="news-item-img">
									<img data-src="img/news-img-3.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
								</a>
								<div class="news-item-info">
									<div class="news-item-date">01/01/2020</div>
									<h4 class="news-item-title item-title">
										<a href="blog-post.html" title="Hibernate Query Language">Hibernate Query Language</a>
									</h4>
									<div class="news-item-desc">
										<p>In this tutorial, we will discuss the Hibernate Query Language. </p>
									</div>
								</div>
							</article><!-- End news item -->
						</div>
						<div class="col-12">
							<div class="section-btns justify-content-center">
								<a href="blog.html" class="btn btn-with-icon btn-w240 ripple">
									<span>See All News</span>
									<svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9"><use xlink:href="img/sprite.svg#arrow-right"></use></svg>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section><!-- End latest news -->

		</div>

		<!-- Begin footer -->
		<footer class="footer">
			<div class="footer-main">
				<div class="container">
					<div class="row items">
						<div class="col-xl-3 col-lg-3 col-md-5 col-12 item">
							<!-- Begin company info -->
							<div class="footer-company-info">
								<div class="footer-company-top">
									<a href="/" class="logo logo-ico-widht-text" title="PathSoft">
										<img class="lazy logo-ico" data-src="img/logo-ico.png" width="36" height="35" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
										<span class="logo-text">Globals Formularios</span>
									</a>
									<div class="footer-company-desc">
										<p>Formularios personalizados para desaf??os  actuales.</p>
									</div>
								</div>
								<ul class="footer-social-links">
									<li>
										<a href="#!" title="Facebook">
											<svg viewBox="0 0 320 512">
												<use xlink:href="img/sprite.svg#facebook-ico"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="#!" title="Instagram">
											<svg viewBox="0 0 448 512">
												<use xlink:href="img/sprite.svg#instagram-ico"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="#!" title="LinkedIn">
											<svg viewBox="0 0 448 512">
												<use xlink:href="img/sprite.svg#linkedin-in-ico"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="#!" title="Twitter">
											<svg viewBox="0 0 512 512">
												<use xlink:href="img/sprite.svg#twitter-ico"></use>
											</svg>
										</a>
									</li>
								</ul>
							</div>
							<!-- End company info -->
						</div>
						<div class="col-xl-2 offset-xl-1 col-md-3 col-5 col-lg-2 item">
							<div class="footer-item">
								<h4 class="footer-item-title">Menu</h4>
								<nav class="footer-nav">
									<ul class="footer-mnu">
										<li><a href="#" class="hover-link" data-title="About Us"><span>Sobre Nosotros</span></a></li>
										<li><a href="#" class="hover-link" data-title="Services"><span>Servicios</span></a></li>
										<li><a href="#" class="hover-link" data-title="Pricing"><span>Formularios</span></a></li>
										<li><a href="#" class="hover-link" data-title="Blog"><span>Log in</span></a></li>
										<li><a href="#" class="hover-link" data-title="Contact Us"><span>Contacto</span></a></li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-md-3 col-7 item">
							<div class="footer-item">
								<h4 class="footer-item-title">Caracter??sticas</h4>
								<nav class="footer-nav">
									<ul class="footer-mnu">
										<li><a href="#!" class="hover-link" data-title="DB Management"><span>1</span></a></li>
										<li><a href="#!" class="hover-link" data-title="IOS/MacOS"><span>2</span></a></li>
										<li><a href="#!" class="hover-link" data-title="Android Apps"><span>3</span></a></li>
										<li><a href="#!" class="hover-link" data-title="Windows Apps"><span>4</span></a></li>
										<li><a href="#!" class="hover-link" data-title="UX & UI"><span>5</span></a></li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-xs-4 col-lg-4 col-12 item">
							<div class="footer-item">
								<h4 class="footer-item-title">Nuestro Contacto</h4>
								<ul class="footer-contacts">
									<li>
										<i class="material-icons md-22">location_on</i>
										<div class="footer-contact-info">
											Cartago, Costa Rica
										</div>
									</li>
									<li>
										<i class="material-icons md-22 footer-contact-tel">smartphone</i>
										<div class="footer-contact-info">
											<a href="#!" class="formingHrefTel">+506 8999-6404</a>, <a href="#!" class="formingHrefTel">+506 8999-6404</a>
										</div>
									</li>
									<li>
										<i class="material-icons md-22 footer-contact-email">email</i>
										<div class="footer-contact-info">
											<a href="mailto:mail@example.com">luis.torres.alvarez@cuc.cr</a>
										</div>
									</li>
								</ul>
							</div>
							<div class="footer-item">
								<h4 class="footer-item-title">??Tienes alguna duda?</h4>
								<form action="#!" method="post" class="footer-subscribe">
									<div class="form-field">
										<label for="subscribe-email" class="form-field-label">Tu email</label>
										<input type="email" class="form-field-input" name="Subscribe_email" value="" autocomplete="off" required="required" id="subscribe-email">
									</div>
									<div class="form-btn">
										<button type="submit" class="btn ripple">Enviar</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="row justify-content-between items">
						<div class="col-md-auto col-12 item">
							<nav class="footer-links">
								<ul>
									<li><a href="terms-and-conditions.html">Terms and Conditions</a></li>
									<li><a href="privacy-policy.html">Privacy Policy</a></li>
								</ul>
							</nav>
						</div>
						<div class="col-md-auto col-12 item">
							<div class="copyright">?? 2020 Dev. Luis Diego Torres.</div>
						</div>
					</div>
				</div>
			</div>
		</footer><!-- End footer -->

	</main><!-- End main -->

	<!-- Begin ??allback popup -->
	<div id="??allback_popup" class="popup_style popup_style_sally open_popup" style="display:none;">
		<div class="popup">
			<div class="popup_content">
				<h4 class="popup_title">Nosotros te llamaremos</h4>
				<form action="#!" method="post" class="??allback_popup_form">
					<!-- Begin hidden Field for send form -->
					<input type="hidden" name="form_subject" value="Pop up form">
					<!-- End hidden Field for send form -->
					<div class="form-field">
						<label for="popup-field-name" class="form-field-label">Your name</label>
						<input type="text" class="form-field-input" name="NameCallBack" value="" autocomplete="off" required="required" id="popup-field-name">
					</div>
					<div class="form-field">
						<label for="popup-field-phone" class="form-field-label">Your phone</label>
						<input type="tel" class="form-field-input mask-phone" name="PhoneCallBack" value="" autocomplete="off" required="required" id="popup-field-phone">
					</div>
					<div class="form-btn form-btn-wide">
						<button type="submit" class="btn ripple">Waiting for a ??all</button>
					</div>
				</form>
			</div>
			<div class="??allback_popup_close popup_close"><i class="material-icons md-24">close</i></div>
		</div>
	</div><!-- End ??allback popup -->

	<script src="jquery.min.js"></script>
	<script src="script.min.js"></script>
	<script src="custom.js"></script>
	
</body>
</html>
