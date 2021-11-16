<?php 
    if ( 
         isset($_POST['correo'])) 
    {
        $email = $_POST['correo'];

        include ('mymodel.php');
        //Instanciamos un Obj para conexion BD
        $user = new Database();
        //Ejecucion de Obj-CAPA ACCESO-DATOS
        if ($user->sp_consultar_correo($email)) {
            // $user->sp_save_solicitud_user($nombre,$apellidos,$identificacion,$correo,$telefono);
            $data = array('res' => 'success');
        }else{
            $data = array('res' => 'Error Correo Electronico y/o Contraseña Incorrectas ');
		    echo json_encode($data);
	    }
		return $data;
    }
 ?>