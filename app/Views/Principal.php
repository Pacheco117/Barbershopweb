<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Principal</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
 <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
         <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="../index.html">Barbershop</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                           
                        </li>
                       

                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">
Administrador</h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menú
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-address-book"></i>Clientes <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url(); ?>/ListaClientes">Lista de Clientes</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url(); ?>/AgregarClientes">Agregar Clientes</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url(); ?>/ModificarClientes">Modificar Clientes</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fas fa-calendar-alt"></i>Citas</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url(); ?>/Citas">Lista de Citas <span class="badge badge-secondary">New</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url(); ?>/AgregarCitas">Agregar Citas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url(); ?>/Modificar">Modificar Citas</a>
                                        </li>
                                       
                                        
                                    
                                       
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-cut"></i>Cortes</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url(); ?>/Cortes">Lista cortes <span class="badge badge-secondary">New</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url(); ?>/AgregarCorte">Agregar Cortes</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url(); ?>/ModificarCorte">Modificar Cortes</a>
                                        </li>
                                       
                                        
                                    
                                       
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-dollar-sign"></i>Precios</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url(); ?>/Precios">Lista de precios</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url(); ?>/ModificarPrecios">Modificar Precios</a>
                                        </li>
               
                                    </ul>
                                </div>
                            </li>
                            
                           
                            
                            
                            
                            
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--vetealaverga hay que terminar esto-->
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
		
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h3 class="text-center">Bienvenido!</h3>
                    <div class="row">
                        <!-- ============================================================== -->
                     <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-inline-block">
                                        <h5 class="text-muted">Clientes Registrados</h5>
                                        <h2 class="mb-0">0</h2>
                                    </div>
                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                                        <i class="fa fa-user fa-fw fa-sm text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end total followers   -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-inline-block">
                                        <h5 class="text-muted">Citas totales</h5>
                                        <h2 class="mb-0">0</h2>
                                    </div>
                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-secondary-light mt-1">
                                        <i class="fas fa-calendar-alt fa-fw fa-sm text-secondary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-inline-block">
                                        <h5 class="text-muted">Citas completadas</h5>
                                        <h2 class="mb-0">0</h2>
                                    </div>
                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-secondary-light mt-1">
                                        <i class="fas fa-calendar-check fa-fw fa-sm text-secondary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-inline-block">
                                        <h5 class="text-muted">Citas pendientes</h5>
                                        <h2 class="mb-0">0</h2>
                                    </div>
                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-secondary-light mt-1">
                                        <i class="fas fa-clock fa-fw fa-sm text-secondary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end partnerships   -->
                        <!-aqui va a ir algo pero no sé que puede ir--->
                        </div>

                    
                </div>
                
                        

                        
                                

                            
                                
            </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->

</body>
 
</html>