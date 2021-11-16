<?php


class Database{
		public $db_conexion;
		public $conex;
		private $new_password;
		private $db_host="localhost";
		private $db_user="id14752434_root";
		private $db_pass="4GK&o@G!L)>4p2[J";
        private $db_name="id14752434_globals_formularios_master";
        private $db_ip_conexion = "127.0.0.1";
        private $db_port = "3306";
   
		function __construct(){
            $this->connect_db();
		}
        public function connect_db()
        {
        try{
            //$this->db_conexion = new pdo('mysql:host='.$this->db_host.';port='.$this->db_port.';dbname='.$this->db_name.';charset=utf8,'.$this->db_user. ',' .$this->db_pass.,
             $this->db_conexion = new pdo('mysql:host=154.16.171.77;port=26513;dbname=globals_formularios_master;charset=utf8','diego','ASPW-12345',
              array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
              ));
                // Datos para la conexion a MSQLI Ejecucion de Query-Traer en Formar de Objetos Consultas de BD
                define('DB_SERVER','mysql-26513-0.cloudclusters.net:26513');
                define('DB_NAME','globals_formularios_master');
                define('DB_USER','diego');
                define('DB_PASS','ASPW-12345');
                $this->conex = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
                mysqli_select_db($this->conex, DB_NAME);

            }
         catch (PDOException $pe) { die("Error en DB_CONEXION PDO:" . $pe->getMessage());
         }
        }
        public function generate_password()
        {
            $this->new_password = substr( md5(microtime()), 1,  10);
            return $this->new_password;
        }
        //Stored Procedure_Cambiar_Password
        public function cambiar_password($name,$toEmail)
        {
            include ('envio_correo.php');
            $obj_email = new Send_Correo();
            $new_password = $this->generate_password();
            $sql = "CALL change_password
                    (
                    '$name','$toEmail','$new_password', @a
                    )";
        //echo "<script>console.log('$sql')</script>";
        $stmt = $this->db_conexion->prepare($sql);
        $stmt->execute();
        $stmt->closeCursor(); 
        $resp_db_sp = $this->db_conexion->query('select @a')->fetch();
        $resp = ($resp_db_sp['@a']);
        // echo $num_id;
        if ($resp > 0)
        { //Ejecucion Exitosa de SP_verificar_correo_usuarios
        $obj_email->send_email_new_password($name,$toEmail,$new_password);
                    //echo "<script>console.log('$data')</script>";
        }else{
        // echo "Eror MYMODEL!";
        //echo "<script> window.location='index.php'; </script>";
         $data = array('res' => 'ERROR* EXECUTE PROCEDURE Consultar Correo!' 
         
                    );
             }        
        }
        //Stored Procedure_Consultar_Email
        public function sp_consultar_correo($email)
        {
              //Construccion de Stored Procedure MYSQL 
            $sql = "CALL verificar_email_usuarios
                    (
                    '$email', @a , @b
                    )";
        //echo "<script>console.log('$sql')</script>";
        $stmt = $this->db_conexion->prepare($sql);
        $stmt->execute();
        $stmt->closeCursor(); 
        $resp_db_sp = $this->db_conexion->query('select @a, @b')->fetch();
        
        $name = ($resp_db_sp['@a']);
        $toEmail  = ($resp_db_sp['@b']);
        // echo $num_id;
        if ($name !== '')
        { //Ejecucion Exitosa de SP_verificar_correo_usuarios
         //Session
    	 //$_SESSION['name']=  $nombre_usuario;
         // $_SESSION['id'] =  $num_id;
         $data = array('res' => 'success' ,
                       'name-user' => $name,
                       'toEmail' => $toEmail

                    );
                    
        //Cambiamos Contraseña en Capa Datos
         $this->cambiar_password($name,$toEmail);     
         echo json_encode($data);
                   return $data;
        }else{
         $data = array('res' => 'ERROR* EXECUTE PROCEDURE Consultar Correo!' 
                    );
             }        
        }
        //Stored Procedure_login
        public function sp_login($identificaion,$passw){
            //Construccion de Stored Procedure MYSQL 
            $sql = "CALL verificar_login_usuarios
                    (
                    '$identificaion','$passw', @a ,@b, @c
                    )";
        //echo "<script>console.log('$sql')</script>";
        $stmt = $this->db_conexion->prepare($sql);
        $stmt->execute();
        $stmt->closeCursor(); 
        //permite limpiar y ejecutar la segunda query
        /* este codigo es para recuperar un valor
        $r = $conn->query('select @total, @avg'); 
        $total = $r->fetchColumn();
        echo $total;*/
        // este codigo serviria para recuperar mas de un valor output desde un SP.
        $resp_db_sp = $this->db_conexion->query('select @a, @b, @c')->fetch();
        
        $name = ($resp_db_sp['@a']);
        $rol = $resp_db_sp['@b'];
         $existe  = $resp_db_sp['@c'];
        // echo $num_id;
        if ($rol > 0)
        { //Ejecucion Exitosa de SP_verificar_login_usuarios
         //Session
    	 //$_SESSION['name']=  $nombre_usuario;
         // $_SESSION['id'] =  $num_id;
         $data = array('res' => 'success' ,
                       'name' => $name,
                       'existe' => $name,
                       'rol' => $rol
                    );
         echo json_encode($data);
                   return $data;
         //Notificacion por Correo Responsable de Atender Solicitud de Usuario
         //$obj_email->send_email_solicitud_new_user($respuesta_insercion,$toEmail);
                    //echo "<script>console.log('$data')</script>";
        }else{
        // echo "Eror MYMODEL!";
        //echo "<script> window.location='index.php'; </script>";
         $data = array('res' => 'ERROR* EXECUTE PROCEDURE!' 
         
                    );
             }        
        }
        
        
         //Stored Procedure sp_save_solicitud($id_solicitud)-TICKET X USUARIO
        public function usp_solicitud($id_solicitud){
            
               //Instamciamos Entidad para el envio de Correos
            include ('envio_correo.php');
            $obj_email = new Send_Correo();
            //Construccion de Stored Procedure MYSQL 
          
        $sql = "CALL usp_solicitud 
                    (
                    '$id_solicitud', @a ,@b, @c, @d
                    )";
        echo "<script>console.log('$sql')</script>";
        $stmt = $this->db_conexion->prepare($sql);
        $stmt->execute();
        $stmt->closeCursor(); 
        $resp_db_sp = $this->db_conexion->query('select @a, @b, @c, @d')->fetch();
        $respuesta_insercion = intval($resp_db_sp['@c']);
        $id_responsable = $resp_db_sp['@b'];
        $LastUserAsig = $resp_db_sp['@c'];
        $toEmail= $resp_db_sp['@b'];
        $obj_email->send_email_solicitud_new_user($respuesta_insercion,$toEmail);
         return true;
        }
        
        
        
        //SP_Create_Solicitud_Nuevo_Usuario
        public function sp_save_solicitud_user($nombre,$apellidos,$identificacion,$correo,$telefono)
        {   
            //Instamciamos Entidad para el envio de Correos
            include ('envio_correo.php');
            $obj_email = new Send_Correo();
            //Construccion de Stored Procedure MYSQL 
            $sql = "CALL usp_Solicitud_Usuario_Create 
                    (
                    '$nombre','$apellidos','$identificacion','$correo','$telefono', @a ,@b, @c, @d
                    )";
        //echo "<script>console.log('$sql')</script>";
        $stmt = $this->db_conexion->prepare($sql);
        $stmt->execute();
        $stmt->closeCursor(); 
        //permite limpiar y ejecutar la segunda query
        /* este codigo es para recuperar un valor
        $r = $conn->query('select @total, @avg'); 
        $total = $r->fetchColumn();
        echo $total;*/
        // este codigo serviria para recuperar mas de un valor output desde un SP.
        $resp_db_sp = $this->db_conexion->query('select @a, @b, @c, @d')->fetch();
        $respuesta_insercion = intval($resp_db_sp['@a']);
        $id_responsable = $resp_db_sp['@b'];
        $LastUserAsig = $resp_db_sp['@c'];
        $toEmail= $resp_db_sp['@d'];
        // echo $num_id;
        if ($respuesta_insercion > 1)
        { //Ejecucion Exitosa de SP_Create_Solicitud_Nuevo_Usuario
         //Session
    	 //$_SESSION['name']=  $nombre_usuario;
         // $_SESSION['id'] =  $num_id;
         $data = array('res' => 'success' ,
                       'name_id' => $id_responsable,
                       'resp_insercion' => $respuesta_insercion,
                       'email_responsable' => $toEmail
                    );
         echo json_encode($data);
         //Entidad-Notificacion por Correo Responsable de Atender Solicitud de Usuario
         $obj_email->send_email_solicitud_new_user($respuesta_insercion,$toEmail);
                    return $data;
                    //echo "<script>console.log('$data')</script>";
            }else{
                    echo "Eror MYMODEL!";
        //echo "<script> window.location='index.php'; </script>";
             }
}





public function sanitize($var){
  $return = mysqli_real_escape_string($this->con, $var);
  return $return;
}


public function read(){
$sql = "SELECT * FROM clientes";
$res = mysqli_query($this->con, $sql);
return $res;
}

public function create($nombres,$apellidos,$telefono,$direccion,$correo_electronico){
	$sql = "INSERT INTO `clientes` (nombres, apellidos, telefono, direccion, correo_electronico) VALUES ('$nombres', '$apellidos', '$telefono', '$direccion', '$correo_electronico')";
	$res = mysqli_query($this->con, $sql);
	if($res){
	  return true;
	}else{
	return false;
 }
}

		public function single_record($id){
			$sql = "SELECT * FROM clientes where id='$id'";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_object($res );
			return $return ;
		}


		
		public function update($nombres,$apellidos,$telefono,$direccion,$correo_electronico, $id){
			$sql = "UPDATE clientes SET nombres='$nombres', apellidos='$apellidos', telefono='$telefono', direccion='$direccion', correo_electronico='$correo_electronico' WHERE id=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}

public function delete($id){
$sql = "DELETE FROM clientes WHERE id=$id";
$res = mysqli_query($this->con, $sql);
if($res){
return true;
}else{
return false;
}
}

}
?>
