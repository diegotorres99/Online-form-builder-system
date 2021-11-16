<?php
session_start();
require('mymodel.php');
$user = new Database();
    if (isset($_POST['tipo_servicio'])) 
    {

      $editable = $_POST['editable'];
        if($editable==true){//Si esta selecciondo el toggleSwitch, obtenemos un TRUE, luego asignamos 1 equivalente a un TRUE
           $editable = 1;
        }
        else {
            $editable = 0;
        }
    echo '<script> EDITABLE  console.log('.$editable.')</script>';

      $publico_extranet = $_POST['publico_extranet'];
        if($publico_extranet==true){
           $publico_extranet = 1;  
        }else {
            $publico_extranet = 0;  
        }
    echo '<script>  PUBLICO EXTRANET console.log('.$publico_extranet.')</script>';

    $publico_intranet = $_POST['publico_intranet'];
        if($publico_intranet==true){
            $publico_intranet = 1;  
        }else {
            $publico_intranet = 0;  
        }
    echo '<script>  INTRA-NET console.log('.$publico_intranet.')</script>';
        $tipo_servicio = $_POST['tipo_servicio'];
        echo '<script> TIPO SERVICIO console.log('.$tipo_servicio.')</script>';    
        
        $estado = $_POST['estado'];
        echo '<script> ESTADO console.log('.$estado.')</script>'; 
        //recuperamos id del formulario mediante variables de Session
        $id = $_SESSION['IndiceForm']; 
        //echo '<script> IDE console.log('.$id.')</script>';
        $fechaHabilitacion = $_POST['fechaHabilitacion'];
        $fechaFinalizacion = $_POST['fechaFinalizacion'];
        //Ejecucion de Obj-CAPA ACCESO-DATOS
        if ($user->updateForm($editable,$publico_extranet,$publico_intranet,$tipo_servicio,$estado,$id,$fechaHabilitacion,$fechaFinalizacion)) {
            // $user->sp_save_solicitud_user($nombre,$apellidos,$identificacion,$correo,$telefono);
            $data = array('res' => 'success');
        }else{
            $data = array('res' => 'Error en Actualización de Formulario ');
		    echo json_encode($data);
	    }
		return $data;
    }
 ?>