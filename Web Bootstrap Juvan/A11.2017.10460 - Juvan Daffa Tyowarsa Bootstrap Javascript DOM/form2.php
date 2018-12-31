<!DOCTYPE html>
<html lang="en">

<head>

</script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8">
    <title>Personality</title>

    <!-- ====== Google Fonts ====== -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">

    <!-- ====== ALL CSS ====== -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body data-spy="scroll" data-target=".navbar-nav">
    
     <!-- Preloader -->
    <div class="preloader">
        <div class="spinner">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div>
    <!-- // Preloader -->
    

    <!-- ====== Header ====== -->
    <header id="header" class="header">
        <!-- ====== Navbar ====== -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand logo" href="index.html">
                    <img src="assets/images/logo.png" alt="logo">
                </a>
                <!-- // Logo -->

                <!-- Mobile Menu -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"><span><i class="fa fa-bars"></i></span></button>
                <!-- Mobile Menu -->

                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="index.html">HOME</a></li>
                        <li class="nav-item"><a class="nav-link pr0" href="#contact">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- ====== // Navbar ====== -->
    </header>
    <!-- ====== // Header ====== -->

    <!-- ====== Hero Area ====== -->
    <div class="hero-aria" id="home">
        <!-- Hero Area Content -->
        <div class="container">
            <div class="hero-content h-100">
                <div class="d-table">
                    <div class="d-table-cell">
                        <h2 class="text-uppercase">Ayo Kenali</h2>
                        <h3 class="text-uppercase"><span class="typed"></span></h3>
                        <p>Pasti Seru Jika Kalian Mengikutinya.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Hero Area Content -->
        <!-- Hero Area Slider -->
        <div class="hero-area-slids owl-carousel">
            <div class="single-slider">
                <!-- Single Background -->
                <div class="slider-bg" style="background-image: url(assets/images/hero-area/img-1.jpg)"></div>
                <!-- // Single Background -->
            </div>
            <div class="single-slider">
                <!-- Single Background -->
                <div class="slider-bg" style="background-image: url(assets/images/hero-area/img-2.jpg)"></div>
                <!-- // Single Background -->
            </div>
        </div>
        <!-- // Hero Area Slider -->
    </div>
	<section id="form" class="section-padding why-choose-us pb-70">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Form Admin</h2>
   
		<br><br>
        <?php 
            echo "Nama&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: " .$_GET['nama']."</br>";
            echo "Password &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: " .$_GET['password']."</br>";
            echo "Jenis Kelamin &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: " .$_GET['jenis_kelamin']."</br>";
            echo "Keahlian &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : ";
            if (isset($_GET['keahlian'])!='')
               {
                    echo $_GET['keahlian']." </br>";
               }
           if (isset($_GET['keahlian1'])!='')
               {
                    echo $_GET['keahlian1']." </br>";
               }
            if (isset($_GET['keahlian2'])!='')
               {
                    echo $_GET['keahlian2']." </br>";
               }
            echo "Tempat Lahir &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: " .$_GET['tempat_lahir']."</br>";
            echo "Deskripsi Diri &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: " .$_GET['deskripsi']."</br>";
		?>
		</div>
                </div>
            </div>
        </section>
	
  <!-- ====== Contact Area ====== -->
  <section id="contact" class="section-padding contact-section bg-light">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Contact Me</h2>
                        <p>Ini Kontak-kontak yang dapat di hubungi </p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->

            <!-- Contact Form -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Form -->
                    
	<b>Klik dibawah ini untuk melihat profil saya lebih dalam :</b></p>
   

    <br><b>Biodata Lengkap : <a href="javascript:alert('Apakah Anda yakin akan meninggalkan Halaman Ini?'); window.location.href='https://dinus.ac.id/mahasiswa/A11.2017.10460'; ">Link Biodata Lengkap Saya</a>
	<br>Nomor HP&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: 082115502188
    <br>Instagram&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <a href="javascript:alert('Apakah Anda yakin akan meninggalkan Halaman Ini?'); window.location.href='https://www.instagram.com/juvandaffa/'; ">@juvandaffa</a>
    <br>Facebook&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <a href="javascript:alert('Apakah Anda yakin akan meninggalkan Halaman Ini?'); window.location.href='https://www.facebook.com/juvan.fourhours'; ">Juvan Daffa T</a>
    <br>Twitter&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <a href="javascript:alert('Apakah Anda yakin akan meninggalkan Halaman Ini?'); window.location.href='https://twitter.com/JuvanDaffa'; ">@JuvanDaffa</a>

            <!-- // Contact Form -->
        </div>
    </section>
    <!-- ====== // Contact Area ====== -->


    <!-- ====== Footer Area ====== -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright-text">
                        <p class="text-white">&copy; 2018 Designed By Juvan Daffa T A11.2017.10460</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ====== // Footer Area ====== -->






     <!-- ====== ALL JS ====== -->
   <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.mixitup.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/typed.js"></script>
    <script src="assets/js/skill.bar.js"></script>
    <script src="assets/js/fact.counter.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>