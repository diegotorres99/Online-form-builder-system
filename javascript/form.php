<?php
require('mymodel.php');
session_start();
if(!isset($_GET) || !isset($_SESSION)){
    $var = "Hola, Debes Iniciar Sessión.";
    echo "<script> alert('".$var."')
    window.location.href = '../login.php'
    </script>";
   // header("Location:../login.php");

}
elseif (isset($_SESSION['idUser'])) {
    $fid = $_SESSION['idUser'];
    $fname = $_SESSION['idName'];
}

elseif (isset($_GET['id'])) {
    $fid = $_GET['id'];
    $fname = $_GET['name'];

    $_SESSION['idName'] =  $_GET['name'];
    $_SESSION['idUser'] = $_GET['id'];
}
else {
    $_SESSION['GuardasteFormulario'] = 'TRUE';
}




#region Variables 
date_default_timezone_set('America/Costa_Rica');
$obj_db = new Database(); 
$titulo_formulario = 'Título del Formulario '; 
$titulo_formulario .= date('Y-m-d H:i:s');

$descripcion_formulario = 'Descripción de Formulario ';
$descripcion_formulario .= date('Y-m-d H:i:s');

$pregunta_default = 'Nueva Pregunta ';
$pregunta_default .= substr( md5(microtime()), 1,  20);
//Uso microtime() para que me de la expresión de tiempo más completa que hay, y calculo su hash md5 con md5(),larga cadena, 
//que a primera vista son numeros y letras aleatorios [a-z0-9] y de ahí extraigo con la función substr() los n primeros (donde n es $longitud

$sl_tipo_campo= '';
$cantidad_items = '';
#endregion
if(isset($_POST['ActualizarFormulario']))
{
	//echo 'ACTUALIZANDO...';
	$titulo_formulario = $_POST['titulo_formulario'];
	$descripcion_formulario = $_POST['descripcion_formulario'];
	$dateNow = date('Y-m-d H:i:s');
	$sql= "INSERT INTO `formularios`( `id_Formulario`, `nombre_formulario`, `descripcion_formulario`, `editable`, `publico_extra_net`, `publico_intra_net`,`fecha_creacion`, `estado_formulario`, `servicio`, `id_departamento_creacion`, `id_usuario_creacion`, `cant_preguntas`)
						VALUES (NUll , '$titulo_formulario', '$descripcion_formulario',1, 1, 1,'$dateNow','A','S',1,'$fid',100);"; // si han ingresado si quiera un titulo insertamos esta encuesta en la tabla
	mysqli_query($obj_db->conex, $sql);
	//Seleccionamos Id del formulario para utilizarlo como Indice de Formulario
	//$_SESSION['formStatus'] = 1;
	//*2-Recuperamos id del FORMULARIO
	$sql = "SELECT MAX(id_Formulario) as id FROM formularios";  // ahora obtenemos el id del FORMULARIO
	$req =  mysqli_query($obj_db->conex, $sql);
	while($result = mysqli_fetch_object($req))
	{
	$id_encuesta = $result->id;
	}
	$_SESSION['IndiceForm'] = $id_encuesta;
	//echo $_SESSION['IndiceForm'];
	//echo '<div class="alert alert-success">Has Creado un Nuevo Formulario.</div>';
	//Cambiamos STATUS DEL FORMULARIO
	$_SESSION['formStatus'] = 1;
}

//Guardamos la Pregunta Default
if(isset($_POST['GuardarPregunta'])){
	//Recuperarmos variables enviadas mediante post
	$num = $_POST['opciones'];
	$tipo_respuesta = $_POST['tipo_opcion'];
	$id_encuesta = $_SESSION['IndiceForm'];
	$pregunta = $_POST['pregunta_default'];
	
	//echo $pregunta;
	//Guardarmos Pregunta
	$sql= "INSERT INTO `preguntas`(`id_pregunta`, `id_Formulario`, `pregunta`, `tipo_respuesta`, `numero_opciones`) 
	VALUES (NUll , '$id_encuesta','$pregunta','$tipo_respuesta','$num');";
	//Recuperamos el id de la PREGUNTA
	mysqli_query($obj_db->conex, $sql);
	$sql = "SELECT MAX(id_pregunta) as id FROM preguntas";  // ahora obtenemos el id de la ultima fila,
															// la que acabamos de ingresar,
															// esto lo hacemos para poder asociarle las opciones
	$req =  mysqli_query($obj_db->conex, $sql);
	while($result = mysqli_fetch_object($req)){
	$id_pregunta = $result->id;  // con el resultado obtenido hacemos un bucle para asignarles las respuestas
	//  echo 'SUCCESS...PREGUNTA->'.$id_pregunta.'<br>';
	}  

	//Iteramos la cantidad de RESPUESTAS              
	$sql = "INSERT INTO `respuestas`(`id_respuesta`, `id_pregunta`, `respuesta`, `selecionada`, `cant_caracteres`, `comentario`, `respuestaFile`) VALUES "; // En esta parte estamos armando un query SQL dinamico el cual sera modificado de acuerdo a lo que el usuario ingrese en el formulario.
	for($i=1;$i<=$num;$i++){
		$opcnativa = trim($_POST['opc'.$i]);
		// obtenemos el nombre de cada opcion indivudalmente.
		if($opcnativa != ""){
			$sql .= "(NUll , $id_pregunta,'$opcnativa',NUll,NUll,NUll,NUll) "; // el id de la opcion ira null para que se ponga automaticamente, en id_encuesta pues ira el id de la encuesta que acabamos de crear, en 'nombre' ira el nombre de la opcion y valor ira 0, puesto que es una nueva opcion sin votos, esto se repetira con todas las opciones que el usuario haya definido.
		
		}
		if($i == $num){
			$sql .= ";"; // si es que se llega al final, termina la consulta
		}else{
			$sql .= ", "; // sino se pone una , y se continua.
		}
		$req =  mysqli_query($obj_db->conex, $sql);
	}           
	//Si todo corre bien, Cambiamos Status del Formulario
	$_SESSION['formStatus'] = 2;
	$_SESSION['ShowForm'] = 'TRUE';
	


}
//Añadimos una Nueva Pregunta
if(isset($_POST['AddPregunta'])){
	$_SESSION['formStatus'] = '1';
}

if(!isset($_SESSION['formStatus'])){//Si no esta setteada estamos entrado por primera vez, status es = 0
          $_SESSION['formStatus'] = 0;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap/dist/css/bootstrap.min.css" />
    <!-- BootstrapVue CSS -->
    <link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css" />
	<meta charset="utf-8">
	<title>Nuevo Formulario-Globals Plus Formularios</title>
    <link rel="stylesheet" href="css/style-add-form/estilos.css">
	<meta name="description" content="Description">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Material+Icons%7CMaterial+Icons+Outlined%7CMaterial+Icons+Two+Tone%7CMaterial+Icons+Round%7CMaterial+Icons+Sharp" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Istok+Web:400,400i,700,700i%7CMontserrat:400,400i,500,500i,600,600i,700,700i&display=swap&subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="css/style.min.css">
	<link rel="stylesheet" href="../SCSS/style.css" type="text/css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/toggle_switch.css">
    <link rel="stylesheet" href="css/toggle.css">
    <link rel="stylesheet" href="css/style-add-form/estilos.css">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<script src="js/script.js"></script> 
         <!-- Sweet Alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<style>
      [v-cloak] {
        display: none;
      }
      
@font-face
{
   font-family: "../fonts/../Oraqle Script";
   src: url("fuentefancy.eot");
   src: url("fuentefancy.eot?#amocristalab") format("embedded-opentype"),
        url("fuentefancy.woff") format("woff"),
        url("fuentefancy.ttf") format("truetype"),
        url("fuentefancy.svg#IDdelafuente") format("svg");
}
.padre 
{
  display: flex;
  justify-content: center;
}
.hijo 
{
  padding: 5px;
  margin: 5px;
  
}
.checkbox{
    background:
    linear-gradient(45deg,#4AE491,#49AA75);
}

h4
{
   font-family: "Montserrat";
    font-size: 118%;
}

h1
{
   font-family: "Montserrat";
    font-size: 138%;
}
h2
{
   font-family: "Montserrat";
    font-size: 100%;
}

h3
{
   font-family: "Montserrat";
    font-size: 300%;
}
  .myBtn{
    align-items: right; 
    text-decoration: none;
    padding: 5px;
    font-weight: 600;
    font-size: 5px;
    color: #ffffff;
    background-image: linear-gradient(to bottom LEFT, black, #006cff);

    border-radius: 6px;
    border: 2px solid #0016b0;
  }
  .myBtn:hover{
    color: red;
    background-color: #ffffff;
  }
</style>

  </head>
  <body>

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
												<a href="single-service.php" data-title="Formularios">
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



    <div class="container" id="app" v-cloak>
      <div class="row">
        <div class="col-md-12">

          <!-- Add FORM MODAL-->
          <div >
          <b-modal ref="my-modal" hide-footer title="Permisos del Formulario">
              <div>
                <form action="" @submit.prevent="onUpdate">
                <div class="contenedor">
                      <div class="input-container">
                </div>
                    <div class="padre">
                      <div class="hijo">
                      <label>Formulario Editable</label>
                      <label class="switch">
                      <input type="checkbox" v-model="p_editable"  value="1">
                      <span class="slider round"></span>
                      </label>
							<label>Público Usuarios Externos</label>      
							<label class="switch">
							<input type="checkbox"  v-model="p_publico_extranet" value="1">
							<span class="slider round"></span>
							</label>
    

								  <label>Público Usuarios Internos</label>
                              	<label class="switch">
                                  <input type="checkbox" v-model="p_publico_intranet" value="1" checked>
                                  <span class="slider round"></span>
                                </label>

                              </div>
		
                              <div class="hijo">
							  <br>
                                  <select v-model="tipo_servicio"   style="max-width:200%;">
								  <option value=""  disabled selected>Tipo de Servicio</option>
                                  <option value="Economico" > Económico</option>
                                  <option value="Talento Humano" selected> Talento Humano</option>
                                  <option value="Documentacinn Estudiantil"> Documentación Estudiantil </option>
                                  </select>
									<br>
                                    <select v-model="estado" style="max-width:200%;" >
									<option value=""  disabled selected>Estado de Formulario</option>
                                    <option value="1">Desabilitado</option>
                                    <option value="2" selected>Habilitado</option>
                                    <option value="3">Pendiente de Habilitar</option>
                                  </select>
  									
								  <label>Fecha de Hablilitacón</label>
								  <input type="datetime-local"  v-model="fechaHabilitacion">
								  <br>
								  <label>Fecha de Finalización</label>
								  <input type="datetime-local"  v-model="fechaFinalizacion">
                                </div>
                              </div>
                            </div><br>
                            <div class="form-group">
                              <button class="btn btn-sm btn-outline-info"> <i class="fa fa-check" aria-hidden="true"></i> Guardar Formulario</button>
                            </div>

                          </form>
                        </div>
          
                      </b-modal>
          </div><br><br>
		  <?php 
		  		//Mostramos Alerta en Caso de Guardar un Nuevo Formulario
				if(isset($_SESSION['GuardasteFormulario'])){
					echo '<div class="alert alert-success">¡Has Guardado Correctamente un Nuevo Formulario!</div><br>';
					unset($_SESSION['GuardasteFormulario']);
				}


				if($_SESSION['formStatus']=='2')
				{ 
				?>
					<br>
					<b-button id="show-btn" class="btn btn-success" @click="showModal('my-modal')"><i class="bi bi-journal-check"></i> Finalizar Formulario</b-button>
				<?php 
				}
				?>
				</div>
			</div>
			</div>  

			<div class="wrap">
				<button class ="myBtn" id="myBtn"><i class="bi bi-arrow-counterclockwise" icon></i></button>
				<?php 
					if($_SESSION['formStatus']=='2')
					{ 
					?>
			<button class ="myBtn" id="myBtnDelete"><i class="bi bi-file-earmark-x" icon></i></i></button>
				<?php 
					}
					?>
    
    <form action="" method="post">
    <?php
			/**
			 * Validamos mediante variables de session en que caso nos encontramos 1-CreateFormulario 2-Actualizando Pregunta 3- Agregando pregunta al formulario
			 */

			if($_SESSION['formStatus'] == 0)
			{ ?>
    
    <h1>Nuevo Formulario</h1>
    <input name="titulo_formulario" type="text" placeholder='Título del Formulario' value="<?php echo $titulo_formulario  ; ?>" size="37" required>
    <textarea name="descripcion_formulario" id="descripcion_formulario"  rows="2" cols="41" required><?php echo $descripcion_formulario; ?></textarea><br>
    <input id= "pregunta_default" name="pregunta_default" type="text" value="<?php echo $pregunta_default; ?>" placeholder ="Nueva Pregunta.."size="37" required>
                        <select name="sl_tipo_campo" id = "sl_tipo_campo" style="max-width:200%;" required>
                            <option value="<?php echo $sl_tipo_campo; ?>" disabled selected>Tipo de Respuesta <?php echo $sl_tipo_campo; ?></option>
                            <option value="Respuesta Corta" >Respuesta Corta</option>
							<option value="Respuesta Larga">Respuesta Larga</option>
							<option value="RadioButton" >RadioButton</option>
            
                            
                            <option value="File">Archivo</option>
                            <option value="Imagen" >Imagen</option>
                            <option value="Date">Date</option>
                            <option value="DateTime">Date-Time</option>
                            <option value="Select List" >Select List</option>
                        </select>
                        <br>
                        <select name="cantidad_items" id="cantidad_items" style="max-width:200%;" required> required>
                            <option value="<?php echo $cantidad_items; ?>"  disabled selected>Cantidad de Items <?php echo $cantidad_items; ?> </option>
                            <?php for($i=1;$i<=10;$i++){ // esto es un loop simple, solo para ahorrarnos trabajo, este select tendra de 2 a 100 opciones, si deseas cambiarlo lo puedes hacer aqui. ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <div class="fl">
                            <h3><input type="checkbox" id="rb_respuesta_obligatoria"  class="checkbox" name="rb_respuesta_obligatoria" value="Si" checked><b> Pregunta Obligatoria </b>  </h3>
                        </div>
					<br>
                        <center><input name="ActualizarFormulario" type="submit" value="Actualizar Formulario"></center>
                        
    </div><!-- FIN DE WRAP-->
    
    <br>
    <?php
    } elseif ($_SESSION['formStatus'] == '1') {
	#region Título y Descripción del Formulario ya registrado

		//Recuperamos el Indice del nuevo formulario
		$idForm = $_SESSION['IndiceForm'];
		$sql = "SELECT nombre_formulario as id FROM formularios WHERE id_Formulario ='$idForm';";   // ahora obtenemos el id del FORMULARIO
		$req =  mysqli_query($obj_db->conex, $sql);
		while($result = mysqli_fetch_object($req))
		{
		$nameForms = $result->id;
		}
		echo '<center><h6>'.$nameForms.'<h6>';
		$sql = "SELECT descripcion_formulario as descrip FROM formularios WHERE id_Formulario ='.$idForm.';";  // ahora obtenemos el id del FORMULARIO
		$req =  mysqli_query($obj_db->conex, $sql);
		while($result = mysqli_fetch_object($req))
		{
		$descripForm = $result->descrip;
		}
		echo '<h2>'.$descripcion_formulario.'</center><hr></h2>';
	#endregion
	//Contrucción de Tipo de preguntas y Campos ingresados por el usuario
    $num = $_POST['cantidad_items'];
    $pregunta_default = $_POST['pregunta_default'];
    $item = $_POST['sl_tipo_campo'];	

	switch ($item) 
	{
		case "RadioButton":
				//Si necesitamos radionButtons....
				//Construimos la cantidad de radioButtons solicitados por el Usuario
					echo '
					<h1>'.$pregunta_default.'</h1>
					';

					for ($i = 1; $i <= $num; $i++) 
					{
					//Construccion de RadioButtons 
					//NOMBRE DE OPCION CON VALORES-> opc1,opc2,...,
					echo '
					
						<input id="opc'.$i.'" name="opc'.$i.'" type="text" value="Respuesta '.$i.'"  placeholder="Respuesta '.$i.'" size="32">
					';
					}
					//Pasamos variables Ocultas->opciones y tipo_opcion al siguiente proceso para insertar la preguntas y sus respuestas correspondientes.
					echo'
					<center>
					<input name="opciones" type="hidden" value="'.$num.'">
					<input name="tipo_opcion" type="hidden" value="'.$item.'">
					<input name="pregunta_default" type="hidden" value="'.$pregunta_default.'">
					
					<label><b>Permitir Selección Múltiple </b>  <input type="checkbox" id="permitr_seleccion_multiple" name="permitr_seleccion_multiple" value="Si"></label>
					</center><hr>';
					break;
					//Si necesitamos resp Larga....
					//Mostramos nombre de la pregunta y luego la textArea
					//
		case "Respuesta Larga":
				echo '<h4>'.$pregunta_default.'</h4>';
				echo ' 
				<div class="fl">
				<textarea  name="opc1" id="opc1" class="form-control" maxlength="255" rows="3" cols="51"></textarea>
				</div>
				<br>
	
				';
				$num = 1;
				echo'
				<center>
				<input name="opciones" type="hidden" value="'.$num.'">
				<input name="tipo_opcion" type="hidden" value="'.$item.'">
				<input name="pregunta_default" type="hidden" value="'.$pregunta_default.'">
				</center>
				';
				break;
											
		case "Respuesta Corta":
				echo '<h4>'.$pregunta_default.'</h4>';
				echo '
				<input type="text" name="opc1" id="opc1" class="form-control" maxlength="100" size="47">
				<hr>';
				$num = 1;                      
				echo'
				<center>
				<input name="opciones" type="hidden" value="'.$num.'">
				<input name="tipo_opcion" type="hidden" value="'.$item.'">
				<input name="pregunta_default" type="hidden" value="'.$pregunta_default.'">
				</center>
				';
			break;
				
		case "File":
				echo '<h4>'.$pregunta_default.'</h4>';
				echo '
				
				<input type="file"  name="opc1" id="opc1" >
				<br><br><hr><br>';
				$num = 1;              
				echo'
				<center>
				<input name="opciones" type="hidden" value="'.$num.'">
				<input name="tipo_opcion" type="hidden" value="'.$item.'">
				<input name="pregunta_default" type="hidden" value="'.$pregunta_default.'">
				</center>
				';
			break;
				
		case "Imagen":
				echo '<h4>'.$pregunta_default.'</h4>';
				echo '
				<input type="file"  name="opc1" id="opc1" >
				<hr><br>';
				$num = 1;
				echo'
				<center>
				<input name="opciones" type="hidden" value="'.$num.'">
				<input name="tipo_opcion" type="hidden" value="'.$item.'">
				<input name="pregunta_default" type="hidden" value="'.$pregunta_default.'">
				</center>
				';

			break;
		case "Date":
				echo '<h4>'.$pregunta_default.'</h4>';
				echo '
				<input type="date"  name="opc1" id="opc1">
				<hr><br>';
				$num = 1;                           
				echo'
				<center>
				<input name="opciones" type="hidden" value="'.$num.'">
				<input name="tipo_opcion" type="hidden" value="'.$item.'">
				<input name="pregunta_default" type="hidden" value="'.$pregunta_default.'">
				</center>
				';
			break;
			
		case "DateTime":
				echo '<h4>'.$pregunta_default.'</h4>';
				echo '
				<input type="datetime-local"  name="opc1" id="opc1"></li>
				<br><br><hr><br>';
				$num = 1;                             
				echo'
				<center>
				<input name="opciones" type="hidden" value="'.$num.'">
				<input name="tipo_opcion" type="hidden" value="'.$item.'">
				<input name="pregunta_default" type="hidden" value="'.$pregunta_default.'">
				</center>
				';
			break;
		case "Select List":
			echo '
			<h5>'.$pregunta_default.'</h5>
			';
			for ($i = 1; $i <= $num; $i++) 
			{
			//Construccion de Opciones para SELECT List 
			//NOMBRE DE OPCION CON VALORES-> opc1,opc2,...,
			echo 
			'
				<input id="opc'.$i.'" name="opc'.$i.'" type="text" value="Select-List Opcion '.$i.'"  placeholder= "Opción '.$i.'" size="32">
			';
			}
			//Pasamos variables Ocultas->opciones y tipo_opcion al siguiente proceso para insertar la preguntas y sus respuestas correspondientes.
			echo'
			<center>
			<input name="opciones" type="hidden" value="'.$num.'">
			<input name="tipo_opcion" type="hidden" value="'.$item.'">
			<input name="pregunta_default" type="hidden" value="'.$pregunta_default.'">
			
				';
			break;
		default: 
		echo "Tipo de Campo no existe en registro..."; 
		break;
	}
	echo'
	<center><input name="GuardarPregunta" type="submit" value="Guardar Pregunta"></center>
	</div> <!-- FIN DE WRAP -->
     ';                   

	} elseif ($_SESSION['formStatus'] == '2') {
	?>
	<h1>Siguiente Pregunta</h1>
  	<input id= "pregunta_default" name="pregunta_default" type="text" value="<?php echo $pregunta_default; ?>" placeholder ="Nueva Pregunta.."size="37" required>
					  <select name="sl_tipo_campo" id = "sl_tipo_campo" style="max-width:200%;" required>
						  <option value="<?php echo $sl_tipo_campo; ?>" disabled selected>Tipo de Respuesta <?php echo $sl_tipo_campo; ?></option>
						  <option value="RadioButton" >RadioButton</option>
						  <option value="Respuesta Corta" >Respuesta Corta</option>
						  <option value="Respuesta Larga">Respuesta Larga</option>
						  <option value="File">Archivo</option>
						  <option value="Imagen" >Imagen</option>
						  <option value="Date">Date</option>
						  <option value="DateTime">Date-Time</option>
						  <option value="Select List" >Select List</option>
					  </select>
					  <br>
					  <select name="cantidad_items" id="cantidad_items" style="max-width:200%;" required> required>
						  <option value="<?php echo $cantidad_items; ?>"  disabled selected>Cantidad de Items <?php echo $cantidad_items; ?> </option>
						  <?php for($i=1;$i<=100;$i++){ // esto es un loop simple, solo para ahorrarnos trabajo, este select tendra de 2 a 100 opciones, si deseas cambiarlo lo puedes hacer aqui. ?>
						  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
						  <?php } ?>
					  </select>
					  <div class="fl">
						  <h3><input type="checkbox" id="rb_respuesta_obligatoria"  class="checkbox" name="rb_respuesta_obligatoria" value="Si" checked><b>     Pregunta Obligatoria     </b>  </h3>
					  </div><br>
					<center><input name="AddPregunta" type="submit" value="Agregrar Pregunta"></center>
	</div>
	<?php
    } else {
        echo "Error en Status Form";
    }

    ?>        
     </form>
	 </div>

	<?php
	if(isset($_SESSION['ShowForm']))
	{
	?>
		<div class="wrap">
		<?php
		$id = $_SESSION['IndiceForm'];
		$numPregunta = 0;
		$aux = 0;
		$sql = "SELECT a.nombre_formulario as titulo, descripcion_formulario as descripcion, 
										a.fecha_creacion as fecha, b.id_pregunta as id, b.pregunta as nombre_preg, 
										b.tipo_respuesta as tipo_resp, b.numero_opciones as num_opc,
										b.tipo_respuesta as valor 
										FROM formularios a INNER JOIN preguntas b ON a.id_Formulario = b.id_Formulario 
										WHERE a.id_Formulario =".$id;
							
								$req = mysqli_query($obj_db->conex, $sql);
								//Mientras obtengamos objs de la consulta
							while($result = mysqli_fetch_object($req))
								{ 
					            //Número de pregunta a mostrar
								$numPregunta = $numPregunta + 1;
								if($aux == 0){
									//Mostramos unicamente el titulo del formulario 1 vez
									echo '
									<center>
									<span><h1>'.$result->titulo.'</h1></span>
									<span>'.$result->descripcion.'</span>
									</center>
									<hr>';
									echo '<ul class="votacion">';
									//Mostramos Nombre de Pregunta**
									//DEGUGGER
									//echo'Id de la Respuesta <span>'.$result->id.'</span>';
									//echo' <span>'.$result->tipo_resp.'</span>';
									//echo' <span>'.$result->num_opc.'</span>';
									$aux = 1;
								}
									//Validamos el tipo de Respuesta(rb,respuesta larga,corta,file,img,listbox,...) y la Cantidad de items de las mismas
									//En cada Objeto a recorrer
								
							switch ($result->tipo_resp) 
							{
	
								case "RadioButton":
									
										//Si necesitamos radionButtos....
										//Mostramos nombre de la pregunta y luego la cantidad de items
										//con el ciclo for 
										//Recuperamos cada una de las posibles repuestas de los radioButtons en Tbl Preguntas
										$sql = "SELECT c.respuesta as item FROM respuestas c
												Where c.id_pregunta =".$result->id;
										//Ejecucion de Query
											$resp_rbs = mysqli_query($obj_db->conex, $sql);
										//Mostramos Titulo de la pregunta
										echo "<span>$numPregunta-) </span <hr>";
										echo "<span><b>$result->nombre_preg</b></span><hr>";
											for ($i = 0; $i < $result->num_opc; $i++) 
											{
												//Mientras Obtengamos objs de las respuestas 
												while($r_rb = mysqli_fetch_object($resp_rbs))
												{
													echo '<li><label><input name="valor" type="radio" value="'.$r_rb->item.'"> '.$r_rb->item.'</label></li>';
													//echo '<h1>'.$r_rb->item.'</h1>';
															
												}
																		
											}
										echo'<br>';
										break;
										//Si necesitamos resp Larga....
										//Mostramos nombre de la pregunta y luego la textArea
										//
								case "Respuesta Larga":
									    echo "<span>$numPregunta-) </span <hr>";
										echo '<span><b>'.$result->nombre_preg.'</b></span><hr>
										<li><textarea  name="textArea" id="textArea" class="form-control" maxlength="255" ></textarea></li>
										<br>';
										break;
																	
								case "Respuesta Corta":
									
									echo "<span>$numPregunta-) </span <hr>";
									echo '<span><b>'.$result->nombre_preg.'</b></span><hr>
										<li><input type="text" name="nombres" id="nombres" class="form-control" maxlength="100"  ></li>
										<br>';
										break;
										
								case "File":
									echo "<span>$numPregunta-) </span <hr>";
									echo '<span><b>'.$result->nombre_preg.'</b></span><hr>
										<li>	<input type="file" name="documento"></li>
										<br>';
										break;
										
								case "Imagen":
									echo "<span>$numPregunta-) </span <hr>";
											echo '<span><b>'.$result->nombre_preg.'</b></span><hr>
										<li>	<input type="file" name="imagen"></li>
										<br><br>';
						
										break;
								case "Date":
									echo "<span>$numPregunta-) </span <hr>";
									echo '<span><b>'.$result->nombre_preg.'</b></span><hr>
										<li>		<input type="date" name="date"></li>
										<br>';
										
									break;
									
								case "DateTime":
									echo "<span>$numPregunta-) </span <hr>";
									echo '<span><b>'.$result->nombre_preg.'</b></span><hr>
										<li><input type="datetime-local" name="datatime"></li>
										<br>';
									break;
								case "Select List":
											
										//Si necesitamos Select List ....
										//Mostramos nombre de la pregunta y luego la cantidad de items
										//con el ciclo for 
										//Recuperamos cada una de las posibles repuestas de los Select List en Tbl Preguntas
										$sql = "SELECT c.respuesta as item FROM respuestas c
										Where c.id_pregunta =".$result->id;
								//Ejecucion de Query
									$resp_rbs = mysqli_query($obj_db->conex, $sql);
								//Mostramos Titulo de la pregunta
								echo "<span>$numPregunta-) </span <hr>";
								echo "<span><b>$result->nombre_preg</b></span><br><hr>";
								?>
								<select name="selectList" id="slpreguntas">
								<?php
									for ($i = 0; $i < $result->num_opc; $i++) 
									{

							//Mientras Obtengamos objs de las respuestas 
								
										while($r_rb = mysqli_fetch_object($resp_rbs))
										{
											echo '
											<option value="'.$r_rb->item.'">'.$r_rb->item.'</option>						
											';

										}
						
									}
									?>
									</select>
									<?php 
								echo'<br>';
									break;
								default: 
								echo "Tipo de Campo no existe en registro..."; 
								break;
							}

								}//Fin while fectch-objs-msqli 
				
				?>
				</div>
		</div>
		
		<?php } 

		?>
	</main><!-- End main -->
    </div>
    <script>
        /**
         * Limpiamos variables de Session mediante destroy_session y luego redireccionnamos
         * a add-form.php
         */
        var btn = document.getElementById('myBtn');
        btn.addEventListener('click', function() {
        document.location.href = '<?php echo 'refresh.php'; ?>';
        alert('¿Está saguro que desea Limpiar los Campos?')
        });
        /**
         * Eliminamos el Formulario Actual Utilizando variable de session como indice 
         */
        var btn = document.getElementById('myBtnDelete');
        btn.addEventListener('click', function() {
        document.location.href = '<?php echo 'deleteFormulario.php'; ?>';
        alert('¿Está saguro que desea Eliminar el Formulario?')
        });
        /*
        * 'Gurdamos Formulario'Actual Utilizando variable de session como indice 
        */
        var btn = document.getElementById('myBtnReadyForm');
        btn.addEventListener('click', function() {
        document.location.href = '<?php echo 'deleteFormulario.php'; ?>';
        alert('¿Está saguro que desea Guardar el Formulario?')
        });
    </script>

	<script src="jquery.min.js"></script>
	<script src="script.min.js"></script>
	<script src="custom.js"></script>
	

    <!-- Vuejs -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- BootstrapVue js -->
    <script src="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script>
      var app = new Vue({
        el: '#app',
        data: {
            titulo: '',
          descripcion: '',
          p_editable: '',
          p_publico_extranet: '',
          p_publico_intranet: '',
          estado: '',
		  tipo_servicio: '',
		  fechaHabilitacion:'',
		  fechaFinalizacion:'',

		


          records: [],
          edit_identificacion: '',
          edit_nombre: '',
          edit_correo: '',
          edit_telefono: '',
       
          edit_apellidos: '',
          edit_rol: ''

        },

        methods: {
          showModal(id) {
            this.$refs[id].show()
          },
          hideModal(id) {
            this.$refs[id].hide()
          },

          onSubmit(){
            if (this.nombre !== '' && this.correo !== '') {
              var fd = new FormData()
              fd.append('identificacion', this.identificacion)
              fd.append('nombre', this.nombre)
              fd.append('apellidos', this.apellidos)
              fd.append('correo', this.correo)
              fd.append('telefono', this.telefono)
              fd.append('rol', this.rol)
              axios({
                url: 'insert.php',
                method: 'post',
                data: fd
              })
              .then(res => {
                // console.log(res)
                if (res.data.res == 'success') {
                  	$message= "Datos actualizados con éxito";
						$class="alert alert-success";
            
                 alert('Usuario Agregado')
      
                  this.nombre= ''
                  this.apellidos = ''
                  this.email = ''
                  this.apellidos = ''
                  this.telefono = ''
                  this.cedula = ''
                  this.rol = ''

                  app.hideModal('my-modal')
                  app.getRecords()
                }else{
                  alert('error')
                }
              })
              .catch(err => {
                console.log(err)
              })
            }else{
              alert('empty')
            }
          },

          getRecords(){
            axios({
              url: 'records.php',
              method: 'get'
            })
            .then(res => {
              // console.log(res)
              this.records = res.data.rows
            })
            .catch(err => {
              console.log(err)
            })
          },

          deleteRecord(identificacion){
            if (window.confirm('Eliminar este Registro')) {
              var fd = new FormData()

              fd.append('identificacion', identificacion)

              axios({
                url: 'delete.php',
                method: 'post',
                data: fd
              })
              .then(res => {
                // console.log(res)
                if (res.data.res == 'success') {
                  alert('Elimanado !')
                  app.getRecords();
                }else{
                  alert('error')
                }
              })
              .catch(err => {
                console.log(err)
              })
            }
          },

          editRecord(identificacion){
            var fd = new FormData()

            fd.append('identificacion', identificacion)

            axios({
              url: 'edit.php',
              method: 'post',
              data: fd
            })
            .then(res => {
              if (res.data.res == 'success') {
                this.edit_identificacion = res.data.row[0]
                this.edit_nombre = res.data.row[1]
                this.edit_apellidos = res.data.row[2]
                this.edit_telefono = res.data.row[3]
                this.edit_correo = res.data.row[4]
                
                this.edit_rol = res.data.row[6]
                app.showModal('my-modal1')
              }
            })
            .catch(err => {
              console.log(err)
            })
          },

          onUpdate(){
            if (this.tipo_servicio !== '' && this.estado !== '') {

              var fd = new FormData()

              fd.append('editable', this.p_editable)
              fd.append('publico_extranet', this.p_publico_extranet)
              fd.append('publico_intranet', this.p_publico_intranet)
              fd.append('tipo_servicio', this.tipo_servicio)
			  fd.append('estado', this.estado)
			  fd.append('fechaHabilitacion', this.fechaHabilitacion)
			  fd.append('fechaFinalizacion', this.fechaFinalizacion)
			  

			  console.log(fd)
              axios({
                url: 'updateForms.php',
                method: 'post',
                data: fd
              })
              .then(res => {
                console.log(res)
                if (res.data.res !== '') {
                  alert('¡Formulario Guardado!')
				  app.hideModal('my-modal')
				  window.location.href = 'clear.php'
                }
              })
              .catch(err => {
                console.log(err)
              })

            }else{
              alert('empty')
            }
          }

        },

        mounted: function(){
          this.getRecords()
        }
      })

    </script>
</html>