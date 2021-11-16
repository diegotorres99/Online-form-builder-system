<?php


class Database{
		private $db_conexion;
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
             $this->db_conexion = new pdo('mysql:host=204.2.195.93;port=21700;dbname=globals_formularios_master;charset=utf8','diego','ASPW-12345',
              array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
              ));
            }
         catch (PDOException $pe) { die("Error en DB_CONEXION PDO:" . $pe->getMessage());
         }
        }
        
        //SP_Create_Solicitud_Nuevo_Usuario
        public function sp_save_solicitud_user($nombre,$apellidos,$identificacion,$correo,$telefono)
        {   
            //Instamciamos Entidad para el envio de Correos
            include ('envio_email.php');
            $obj_email = new Send_Correos();
            //Construccion de Sstored Procedure MYSQL 
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
         //Notificacion por Correo Responsable de Atender Solicitud de Usuario
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
