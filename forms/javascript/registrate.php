
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
	    <!-- Vuejs -->
		<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- BootstrapVue js -->
    <script src="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
	<link rel="stylesheet" href="../SCSS/style.css" type="text/css">
    <link rel="stylesheet" href="css/login.css" type="text/css">
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

h5
{
   font-family: "Montserrat";
    font-size: 500%;
    color: BLACK;
    font-weight: normal;
    letter-spacing: 0.45em;
     word-spacing: 0.em;
}
h6
{
   font-family: "Montserrat";
    font-size: 450%;
    color: Black;

}

</style>
<body style="background-color:#F0F4F8;"> 

	<main class="main">
	<div id="app">
		<div class="main-inner">

					<!-- Begin mobile main menu -->
                    <nav class="mob-main-mnu">
				<div class="mob-main-mnu-content">
					<ul class="mob-main-mnu-list">
		
						<li><a href="index.php">Inicio</a></li>
						<li><a href="sobre_nosotros.php">Sobre Nosotros</a></li>
						<li><a href="formularios.php">Formularios</a></li>
						<li><a href="servicios.php">Servicios</a></li>
						<li><a href="login.php">Log In</a></li>
					
				</div>
				<div class="mob-main-mnu-footer">
				<h4 >Globals<span span style="color: #a1cc1b">+</span> Formularios</h4>
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
								
									</li>
									<li>
								
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
												<a href="index.php" data-title="Inicio">
														<span>Inicio</span>
													</a>
												</li>
												<li>
													<a href="sobre_nosotros.php" data-title="Sobre Nosotros">
														<span>Sobre Nosotros</span>
													</a>
												</li>
												<li class="main-mnu-item-has-child">
												<a href="formularios.php" data-title="Formularios">
														<span>Formularios</span>
													</a>
												</li>
											
												<li class="main-mnu-item-has-child">
												<a href="servicios.php" data-title="Servicios">
														<span>Servicios</span>
													</a>
												</li>
												<li class="main-mnu-item-has-child">

													<a href="login.php" data-title="Log in">
														<span>Log in</span>
													</a>
												</li>
													<li class="main-mnu-item-has-child">

													<a href="#!" data-title="Log in">
														
													</a>
												</li>
												</li>
													<li class="main-mnu-item-has-child">

												
													<a href="#!" data-title="Log in">
														
													</a>
												</li>
												</li>
													<li class="main-mnu-item-has-child">

													<a href="#!" data-title="Log in">
														
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
																<label for="field-search" class="form-field-label">Buscar en Globals+ Formularios...</label>
																<input type="search" class="form-field-input" name="Search" value="" autocomplete="off" required="required" id="field-search">
																<button type="submit" class="header-search-btn"><i class="material-icons md-22">Buscar</i></button>
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
													<a href="#сallback_popup" class="header-call-back-link сallback_popup_open">
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

<!-- Begin our Diagonal Section -->
<div class="wrapper">
   

		<div class="wrapper">
        <br>
			<center>    <h5>Nuevo</h5>
                <h6>Usuario<span span="" style="color: #a1cc1b">+</span></h6></center>
<br><br><br>
  <section>
    <div class="section-content has-diagonal"> 
      <div id="Contenedor">
         <br>
            <p style="color: #EA8C38" > Digite su Información</p>
		 <div class="Icon">
                    <!--Icono de usuario-->

                 </div>
<div class="ContentForm">
		 	<form action="" @submit.prevent="onSubmit">

             <div class="input-group input-group-lg">
				  <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
				  <input type="text" class="form-control" v-model="nombre" placeholder="Nombre"  aria-describedby="sizing-addon1" required>
				</div>
			

                <div class="input-group input-group-lg">
				  <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
				  <input type="text" class="form-control" v-model="apellidos" placeholder="Apellidos"  aria-describedby="sizing-addon1" required>
				</div>
			

                <div class="input-group input-group-lg">
				  <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
				  <input type="text" class="form-control" v-model="identificacion" placeholder="Cédula o Identificación"  aria-describedby="sizing-addon1" required>
				</div>
			

		 		<div class="input-group input-group-lg">
				  <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
				  <input type="email" class="form-control" v-model="correo" placeholder="Correo Electrónico"  aria-describedby="sizing-addon1" required>
				</div>
			

				<div class="input-group input-group-lg">
				  <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
				  <input type="number" v-model="telefono" class="form-control" placeholder="Teléfono"   aria-describedby="sizing-addon1" required>
				</div>
                <br>




				<button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" type="submit">Listo</button>
        <div class="opcioncontra"><a href=""></a>
      
        
        
        </div>
        <br><br><br><br>
		 	</form>
       <br><br><br><br>
		 </div>	
		 </div>
<br><br><br><br>
</form id="contacto" >
<br><br><br><br>
    </div>
    <div class="section-mask">
    
    
    
    </div>
  </section>
<br><br><br><br><br><br><br><br><br><br><br><br>
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
										<p>Formularios personalizados para desafíos  actuales.</p>
									</div>
								</div>
							
							</div>
							<!-- End company info -->
						</div>
						<div class="col-xl-2 offset-xl-1 col-md-3 col-5 col-lg-2 item">
							<div class="footer-item">
								<h4 class="footer-item-title">Menu</h4>
								<nav class="footer-nav">
									<ul class="footer-mnu">
										<li><a href="index.php" class="hover-link" data-title="Inicio"><span>Inicio</span></a></li>
										<li><a href="sobre_nosotros.php" class="hover-link" data-title="Sobre Nosotros"><span>Sobre Nosotros</span></a></li>
										<li><a href="formularios.php" class="hover-link" data-title="Formularios"><span>Formularios</span></a></li>
										<li><a href="servicios.php" class="hover-link" data-title="Servicios"><span>Servicios</span></a></li>
										<li><a href="login.php" class="hover-link" data-title="Log In"><span>Log In</span></a></li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-md-3 col-7 item">
							<div class="footer-item">
								<h4 class="footer-item-title">Características</h4>
								<nav class="footer-nav">
									<ul class="footer-mnu">
										<li><a href="#!" class="hover-link" data-title="Formularios a la Medida"><span>Formularios a la Medida</span></a></li>
										<li><a href="#!" class="hover-link" data-title="Help Desk Solutions"><span>Help Desk Solutions</span></a></li>
										<li><a href="#!" class="hover-link" data-title="Seguridad y Trazabilidad"><span>Seguridad y Trazabilidad</span></a></li>
								
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-xs-4 col-lg-4 col-12 item">
					
							<div class="footer-item">
								<h4 class="footer-item-title">¿Tienes alguna duda?</h4>
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
			
						<div class="col-md-auto col-12 item">
						<center>
						<h4> <span span style="color: #a1cc1b">©2021</span> Globals<span span style="color: #a1cc1b">+</span></h4>

							</center>
						</div>
				
				</div>
			</div>
		</footer><!-- End footer -->

	</main><!-- End main -->

	<!-- Begin сallback popup -->
	<div id="сallback_popup" class="popup_style popup_style_sally open_popup" style="display:none;">
		<div class="popup">
			<div class="popup_content">
				<h4 class="popup_title">Nosotros te llamaremos</h4>
				<form action="#!" method="post" class="сallback_popup_form">
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
						<button type="submit" class="btn ripple">Waiting for a Сall</button>
					</div>
				</form>
			</div>
			<div class="сallback_popup_close popup_close"><i class="material-icons md-24">close</i></div>
		</div>
	</div><!-- End сallback popup -->
	</div><!-- END VUE.JS -->
	</div>
	<script src="jquery.min.js"></script>
	<script src="script.min.js"></script>
	<script src="custom.js"></script>
	
</body>

<script>
      var app = new Vue({
        el: '#app',
        data: {
          nombre: '',
          apellidos: '',
		  identificacion: '',
		  correo: '',
          telefono: ''
        },
        methods: {
          showModal(id) {
            this.$refs[id].show()
          },
          hideModal(id) {
            this.$refs[id].hide()
          },
  
          onSubmit(){
            if (this.nombre !== '' && this.apellidos !== '' 
                && this.identificacion !=='' && this.correo !== ''
				&& this.telefono !== ''
                ) {
              var fd = new FormData()

              fd.append('nombre', this.nombre)
              fd.append('apellidos', this.apellidos)
              fd.append('identificacion', this.identificacion)
              fd.append('correo', this.correo)
			  fd.append('telefono', this.telefono)

              axios({
                url: 'validar_user.php',
                method: 'post',
                data: fd
              })
              .then(res => {
                 console.log(res)
                if (res.data.resp_insercion  !=='0') {
                  alert('¡Hecho, Revisa tu Email !')
                  this.nombre = ''
                  this.apellidos = ''
                  this.identificacion = ''
                  this.correo = ''
                  this.telefono = ''

                  app.hideModal('my-modal')
                  //app.getRecords()
                }else{
                   console.log(res)
                  alert('Error, al Enviar Email !!')
           
                  
                }
              })
              .catch(err => {
                console.log(err)
              })
            }else{
              alert('Error, Campos Vacíos')
            }
          }

        },

      })

</script>
</html>
