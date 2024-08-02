<?php
require 'test.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Grupo DI'EZ</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/gear.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
</head>


<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>República de Cuba 450, Mar
                        del Plata, Bs As.</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>0223 6178972</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>contacto@grupodiez.ar</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
            <div style="padding-top: 4px;">
                    <a class="btn btn-primary btn-square me-2" href="https://wa.me/+5492236178972?text=Gracias%20por%20contactarte%20con%20Grupo%20Di'ez%20Metalúrgica.%20Deja%20tu%20consulta%20y%20te%20responderemos%20a%20la%20brevedad" 
                    alt="Consulta por WhatsApp" target="_blank"><i class="fab fa-whatsapp fw-normal"></i></a>
                    </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">
                <img class="logo-gdiez" src="img/logoprueba4.png" alt="Logotipo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.html" class="nav-item nav-link ">Home</a>
                    <a href="about.html" class="nav-item nav-link">Institucional</a>
                    <a href="service.html" class="nav-item nav-link">Servicios</a>
                    <a href="blog.html" class="nav-item nav-link">Galería</a>
                    <a href="contact.php" class="nav-item nav-link active">Contacto</a>
                </div>
            </div>
        </nav>

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel3.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">GRUPO DI'EZ</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">CONTACTANOS</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">GRUPO DI'EZ</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">CONTACTANOS</h1>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">CONTACTO</h5>
                <h1 class="mb-0">Si tiene alguna consulta, no dude en contactarnos</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Llama para hacer cualquier pregunta.</h5>
                            <h4 class="text-primary mb-0">0223 6178972</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Envíe un correo electrónico para obtener una cotización gratuita</h5>
                            <h4 class="text-primary mb-0">contacto@grupodiez.ar</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Visite nuestras instalaciones</h5>
                            <h4 class="text-primary mb-0">República de Cuba 450, Mar del Plata, Bs As.</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <form method="post" action="/contact.php">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0 bg-light px-4" name="nombre" placeholder="Nombre/ Empresa" style="height: 55px;" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control border-0 bg-light px-4" name="correo" placeholder="Email" style="height: 55px;" required>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" name="asunto" placeholder="Asunto" style="height: 55px;" required>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0 bg-light px-4 py-3" rows="4" name="mensaje" placeholder="Mensaje" required></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Enviar mensaje</button>
                            </div>
                        </div>
                    </form>



                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6286.805178602797!2d-57.58548759124525!3d-38.0143929531676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9584dec4e5889cbf%3A0x49c32815b7222f66!2sRep%C3%BAblica%20de%20Cuba%20450%2C%20B7608EBJ%20Mar%20del%20Plata%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1699927673541!5m2!1ses!2sar" frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


  <!-- Vendor Start -->
  <!-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <h3 style="color: blue; text-align: center; margin-bottom: 30px;">Empresas que confiaron en nosotros
                </h3>

                <div class="owl-carousel vendor-carousel">

                    <img src="img/cheverry.png" alt="cheverry">

                    <img src="img/pharmamerican.png" alt="pharmamerican">
                    <img src="img/gluck.png" alt="gluck">
                    <img src="img/cramsa.png" alt="cramsa">
                    <img src="img/havanna.png" alt="havanna">
                    <img src="img/materi.png" alt="Materia">
                    <img src="img/farmfrites.png" alt="farmfrites">
                    <img src="img/lacampagnolalogo.png" alt="La Campagnola">




                    <img src="img/grupoverraz.png" alt="grupoverraz">
                    <img src="img/delpack.png" alt="delpack">
                    <img src="img/ortuzar.png" alt="ortuzar">
                    <img src="img/goyeneche.png" alt="goyeneche">

                    <img src="img/bbroun.png" alt="b Braun">

                </div>
            </div>
        </div>
    </div> -->
    <!-- Vendor End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">

                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Mantente en Contacto</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">República de Cuba 450, Mar del Plata, Bs As.</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">contacto@grupodiez.ar</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">0223 6178972</p>
                            </div>
                            <div class="d-flex mt-4">
                    <a class="btn btn-primary btn-square me-2" href="https://wa.me/+5492236178972?text=Gracias%20por%20contactarte%20con%20Grupo%20Di'ez%20Metalúrgica.%20Deja%20tu%20consulta%20y%20te%20responderemos%20a%20la%20brevedad" 
                    alt="Consulta por WhatsApp" target="_blank"><i class="fab fa-whatsapp fw-normal"></i></a>
                    </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="index.html"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="about.html"><i class="bi bi-arrow-right text-primary me-2"></i>Institucional</a>
                                <a class="text-light mb-2" href="service.html"><i class="bi bi-arrow-right text-primary me-2"></i>Servicios</a>
                                <a class="text-light mb-2" href="blog.html"><i class="bi bi-arrow-right text-primary me-2"></i>Galeria</a>
                                <a class="text-light" href="contact.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contactanos</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <img class="logo-gdiez" src="img/logoprueba4.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5 text-lg-right">
                    <img class="logo-afip" src="img/qr-todo-inox-título.png" alt="" style="max-width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Grupo DI'EZ</a>. Todos los Derechos Reservados. Desarrollo SGF Devs.</p>
                    </div>
                </div>>
            </div>
        </div>
    </div>
    <!-- Footer End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- <script>
        function enviarFormulario() {
            // Puedes agregar aquí la lógica de envío del formulario con AJAX si es necesario.

            // Después del envío exitoso, redirige a la página de éxito
            window.location.href = 'gracias.html';

            // Retorna false para evitar el envío estándar del formulario
            return false;
        }
    </script> -->
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>