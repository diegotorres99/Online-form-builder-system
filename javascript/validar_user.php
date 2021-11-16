<?php 
    if (isset($_POST['nombre']) && 
         isset($_POST['apellidos']) && 
         isset($_POST['identificacion']) && 
         isset($_POST['correo']) && 
         isset($_POST['telefono'])) 
    {
		$nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $identificacion = $_POST['identificacion'];
		$correo = $_POST['correo'];
		$telefono = $_POST['telefono'];

        //apuntamos ACCESO-DATOS
        require ('mymodel.php');
        //Instanciamos un Obj para conexion BD
        $user = new Database();
        //Ejecucion de Obj-CAPA ACCESO-DATOS
        if ($user->sp_save_solicitud_user($nombre,$apellidos,$identificacion,$correo,$telefono)) {
            // $user->sp_save_solicitud_user($nombre,$apellidos,$identificacion,$correo,$telefono);
            $data = array('res' => 'success');
        }else{
            $data = array('res' => 'error');
		    echo json_encode($data);
	    }
		return $data;
    }
 ?>