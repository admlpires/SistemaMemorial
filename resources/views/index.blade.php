<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Funeraria LaPaz</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">


  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
  
</head>

<body class="index-page">

  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">funelapaz@gmail.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+55 51 3542 - 2180</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div><div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
          <img src="{{ asset('assets/img/logo.png') }}" alt="">
          <h1 class="sitename">Funerária LaPaz</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home</a></li>
            <li><a href="#about">Quem Somos</a></li>
            <li><a href="#services">Serviços</a></li>
            <li><a href="#portfolio">Produtos</a></li>
            <li><a href="{{ url('/obituario') }}">Obituários</a></li><li><a href="#contact">Contato</a></li>
            <li class="dropdown"><a href="/login"><span>Área Restrita</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Dropdown 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="#">Deep Dropdown 1</a></li>
                    <li><a href="#">Deep Dropdown 2</a></li>
                    <li><a href="#">Deep Dropdown 3</a></li>
                    <li><a href="#">Deep Dropdown 4</a></li>
                    <li><a href="#">Deep Dropdown 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li>
              </ul>
            </li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>

  <main class="main">

   <section id="hero" class="hero section light-background">
  <div class="container">
    <div class="row gy-4 align-items-center">

      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
        <h1>Bem-vindo à <span>Funerária LaPaz</span></h1>
        <p>Somos a Funerária LaPaz — uma equipe dedicada e experiente, oferecendo serviços funerários com respeito, acolhimento e excelência.</p>
        <div class="d-flex">
          <a href="#about" class="btn-get-started me-3"><span>Entre em Contato Já!</span></a>
          <a href="#" class="glightbox btn-watch-video d-flex align-items-center">
            <i class="bi bi-play-circle me-2"></i><span>Assista o Vídeo</span>
          </a>
        </div>
      </div>

           <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center p-4" data-aos="zoom-out">
  <div class="rounded-4 bg-transparent h-100" data-aos="fade-left" style="cursor: default;">
    <h4 class="fw-bold mb-3 text-black">Quer se planejar com tranquilidade?</h4>
    <p class="text-black">
      Conheça nossa <strong class="text-black">Compra Programada</strong>: um serviço que oferece parcelamento facilitado, atendimento personalizado e garantia de cobertura futura sem custos adicionais.
    </p>

    <ul class="list-unstyled text-black mb-3">
      <li><i class="bi bi-check-circle-fill text-success me-2"></i>Até 12x sem juros</li>
      <li><i class="bi bi-check-circle-fill text-success me-2"></i>Uso vitalício após quitação</li>
      <li><i class="bi bi-check-circle-fill text-success me-2"></i>Escolha da urna, flores e mais</li>
    </ul>

    <div class="d-flex flex-column gap-2">
