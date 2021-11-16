<?php
session_start();
require('mymodel.php');
//Instanciamos Obj en capa Datos
$obj_db = new Database();
    $id = $_GET['id'];
    $_SESSION['IndiceForm'] = $id;
    if(!isset($_GET['id'])){
        header('location: index.php');
    }
 
    //En caso de Ejecutar evento redireccionamos al mismo archivo php y entramos a este Form
    if(isset($_POST['votar']))
    {
        if(isset($_POST['valor'])){
            $opciones = $_POST['valor'];
            $mod = mysqli_query($obj_db->conex, "SELECT * FROM formularios WHERE id_Formulario = ".$id);
            while($result = mysqli_fetch_object($mod)){
                $valor = $result->valor + 1; // obtenemos el valor de 'valor' y le añadimos 1 unidad
                mysqli_query($conex,"UPDATE opciones SET valor =  '".$valor."' WHERE id = ".$opciones); // luego ejecutamos el query SQL
            }
            header('location: resultado.php?id='.$id); // Por ultimo lo redireccionamos a la encuestas mostrando los resultados.
        }
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
    <link rel="stylesheet" href="css/style-add-form/estilos.css">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<script src="js/script.js"></script> 
         <!-- Sweet Alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<title>Aministración de Usuarios</title>

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
    background-color:#f1f3f4;
}
.checkbox{
    background:
    linear-gradient(45deg,#4AE491,#49AA75);
}
h1
{
   font-family: "Montserrat";
    font-size: 218%;
}
h2
{
   font-family: "Montserrat";
    font-size: 350%;
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
    <div class="container" id="app" v-cloak>
      <div class="row">
        <div class="col-md-12">

          <!-- Add Records -->
          <div >
          
            <b-modal ref="my-modal" hide-footer title="Nuevo Usuario">
              <div>
                <form action="" @submit.prevent="onSubmit">

                  <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" v-model="nombre" class="form-control">
                  </div>

                  
                  <div class="form-group">
                    <label for="">identificación</label>
                    <input type="text" v-model="identificacion" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="">Apellidos</label>
                    <input type="text" v-model="apellidos" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" v-model="correo" class="form-control">
                  </div>
                 
                  <div class="form-group">
                    <label for="">Teléfono</label>
                    <input type="text" v-model="telefono" class="form-control">
                  </div>

                  <div class="form-group">
                  <label for="rol">Area Asignada</label>
                    <select  v-model="rol" class='form-control'>
                    <option value="1">Administrador</option>
                    <option value="2">Funcionario Gestión de Horarios</option>
                    <option value="3">Rol de Director de Carrera</option>
                    <option value="4">Profesor</option>
                    <option value="5">Estudiante</option>
                    </select>
                  </div>


                  <div class="form-group">
                    <button class="btn btn-success" >Guardar Datos</button>
                  </div>

                </form>
              </div>
              <b-button class="mt-6" variant="outline-danger" block @click="hideModal('my-modal')">Cerrar</b-button>
            </b-modal>
          </div>

          <!-- Update Record -->
          <div>
            <b-modal ref="my-modal1" hide-footer title="Editar Usuario">
              <div>
                <form action="" @submit.prevent="onUpdate">
                  <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" v-model="edit_nombre" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="">identificación</label>
                    <input type="text" v-model="edit_identificacion" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="">Apellidos</label>
                    <input type="text" v-model="edit_apellidos" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" v-model="edit_correo" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="">Teléfono</label>
                    <input type="text" v-model="edit_telefono" class="form-control">
                  </div>





                  <div class="form-group">
         


                    <label for="edit_rol">Area Asignada</label>

                    
                    <select  v-model="edit_rol" class='form-control'>



                    <option value="1">   Administrador</option>
                    <option value="2"    >Funcionario Gestión de Horarios</option>
                    <option value="3">Rol de Director de Carrera</option>
                    <option value="4">Profesor</option>
                    <option value="5">Estudiante</option>



                    </select>



                  </div>


                  <div class="form-group">
                    <button class="btn btn-success">Actualizar Datos</button>
                  </div>
                </form>
              </div>
              <b-button class="mt-3" variant="outline-danger" block @click="hideModal('my-modal1')">Cerrar</b-button>
            </b-modal>
          </div>
        </div>
      </div>
      
      </div>  

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


            <br><br>
            <div class="wrap">
            <form action="saveRespuestasForm.php" method="post" enctype="multipart/form-data">
            <?php
            $aux = 0;
            $numPregunta = 0;
            $sql = "SELECT a.nombre_formulario as titulo, a.fecha_creacion as fecha, b.id_pregunta as id, b          .pregunta as nombre_preg, 
                    b.tipo_respuesta as tipo_resp, b.numero_opciones as num_opc,
                    b.tipo_respuesta as valor FROM formularios a INNER JOIN preguntas b ON a.id_Formulario = b.id_Formulario WHERE a.id_Formulario =".$id;
             
                    $req = mysqli_query($obj_db->conex, $sql);
                    //Mientras obtengamos objs de la consulta
                while($result = mysqli_fetch_object($req))
                    {
                      //Número de pregunta a mostrar
                      $numPregunta = $numPregunta + 1;
                        if($aux == 0){
                        //Mostramos unicamente el titulo del formulario 1 vez
                        echo '<h1>'.$result->titulo.'</h1>';
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
                            echo "<span>$result->nombre_preg</span<hr>";
                            echo "<hr>";
                                for ($i = 0; $i < $result->num_opc; $i++) 
                                {
                                    //Mientras Obtengamos objs de las respuestas 
                                    while($r_rb = mysqli_fetch_object($resp_rbs))
                                    {
                                        echo '<li><label><input name="Radio_Button_'.$numPregunta.'" type="radio" value="'.$r_rb->item.'"> '.$r_rb->item.'</label></li>';
                                        //echo '<h1>'.$r_rb->item.'</h1>';      
                                    }
                                                            
                                }
                            echo'
                            <input name="pregunta_radio_button" type="hidden" value="'.$result->nombre_preg.'">
                            <br>';
                            break;
                            //Si necesitamos resp Larga....
                            //Mostramos nombre de la pregunta y luego la textArea
                            //
                    case "Respuesta Larga":
                      echo "<span>$numPregunta-) </span <hr>";
                            echo '<span>'.$result->nombre_preg.'</span><hr>
                            <li><textarea  name="Text_Area_'.$numPregunta.'" id="textArea_'.$numPregunta.'" class="form-control" maxlength="255" rows="3" cols="51" required></textarea></li>
                            <br>
                            <input name="pregunta_respuesta_larga" type="hidden" value="'.$result->nombre_preg.'">
                            ';
                            break;
                                                        
                    case "Respuesta Corta":
                      echo "<span>$numPregunta-) </span <hr>";
                            echo '<span>'.$result->nombre_preg.'</span> <hr>
                            <li><input type="text" name="Respuesta_Corta_"'.$numPregunta.'" id="Respuesta_Corta_"'.$numPregunta.'" class="form-control" maxlength="100" size="47" required></li>
                        
                            <input name="pregunta_respuesta_corta" type="hidden" value="'.$result->nombre_preg.'">
                            <br>';
                           break;
                            
                    case "File":
                      echo "<span>$numPregunta-) </span <hr>";
                            echo '<span>'.$result->nombre_preg.'</span> <hr>
                            <li>	<input type="file" name="Documento" id="pregunta_documento" REQUIRED></li>
                            <br>
                            <input name="pregunta_file" type="hidden" value="'.$result->nombre_preg.'">
                            ';
                          break;
                            
                    case "Imagen":
                        echo "<span>$numPregunta-) </span <hr>";
			                  echo '<span>'.$result->nombre_preg.'</span><hr>
                            <li><input type="file" name="Imagen" id="Imagen "required ></li>
                            <br>
                            <input name="pregunta_imagen" type="hidden" value="'.$result->nombre_preg.'">
                            ';
			
                          break;
                    case "Date":
                       echo "<span>$numPregunta-) </span <hr>";
			                 echo '<span>'.$result->nombre_preg.'</span> <hr>
                            <li><input type="date" name="Date" id="Date"></li>
                            <br>
                            <input name="pregunta_date" type="hidden" value="'.$result->nombre_preg.'">
                            ';
                            
                        break;
                        
                    case "DateTime":
                      echo "<span>$numPregunta-) </span <hr>";
			                 echo '<span>'.$result->nombre_preg.'</span> <hr>
                            <li>		<input type="datetime-local" name="Datatime" id="Datatime" ></li>
                            <br>
                            <input name="pregunta_date_time" type="hidden" value="'.$result->nombre_preg.'">';
                        break;

                    case "Select List":
                      //Cargamos las Opciones del Select List
                      $sql = "SELECT c.respuesta as item FROM respuestas c
                      Where c.id_pregunta =".$result->id;
                      //Ejecucion de Query
                      $resp_rbs = mysqli_query($obj_db->conex, $sql);
                      echo "<span>$numPregunta-) </span <hr>";
                        echo '<span>'.$result->nombre_preg.'<span>';
                        echo '
                        <select id="" name="Select_List"'.$numPregunta.'" style="max-width:200%;" >';
                          for ($i = 0; $i < $result->num_opc; $i++) 
                          {
                              //Mientras Obtengamos objs de las respuestas 
                              while($r_rb = mysqli_fetch_object($resp_rbs))
                              {
                                echo '
                                <option name="Select_List_'.$numPregunta.'"  value="'.$r_rb->item.'"> '.$r_rb->item.'</option>
                                ';
                                  //echo '<h1>'.$r_rb->item.'</h1>';      
                              }
                                                      
                          }
                      echo '
                        </select>
                        </li>
                        <input name="pregunta_Select_list" type="hidden" value="'.$result->nombre_preg.'">
                        <br>';
                        break;
                    default: 
                    //echo $result->tipo_resp;
                    echo "Tipo de Campo no existe en registro..."; 
                    break;
                }
                    }//Fin while fectch-objs-msqli
            
             
                if(!isset($_POST['valor'])){
                  //  echo "<div class='error'>Selecciona una opciond.</div>";
                }
             
                echo '<hr>
                <center>
                <input  type="submit"  class="votar">
                </center>
                <br>';
                //echo '<a href="resultado.php?id='.$id.'" class="resultado">Ver Resultados</a>';
 
?>
</form>
</div>
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



    </div>

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
          identificacion: '',
          nombre: '',
          correo: '',
          telefono: '',
          rol: '',
          apellidos:'',


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
            if (this.edit_nombre !== '' && this.edit_correo !== '' && this.edit_identificacion !== '') {

              var fd = new FormData()

              fd.append('identificacion', this.edit_identificacion)
              fd.append('nombre', this.edit_nombre)
              fd.append('apellidos', this.edit_apellidos)
              fd.append('correo', this.edit_correo)
              fd.append('telefono', this.edit_telefono)
              
              fd.append('rol', this.edit_rol)
              axios({
                url: 'update.php',
                method: 'post',
                data: fd
              })
              .then(res => {
                // console.log(res)
                if (res.data.res == 'success') {
                  alert('Usuario Actualizado !');

                  this.edit_nombre = '';
                  this.edit_correo = '';
                  this.edit_apellidos = '';
                  this.edit_identificacion= '';
                  this.edit_telefono= '';
                  this.edit_rol = '';

                  app.hideModal('my-modal1');
                  app.getRecords();
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