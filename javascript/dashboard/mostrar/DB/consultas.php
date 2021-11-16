<?php
    require_once "conn_pdo.php";

    $datos = json_decode(file_get_contents("php://input"));

    $request = $datos->request;

    if($request == 1) {
        $sql = "SELECT * from formularios where estado_formulario = 'A' AND publico_extra_net = '1'";
        // $sql = "SELECT * FROM formularios where id=:id";
        // $sql_data = ['id' => $id_departamento];

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $result = json_encode($result, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

        print $result;
    }

    if($request == 2) {
        $sql = "SELECT * from departamentos";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $result = json_encode($result, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

        print $result;
    }

    // agregar departamentos
    if($request == 3){
        $nombre_dp = $datos->set_nombre_dp;
        $estado_dp = $datos->set_estado_dp;

        if (!$nombre_dp.equals('N/A')) {
            $sql = "INSERT INTO `departamentos`(`nombre_departamento`, `estado`, `fecha_creacion`) VALUES ($nombre_dp,$estado_dp, CURRENT_TIMESTAMP())";

            $stmt = $conn->prepare($sql);
            $stmt->execute();
        }
        
        print "OK";
    }

    // getUsers
    if($request == 4){
        
        $sql = "SELECT cedula, nombre, id_departamento, email, apellidos FROM usuarios WHERE id_departamento IS NULL;";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $result = json_encode($result, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

        print $result;
    }

    // actualizar funcionario
    if($request == 6){
        $id_user = $datos->set_id_user;
        $id_dp = $datos->set_id_dp;

        $sql = "UPDATE usuarios where cedula = $id_user SET id_departamento = $id_dp;";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        print "OK";
    }

    // elminar funcionario
    if($request == 7){
        $id_user = $datos->set_id_user;
        //var_dump($id_user);
        $sql = "DELETE FROM usuarios WHERE cedula = $id_user Limit 1;";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        print "OK";
    }

    // actualizar completo funcionario
    if($request == 8){
        $id_user = $datos->set_id_user;
        $nombre = $datos->set_nombre;
        $apellidos = $datos->set_ape;
        $email = $datos->set_email;
        $pass = $datos->set_pass;
        $id_rol = $datos->set_id_rol;
        $id_dp = $datos->set_id_dep;

        $sql = "CALL UpdateUser ('$nombre', '$apellidos', '$email', $id_rol, '$pass', $id_dp, '$id_user');";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        print "OK";
    }

    //
    if($request == 9){

        //$sql = "SELECT * FROM departamentos;";
        
        $sql = "CALL getUsers;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        //var_dump($stmt);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $result = json_encode($result, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

        //var_dump($result);
        print $result;
    }

    if($request == 10) {
        $sql = "SELECT * from roles";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $result = json_encode($result, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

        print $result;
    }
    
    // Mostrar los datos del email
    if($request == 12) {
        $sql = "SELECT id, email, pass from sys_email where id = 1;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $result = json_encode($result, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

        print $result;
    }

    // actualizar funcionario
    if($request == 13){
        $set_email = $datos->set_email;
        $set_pass = $datos->set_pass;
        $set_id = $datos->set_id;

        $sql = "UPDATE sys_email SET email = '$set_email', pass = '$set_pass' where id = $set_id;";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        var_dump($sql);
        print "OK";
        
    }