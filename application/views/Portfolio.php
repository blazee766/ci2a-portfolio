<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Website - iPortfolio </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/iPortfolio/assets/img/favicon.png'); ?>" rel="icon">
  <link href="<?php echo base_url('assets/iPortfolio/assets/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/iPortfolio/assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/iPortfolio/assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/iPortfolio/assets/vendor/aos/aos.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/iPortfolio/assets/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/iPortfolio/assets/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?php echo base_url('assets/iPortfolio/assets/css/main.css'); ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header dark-background d-flex flex-column">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <div class="profile-img">
      <img src="<?php echo base_url('assets/iPortfolio/assets/img/my-profile-img.jpg'); ?>" alt="" class="img-fluid rounded-circle">
    </div>

    <a href="index.html" class="logo d-flex align-items-center justify-content-center">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="<?php echo base_url('assets/iPortfolio/assets/img/logo.png'); ?>" alt=""> -->
      <h1 class="sitename">M.R. Putra Bintang</h1>
    </a>

    <div class="social-links text-center">
      <a href="https://www.facebook.com/putra.bintang.75457081/?locale=id_ID" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="https://www.instagram.com/blz.bintang/" class="instagram"><i class="bi bi-instagram"></i></a>
    </div>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
        <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
        <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
        <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
        <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
      </ul>
    </nav>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="<?php echo base_url('assets/iPortfolio/assets/img/hero-bg.jpg'); ?>" alt="" data-aos="fade-in" class="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2>M.R. Putra Bintang</h2>
        <p>Saya Seorang <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer">Designer</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>Saya adalah pribadi yang terbiasa menghadapi tantangan dan mengambil tanggung jawab dengan sepenuh hati. Dalam perjalanan hidup, saya pernah mengalami situasi sulit dan penuh tekanan, namun saya percaya bahwa setiap pengalaman membawa pelajaran berharga. Saya berusaha untuk selalu bersikap jujur, bertanggung jawab, dan menjunjung tinggi nilai-nilai kerja keras. Tak jarang saya harus berhadapan dengan hambatan atau orang-orang yang meragukan kemampuan saya, namun justru itu yang memotivasi saya untuk terus maju dan membuktikan kemampuan diri. Bagi saya, setiap rintangan adalah peluang untuk tumbuh dan menjadi pribadi yang lebih baik.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="<?php echo base_url('assets/iPortfolio/assets/img/my-profile-img.jpg'); ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 content">
            <h2>UI/UX Designer &amp; Web Developer.</h2>
            <p class="fst-italic py-3">
            Saya adalah UI/UX Designer dan Web Developer yang suka membuat tampilan website yang menarik dan mudah digunakan. Saya menggabungkan desain yang bagus dengan kode yang rapi untuk menghasilkan website yang nyaman diakses dan responsif di berbagai perangkat.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>10 juni 2003</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.ci2a.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+62 874 854 2721</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Nganjuk, Jawa Timur</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>21</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>bintangstar10@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
            Saya pernah mengerjakan proyek website portofolio untuk kreator konten dan dashboard admin untuk aplikasi keuangan. Dalam proyek tersebut, saya menggunakan Figma untuk desain UI dan mengembangkan frontend-nya menggunakan HTML, CSS, dan React.
            </p>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Clients</strong> <span>Happy</span></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projects</strong> <span>Project</span></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong> <span>Support</span></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hard Workers</strong> <span>Hard</span></p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <p>Beberapa skill yang sudah saya kuasai adalah:</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>HTML</span> <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>CSS</span> <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>JavaScript</span> <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>PHP</span> <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>WordPress/CMS</span> <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Photoshop</span> <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

          </div>

        </div>

      </div>

    </section><!-- /Skills Section -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Resume</h2>
        <p>
          Mahasiswa aktif Program Studi Sistem Informasi dengan minat tinggi dalam pengembangan perangkat lunak, analisis sistem, dan manajemen data. Terbiasa bekerja dalam tim, memiliki semangat belajar tinggi, serta aktif dalam proyek akademik dan kegiatan organisasi.
        </p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Profil Singkat</h3>

            <div class="resume-item pb-0">
              <h4>M.R. Putra Bintang</h4>
              <p><em>Mahasiswa Sistem Informasi yang berdedikasi dan teliti, dengan kemampuan dalam pengembangan aplikasi berbasis web, pengolahan basis data, serta analisis kebutuhan pengguna. Mampu menggabungkan aspek teknologi dengan tujuan bisnis untuk menghasilkan solusi sistem yang efisien.</em></p>
              <ul>
                <li>Desa. Nganjuk, Tanjung Anom, Nganjuk</li>
                <li>(+62) 874 854 2721</li>
                <li>bintangstar10@gmail.com</li>
              </ul>
            </div><!-- Edn Resume Item -->

            <h3 class="resume-title">Pendidikan</h3>
            <div class="resume-item">
              <h4>Program Studi Sistem Informasi</h4>
              <h5>2023 - Sekarang</h5>
              <p><em>Universitas Nusantara PGRI Kediri</em></p>
              <p>Mata Kuliah Unggulan: Basis Data, Pemrograman Web, Analisis dan Perancangan Sistem Informasi, Interaksi Manusia dan Komputer, E-Business, Manajemen Proyek TI.</p>
            </div><!-- Edn Resume Item -->

          </div>

          </div>

        </div>

      </div>

    </section>><!-- /Resume Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Berikut ini adalah beberapa contoh gambar yang saya ambil langsung dari tamplate website ini. </p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Product</li>
            <li data-filter=".filter-branding">Branding</li>
            <li data-filter=".filter-books">Books</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="<?php echo base_url('assets/iPortfolio/assets/img/portfolio/app-1.jpg'); ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="<?php echo base_url('assets/iPortfolio/assets/img/portfolio/app-1.jpg'); ?>" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="<?php echo base_url('assets/iPortfolio/assets/img/portfolio/product-1.jpg'); ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="<?php echo base_url('assets/iPortfolio/assets/img/portfolio/product-1.jpg'); ?>" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="<?php echo base_url('assets/iPortfolio/assets/img/portfolio/branding-1.jpg'); ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="<?php echo base_url('assets/iPortfolio/assets/img/portfolio/branding-1.jpg'); ?>" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="<?php echo base_url('assets/iPortfolio/assets/img/portfolio/books-1.jpg'); ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="<?php echo base_url('assets/iPortfolio/assets/img/portfolio/books-1.jpg'); ?>" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="<?php echo base_url('assets/iPortfolio/assets/img/portfolio/app-2.jpg'); ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="<?php echo base_url('assets/iPortfolio/assets/img/portfolio/app-2.jpg'); ?>" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="<?php echo base_url('assets/iPortfolio/assets/img/portfolio/product-2.jpg'); ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="<?php echo base_url('assets/iPortfolio/assets/img/portfolio/product-2.jpg'); ?>" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="<?php echo base_url('assets/iPortfolio/assets/img/portfolio/branding-2.jpg'); ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="<?php echo base_url('assets/iPortfolio/assets/img/portfolio/branding-2.jpg'); ?>" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="<?php echo base_url('assets/iPortfolio/assets/img/portfolio/books-2.jpg'); ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="<?php echo base_url('assets/iPortfolio/assets/img/portfolio/books-2.jpg'); ?>" title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="<?php echo base_url('assets/iPortfolio/assets/img/portfolio/app-3.jpg'); ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="<?php echo base_url('assets/iPortfolio/assets/img/portfolio/app-3.jpg'); ?>" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="<?php echo base_url('assets/iPortfolio/assets/img/portfolio/product-3.jpg'); ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="<?php echo base_url('assets/iPortfolio/assets/img/portfolio/product-3.jpg'); ?>" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="<?php echo base_url('assets/iPortfolio/assets/img/portfolio/branding-3.jpg'); ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="<?php echo base_url('assets/iPortfolio/assets/img/portfolio/branding-3.jpg'); ?>" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="<?php echo base_url('assets/iPortfolio/assets/img/portfolio/books-3.jpg'); ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="<?php echo base_url('assets/iPortfolio/assets/img/portfolio/books-3.jpg'); ?>" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
    <div>
    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Saya selalu terbuka untuk berdiskusi, kolaborasi proyek, ataupun pertanyaan terkait dunia IT, khususnya di bidang Sistem Informasi. Jangan ragu untuk menghubungi saya melalui kontak di bawah ini.
Silakan isi formulir atau hubungi langsung melalui email, telepon, atau kunjungi alamat yang tertera.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>Desa. Getas, Tanjung Anom, Nganjuk</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p>+62 874 854 2721</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p>bintangstar10@gmail.com</p>
                </div>
              </div><!-- End Info Item -->
            </div>
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Your Name</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Message</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">iPortfolio</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/iPortfolio/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/iPortfolio/assets/vendor/php-email-form/validate.js'); ?>"></script>
  <script src="<?php echo base_url('assets/iPortfolio/assets/vendor/aos/aos.js'); ?>"></script>
  <script src="<?php echo base_url('assets/iPortfolio/assets/vendor/typed.js/typed.umd.js'); ?>"></script>
  <script src="<?php echo base_url('assets/iPortfolio/assets/vendor/purecounter/purecounter_vanilla.js'); ?>"></script>
  <script src="<?php echo base_url('assets/iPortfolio/assets/vendor/waypoints/noframework.waypoints.js'); ?>"></script>
  <script src="<?php echo base_url('assets/iPortfolio/assets/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/iPortfolio/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/iPortfolio/assets/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/iPortfolio/assets/vendor/swiper/swiper-bundle.min.js'); ?>"></script>

  <!-- Main JS File -->
  <script src="<?php echo base_url('assets/iPortfolio/assets/js/main.js'); ?>"></script>

</body>

</html>