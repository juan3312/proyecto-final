<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio Tienda</title>
  <!-- <link rel="stylesheet" href="../Proyecto_Final/css/Style.css">
  <link rel="stylesheet" href="../Proyecto_Final/css/fontello.css">
  <script src="../js/index.js"></script> -->
  <!-- CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Fin CDN-->
  <link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
  rel="stylesheet"
  integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
  crossorigin="anonymous"/>
</head>

<body>

  <!-- Navmenu -->
  <nav>
    <ul class="nav nav-pills">
      <img src="../Proyecto_Final/img/lg-lucero.png" alt="">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../index.html">Inicio</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="../pages/productos.html" role="button"
          aria-expanded="false">Tienda</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="./pages/productos.html">Productos</a></li>
          <li><a class="dropdown-item" href="./pages/camisas.html">Camisa</a></li>
          <li><a class="dropdown-item" href="./pages/pantalones.html">Pantalones</a></li>
          <li><a class="dropdown-item" href="./pages/gorras.html">Gorras</a></li>
          <li><a class="dropdown-item" href="./pages/accesorios.html">Accesorios</a></li>
          <li><a class="dropdown-item" href="./pages/zapatos.html">Zapatos</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./pages/rebajas.html">Rebajas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./pages/sobre-nosotros.html">Sobre Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./pages/contacto.html">Contacto</a>
      </li>
    </ul>
  </nav>
  <!-- Fin Navmenu -->

  <!-- Header -->
  <!-- Carousel -->
  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../Proyecto_Final/img/lg-sueter.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="../Proyecto_Final/img/lg-shirt.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="../Proyecto_Final/img/bg-index (3).jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Fin Carousel-->
  <!-- Categorias -->
  <!--/gallery -->

  <section class="banner-bottom py-5">
    <div class="contenedor py-md-5">
      <div class="row">
        <div class="col-lg-4 gallery-content-info text-center mt-lg-5">
          <h3 class="title-wthree mb-lg-5 mb-4">Siendo Tendencia Ahora</h3>
          <p>Lorem ipsum dolor sit,Nulla pellentesque dolor ipsum laoreet eleifend integer,Pellentesque maximus libero.
          </p>
          <a href="shop.html" class="btn shop mt-3">
            <button type="submit" class="btn submit">Comprar Ahora</button>
          </a>
        </div>
        <div class="col-lg-8 gallery-content">
          <div class="row">
            <div class="col-md-4 col-sm-6 gal-img">
              <a href="#gal1"><img src="../Proyecto_Final/img/gorra_1.jpg" alt="Baggage" class="img-fluid mt-4"></a>
            </div>
            <div class="col-md-4 col-sm-6 gal-img">
              <a href="#gal2"><img src="../Proyecto_Final/img/accesorios.jpg" alt="Baggage" class="img-fluid mt-4"></a>
            </div>
            <div class="col-md-4 col-sm-6 gal-img">
              <a href="#gal3"><img src="../Proyecto_Final/img/pantalones.jpg" alt="Baggage" class="img-fluid mt-4"></a>
            </div>
            <div class="col-md-4 col-sm-6 gal-img">
              <a href="#gal4"><img src="../Proyecto_Final/img/camisas.jpg" alt="Baggage" class="img-fluid mt-4"></a>
            </div>
            <div class="col-md-4 col-sm-6 gal-img">
              <a href="#gal5"><img src="../Proyecto_Final/img/colecciones.jpg" alt="Baggage" class="img-fluid mt-4"></a>
            </div>
          </div>
          <!-- gallery popups -->
          <!-- popup-->
          <div id="gal1" class="popup-effect">
            <div class="popup">
              <img src="../Proyecto_Final/img/gorra_1.jpg" alt="Popup image" class="img-fluid mt-4" />
              <a class="close" href="#gallery">&times;</a>
            </div>
          </div>
          <!-- //popup -->
          <!-- popup-->
          <div id="gal2" class="popup-effect">
            <div class="popup">
              <img src="../Proyecto_Final/img/accesorios.jpg" alt="Popup image" class="img-fluid mt-4" />
              <a class="close" href="#gallery">&times;</a>
            </div>
          </div>
          <!-- //popup -->
          <!-- popup-->
          <div id="gal3" class="popup-effect">
            <div class="popup">
              <img src="../Proyecto_Final/img/pantalones.jpg" alt="Popup image" class="img-fluid mt-4" />
              <a class="close" href="#gallery">&times;</a>
            </div>
          </div>
          <!-- //popup -->
          <!-- popup-->
          <div id="gal4" class="popup-effect">
            <div class="popup">
              <img src="../Proyecto_Final/img/camisas.jpg" alt="Popup image" class="img-fluid mt-4" />
              <a class="close" href="#gallery">&times;</a>
            </div>
          </div>
          <!-- //popup -->
          <!-- popup-->
          <div id="gal5" class="popup-effect">
            <div class="popup">
              <img src="../Proyecto_Final/img/colecciones.jpg" alt="Popup image" class="img-fluid mt-4" />
              <a class="close" href="#gallery">&times;</a>
            </div>
          </div>
          <!-- //popup -->
          <!-- //gallery popups -->

        </div>
      </div>

    </div>
  </section>
  <!-- //gallery-->
  <!--/newsletter -->
  <section class="newsletter-w3pvt py-5">
    <div class="containe py-md-5">
      <form method="post" action="#">
        <p class="text-center">Suscríbase para tener las ofertas especiales y otra información sobre descuentos.</p>
        <div class="row subscribe-sec">
          <div class="col-md-9">
            <input type="email" class="form-control" id="email" placeholder="Enter Your Email.." name="email"
              required="">
          </div>
          <div class="col-md-3">

            <button type="submit" class="btn submit">Subscribirse</button>
          </div>

        </div>
      </form> 
    </div>
  </section>
  <!--//newsletter -->

  <!-- Fin Categorias -->

  <!-- collecions products -->
  <section class="collections">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 ab-content-img">

        </div>
        <div class="col-md-4 ab-content text-center p-lg-5 p-3 my-lg-5">
          <h4>Necesitas Mas Espacio</h4>
          <p>Lorem ipsum dolor sit,Nulla pellentesque dolor ipsum laoreet eleifend integer,Pellentesque maximus libero.
          </p>
          <a href="shop.html" class="btn shop mt-3">
            <button type="submit" class="btn submit">Comprar Ahora</button>
          </a>

        </div>
      </div>
    </div>
  </section>
  <!-- collecions-->

  <!-- Instagram -->
  <!-- SnapWidget -->
  <div class="instagram">
    <h4>Instagram</h4>
    <!-- SnapWidget -->
    <script src="https://snapwidget.com/js/snapwidget.js"></script>
    <iframe src="https://snapwidget.com/embed/1025370" class="snapwidget-widget" allowtransparency="true"
      frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:70%;"></iframe>
  </div>
  <!-- Fin instagram-->

  <!-- /mid-section -->
  <section class="mid-section">
    <div class="d-lg-flex p-0">
      <div class="col-lg-6 bottom-w3pvt-left p-lg-0">
        <img src="../Proyecto_Final/img/ab1.jpg" class="img-fluid" alt="" />
        <div class="pos-wthree">
          <h4 class="text-wthree">50% Off En <br> Gorras</h4>
          <a href="shop.html" class="btn shop mt-3">
            <button type="submit" class="btn submit">Comprar Ahora</button>
          </a>
        </div>
      </div>
      <div class="col-lg-6 bottom-w3pvt-left bottom-w3pvt-right p-lg-0">
        <img src="../Proyecto_Final/img/ab2.jpg" class="img-fluid" alt="" />
        <div class="pos-w3pvt">
          <h4 class="text-w3pvt">30% Off En <br> Todas nuestras lineas de ropa</h4>
          <a href="shop.html" class="btn shop mt-3">
            <button type="submit" class="btn submit">Comprar Ahora</button>
        </div>
      </div>
    </div>
  </section>
  <!-- //mid-section -->
  <!-- Boton Whatsapp -->

  <a href="https://wa.link/vi44yi" class="btn-wsp" target="_blank">
    <i class="icon-whatsapp"></i>
    <img src="../Proyecto_Final/img/bt-what.png" alt="">

  </a>

  <!-- Fin Boton Whatsapp -->

  <!-- Fin Header -->

   <!-- Footer -->
   <footer class="text-center text-lg-start bg-white text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Right -->
      <div>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="link">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3 text-secondary"></i>LuceroShop
            </h6>
            <p>
              La mejor Tienda de ropa ubicada en Medellín.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Productos
            </h6>
            <p>
              <a href="./camisas.html" class="text-reset">Camisas</a>
            </p>
            <p>
              <a href="./pantalones.html" class="text-reset">Pantalones</a>
            </p>
            <p>
              <a href="./gorras.html" class="text-reset">Gorras</a>
            </p>
            <p>
              <a href="./zapatos.html" class="text-reset">Zapatos</a>
            </p>
            <p>
              <a href="./accesorios.html" class="text-reset">Accesorios</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Enlaces Utiles
            </h6>
            <p>
              <a href="../index.html" class="text-reset">Inicio</a>
            </p>
            <p>
              <a href="./sobre-nosotros.html" class="text-reset">Sobre Nosotros</a>
            </p>
            <p>
              <a href="./contacto.html" class="text-reset">Contacto</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3 text-secondary"></i> Colombia, Antioquia</p>
            <p>
              <i class="fas fa-envelope me-3 text-secondary"></i>
              juanj.jaramilloa@upb.edu.co
            </p>
            <p><i class="fas fa-phone me-3 text-secondary"></i> + 57 301 462 4980</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="copy">
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
        © 2023 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
      </div>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

</body>

</html>