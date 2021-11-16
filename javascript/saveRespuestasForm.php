<?php
session_start();
require('mymodel.php');
//Instanciamos Obj en capa Datos
$obj_db = new Database();
$message='';
$array = array();
$message .= '<h2>Parámetros pasados por POST</h2><hr />';
foreach($_POST as $nombre_campo => $valor)
    {
        $message .= '$' . $nombre_campo . '=\'' . $valor . '\';<br />';
        //1-Guardamos todos los campos en un ARRAY, Respuesta y Luego Pregunta
        array_push($array, $valor);
    }
        //Obtenemos Variables para realizar inserción de Datos en en tabla 
        //1-El Id Solcitud lo recuperamos de un un numero rand 
        $id_solicitud = '2021-';
        $id_solicitud .= rand(1,1000);
        //2-Recuperamos el id de Usuario Mediante Una variable de sesión setteda al inicar sessió ***FALTA
            //$id_usuario = $_SESSION['id_user'];
        $id_usuario = '305180863';
        //Recuperamos el Servicio del Formulario guardado en BD, Utilizando Variable de Sessión como Indice del Formulario
            #region RECOVERY-SERVICIO ya registrado
          //Recuperamos el Indice del nuevo formulario
          $servicio='';
          $idForm = $_SESSION['IndiceForm'];
          $sql = "SELECT servicio as id FROM formularios WHERE id_Formulario ='$idForm';";   // ahora obtenemos el id del FORMULARIO
          $req =  mysqli_query($obj_db->conex, $sql);
          while($result = mysqli_fetch_object($req))
          {
          $servicio = $result->id;
          }
        #endregion
$saveRespuesta='';
$savePregunta='';
$cont=0;
      foreach($array as $x => $x_value){
      if ($x % 2==0) {
        echo "RESPUESTA->".$x;
        echo "KEY=". $x." Value: ".$x_value."<br>";
        $saveRespuesta=$x_value;
        $cont++;
      }
      else{
        echo "PREGUNTA->".$x;
        echo "KEY=". $x." Value: ".$x_value."<br>";
        $savePregunta=$x_value;
        $cont++;
      }

      if($cont==2) {
        $cont=0;
        $sql = "INSERT INTO `respuestasFormularios`(`id_solicitud`, `id_usuario`, `servicio`, `pregunta`, `respuesta`, `respuesta_file`) VALUES 
          ('$id_solicitud' , '$id_usuario', '$servicio','$savePregunta','$saveRespuesta',NUll);";    
            $req =  mysqli_query($obj_db->conex, $sql);
            continue;
        } 
      }
    $_SESSION['success_send_form'] = 'TRUE';
     $obj_db->usp_solicitud($id_solicitud);
    ?>
    <script type="text/javascript">
    window.location="single-service.php";
    </script>
 