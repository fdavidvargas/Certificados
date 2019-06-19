<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Certificados Laborales</title>
</head>
<body>

<html><head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/sofia/staticContent/css/util.css">
    <link rel="stylesheet" type="text/css" href="/sofia/staticContent/css/main.css">
    <!--===============================================================================================-->
    <script>
        function deshabilitaRetroceso() {
            window.location.hash = "no-back-button";
            window.location.hash = "Again-No-back-button" //chrome
            window.onhashchange = function() {
                window.location.hash = "no-back-button";
            }
        };
    </script>
</head>
<body onload="deshabilitaRetroceso();">
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-50 p-r-50 p-t-30 p-b-30">
            <img class="center-block" src="/staticweb/staticContent/images/logoSofia.png"> <span class="login100-form-title p-t-40 p-b-30"> <i class="fa fa-user"></i> Su Sesión ha Finalizado
				</span>
            <h5 class="text-center p-b-30">Para seguir usando los servicios
                de SOFIA Plus, lo invitamos a ingresar nuevamente.</h5>
            <div class="container-login100-form-btn p-b-30">
                <a class="login100-form-btn" href="http://www.senasofiaplus.edu.co:80/sofia-public/" id="btnRegresar">
                    Ingresar </a>
            </div>
            <h5 class="text-center">Gracias por ser parte integral del
                Sena.</h5>
            <iframe style="visibility: hidden;" id="registradoBox1" height="0px" width="0px" src="/sofia/josso_logout/" scrolling="no" frameborder="0">
                . </iframe>
        </div>
    </div>
</div>
<!--===============================================================================================-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--===============================================================================================-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/esm/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js"></script>
<!--===============================================================================================-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"></script>
<!--===============================================================================================-->
<script>
    $.backstretch([
        "/staticweb/staticContent/images/fondo1.jpg",
        "/staticweb/staticContent/images/fondo2.jpg",
        "/staticweb/staticContent/images/fondo3.JPG" ], {
        duration : 3000,
        fade : 750
    });
    $.unblockUI();
    document.addEventListener('keydown', (event) => {
        const keyName = event.key;
        if (keyName == 'F5'){
            alert('La funci\u00F3n F5 no esta disponible');
            window.location.href = '/sofia-public';
        }
    });
</script><div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 920px; width: 1365px; z-index: -999999; position: fixed;"><img src="/staticweb/staticContent/images/fondo3.JPG" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 1365px; height: 1068.26px; max-height: none; max-width: none; z-index: -999999; left: 0px; top: -74.1304px;"></div>

</body></html>

</body>
</html>