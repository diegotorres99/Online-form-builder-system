<?php
require('mymodel.php');
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/

#region Variables 
date_default_timezone_set('America/Costa_Rica');
$obj_db = new Database(); 
$titulo_formulario = 'Título del Formulario '; 
$titulo_formulario .= date('Y-m-d H:i:s');


$descripcion_formulario = 'Descripción de Formulario ';
$descripcion_formulario .= date('Y-m-d H:i:s');

$pregunta_default = 'Pregunta ';
$pregunta_default .= substr( md5(microtime()), 1,  20);
//Uso microtime() para que me de la expresión de tiempo más completa que hay, y calculo su hash md5 con md5(),larga cadena, 
//que a primera vista son numeros y letras aleatorios [a-z0-9] y de ahí extraigo con la función substr() los n primeros (donde n es $longitud


$sl_tipo_campo= '';
$cantidad_items = '';
#endregion
   
if(isset($_POST['titulo_formulario']) && isset($_POST['descripcion_formulario']) && isset($_POST['pregunta_default']) && isset($_POST['cantidad_items'])  && isset($_POST['sl_tipo_campo'])  
   // isset($_POST['rb_respuesta_obligatoria']) 
){
    //DEBUGGER MOSTRAMOS VARIABLES RECIBIDAS MEDIANTE POST
    //echo $_POST['titulo_formulario'] . '<br>';
    //echo $_POST['descripcion_formulario']. '<br>';
    //echo $_POST['pregunta_default']. '<br>';
    //echo $_POST['cantidad_items']. '<br>';
    //echo $_POST['sl_tipo_campo']. '<br>';
    //echo $_POST['rb_respuesta_obligatoria']. '<br>';
    $cantidad_items = $_POST['cantidad_items'];
    $pregunta_default = $_POST['pregunta_default'];
    $sl_tipo_campo = $_POST['sl_tipo_campo'];
    $titulo_formulario = $_POST['titulo_formulario'];
    $descripcion_formulario = $_POST['descripcion_formulario'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
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
    <link rel="stylesheet" href="css/style-add-form/estilos.css">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Font Awesome core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
<body style="background-color:#F0F4F8;"> 
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

<br><br><br>
    <div class="wrap">
    <button class ="myBtn" id="myBtn"><i class="bi bi-arrow-counterclockwise" icon></i></button>
    <button class ="myBtn" id="myBtnDelete"><i class="bi bi-file-earmark-x" icon></i></i></button>
    <button class ="myBtn" id="myBtnReadyForm"><i class="bi bi-journal-check"></i></button>
        <h1>Nuevo Formulario</h1>
            <form action="" method="post">
                    <!-- Datos del Formulario No Registrado en DB -->
                    <div class="fl titulo">
                        <input name="titulo_formulario" type="text" placeholder='Título del Formulario' value="<?php echo $titulo_formulario  ; ?>" size="37" required>
                        <textarea name="descripcion_formulario" id="descripcion_formulario"  rows="2" cols="41" required><?php echo $descripcion_formulario; ?></textarea>
                        <br>
                     <!-- Primera Pregunta- PREGUNTA DEFAULT -->

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
                            <h3><input type="checkbox" id="rb_respuesta_obligatoria" name="rb_respuesta_obligatoria" value="Si" checked><b> Pregunta Obligatoria </b>  </h3>
                    </div>
                     <br><br><hr>
                     <!-- END-Primera Pregunta- PREGUNTA DEFAULT -->
                     <!--*-->

                <!-- Si ingresamos por primera vez mostramos ACTUALIZAR PREGUNTA, sino mostramos SIGUIENTE PREGUNTA -->
                <?php
                if(isset($_POST['actualizar_pregunta_default']))
                {
                        echo ' </div> ';
                        //ACTUALIZANDO PREGUNTA DEFAULT
                        //Comprobamos el tipo de campo que usuario solocito para responder la pregunta en el formulario
                        $item = $_POST['sl_tipo_campo'];
                        $num = $_POST['cantidad_items'];
                        switch ($item) 
                        {
                            case "RadioButton":
                                    //Si necesitamos radionButtons....
                                    //Construimos la cantidad de radioButtons solicitados por el Usuario
                                        echo '<h5>'.$pregunta_default.'</h5>';
                                        for ($i = 1; $i <= $num; $i++) 
                                        {
                                        //Construccion de RadioButtons 
                                        //NOMBRE DE OPCION CON VALORES-> opc1,opc2,...,
                                        echo '
                                            <input id="opc'.$i.'" name="opc'.$i.'" type="text" value="Respuesta '.$i.'"  placeholder="Respuesta '.$i.'" size="32"></label>
                                        ';
                                        }
                                        //Pasamos variables Ocultas->opciones y tipo_opcion al siguiente proceso para insertar la preguntas y sus respuestas correspondientes.
                                        echo'
                                        <center>
                                        <input name="opciones" type="hidden" value="'.$num.'">
                                        <input name="tipo_opcion" type="hidden" value="'.$item.'">
                                        <label><b>Permitir Selección Múltiple </b>  <input type="checkbox" id="permitr_seleccion_multiple" name="permitr_seleccion_multiple" value="Si"></label>
                                        </center><hr><br>';
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
                                    <br><hr><br>
                                    ';
                                    $num = 1;
                                    echo'
                                    <center>
                                    <input name="opciones" type="hidden" value="'.$num.'">
                                    <input name="tipo_opcion" type="hidden" value="'.$item.'">
                                    </center>
                                    ';
                                    break;
                                                                
                            case "Respuesta Corta":
                                    echo '<h4>'.$pregunta_default.'</h4>';
                                    echo '
                                    <input type="text" name="opc1" id="opc1" class="form-control" maxlength="100" size="47">
                                    <br><hr>';
                                    $num = 1;                      
                                    echo'
                                    <center>
                                    <input name="opciones" type="hidden" value="'.$num.'">
                                    <input name="tipo_opcion" type="hidden" value="'.$item.'">
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
                                    </center>
                                    ';
                                break;
                                    
                            case "Imagen":
                                    echo '<h4>'.$pregunta_default.'</h4>';
                                    echo '
                                    <input type="file"  name="opc1" id="opc1" >
                                    <br><br><hr><br>';
                                    $num = 1;
                                    echo'
                                    <center>
                                    <input name="opciones" type="hidden" value="'.$num.'">
                                    <input name="tipo_opcion" type="hidden" value="'.$item.'">
                                    </center>
                                    ';

                                break;
                            case "Date":
                                    echo '<h4>'.$pregunta_default.'</h4>';
                                    echo '
                                    <input type="date"  name="opc1" id="opc1">
                                    <br><br><hr><br>';
                                    $num = 1;                           
                                    echo'
                                    <center>
                                    <input name="opciones" type="hidden" value="'.$num.'">
                                    <input name="tipo_opcion" type="hidden" value="'.$item.'">
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
                                    </center>
                                    ';
                                break;
                            case "Select List":
                                    echo '<h4>'.$pregunta_default.'</h4>';
                                    echo '
                                    
                                    <select id="opc1" name="opc1" style="max-width:200%;" >
                                        <option value="opc1">Opcion 1</option>
                                        <option value="opc1">Opcion 2</option>
                                        <option value="opc1">Opcion 3</option>
                                        <option value="opc1" selected>Select List</option>
                                    </select>
                                    </li>
                                    <br><br><hr>';
                                    $num = 1;                         
                                    echo'
                                    <center>
                                    <input name="opciones" type="hidden" value="'.$num.'">
                                    <input name="tipo_opcion" type="hidden" value="'.$item.'">
                                    </center>
                                    ';
                                break;
                            default: 
                            echo "Tipo de Campo no existe en registro..."; 
                            break;
                        }
                    //CONSTRUCCION DE PRIMERA PREGUNTA A INGRESAR
                    //Guardamos la Pregunta Default Actualizada
                    echo 
                    '
                    
                    <center>
                            <div class="cf">
                            <input name="guardar_pregunta_default" type="submit" value="Guardar">
                    </center>
                    <button id="myBtn">Regresar</button>
                   ';

                }
                //Al Ingresar por PRIMERA VEZ al form....    
                else{ //Si no hemos realizado una Actualizacion de pregunta
                    ?>
                    <center>
                    </div>
                            <div class="cf">
                            <input name="actualizar_pregunta_default" type="submit" value="Actualizar">
                            <div class="fl">
                    </div>       
                    </center>
                    </div>
                <?php } 
                ?>
            </div>

        <?php
        if(isset($_POST['guardar_pregunta_default']))//Al Guardar la primera respuesta
         {

                        echo '<div class="wrap">';
                        //echo $_POST['titulo_formulario'] . '<br>';
                        //echo $_POST['descripcion_formulario']. '<br>';
                        //echo $_POST['pregunta_default']. '<br>';
                        //echo $_POST['rb_respuesta_obligatoria']. '<br>';
                        //echo $_POST['opciones']. '<br>';
                        //echo $_POST['tipo_opcion']. '<br>';

                        //Recuperamos Variables POST

                        $titulo_formulario = $_POST['titulo_formulario'];
                        $descripcion_formulario = $_POST['descripcion_formulario'];
                        $num = $_POST['opciones'];
                        //Mostramos preguntas a insertar
                        for ($i = 1; $i <= $num; $i++) 
                        {
                        // echo $_POST['opc'.$i.'']. '<br>';
        
                        }


                /**Al guardar primera pregunta realizamos lo siguiente
                * 1-Insertamos un Nuevo Formulario 
                * 2-Recuperamos el id del Fomulario, SI tenemos una variable Settiada estamos en Modo EDICION DE FORMULARIO
                * 3-Agregamos la pregunta
                * 4-Recuperamos el id de la pregunta para asignarles las respuetas
                * 5-Iteramos la cantidad de respuestas en caso de ser Radio Buttons
                */
                //*1-INSERCION DE FORM
                    $dateNow = date('Y-m-d H:i:s');
                    $sql= "INSERT INTO `formularios`( `id_Formulario`, `nombre_formulario`, `descripcion_formulario`, `editable`, `publico_extra_net`, `publico_intra_net`,`fecha_creacion`, `estado_formulario`, `servicio`, `id_departamento_creacion`, `id_usuario_creacion`, `cant_preguntas`)
                                                VALUES (NUll , '$titulo_formulario', '$descripcion_formulario',1, 1, 1,'$dateNow','A','S',1,'305180863',100);"; // si han ingresado si quiera un titulo insertamos esta encuesta en la tabla
                    //*2-Recuperamos id del FORMULARIO
                    mysqli_query($obj_db->conex, $sql);
                    $sql = "SELECT MAX(id_Formulario) as id FROM formularios"; // ahora obtenemos el id de la ultima fila,
                                                                // la que acabamos de ingresar,
                                                                // esto lo hacemos para poder asociarle las opciones
                    $req =  mysqli_query($obj_db->conex, $sql);
                    while($result = mysqli_fetch_object($req)){
                        $id_encuesta = $result->id;  // con el resultado obtenido hacemos un bucle para asignarles las respuestas
                          //  echo 'SUCCESS...INSERT FORM->'.$id_encuesta.'<br>';
                    }  

                    //*3-Insertamos la PREGUNTA
                    $pregunta = $_POST['pregunta_default'];
                    $tipo_respuesta = $_POST['tipo_opcion'];
                    $num = $_POST['opciones'];
                        /**
                         * VALIDAMOS SI ESTAMOS EN MODO EDICION DE FORMULARIO
                         */

                        if(isset($_SESSION["newsession"])){
                            $id_encuesta = $_SESSION["newsession"];
                            echo '<div class="alert alert-success">Has Agregado una Nueva Pregunta al Formulario.</div>';
                        }

                    $sql= "INSERT INTO `preguntas`(`id_pregunta`, `id_Formulario`, `pregunta`, `tipo_respuesta`, `numero_opciones`) 
                            VALUES (NUll , '$id_encuesta','$pregunta','$tipo_respuesta','$num');";

                    //*4-Recuperamos el id de la PREGUNTA
                    mysqli_query($obj_db->conex, $sql);

                    $sql = "SELECT MAX(id_pregunta) as id FROM preguntas"; // ahora obtenemos el id de la ultima fila,
                                                                // la que acabamos de ingresar,
                                                                // esto lo hacemos para poder asociarle las opciones
                    $req =  mysqli_query($obj_db->conex, $sql);
                    while($result = mysqli_fetch_object($req)){
                        $id_pregunta = $result->id;  // con el resultado obtenido hacemos un bucle para asignarles las respuestas
                          //  echo 'SUCCESS...PREGUNTA->'.$id_pregunta.'<br>';
                    }  

                //* 5-Iteramos la cantidad de RESPUESTAS              
                        $num = $_POST['opciones'];
                        //echo $num;
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
                //DEBUGGER
                        $sql = "SELECT MAX(id_respuesta) as id FROM respuestas"; // ahora obtenemos el id de la ultima fila,
                        // la que acabamos de ingresar,
                        // esto lo hacemos para poder asociarle las opciones
                        $req =  mysqli_query($obj_db->conex, $sql);
                        while($result = mysqli_fetch_object($req)){
                        $id_respuesta = $result->id;  // con el resultado obtenido hacemos un bucle para asignarles las respuestas
                       // echo 'SUCCESS...RESPUESTA->'.$id_respuesta.'<br>';
                       // echo 'FORMULARIO EN EDICCION->'.$id_encuesta.'<br>';
                            /**
                             * Al Generar un Nuevo Formulario,Utilizamos una variable se SESSION para guardar el ID del Formulario en EDICION Actual,
                             * Utiliza para recuperar el formulario guardado
                             */
                        $_SESSION["newsession"]=$id_encuesta;
                        /*session created*/
                        echo 'Formulario en Edición: '.$_SESSION["newsession"];
                        //AL ingresar Registrar un Formulario Obtenemos el id para MOSTRAR EL FORMULARIO en Edicion
                        if(isset($_SESSION["newsession"])){
                            $id = $_SESSION["newsession"];
                        }
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
                            $id_pregunta=1;
                               if($aux == 0){
                                   //Mostramos unicamente el titulo del formulario 1 vez

                                   echo '
                                   
                                   <center>
                                   <span><h3>'.$result->titulo.'</h3></span>
                                   <span>'.$result->descripcion.'</span>
                                   </center>
                                   
                                   
                                   <hr><br>';
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
                                   $id_pregunta = $id_pregunta +1;
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
                                       echo "$id_pregunta - <span>$result->nombre_preg</span><br><hr>";
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
                                       echo '<span>'.$result->nombre_preg.'</span><hr>
                                       <li><textarea  name="textArea" id="textArea" class="form-control" maxlength="255" ></textarea></li>
                                       <br>';
                                       break;
                                                                   
                               case "Respuesta Corta":
                                       echo '<span>'.$result->nombre_preg.'</span> <hr>
                                       <li><input type="text" name="nombres" id="nombres" class="form-control" maxlength="100"  ></li>
                                       <br>';
                                      break;
                                       
                               case "File":
                                       echo '<span>'.$result->nombre_preg.'</span> <hr>
                                       <li>	<input type="file" name="documento"></li>
                                       <br>';
                                     break;
                                       
                               case "Imagen":
                                        echo '<span>'.$result->nombre_preg.'</span><hr>
                                       <li>	<input type="file" name="imagen"></li>
                                       <br><br>';
                       
                                     break;
                               case "Date":
                                        echo '<span>'.$result->nombre_preg.'</span> <hr>
                                       <li>		<input type="date" name="date"></li>
                                       <br>';
                                       
                                   break;
                                   
                               case "DateTime":
                                        echo '<span>'.$result->nombre_preg.'</span> <hr>
                                       <li>		<input type="datetime-local" name="datatime"></li>
                                       <br>';
                                   break;
                               case "Select List":
                                        echo '<hr>
                                       <li><label for="cars">'.$result->nombre_preg.'</label>
                                            <select id="opc1" name="opc1" style="max-width:200%;" >
                                                    <option value="opc1">Opcion 1</option>
                                                    <option value="opc1">Opcion 2</option>
                                                    <option value="opc1">Opcion 3</option>
                                                    <option value="opc1" selected>Select List</option>
                                            </select>
                                       </li>
                                       ';
                                   break;
                               default: 
                               echo "Tipo de Campo no existe en registro..."; 
                               break;
                           }

                               }//Fin while fectch-objs-msqli


                    echo '
                    <hr><center><br>
                    <div class="cf">
                
                    </center>
                    ';
                }                                 
            
        }
        echo '</div>';
        ?>
 </form>

</div>



<br><br><br><br><br><br><br><br>
		</div>
<br><br>
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
					
							</nav>
						</div>
						<div class="col-md-auto col-12 item">
							<div class="copyright">©2021 Globals+ Formularios.</div>
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

	<script src="jquery.min.js"></script>
	<script src="script.min.js"></script>
	<script src="custom.js"></script>
	
</body>
<script>
        /**
         * Limpiamos variables de Session mediante destroy_session y luego redireccionnamos
         * a add-form.php
         */
        var btn = document.getElementById('myBtn');
        btn.addEventListener('click', function() {
        document.location.href = '<?php echo 'clear.php'; ?>';
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
        /**
         * Eliminamos el Formulario Actual Utilizando variable de session como indice 
         */
        var btn = document.getElementById('myBtnReadyForm');
        btn.addEventListener('click', function() {
        document.location.href = '<?php echo 'readyForm.php'; ?>';
        alert('¿Está saguro que desea Guardar el Formulario?')
        });
    </script>
</html>
