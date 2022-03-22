<?php $pg="sobre-mi" ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre-Mi</title>
    <!--agrego las carpetas al css de fontawesome y bootstrap y los llamo-->
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <!--llamo a estilos-->
    <link rel="stylesheet" href="css/estilos.css">
    <!--incluyo libreria montserrat-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body id="sobre-mi">
<?php include_once "header.php" ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-12 mt-4">
                    <h1 class="mt-sm-4 pb-sm-4">Sobre mí</h1>
                    <p class="pb-sm-5">Apasionado por el marketing y los negocios. Soy estudiante de
                        programación Full Stack y de Base de datos.</p>
                    <a href="contacto.php" class="btn btn-rojo">Enviar mensaje</a>

                </div>
                <div class="col-sm-3 col-12 mt-4 offset-sm-2">
                    <img src="images/Foto.png" alt="Lucas Andrés Romano" title="Lucas Andrés Romano" class="img-fluid img-circle">
                </div>
            </div>
        </div>
        <section id="tecnologias" class="color-gradiente pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="my-sm-5 text-white">Stack tecnológico</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Javascript</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="https://img.stackshare.io/service/1209/javascript.jpeg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>PHP</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="https://img.stackshare.io/service/991/hwUcGZ41_400x400.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>HTML5</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="https://img.stackshare.io/service/2538/kEpgHiC9.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>React.js</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="https://img.stackshare.io/service/1020/OYIaJ1KK.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>jQuery</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="https://img.stackshare.io/service/1021/lxEKmMnB_400x400.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Bootstrap</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="https://img.stackshare.io/service/1101/C9QJ7V3X.png">
                        </div>
                    </div>
                </div>
                <div class="row mt-sm-4 mt-0">
                    <div class="col-sm-2 col-6">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Laravel</h3>
                            <img class="img-fluid d-block mx-auto" width="90" src="https://depcsuite.com/wp-content/uploads/2019/08/220px-Laravel.svg_.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>MySQL</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="https://img.stackshare.io/service/1615/mariadb-logo-400x400.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>CSS</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="https://img.stackshare.io/service/6727/css.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Git</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="https://img.stackshare.io/service/1046/git.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Apache</h3>
                            <img class="img-fluid d-block mx-auto" width="110" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/db/Apache_Software_Foundation_Logo_%282016%29.svg/1200px-Apache_Software_Foundation_Logo_%282016%29.svg.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Mercadopago</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="https://img.stackshare.io/service/12698/gUjuxmmd_400x400.jpg">
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section id="experiencia" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-briefcase"></i> Experiencia laboral</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded">

                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="images/inadi.png" class="img-fluid baw" title="logos">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Editor y maquetador Back-end argentina.gob.ar</h3>
                            <h4>INADI</h4>
                            <h5>2021 - presente</h5>
                            <p>Edito y maqueto contenidos del instituto para Argentina.gob.ar</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="images/inadi.png" class="img-fluid baw" title="logos">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Asistente de administración en despacho</h3>
                            <h4>INADI</h4>
                            <h5>2011 - 2021</h5>
                            <p>Estaba a cargo de la firma de mi superior. Realizaba el manejo de los expedientes, las
                                actuaciones, firmas de convenio, control de caja chica, emición de autorizaciones.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="formacion" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-graduation-cap"></i> Formación acádémica</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded p-1">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/logo-UAI.png" class="img-fluid baw" title="logos">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Analista Programador</h3>
                            <h4>Universidad Abierta Interamericana</h4>
                            <h5>2020 – 2022</h5>
                            <p>http://www.uai.edu.ar/</p>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </section>
        <section id="formacion" class="container mb-5">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-graduation-cap"></i> Curso de Formación Profesional</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded p-1">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/logo-depcsuite.svg" class="img-fluid baw" title="logos">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Curso de programación en python</h3>
                            <h4>DEPCSUITE</h4>
                            <h5>Expedición: en algun momento del 2022</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/logo-depcsuite.svg" class="img-fluid baw" title="logos">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Curso de programación FullStack</h3>
                            <h4>DEPCSUITE</h4>
                            <h5>Expedición: en algun momento del 2022</h5>
                            <p></p>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </section>
        <section id="idiomas">
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row mr-sm-1 bg-white card-idioma shadow me-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>ESPAÑOL - Nativo</li>
                                    <li>INGLÉS - Intermediate</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="row ml-sm-2 bg-white card-idioma shadow ms-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>HOBBIES</h2>
                                <ul>
                                    <li>Fitness</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
    </main>
    <footer class="container">
        <div class="row mt-5 pb-3">
            <!--fila-->
            <div class="col-12 col-sm-3 text-center text-sm-start">
                <!--Columna 1-->
                <a href="https://github.com" target="_blank" title="Github"> <i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com" target="_blank" title="Linkedin"> <i class="fab fa-linkedin-in"></i></a>
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