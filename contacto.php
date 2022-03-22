<?php $pg="contacto"; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <!--agrego las carpetas al css de fontawesome y bootstrap y los llamo-->
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <!--llamo a estilos-->
    <link rel="stylesheet" href="css/estilos.css">
    <!--incluyo libreria montserrat-->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body id="contacto">
    <?php include_once "header.php" ?>
    <main class="container">
        <!--creo las filas-->
        <div class="row">
            <!--creo las columnas-->
            <div class="col-12 mt-3 mb-5">
                <h1>Contacto</h1>
            </div>
            <div class="row">
                <div class="whapp col-sm-6 col-12">
                    <p>Te invito a que me contactes enviándome un mensaje o por whatsapp</p>

                </div>
                <div class="col-sm-6 col-12">
                    <form action="" method="POST"></form>
                    <div class="mb-3">
                        <!--class "form-control es de bootstrap al igual que btn"-->
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" required
                            class="form-control shadow">
                    </div>
                    <div class="mb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" required
                            class="form-control shadow">
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="txtTel" id="txtTel" placeholder="Telefono/Whatsapp" required
                            class="form-control shadow">
                    </div>
                    <div class="mb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí el mensaje"
                            class="form-control shadow" ></textarea>
                    </div>
                    <div class=" me-auto text-right">
                        <button type="submit" name="btnEnviar" id="btnEnviar"
                            class="btn btn-blanco px-4">ENVIAR</button>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <footer class="container" >
        <div class="row mt-5 pb-3">
            <!--fila-->
            <div class="col-12 col-sm-3 text-center text-sm-start">
                <!--Columna 1-->
                <a href="https://github.com" target="_blank" title="Github"> <i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com" target="_blank" title="Linkedin"> <i
                        class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0">
                <!--Columna 2-->
                " Sponsor "
                <a href="https://depcsuite.com" id="link2" target="_blank" title="DEPCSUITE">DePC Suite</a>

            </div>
            <div class="col-12 col-sm-3 text-center text-sm-start  pt-2 p-sm-0">
                <!--Columna 3-->
                <a href="mailto:romanolucasandres@gmail.com" id="link2">romanolucasandres@gmail.com</a>

            </div>
        </div>

    </footer>
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=541150149264" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
    </div>

</body>
<script src="css/bootstrap/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</html>