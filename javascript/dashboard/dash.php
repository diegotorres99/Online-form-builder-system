<!DOCTYPE html>
<html lang="ES">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Panel de Control-Globals Plus Formularios</title>
        <link rel="icon" href="../img/logo-ico.png">
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
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
                        <a class="dropdown-item" href="#">Configuración</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Salir</a>
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
                                Panel de Control</a
                            >
                            <div class="sb-sidenav-menu-heading">Formularios</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fa fa-building"></i></div>
                                Departamentos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                        
                                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="https://unpunished-hulls.000webhostapp.com/forms/javascript/dashboard/forxdeparta/forxdeparta.php">Formularios por Departamentos </a>
                                            </div>
                                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="./gestionar_departamentos.php">Usuarios por Departamento</a></nav>
                                            </div>
                                             <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="https://unpunished-hulls.000webhostapp.com/forms/javascript/dashboard/estado/estado.php">Estado de Formulario</a></nav>
                                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                                ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Formularios
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
                                        >Ver Formularios
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="./mostrar_formularios.php">Ver Formularios</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError"
                                        >Crear Formulario
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="#">Nuevo Formulario</a></nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Usuarios</div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-chart-area"></i>
                                </div>
                                Estadistícas
                            </a>
                                
                            <a class="nav-link" href="./usuarios2.php">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-table"></i>
                                </div>
                                Administración de Usuarios
                            </a>

                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                Roles de Usuarios
                            </a>

                            <div class="sb-sidenav-menu-heading">Help Desk Solutions</div>
                            
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-cog"></i>
                                </div>
                               Configuración de Tickets
                            </a>

                            <a class="nav-link" href="config2.php">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-at"></i>
                                </div>
                                Configuración Email
                            </a>

                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-wrench"></i>
                                </div>
                                Otras Configuraciones
                            </a>

       

                            
                        </div>

                        
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Usuarios:</div>
                        
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Panel de Control<span span="" style="color: #a1cc1b">+</span></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Información del Sistema</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Todos los Tickets</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Ver Detalles</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Tickets Pendientes</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Ver Detalles</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Tickets Listos</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Ver Detalles</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Tickets Rechazados</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Ver Detalles</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Departamentos y Tickets</div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-bar mr-1"></i>Departamentos y Formularios</div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Usuarios</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Apellidos</th>
                                                <th>Email</th>
                                                <th>Estado Sesión</th>
                                                <th>Rol</th>
                                                <th>Departamento</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Apellidos</th>
                                                <th>Email</th>
                                                <th>Estado Sesión</th>
                                                <th>Rol</th>
                                                <th>Departamento</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php 
                                                require('conexion.php');
                                                $sql = "SELECT * FROM `usuarios`
                                                INNER JOIN roles on roles.id_Rol = usuarios.id_Rol
                                                LEFT JOIN departamentos on departamentos.id_departamento = usuarios.id_departamento
                                                ORDER BY nombre DESC";
                                                $req = mysqli_query($conex, $sql);
                                                    while($result = mysqli_fetch_object($req)){
                                                        echo '<tr>
                                                                <td>'.$result->nombre.'</td><td>'
                                                                    .$result->apellidos.'</td><td>'
                                                                    .$result->email.'</td><td>'
                                                                    .$result->estado_session.'</td><td>'
                                                                    .$result->rol.'</td><td>'
                                                                    .$result->nombre_departamento.'</td>
                                                            </tr>';
                                                    }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Globals Formularios</a>
                                &middot;
                                <a href="#"> &amp; 2021</a>
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