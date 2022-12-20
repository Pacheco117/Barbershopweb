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
                            <a class="dropdown-item" href="<?php echo base_url(); ?>/Login"><i class="fas fa-user mr-2"></i>Ingresar como administrador</a>

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
                <h3 class="mb-1">Registrese como cliente</h3>
                <p>Porfavor ingrese los siguientes datos</p>
            </div>
            <div class="card-body">
                
            <div class="card-body">
                                    <form class="needs-validation" novalidate method="post" action="<?php echo site_url('login/'); ?>">
                                        <div class="row">

                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">Número de Celular</label>
                                                <input type="number"  required="" data-parsley-minlength="10" class="form-control" id="validationCustom01" placeholder="Numero Celular"  required>
                                                <div class="invalid-feedback">
                                                    Ingrese este campo
                                                </div>
                                            </div>

                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">Primer nombre</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="Primer nombre"  required>
                                                <div class="invalid-feedback">
                                                    Ingrese este campo
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">Apellido</label>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Apellido"  required>
                                                <div class="invalid-feedback">
                                                   Ingrese este campo
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">Apellido Materno</label>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Apellido materno"  required>
                                                <div class="invalid-feedback">
                                                   Ingrese este campo
                                                </div>
                                            </div>
                                            
                                           
                                      

                                           
                                           
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                                        <label class="form-check-label" for="invalidCheck">
                                                            ¿Está de acuerdo en registrarse?
                                                        </label>
                                                        <div class="invalid-feedback">
                                                            Necesita confirmar
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button class="btn btn-primary" type="submit">Registrarse</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                
            </div>
            <div class="card-footer bg-white">
                <p></p>
            </div>
        </div>
    </form>
    
</body>

 
</html>