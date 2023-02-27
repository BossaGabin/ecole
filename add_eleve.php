<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GESTION ECOLE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.9.1
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">GEST-ECOLE<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">AJOUT DES ELEVES</a></li>
          <li><a class="nav-link scrollto" href="#about">AJOUT DES MATIERES</a></li>
          <li><a class="nav-link scrollto" href="#services">AJOUT DES NOTES</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">LISTES DES ELEVES</a></li>
          <li><a class="nav-link scrollto" href="#team">LISTES DES MATIERES</a></li>
          <li><a class="nav-link scrollto" href="#team">LISTES DES NOTES</a></li>
          <!-- <li><a class="nav-link scrollto" href="#team">LISTES DES NOTES</a></li> -->
        
          <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <!-- <a href="#about" class="get-started-btn scrollto">Get Started</a> -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h3>FORMULAIRE D'AJOUT DES ELEVES<span>.</span></h3>
          <!-- <h2>We are team of talented digital marketers</h2> -->
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <form action="" method="post">   
            <div class="boite_form">
                <label class="lab" for="">Nom:</label><br>
                <input type="text" class="form-control mb-2 mr-sm-2 inp" name="nom" id="nom" maxLength="25" size="25" ><br>
                <label class="lab" for="">Prénom:</label><br>
                <input type="text" class="form-control mb-2 mr-sm-2" name="prenom" id="prenom" maxLength="25" size="25" ><br>
                <label class="lab" for="">Age:</label><br>
                <input type="number" class="form-control mb-2 mr-sm-2" name="age" id="age" min="1" ><br>
                <label class="lab" for="">Classe:</label>
                <select name="classe" id="classe" class="form-control mb-2 mr-sm-2" >
                    <option value="classe">Choisissez la classe</option>
                    <option value="6ème">6ème</option>
                    <option value="5ème">5ème</option>  
                    <option value="4ème">4ème</option>  
                    <option value="3ème">3ème</option>  
                    <option value="Seconde">Seconde(2nd)</option>  
                    <option value="Première">Première(1ère)</option>  
                    <option value="Terminal">Terminal(T)</option>  
                </select><br> 
                <button type="submit" class=" btn btn-success" name="btnAjouter"><span class="bx bx-plus"></span> AJOUTER</button>
                <button type="submit" class=" btn btn-primary" name="btnModifier"><span class="bx bx-pencil"></span> MODIFIER</button>
                <button type="submit" class="btn btn-danger" name="btnSupprimer"><span class="bx bx-x"></span> SUPPRIMER</button>
           
            </div>
        </form>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
    
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>GEST-ECOLE</span></strong>. All Rights Reserved
      </div>      
    </div>
  </footer><!-- End Footer -->

  <!-- <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>