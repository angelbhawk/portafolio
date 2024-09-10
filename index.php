<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>angelbhawk</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="manifest" href="site.webmanifest">
	<link rel="shortcut icon" type="x-icon" href="favicon.ico">
	<!-- Place favicon.ico in the root directory -->

	<!-- START ALL CSS -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/swiper.min.css">
	<link rel="stylesheet" href="css/lity.min.css">
	<link rel="stylesheet" href="css/simplebar.css">
	<link rel="stylesheet" href="css/line-awesome.css">
	<link rel="stylesheet" href="css/corine-style.css">
	<link rel="stylesheet" href="css/corine-responsive.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,500i,600,700,800&display=swap"
		rel="stylesheet">
	<!-- END ALL CSS -->

</head>

<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	  <![endif]-->


	<!-- START PRELOADER -->
	<div class="hola">
		<div class="Shape_5 Top_Border"></div>
	</div>
	<!-- END PRELOADER -->

	<!-- START TRANSITION EFFECT -->
	<div id="overlay-effect"></div>
	<!-- END TRANSITION EFFECT -->
	<!-- START HEADER SECTION -->

	<script>
		// Función para obtener los parámetros de la URL
		function getQueryParam(param) {
			const urlParams = new URLSearchParams(window.location.search);
			return urlParams.get(param);
		}

		// Mostrar alertas basadas en el parámetro 'status'
		window.onload = function() {
			const status = getQueryParam('status');

			if (status === 'success') {
				alert('¡Tu mensaje ha sido enviado con éxito!');
			} else if (status === 'error') {
				alert('Ocurrió un error al enviar tu mensaje. Por favor, inténtalo de nuevo.');
			}
		};
	</script>


	<div class="header-area small-menu">
		<div class="container">
			<div class="row">
				<div class="mx-auto">
					<div class="main-menu nav-bar mx-auto">
						<ul class="nav-menu">
							<li><a class="nav-link" href="#about">Sobre mi</a></li>
							<li><a class="nav-link" href="#resume">Experiencia</a></li>
							<!-- <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
								<li><a class="nav-link" href="#blog">Blog</a></li> -->
							<li><a class="nav-link" href="#contact">Contacto</a></li>
						</ul>
					</div>
					<nav role="navigation" class="d-block d-lg-none">
						<div id="menuToggle">
							<input type="checkbox">
							<span></span>
							<span></span>
							<span></span>
							<div class="mobile-menu nav-bar" id="mobile-menu">
								<ul class="nav-menu">
									<li><a class="nav-link" href="#about">Sobre mi</a></li>
									<li><a class="nav-link" href="#resume">Experiencia</a></li>
									<!-- <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
									<li><a class="nav-link" href="#blog">Blog</a></li> -->
									<li><a class="nav-link" href="#contact">Contacto</a></li>
								</ul>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- END HEADER SECTION -->
	<!-- START HOME SECTION -->
	<section class="home-area" id="home">
		<div class="banner-wrapper vh d-flex">
			<video autoplay loop class="video-background" muted plays-inline>
				<source src="img/video/laptop.mp4" type="video/mp4">
			</video>
			<div class="container h-100">
				<div class="row h-100 align-items-center justify-content-center">
					<div class="col-12 col-lg-8 text-center">
						<div class="home-content">
							<img src="img/miguel.png" style="padding: 10px; height: 100px; width: 100px;">
							<h1>¡Hola, bienvenido!</h1>
							<p>Mi nombre es Miguel Angel Murillo Jaimes.<br>Soy ingeniero en sistemas computacionales
								con 2 años de experiencia laboral desarrollando sistemas web.</p>
							<a href="files/CV.pdf" download class="btn">Descargar CV</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END HOME SECTION -->

	<!-- START ABOUT SECTION -->
	<div class="lightbox-wrapper animated about-off fadeOut" id="about" data-simplebar="init">
		<div class="simplebar-wrapper">
			<div class="simplebar-height-auto-observer-wrapper">
				<div class="simplebar-height-auto-observer"></div>
			</div>
			<div class="simplebar-mask">
				<div class="simplebar-offset">
					<div class="simplebar-content-wrapper">
						<div class="simplebar-content">
							<div class="container">
								<div class="lightbox-close">
									<div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="lightbox-content">
											<div class="row">
												<div class="col-12">
													<div class="section-tittle text-center">
														<div class="tittle-detail">
															<h6>Sobre mi</h6>
															<h2><span>Sobre</span> mi</h2>
															<p>Tengo 22 años, soy Ingeniero en sistemas computacionales
															</p>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-5">
													<div class="about-pic align-center item">
														<img class="about-img" style="width: 640px;" src="img/me.jpg"
															alt="">
													</div>
													<div class="tilt-box img-tilt">
														<span class="text-extra image-mask cover-background"
															style="background-image: url('img/porri.jpg');">2</span>
														<span class="text-extra-large ">Años de experiencia</span>
													</div>
												</div>
												<div class="col-lg-7">
													<div class="about-text margin-30 about-margin">
														<h2>Soy <span>Miguel Angel</span>, Ingeniero en
															sistemas
														</h2>
														<p>Tengo 2 años de experiencia en el
															analisis, diseño y desarrollo de software. He trabajado con
															sistemas web y moviles con diversas tecnologias.</p>
														<ul class="about-info about-imp">
															<li class="d-flex">
																<span>Laravel:</span>
																<div class="skill-bar">
																	<div class="skill-level" style="width: 90%;"></div>
																	<!-- Nivel de habilidad en porcentaje -->
																</div>
															</li>
															<li class="d-flex">
																<span>PHP</span>
																<div class="skill-bar">
																	<div class="skill-level" style="width: 85%;"></div>
																</div>
															</li>
															<li class="d-flex">
																<span>.NET</span>
																<div class="skill-bar">
																	<div class="skill-level" style="width: 80%;"></div>
																</div>
															</li>
															<li class="d-flex">
																<span>Java</span>
																<div class="skill-bar">
																	<div class="skill-level" style="width: 75%;"></div>
																</div>
															</li>
															<li class="d-flex">
																<span>Kotlin</span>
																<div class="skill-bar">
																	<div class="skill-level" style="width: 70%;"></div>
																</div>
															</li>
															<li class="d-flex">
																<span>C#</span>
																<div class="skill-bar">
																	<div class="skill-level" style="width: 85%;"></div>
																</div>
															</li>
														</ul>

														<style>
															.about-info {
																list-style: none;
																padding: 0;
																margin: 0;

															}

															.about-imp {
																margin-top: 0px !important;
															}

															.about-info li {
																margin-bottom: 15px;
																display: flex;
																justify-content: space-between;
																align-items: center;
															}

															.skill-bar {
																width: 60%;
																height: 8px;
																background-color: #e0e0e0;
																border-radius: 4px;
																overflow: hidden;
																margin-left: 10px;
															}

															.skill-level {
																height: 100%;
																background-color: #f7e626;
																border-radius: 4px;
															}
														</style>

														<p class="bottom-br"></p>
														<ul class="about-info">
															<li class="d-flex"><span>Nombre :</span> <span>Miguel Angel
																	Murillo</span></li>
															<li class="d-flex"><span>Correo :</span>
																<span>mgamj13@gmail.com</span>
															</li>
															<li class="d-flex"><span>Telefono : </span>
																<span>+52-612-159-5570</span>
															</li>
														</ul>
														<a href="files/CV.pdf" download class="btn">Descargar
															CV</a>
													</div>
												</div>
											</div>
											<div class="service-section section-row">
												<div class="row">
													<div class="col-md-12 text-center">
														<div class="sub-tittle">
															<h3>Mis servicios</h3>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="outside-box-right">
															<div class="swiper-container service-slider">
																<div class="swiper-wrapper">
																	<div class="swiper-slide services-grid item">
																		<div class="grid">
																			<div class="text-anim">
																				<div class="service-icon">
																					<i class="lab la-dochub"></i>
																				</div>
																				<h3>Consultoria</h3>
																				<p>Consultoria de sistemas orientado a
																					negocios.</p>
																				<div class="detail-icon">
																					<a href="#"><i
																							class="las la-arrow-circle-right"></i></a>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="swiper-slide services-grid item">
																		<div class="grid">
																			<div class="text-anim">
																				<div class="service-icon">
																					<i class="las la-chart-bar"></i>
																				</div>
																				<h3>Soluciones a tu medida</h3>
																				<p>Desarrollo de soluciones de software
																					para tu negocio.</p>
																				<div class="detail-icon">
																					<a href="#"><i
																							class="las la-arrow-circle-right"></i></a>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="swiper-slide services-grid item">
																		<div class="grid">
																			<div class="text-anim">
																				<div class="service-icon">
																					<i class="lab la-hotjar"></i>
																				</div>
																				<h3>Optimización de páginas</h3>
																				<p>Con herramientas de seo potencia tu
																					página web.</p>
																				<div class="detail-icon">
																					<a href="#"><i
																							class="las la-arrow-circle-right"></i></a>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="swiper-slide services-grid item">
																		<div class="grid">
																			<div class="text-anim">
																				<div class="service-icon">
																					<i class="las la-briefcase"></i>
																				</div>
																				<h3>SEO Marketing</h3>
																				<p>Mejoramos el posicionamiento de tu
																					negocio.</p>
																				<div class="detail-icon">
																					<a href="#"><i
																							class="las la-arrow-circle-right"></i></a>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="simplebar-placeholder"></div>
		</div>
		<div class="simplebar-track simplebar-horizontal">
			<div class="simplebar-scrollbar"></div>
		</div>
		<div class="simplebar-track simplebar-vertical">
			<div class="simplebar-scrollbar"></div>
		</div>
	</div>
	<!-- END ABOUT SECTION -->
	<!-- START RESUME SECTION -->
	<div class="lightbox-wrapper animated resume-off fadeOut" id="resume" data-simplebar="init">
		<div class="simplebar-wrapper">
			<div class="simplebar-height-auto-observer-wrapper">
				<div class="simplebar-height-auto-observer"></div>
			</div>
			<div class="simplebar-mask">
				<div class="simplebar-offset">
					<div class="simplebar-content-wrapper">
						<div class="simplebar-content">
							<div class="container">
								<div class="lightbox-close">
									<div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="lightbox-content">
											<div class="row">
												<div class="col-12">
													<div class="section-tittle text-center">
														<div class="tittle-detail">
															<h6>Experiencia</h6>
															<h2>Mi <span>experiencia</span></h2>
															<p>Aqui podras ver mi formación y experiencia laboral</p>
														</div>
													</div>
												</div>
											</div>
											<!-- Resume section-->
											<div class="timeline-section single-section">
												<div class="row">
													<div class="col-lg-6 col-md-6">
														<h3>Educación</h3>
														<div class="timeline d-flex mb-30">
															<div class="timeline-icon">
																<i class="las la-graduation-cap"></i>
															</div>
															<div class="timeline-detail">
																<span>2019 - 2023</span>
																<h4>Ingenieria en sistemas computacionales</h4>
																<p>Instituto Tecnologico de La Paz.</p>
																<p>Con especialidad en desarrollo de aplicaciones
																	moviles y videojuegos.
																</p>
															</div>
														</div>
														<div class="timeline d-flex mb-30">
															<div class="timeline-icon">
																<i class="las la-graduation-cap"></i>
															</div>
															<div class="timeline-detail">
																<span>2016 - 2019</span>
																<h4>Tecnico en programación </h4>
																<p>Centro de bachillerato Tecnologico Industrial y De
																	Servicios No. 62. </p>
															</div>
														</div>
													</div>
													<div class="col-lg-6 col-md-6">
														<h3>Experiencia</h3>
														<div class="timeline d-flex mb-30">
															<div class="timeline-icon">
																<i class="las la-laptop-code"></i>
															</div>
															<div class="timeline-detail">
																<span>2024 - Presente</span>
																<h4>Programador <span class="coll-tittle">-
																		OOMSAPAS</span></h4>
																<p>Participe en el análisis, diseño y desarrollo del
																	nuevo sistema comercial del
																	OOMSAPAS La Paz coordinando el equipo de backend</p>
															</div>
														</div>
														<div class="timeline d-flex mb-30">
															<div class="timeline-icon">
																<i class="las la-laptop-code"></i>
															</div>
															<div class="timeline-detail">
																<span>2023 - 2024</span>
																<h4>Programador <span class="coll-tittle">-
																		IGRTEC</span></h4>
																<p>Participe en el desarrollo de un juego multijugador
																	en tiempo real siendo parte
																	del equipo de backend con .NET</p>
															</div>
														</div>
														<div class="timeline d-flex mb-30">
															<div class="timeline-icon">
																<i class="las la-laptop-code"></i>
															</div>
															<div class="timeline-detail">
																<span>2018 - 1019</span>
																<h4>Programador <span class="coll-tittle">-
																		ISSBCS</span></h4>
																<p>Ayude al diseño de una aplicación web responsiva como
																	para consultar
																	información institucional de forma práctica desde
																	telefono.</p>
															</div>
														</div>
													</div>
												</div>
												<!-- Skills section-->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="simplebar-placeholder"></div>
		</div>
		<div class="simplebar-track simplebar-horizontal">
			<div class="simplebar-scrollbar"></div>
		</div>
		<div class="simplebar-track simplebar-vertical">
			<div class="simplebar-scrollbar"></div>
		</div>
	</div>
	<!-- END RESUME SECTION -->
	<!-- START CONTACT SECTION -->
	<div class="lightbox-wrapper animated contact-off fadeOut" id="contact" data-simplebar="init">
		<div class="simplebar-wrapper">
			<div class="simplebar-height-auto-observer-wrapper">
				<div class="simplebar-height-auto-observer"></div>
			</div>
			<div class="simplebar-mask">
				<div class="simplebar-offset">
					<div class="simplebar-content-wrapper">
						<div class="simplebar-content">
							<div class="container">
								<div class="lightbox-close">
									<div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
								</div>
								<div class="portfolio-area">
									<div class="row">
										<div class="col-12">
											<div class="lightbox-content">
												<div class="row">
													<div class="col-12">
														<div class="section-tittle text-center">
															<div class="tittle-detail">
																<h6>Contacto</h6>
																<h2><span>Contáctame</span></h2>
																<p>Puedes comunicarte conmigo con un correo.</p>
															</div>
														</div>
													</div>
												</div>
												<div class="row justify-content-center">
													<div class="col-md-4 mb-30">
														<div class="author-box">
															<div class="author-img">
																<img src="img/miguel.png" alt="" />
															</div>
															<div class="author-detail">
																<div class="row justify-content-center">
																	<div class="col-md-12 mb-30">
																		<div class="author-icon">
																			<i class="las la-user"></i>
																		</div>
																		<div class="author-single">
																			<h4>Correo</h4>
																			<span>mgamj13@gmail.com</span>
																		</div>
																	</div>

																	<div class="col-md-12">
																		<div class="author-icon">
																			<i class="las la-phone"></i>
																		</div>
																		<div class="author-single">
																			<h4>Llámanos</h4>
																			<span>+52 612 159 5570</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-8">
														<form class="contact-form" method="post" action="mail.php">
															<!-- Elementos del formulario -->
															<div class="row">
																<div class="col-md-6 form-group">
																	<input name="name" type="text" class="form-control"
																		placeholder="Nombre" required>
																	<div class="icon-bg"><i class="las la-user"></i>
																	</div>
																</div>
																<div class="col-md-6 form-group">
																	<input name="email" type="email"
																		class="form-control"
																		placeholder="Correo electrónico" required>
																	<div class="icon-bg"><i class="las la-envelope"></i>
																	</div>
																</div>
																<div class="col-md-6 form-group">
																	<input name="phone" type="text" class="form-control"
																		placeholder="Teléfono" required>
																	<div class="icon-bg"><i class="las la-phone"></i>
																	</div>
																</div>
																<div class="col-md-6 form-group">
																	<input name="subject" type="text"
																		class="form-control" placeholder="Asunto"
																		required>
																	<div class="icon-bg"><i
																			class="lab la-hire-a-helper"></i></div>
																</div>
																<div class="col-12 form-group">
																	<textarea name="message" class="form-control"
																		rows="3" placeholder="Mensaje"
																		required></textarea>
																	<div class="icon-bg"><i class="las la-edit"></i>
																	</div>
																</div>
																<div class="col-12">
																	<div class="alert alert-success contact-msg"
																		style="display: none" role="alert">
																		Tu mensaje fue enviado exitosamente.
																	</div>
																</div>
																<div class="col-12 text-right">
																	<button name="submit" type="submit"
																		class="btn btn-success"
																		value="Enviar Mensaje">Enviar Mensaje</button>
																</div>
															</div>
															<!-- Fin de los elementos del formulario -->
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="simplebar-placeholder"></div>
			</div>
			<div class="simplebar-track simplebar-horizontal">
				<div class="simplebar-scrollbar"></div>
			</div>
			<div class="simplebar-track simplebar-vertical">
				<div class="simplebar-scrollbar"></div>
			</div>
		</div>
	</div>

	<!-- END CONTACT SECTION -->

	<!-- START ALL JS/SCRIPT -->
	<script src="js/vendor/modernizr-3.6.0.min.js"></script>
	<script src="js/vendor/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/jquery.barfiller.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/animatedModal.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/lity.min.js"></script>
	<script src="js/tilt.jquery.min.js"></script>
	<script src="js/simplebar.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/typewritter.js"></script>
	<script src="js/swiper.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/corine-main.js"></script>
	<script src="js/plugins.js"></script>
	<!-- END ALL JS/SCRIPT -->

</body>

</html>