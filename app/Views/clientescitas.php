<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cliente - Citas</title>
   
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
    <div class="dashboard-header">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <a class="navbar-brand">Barbershop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-right-top">
                    
                    
                    
                    <li class="nav-item dropdown nav-user">
                        <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/avatar-1.png" alt="" class="user-avatar-md rounded-circle"></a>
                        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                            <div class="nav-user-info">
                                <h5 class="mb-0 text-white nav-user-name">Administrador</h5>
                                
                            </div>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>/"><i class="fas fa-user mr-2"></i>Ingresar como administrador</a>

                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
    <form class="splash-container">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Bienvenido</h3>
                <p>Porfavor Registrese en el sistema</p>
            </div>
            <div class="card-body">
                
                <div class="form-group pt-2" >
                       <a href="<?php echo base_url(); ?>/Registrarcliente" class="btn btn-primary btn-block">Registrese como cliente</a>
                </div>
                <div class="form-group pt-2">
                     <a href="<?php echo base_url(); ?>/Registrarcita" class="btn btn-primary btn-block">Agende su cita ahora mismo</a>
                </div>
                
            </div>
            <div class="card-footer bg-white">
                <p></p>
            </div>
        </div>
    </form>
    
</body>

 
</html>