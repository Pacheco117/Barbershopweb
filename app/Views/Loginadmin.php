<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inicio de sesión administrador</title>
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

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="../index.html"><img class="logo-img" src="../assets/images/logo1.png"width="200" height="200" alt="logo"></a><span class="splash-description">Porfavor ingrese sus datos.</span></div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <input class="form-control form-control-lg"required="" id="username" type="text" placeholder="Usuario" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg"required="" id="password" type="password" placeholder="contraseña">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" required=""type="checkbox"><span class="custom-control-label">Recordar contraseña</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Iniciar sesión</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    </div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Contraseña olvidada</a>
                </div>

                
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
</body>
 
</html>