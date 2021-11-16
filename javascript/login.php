

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Iniciar sesión</title>
        <link rel="stylesheet" href="../SCSS/style.css" type="text/css">
        <!-- vinculo a bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Temas-->
            <link rel="stylesheet" href="css/login.css" type="text/css">
        <!-- Vuejs -->
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <!-- BootstrapVue js -->
        <script src="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js"></script>
        <!-- Axios -->
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
           <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <!-- se vincula al hoja de estilo para definir el aspecto del formulario de login-->  
        <link rel="stylesheet"  type="text/css" href="../SCSS/estilo.css">
	<meta name="description" content="Description">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
	<link rel="icon" href="img/logo-ico.png">
	<link href="https://fonts.googleapis.com/css?family=Material+Icons%7CMaterial+Icons+Outlined%7CMaterial+Icons+Two+Tone%7CMaterial+Icons+Round%7CMaterial+Icons+Sharp" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Istok+Web:400,400i,700,700i%7CMontserrat:400,400i,500,500i,600,600i,700,700i&display=swap&subset=cyrillic" rel="stylesheet">
    	<link rel="stylesheet" href="css/style.min.css">
    	<link rel="stylesheet" href="../SCSS/style.css" type="text/css">
      <link rel="stylesheet" href="../SCSS/estilo.css" type="text/css">
       <link rel="stylesheet" href="css/fondo-vivo.css" type="text/css">

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
    font-size: 518%;
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
<script>

function mostrarPassword(){
		var cambio = document.getElementById("txtPassword");
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	} 
	

</script>
<body style="background-color:#F0F4F8;"> 
    <div id="app" >
	<main class="main">
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
													<a href="about-us.php" data-title="Sobre Nosotros">
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




 <div class="section-mask">
    <section class="example2">
        <ul class="cuadrados">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>

        </ul>

           <section
           ></section>
           
            <div class="section-content has-diagonal">
<br><br>
                <h1 style="color: white" >Globals</span><span span style="color: #a1cc1b">+</span> Formularios</h1>  
                <div id="Contenedor">
                    <h2>Iniciar sesión</h2>

                    <p style="color: #EA8C38" >Digite sus credenciales</p>
                    <div class="Icon">
                        <!--Icono de usuario-->

                    </div>
                    <div class="ContentForm">

                        
                        <form action="" @submit.prevent="onLogin">
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon" ><i class="fa fa-user" aria-hidden="true"></i> </span>
                                <input type="text" autofocus v-model="identificacion"  class="form-control"
                                placeholder="Cédula o Identificación"
                                >
                                
                            </div>
                            <br>
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-key" onclick="mostrarPassword()" ></i> </span>
             <input ID="txtPassword" type="Password" v-model="passw" placeholder="Contraseña" Class="form-control">
             
             
             
             
                            </div>
                            <br>
                            <button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" type="submit">Entrar</button>
                            <div class="opcioncontra"><a href="password.php">¿Olvidaste tu contraseña?</a>

                                <br><br><br><br></div>
                            <br><br><br><br>
                        </form>
                        <br><br><br><br>
                    </div>	
                </div>
                <br><br><br><br>
                </form  >
                  <br><br><br><br>  <br><br>
                <br><br><br><br>
            </div>
          
           
                </center>


            </div>
          
        </section>
      
     




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
								<h4 class="footer-item-title">Características</h4>
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
							<div class="copyright">© 2020 Dev. Luis Diego Torres.</div>
						</div>
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
    </div>
	<script src="jquery.min.js"></script>
	<script src="script.min.js"></script>
	<script src="custom.js"></script>
	
</body>

    <script>
      var app = new Vue({
        el: '#app',
        data: {
   
          passw: '',
          identificacion: ''
        },
        methods: {
          showModal(id) {
            this.$refs[id].show()
          },
          hideModal(id) {
            this.$refs[id].hide()
          },
          onLogin(){
          if(this.identificacion !=='' && this.passw !== ''){
              
              var fd = new FormData();
              fd.append('passw', this.passw)
              fd.append('identificacion', this.identificacion)
              
              axios({
                url: 'validar_login.php',
                method: 'post',
                data: fd
              })
              .then(res => {
                console.log(res)
                if (res.data.res == 'success') {
     
                  alert('¡ Bienvenido, Acceso Exitoso !')
                  this.passw = ''
                  this.identificacion = ''
                   window.location.href = 'single-service.php'
                  //  window.location.href = 'realizar-encuesta.php?name='+res.data.name +'&id=' + res.data.id
                  // app.hideModal('my-modal')
                  //app.getRecords()
 
                  //  window.location.href = 'realizar-encuesta.php?name='+res.data.name +'&id=' + res.data.id
                  // app.hideModal('my-modal')
                  //app.getRecords()
					if (res.data.rol == '1') {
						//  Rol-Super Usuario
				//->	window.location.href = 'dashboard/dash.php'
				window.location.href = 'dashboard/dash.php?name='+res.data.name+'&id=' + res.data.id
				
					} else if (res.data.rol == '2') {
						//  Rol-Creador De Formulario
					//IN PRODUCTION 00WEBHOST
				//->	window.location.href = 'agregar.php'
				window.location.href = 'form.php?name='+res.data.name+'&id=' + res.data.id
					//window.location.href = 'new-add-form.php'
					} else if (res.data.rol == '3') {
					    
					//  Rol-Encargado que llena formulario
					//->window.location.href = 'single-service.php'
					window.location.href = 'dashboard/user.php?name='+res.data.name+'&id=' + res.data.id
						
					}else if(res.data.rol == '4'){
					  //->  window.location.href = 'dashboard/info.php'
					  window.location.href = 'dashboard/info.php?name='+res.data.name+'&id=' + res.data.id
					
					} else {
					//  Rol-Encargado que recibir INFO
				    aler('Error')
					}
                }else{
                  alert('Error, datos Incorrectos !!')
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
