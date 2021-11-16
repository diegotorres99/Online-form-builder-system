<?php
session_start();
        //Set time and Country
        date_default_timezone_set('America/Costa_Rica');
        $date = date('H:i:s Y-m-d');
        $fname='';
        $fid='';
        $idSolicitd='';

if(!isset($_GET) || !isset($_SESSION)){
    $var = "Hola, Debes Iniciar Sessión.";
    echo "<script> alert('".$var."')
    window.location.href = '../login.php'
    </script>";
   // header("Location:../login.php");

}
elseif (isset($_SESSION['idUser'])) {
    $fid = $_SESSION['idUser'];
    $fname = $_SESSION['idName'];
}

elseif (isset($_GET['id'])) {
    $fid = $_GET['id'];
    $fname = $_GET['name'];

    $_SESSION['idName'] =  $_GET['name'];
    $_SESSION['idUser'] = $_GET['id'];
}
else {
    echo "Error";
}
//Al entrar por pimerar vez recibo variables get y las pasamos a session

?>
<!DOCTYPE html>
<html lang="ES">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Solicitudes y Tickets</title>
        <link rel="icon" href="../img/logo-ico.png">
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Globals<span span="" style="color: #a1cc1b">+</span> Formularios </a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <!--<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>-->
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
             
                        <a class="dropdown-item" href="salir_login.php">Salir</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.html"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Formularios y Solicitudes</a
                            >
                           
                       


                 
                        </div>

                        
                    </div>
              
                    <div class="sb-sidenav-footer">
                        <div class="small">Usuario: <?php echo $fname.'<br> Cédula: '.$fid;?></div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Formularios Disponibles<span span="" style="color: #a1cc1b">+</span></h1>


               
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-users-cog"></i> Selecciona el formulario a llenar</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                             
        <div class="wrap">

<?php
if(isset($_SESSION['success_send_form'])){
            echo '<div class="alert alert-success">¡Formulario Enviado Correctamente!</div>';
            unset($_SESSION['success_send_form']);
        } ?>
<ul class="votacion index">
<?php

require('conexion.php');
$sql = "SELECT * FROM formularios ORDER BY id_Formulario DESC";
$req = mysqli_query($conex, $sql);
    while($result = mysqli_fetch_object($req)){
        echo '<li><b><a href="../responder_formulario.php?id='.$result->id_Formulario.'">'.$result->nombre_formulario.'</b></a></li><hr>';
    }
?>
</ul>

</div>
                                    </table>
                                </div>
                            </div>
                        </div>
                      
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-user-check"></i> Historial de Solicitudes</div>
                            <div class="card-body">
                 
                                <div class="table-responsive">
                                    <table class="table table-striped"  id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>N° Solicitud</th>
                                                <th>ID Encargado</th>
                                                <th>Fecha de Asignación</th>
                                                <th>Fecha de Resolución</th>
                                                <th>Estado</th>
                                                <th>Resolución</th>
                                                <th>Comentario</th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>N° Solicitud</th>
                                                <th>ID Encargado</th>
                                                <th>Fecha de Asignación</th>
                                                <th>Fecha de Resolución</th>
                                                <th>Estado</th>
                                                <th>Resolución</th>
                                                <th>Comentario</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php 
                                        
                                                $sql = "SELECT * FROM `solicitud_x_formulario` 
                                                WHERE id_usuario='".$fid."'
                                                ORDER BY fecha_asignacion DESC;";
                                                $req = mysqli_query($conex, $sql);
                                                    while($result = mysqli_fetch_object($req)){
                                                        echo '<tr>
                                                                <td>'.$result->id_solicitud.'</td><td>'
                                                                    .$result->id_encargado.'</td><td>'
                                                                    .$result->fecha_asignacion.'</td><td>'
                                                                    .$result->fecha_resolucion.'</td><td>'
                                                                    .$result->estado.'</td><td>'
                                                                    .$result->resolucion.'</td><td>'
                                                                    .$result->comentario.'</td>
                                                   
                                                            </tr>';
                                                    }
                                            ?>
                                        </tbody>
                                    </table>
           
                              
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">&copy; Globals+ Formularios &copy;2021</div>
                            <div>
                           
                           
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>