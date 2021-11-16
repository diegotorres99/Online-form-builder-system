<?php 
    if ( isset($_POST['identificacion']) && 
         isset($_POST['passw'])) 
    {
        $passw = $_POST['passw'];
        $identificacion = $_POST['identificacion'];
        include ('mymodel.php');
        //Instanciamos un Obj para conexion BD
        $user = new Database();
        //Ejecucion de Obj-CAPA ACCESO-DATOS
        if ($user->sp_login($identificacion,$passw)) {
            // $user->sp_save_solicitud_user($nombre,$apellidos,$identificacion,$correo,$telefono);
            $data = array('res' => 'success');
        }else{
            $data = array('res' => 'Error Identificacion y/o Contraseña Incorrectas ');
		    echo json_encode($data);
	    }
		return $data;
    }
 ?>