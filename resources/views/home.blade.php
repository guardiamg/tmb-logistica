<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://kit.fontawesome.com/4439b2b03a.js" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/admin/estilos.css">
    </head>
    <body>
        <header>
            <div class="container-fluid contenedor-header">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="#">
                            <img src="assets/logo_mini.png" alt="portal del fuego">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav ml-auto">
                                <a class="nav-item nav-link active" href="#"><i class="fas fa-search"></i> Seguimiento de envíos</a>
                                <a class="nav-item nav-link" href="#">Nosotros</a>
                                <a class="nav-item nav-link" href="#">Contactenos</a>
                                <a class="nav-item nav-link" href="#"><i class="fas fa-user"></i> Iniciar Sesión</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>

        <main>
            <div class="container" id="shipment-tracking">
                <h2 class="text-center">SEGUIMIENTO DE ENVÍOS</h2>
                <p class="text-center text-secondary d-none d-sm-block">El envío y entrega es fácil con nosotros, y hacerlo no podrá ser más sencillo. Una vez que hayas realizado la compra en <a href="https://portaldelfuego.com.ar">portaldelfuego.com.ar</a> se asigna un número de seguimiento, por ejemplo, algo como <span class="font-weight-bold">AWB-472304198</span>. Simplemente ingresá ese número único en el cuadro a continuación y puede averiguar exactamente donde está!</p>
            </div>

            <div class="container-fluid d-flex align-items-center" id="form-shipment-tracking">
                <div class="container pt-3">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h2>INGRESE SU NÚMERO DE SEGUIMIENTO</h2>
                        </div>
                        <div class="col-12 col-sm-6">
                            <form class="row" action="" method="" v-on:submit.prevent="prueba()">
                                <div class="col-12 col-sm-6 form-group">
                                    <input type="text" class="form-control" v-model="seguimiento" placeholder="Ejemplo: AWB-472304198">
                                </div>
                                <div class="col-12 col-sm-6 form-group">
                                    <button class="btn font-weight-bold"><i class="fas fa-truck fa-lg"></i> Seguimiento de Envío</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class=container>
                <div class="row">
                    <div class="col-12 col-sm-6" id="card-schedule-withdrawal">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="h5 card-title d-flex align-items-center"><span class="fa-time mr-2"><i class="far fa-times-circle fa-lg"></i></span> PAQUETE AÚN NO RETIRADO?</h2>
                                <p class="card-text text-secondary">Lo sentimos, esto no sucede a menudo, estamos seguros de que hay una buena razón. Si son más de las 18hs del día de la entrega, reprograme una nueva aquí.</p>
                                <a href="#" class="btn">Reprogramar Retiro</a>
                            </div>
                        </div>
                   </div>
                   <div class="col-12 col-sm-6" id="card-contact-us">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="h5 card-title d-flex align-items-center"><span class="fa-time mr-2 text-danger"><i class="fas fa-history fa-lg"></i></span> NECESITAS UNA RESPUESTA RÁPIDA?</h2>
                                <p class="card-text text-secondary">Si tiene alguna pregunta sobre su entrega, no dude en ponerce en contacto con nuestro equipo de atención al cliente. Pero primero revisa nuestra página de Preguntas Frecuentes ya que la respuesta que estás buscando probablemente estará ahí.</p>
                                <a href="#" class="btn">Contacta con Nosotros</a>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </main>

       <footer class="align-self-end">
           <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-3 d-flex justify-content-center align-items-center">
                            <p class="text-light"><img src="assets/logo_mini.png" alt="portal del fuego"></p>
                        </div>
                        <div class="col-6 col-md-3 d-flex justify-content-center align-items-center information">
                            <ul class="list-unstyled">
                                <li class="title_li">INFORMACIÓN</li>
                                <li><a href="#">Nosotros</a></li>
                                <li><a href="#">Contacto</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-3 d-flex justify-content-center align-items-center information">
                            <ul class="list-unstyled">
                                <li class="title_li">HERRAMIENTAS</li>
                                <li><a href="#">Mi Cuenta</a></li>
                                <li><a href="#">Seguimiento de Envío</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-3 d-flex justify-content-center align-items-center social">
                            <a class="d-block" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="d-block" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="d-block" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="row politicas">
                        <p class="text-light mx-auto">&copy; 2020 <a href="https://portaldelfuego.com.ar">portaldelfuego.com.ar</a> | <a href="#">Políticas de Privacidad</a> | <a href="#">Políticas de Cookies</a> | <a href="#">Términos y Condiciones</a> | <a href="#">Política de Reembolso</a></p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
