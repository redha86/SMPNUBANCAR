<!DOCTYPE html>
<html lang="en">

<head>
  <title>SMP NU BANCAR</title>
  <link rel="icon" href="../images/logo.jpg" type="image/x-icon" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
</head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<link rel="stylesheet" type="text/css" href="{{ asset('icomoon/icomoon.css') }}">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="{{ asset('css/vendor.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">

</head>

<body>

  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <defs>
      <symbol id="facebook" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M12 2.04c-5.5 0-10 4.49-10 10.02c0 5 3.66 9.15 8.44 9.9v-7H7.9v-2.9h2.54V9.85c0-2.51 1.49-3.89 3.78-3.89c1.09 0 2.23.19 2.23.19v2.47h-1.26c-1.24 0-1.63.77-1.63 1.56v1.88h2.78l-.45 2.9h-2.33v7a10 10 0 0 0 8.44-9.9c0-5.53-4.5-10.02-10-10.02" />
      </symbol>
      <symbol id="youtube" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="m10 15l5.19-3L10 9zm11.56-7.83c.13.47.22 1.1.28 1.9c.07.8.1 1.49.1 2.09L22 12c0 2.19-.16 3.8-.44 4.83c-.25.9-.83 1.48-1.73 1.73c-.47.13-1.33.22-2.65.28c-1.3.07-2.49.1-3.59.1L12 19c-4.19 0-6.8-.16-7.83-.44c-.9-.25-1.48-.83-1.73-1.73c-.13-.47-.22-1.1-.28-1.9c-.07-.8-.1-1.49-.1-2.09L2 12c0-2.19.16-3.8.44-4.83c.25-.9.83-1.48 1.73-1.73c.47-.13 1.33-.22 2.65-.28c1.3-.07 2.49-.1 3.59-.1L12 5c4.19 0 6.8.16 7.83.44c.9.25 1.48.83 1.73 1.73" />
      </symbol>
      <symbol id="instagram" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3" />
      </symbol>
      <symbol id="twitter" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M22.46 6c-.77.35-1.6.58-2.46.69c.88-.53 1.56-1.37 1.88-2.38c-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29c0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15c0 1.49.75 2.81 1.91 3.56c-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07a4.28 4.28 0 0 0 4 2.98a8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21C16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56c.84-.6 1.56-1.36 2.14-2.23" />
      </symbol>
      <symbol id="linkedin" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2zm-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93zM6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37z" />
      </symbol>
      <symbol id="fitness" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M20.57 14.86L22 13.43L20.57 12L17 15.57L8.43 7L12 3.43L10.57 2L9.14 3.43L7.71 2L5.57 4.14L4.14 2.71L2.71 4.14l1.43 1.43L2 7.71l1.43 1.43L2 10.57L3.43 12L7 8.43L15.57 17L12 20.57L13.43 22l1.43-1.43L16.29 22l2.14-2.14l1.43 1.43l1.43-1.43l-1.43-1.43L22 16.29z" />
      </symbol>
      <symbol id="laptop" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M4 6h16v10H4m16 2a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H4c-1.11 0-2 .89-2 2v10a2 2 0 0 0 2 2H0v2h24v-2z" />
      </symbol>
      <symbol id="camera" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M4 4h3l2-2h6l2 2h3a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2m8 3a5 5 0 0 0-5 5a5 5 0 0 0 5 5a5 5 0 0 0 5-5a5 5 0 0 0-5-5m0 2a3 3 0 0 1 3 3a3 3 0 0 1-3 3a3 3 0 0 1-3-3a3 3 0 0 1 3-3" />
      </symbol>
      <symbol id="handshake" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M21.71 8.71c1.25-1.25.68-2.71 0-3.42l-3-3c-1.26-1.25-2.71-.68-3.42 0L13.59 4H11C9.1 4 8 5 7.44 6.15L3 10.59v4l-.71.7c-1.25 1.26-.68 2.71 0 3.42l3 3c.54.54 1.12.74 1.67.74c.71 0 1.36-.35 1.75-.74l2.7-2.71H15c1.7 0 2.56-1.06 2.87-2.1c1.13-.3 1.75-1.16 2-2C21.42 14.5 22 13.03 22 12V9h-.59zM20 12c0 .45-.19 1-1 1h-1v1c0 .45-.19 1-1 1h-1v1c0 .45-.19 1-1 1h-4.41l-3.28 3.28c-.31.29-.49.12-.6.01l-2.99-2.98c-.29-.31-.12-.49-.01-.6L5 15.41v-4l2-2V11c0 1.21.8 3 3 3s3-1.79 3-3h7zm.29-4.71L18.59 9H11v2c0 .45-.19 1-1 1s-1-.55-1-1V8c0-.46.17-2 2-2h3.41l2.28-2.28c.31-.29.49-.12.6-.01l2.99 2.98c.29.31.12.49.01.6" />
      </symbol>
      <symbol id="speakerphone" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M14 3.23v2.06c2.89.86 5 3.54 5 6.71s-2.11 5.84-5 6.7v2.07c4-.91 7-4.49 7-8.77c0-4.28-3-7.86-7-8.77M16.5 12c0-1.77-1-3.29-2.5-4.03V16c1.5-.71 2.5-2.24 2.5-4M3 9v6h4l5 5V4L7 9z" />
      </symbol>
      <symbol id="pencil-box" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M19 19V5H5v14zm0-16a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2zm-2.3 6.35l-1 1l-2.05-2.05l1-1c.21-.22.56-.22.77 0l1.28 1.28c.22.21.22.56 0 .77M7 14.94l6.06-6.06l2.06 2.06L9.06 17H7z" />
      </symbol>
      <symbol id="tick-circle" viewBox="0 0 15 15">
        <path fill="currentColor" fill-rule="evenodd"
          d="M0 7.5a7.5 7.5 0 1 1 15 0a7.5 7.5 0 0 1-15 0m7.072 3.21l4.318-5.398l-.78-.624l-3.682 4.601L4.32 7.116l-.64.768z"
          clip-rule="evenodd" />
      </symbol>
      <symbol id="clock" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M15.098 12.634L13 11.423V7a1 1 0 0 0-2 0v5a1 1 0 0 0 .5.866l2.598 1.5a1 1 0 1 0 1-1.732M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2m0 18a8 8 0 1 1 8-8a8.01 8.01 0 0 1-8 8" />
      </symbol>
      <symbol id="arrow-circle-right" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M15.71 12.71a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76a1 1 0 0 0-.21-.33l-3-3a1 1 0 0 0-1.42 1.42l1.3 1.29H9a1 1 0 0 0 0 2h3.59l-1.3 1.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0ZM22 12a10 10 0 1 0-10 10a10 10 0 0 0 10-10M4 12a8 8 0 1 1 8 8a8 8 0 0 1-8-8" />
      </symbol>
      <symbol id="search" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39M11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7" />
      </symbol>
      <symbol id="user-circle" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M12 2a10 10 0 0 0-7.35 16.76a10 10 0 0 0 14.7 0A10 10 0 0 0 12 2m0 18a8 8 0 0 1-5.55-2.25a6 6 0 0 1 11.1 0A8 8 0 0 1 12 20m-2-10a2 2 0 1 1 2 2a2 2 0 0 1-2-2m8.91 6A8 8 0 0 0 15 12.62a4 4 0 1 0-6 0A8 8 0 0 0 5.09 16A7.92 7.92 0 0 1 4 12a8 8 0 0 1 16 0a7.92 7.92 0 0 1-1.09 4" />
      </symbol>
      <symbol id="shopping-bag" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M19 7h-3V6a4 4 0 0 0-8 0v1H5a1 1 0 0 0-1 1v11a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V8a1 1 0 0 0-1-1m-9-1a2 2 0 0 1 4 0v1h-4Zm8 13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V9h2v1a1 1 0 0 0 2 0V9h4v1a1 1 0 0 0 2 0V9h2Z" />
      </symbol>
      <symbol id="heart" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M20.16 5A6.29 6.29 0 0 0 12 4.36a6.27 6.27 0 0 0-8.16 9.48l6.21 6.22a2.78 2.78 0 0 0 3.9 0l6.21-6.22a6.27 6.27 0 0 0 0-8.84m-1.41 7.46l-6.21 6.21a.76.76 0 0 1-1.08 0l-6.21-6.24a4.29 4.29 0 0 1 0-6a4.27 4.27 0 0 1 6 0a1 1 0 0 0 1.42 0a4.27 4.27 0 0 1 6 0a4.29 4.29 0 0 1 .08 6Z" />
      </symbol>
    </defs>
  </svg>

  <div class="preloader-wrapper">
    <div class="preloader">
    </div>
  </div>

  <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart" aria-labelledby="My Cart">
    <div class="offcanvas-header mt-3">
      <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-4">
          <span>Your Cart</span>
          <span class="badge bg-primary rounded-circle pt-2 text-white">3</span>
        </h4>

        <ul class="list-group mb-4">
          <li class="list-group-item d-flex justify-content-between align-items-center py-3 lh-sm">
            <div>
              <h6 class="my-0">Marketing Course</h6>
              <small class="text-body-secondary">Brief description</small>
            </div>
            <span class="text-body-secondary">$120</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center py-3 lh-sm">
            <div>
              <h6 class="my-0">Strategy Course</h6>
              <small class="text-body-secondary">Brief description</small>
            </div>
            <span class="text-body-secondary">$80</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center py-3 lh-sm">
            <div>
              <h6 class="my-0">Digital Course</h6>
              <small class="text-body-secondary">Brief description</small>
            </div>
            <span class="text-body-secondary">$50</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center py-3">
            <span class="fw-bold">Total (USD)</span>
            <strong>$250</strong>
          </li>
        </ul>

        <div class="d-grid my-5">
          <button class="btn btn-primary px-5 py-3" type="submit">Continue to checkout</button>
        </div>
      </div>
    </div>
  </div>

  <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasSearch"
    aria-labelledby="Search">
    <div class="offcanvas-header mt-3">
      <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

      <div class="order-md-last">
        <h4 class="text-primary text-uppercase mb-3">
          Search
        </h4>
        <div class="search-bar border rounded-2 border-dark-subtle">
          <form id="search-form" class="text-center d-flex align-items-center" action="" method="">
            <input type="text" class="form-control border-0 bg-transparent" placeholder="Search Here" />
            <iconify-icon icon="tabler:search" class="fs-4 me-3"></iconify-icon>
          </form>
        </div>
      </div>
    </div>
  </div>

  <section id="top-nav" class="bg-success">
    <div class="text-left px-md-3 py-md-2">
      <p class="text-white py-1 m-0"> SMP NU CERDAS, KREATIF, INOVATIF & PRESTASI
      </p>
    </div>
  </section>

  <nav class="main-menu d-flex navbar navbar-expand-lg p-2 py-3 p-lg-4 py-lg-4 ">
    <div class="container-fluid">
      <div class="main-logo d-lg-none">
        <a href="index.html">
          <img style="height: 60px;align-items: center; " src="images/logo.jpg" alt="logo" class="img-fluid">
        </a>
      </div>

      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

        <div class="offcanvas-header mt-3">
          <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body justify-content-between" style="height: 50px;">
          <div class="main-logo">
            <a href="index.html">
              <img style="height: 60px;align-items: center; " src="images/logo.jpg" alt="logo" class="img-fluid">
            </a>
          </div>

          <ul class="navbar-nav menu-list list-unstyled align-items-lg-center d-flex gap-md-3 mb-0">
            <li class="nav-item">
              <a href="#hero" class="nav-link mx-2 active">Beranda</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link mx-2  align-items-center" href="#category"
                aria-expanded="false">Tentang Kami</a>

            </li>

            <li class="nav-item dropdown">
              <a class="nav-link mx-2  align-items-center" href="#courses"
                aria-expanded="false">Prestasi</a>

            </li>

            <li class="nav-item dropdown">
              <a class="nav-link mx-2  align-items-center" href="#kegiatan"
                aria-expanded="false">Kegiatan Sekolah</a>

            </li>

            <li class="nav-item dropdown">
              <a class="nav-link mx-2  align-items-center" href="#testimonial"
                aria-expanded="false">Ulasan Masyarakat</a>

            </li>

            <li class="nav-item dropdown">
              <a class="nav-link mx-2  align-items-center" href="#kependidikan"
                aria-expanded="false">Direktori</a>

            </li>

            <li class="nav-item">
              <a href="#register" class="nav-link mx-2">FAQ</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link mx-2  align-items-center" href="#footer"
                aria-expanded="false">Contact</a>

            </li>

          </ul>

          <div class="d-none d-lg-flex align-items-center">
            <ul class="d-flex  align-items-center list-unstyled m-0">
              <li>
                <a href="account.html" class="ms-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                    <use href="#user-circle" />
                  </svg> </a>
              </li>



              <li>
                <a href="#" class="ms-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch"
                  aria-controls="offcanvasSearch">
                  <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                    <use href="#search" />
                  </svg> </a>
                </a>
              </li>

            </ul>
          </div>

        </div>
      </div>

    </div>
    <div class="container-fluid d-lg-none">
      <div class="d-flex  align-items-end mt-3">
        <ul class="d-flex  align-items-center list-unstyled m-0">
          <li>
            <a href="account.html" class="me-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                <use href="#user-circle" />
              </svg> </a>
          </li>
          <li>
            <a href="wishlist.html" class="me-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                <use href="#heart" />
              </svg> </a>
            </a>
          </li>

          <li class="">
            <a href="#" class="me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart"
              aria-controls="offcanvasCart">
              <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                <use href="#shopping-bag" />
              </svg> </a>
            </a>
          </li>

          <li>
            <a href="#" class="me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch"
              aria-controls="offcanvasSearch">
              <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                <use href="#search" />
              </svg> </a>
            </a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <section id="hero" style="background-color: rgb(4, 147, 4);">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 pe-5 mt-5 mt-md-0">
          <h2 class="display-1 text-uppercase" style="color: aliceblue; font-family: 'Times New Roman', Times, serif;">Selamat Datang</h2>
          <p class="fs-4 my-4 pb-2" style="color: aliceblue; line-height: 1.5; ">Di Website Lembaga Pendidikan <br> SMP NU BANCAR</p>
          <div>
            <a href="#category"> <button type="button" class="btn btn-outline-primary" style="padding: 10px 50px;">Mulai</button></a>

          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="features">
    <div class="feature-box container">
      <div class="row ">
        <div class="col-md-4 col-sm-6 mb-5 mb-md-0">
          <div class="feature-item py-5  rounded-4">
            <div class="feature-detail text-center">
              <h2 class="feature-title">100+</h2>
              <h6 class="feature-info text-uppercase">Jumlah Siswa</h6>

            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-5 mb-md-0">
          <div class="feature-item py-5  rounded-4">
            <div class="feature-detail text-center">
              <h2 class="feature-title">500+</h2>
              <h6 class="feature-info text-uppercase">Tenaga Pendidik</h6>

            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-5 mb-md-0">
          <div class="feature-item py-5  rounded-4">
            <div class="feature-detail text-center">
              <h2 class="feature-title">A</h2>
              <h6 class="feature-info text-uppercase">predikat</h6>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="about" class="padding-medium mt-xl-5">
    <div class="container">
      <div class="row align-items-center mt-xl-5">
        <div style="width: 400px;" class="offset-md-1 col-md-5">
          <img src="images/pak.jpg" alt="img" class="img-fluid rounded-circle">
        </div>
        <div class="col-md-5 mt-5 mt-md-0">
          <div class="mb-3">
            <p class="text " style=" font-family: 'Times New Roman', Times, serif;">Kepala Sekolah SMP NU Bancar</p>
            <h2 class="text-success display-6 fw-semibold" style="font-family:'Times New Roman', Times, serif;">Mr. Imam Sutondo, S.Pd., M.Pd. </h2>
          </div>

          <div class="d-flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
              <use href="#tick-circle" class="text-success" />
            </svg>
            <p class="ps-4">Pendidikan : S2 - Manajemen Pendidikan</p>
          </div>
          <div class="d-flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
              <use href="#tick-circle" class="text-success" />
            </svg>
            <p class="ps-4">Alamat : Ds. Banjarjo 20/06 Kec. Bancar Kab. Tuban</p>
          </div>




        </div>

      </div><br>
      <div class="text-bg-success p-3" style="border-radius: 20px; text-align: center; font-family: 'Times New Roman', Times, serif;">Sambutan Kepala Sekolah</div><br>
      <p class="text-center" style="font-family: 'Times New Roman', Times, serif;">Dengan segala puji syukur kami haturkan kepada Allah SWT. karena berkat rahmat dan karunia-Nya kami dapat meluncurkan situs web ini di internet.
        Dunia pendidikan selalu dituntut untuk melakukan inovasi dan kreasi dalam memberikan pelayanan yang lebih cepat dan memuaskan. Tuntutan masyarakat terhadap mutu pelayanan semakin meningkat seiring dengan perkembangan ilmu dan teknologi yang semakin pesat. Teknologi informasi sebagai media yang cukup efektif dalam mengelola sistim informasi akademik sekolah, sarana komunikasi antar guru, siswa dan wali murid, sebagai sarana untuk mencari informasi dan sebagai media publikasi sekolah dalam meningkatkan mutu dan kualitas sekolah.
        Keberadaan website sekolah ini bertujuan untuk memperkenalkan SMP NU Bancar dengan sarana prasarana yang dimiliki, aktivitas pembelajaran yang dilakukan, sarana informasi bagi siswa dan wali murid , memperkenalkan struktur organisasi yang ada, memaparkan prestasi-prestasi yang diraih,  kegiatan ekstrakurikuler yang dilakukan, informasi kelulusan siswa, ajang promosi sekolah dalam mencari calon siswa baru dan juga galeri foto sekolah .
        Dengan adanya situs web ini , kami berharap seluruh stakeholder dan masyarakat luas lebih mengenal SMP NU serta dapat memberi kemudahan untuk mengakses informasi mengenai kegiatan belajar mengajar di sekolah kami.
        Dengan harapan situs web ini dapat memberikan manfaat positif bagi semua pihak yang mengunjungi situs web kami. Terima kasih.
         
        Kepala Sekolah
         
        IMAM SUTONDO, S.Pd, M.Pd
        <hr>
      </p>

    </div>

  </section>

  <section id="category">
    <div class="container " style="font-family: 'Times New Roman', Times, serif;">
      <div class="d-md-flex justify-content-between align-items-center">
        <div>
          <p class="text " style="margin-left:540px; font-family: 'Times New Roman', Times, serif;">Profil Sekolah </p>
          <h2 class="display-6 fw-semibold text-success" style="font-family: 'Times New Roman', Times, serif; margin-left:420px;">SMP NU BANCAR</h2>
        </div>

      </div>
      <div class="row g-md-3 mt-2">
        <img src="images/blok.jpg" alt="" style=" width:700px; margin-left:240px;">
      </div><br>
      <h5 class="text-success display-6 fw-semibold" style="font-family: 'Times New Roman', Times, serif; margin-left:440px;">Sejarah Sekolah</h5>
      <hr>
      <p>Sekolah Menengah Pertama Nahdlatul Ulama’ (SMP NU) Bancar Merupakan salah satu jenjang pendidikan dibawah naungan Lembaga Pendidikan Ma’arif NU MWC Kecamatan Bancar yang berdiri pada tahun 2001.

        Dalam perjalanannya yang sudah hampir 20 tahun ini SMP NU Bancar telah menghasilkan lulusan berprestasi yang diterima disekolah-sekolah unggulan baik negeri maupun swasta. Selain itu alumni SMP NU Bancar juga banyak yang diterima di pondok pesantren ternama.

        Kebanggaan yang kami tawarkan adalah perpaduan dua kurikulum yaitu kurikulum pondok pesantren dan kurikulum dinas pendidikan nasional. Sehingga siswa-siswi SMP NU Bancar dapat menguasai mata pelajaran yang meliputi : Alqur an, Fiqih, Aqidah, Bhs. Arab, Aswaja/keNuan, SKI, Pkn, Bhs.Indonesia, Bhs.Inggris, MTK, IPA, IPS, Penjaskes, Seni Budaya, TIK, dan Bhs. Jawa. Selain itu, sebagai tambahan pembelajaran dan kegiatan siswa guna menggali dan mengembangkan bakat siswa-siswi SMP NU Bancar memiliki kegiatan ekstrakulikuler yang dipegang langsung oleh instruktur yang sudah ahli dalam bidangnya.</p>
      <div class="text-bg-success p-3" style="border-radius: 20px; text-align: center;">Nama Sekolah</div><br>
      <p class="text-center">SMP NU BANCAR </p>
      <div class="text-bg-success p-3" style="border-radius: 20px; text-align: center;">Kepala Sekolah</div><br>
      <p class="text-center">Mr. IMAM SUTONDO, S. Pd. M, Pd </p>
      <div class="text-bg-success p-3" style="border-radius: 20px; text-align: center;">NSPN Sekolah</div><br>
      <p class="text-center">20505106 </p>
      <div class="text-bg-success p-3" style="border-radius: 20px; text-align: center;">Status Sekolah</div><br>
      <p class="text-center">Swasta </p>
      <div class="text-bg-success p-3" style="border-radius: 20px; text-align: center;">Alamat Sekolah</div><br>
      <p class="text-center">Jl. Raya Desa Bulujowo, Kec. Bancar, Kab. Tuban Jawa Timur <br>
        Email : smpnubancarmail@gmail.com <br> Kode Pos : 62354
      </p>
      <div class="text-bg-success p-3" style="border-radius: 20px; text-align: center;">SK. Pendirian/Nomor/Tanggal</div><br>
      <p class="text-center">421.3/692/108.08/2001/19 November 2001
      </p>
      <div class="text-bg-success p-3" style="border-radius: 20px; text-align: center;">Visi Misi Sekolah</div><br>
      <p class="text-center">SMP NU BANCAR <br>

        “MAJU DALAM PRESTASI SANTUN DALAM PEKERTI”<br>

        <b> VISI :</b> <br>

        “ Terwujudnya Generasi Muslim Ahlusunnah Wal Jama’ah, Cerdas, Berkarakter Dan Berakhlaqul Karimah” <br>

        <b> MISI : </b><br>

        Menanamkan nilai keimanan dan ketakwaan serta berakhlak mulia melalui pengamalan ajaran islam ala Ahlussunnah Wal Jamaah.
        Membentuk generasi yang memiliki jiwa nasionalisme
        Menanamkan pembiasaan diri untuk berucap dan berperilaku sesuai dengan akhlaqul karimah.
        Meningkatkan layanan bimbingan,pembelajaran intrakulikuler dan ekstrakurikuler secara aktif, inovatif, kreatif, efektif, dan menyenangkan untuk meningkatkan prestasi dibidang akademik dan non akademik.
        Mempu mengimplementasikan teknologi informasi dan komunikasi untuk meningkatkan potensi akademik dan non akademik.
        Menumbuhkan kepedulian dan kecintaan terhadap lingkungan sehingga membentuk pribadi yang sehat, percaya diri, disiplin dan memiliki etos kerja tinggi.
        Mampu berkiprah dalam kegiatan keagamaan dan kemasyarakatan.
      </p>
      <div class="text-bg-success p-3" style="border-radius: 20px; text-align: center;">Tujuan Sekolah</div><br>
      <p class="text-center"> <b> TUJUAN : </b><br>

        1. Mengembangkan budaya sekolah yang religious dan melaksanakan pembelajaran yang berkualitas, santun, berakhlaqul karimah dengan berdasar iman dan taqwa kepada Allah SWT Sesuai ajaran Islam Ala ahlusunnah waljama’ah.
        2. Membekali peserta didik agar memiliki karakter religius,nasionalisme, gotong royong dan mandiri dalam semua aspek kehidupan berbangsa dan bernegara
        3. Memiliki sikap religius beriman dan bertakwa kepada Tuhan Yang Maha Esa dalam melaksanakan aktivitas hidup sehari-hari
        4. Melaksanakan pembelajaran kan bimbingan siswa secara Aktif, Inovatif, Kreatif, Efektif, dan Menyenangkan dengan pendekatan SCIENTIFIC
        5. Mengembangkan berbagai wawasan dalam bidang ilmu pengetahuan maupun dalam bidang keagamaan
        6. Menunjukkan kemampuan belajar secara mandiri sesuai potensi yang dimilikinya
        7. Menunjukkan kemampuan berfikir logis, kritis, kreatif dan inovatif
        8. Mengoptimalkan potensi akademik melalui proses pembelajaran dan bimbingan IPTEK
        9. Membudayakan hidup disiplin, berbudi pekerti luhur, berjiwa sosial dan bekerja keras.
        10. Menumbuh kembangkan kesadaran terhadap lingkungan hidup
        11. Memiliki karakter pembelajaran dan pengembangan diri yang terintegrasi dengan Pendidikan Lingkungan Hidup dan P4GN (Pencegahan, Pemberantasan, Penyalahgunaan dan Peredaran Gelap Narkoba)
        12. Terciptanya budaya menghargai dan menghormati sesama mukmin yang berkepribadian 6 S ( Sehat, Senyum, Salam, Sapa, Sopan dan Santun).
        13. Melaksanakan kegiatan bimbingan praktik dan pembiasaan amalia islam ala Ahlussunnah Wal Jamaah. <br>


        INDIKATOR <br>

        1. Terciptanya perilaku peserta didik yang santun, berbudi luhur, dan berakhlaq mulia
        2. Menyiapkan peserta didik yang beriman dan bertqwa, menjadi manusia produktif, bertanggungjawab dalam mengembangkan sikap Nasionalis.
        3. Menghasilkan lulusan yang berkualitas, berkarakter dan berakhlaq karimah
        4. Menghasilkan karakter pribadi yang memiliki kesadaran yang tinggi dalam mewujudkan kejujuran, kedisplinan, tanggungjawab, kepedulian dan santun dalam berprilaku
        5. Terciptanya peserta didik yang berprestasi, inovasi pada bidang akademik maupun non akademik
        6. Terwujudnya peserta didik yang berkompeten dalam bidang ilmu pengetahuan dan teknologi
        7. Terciptanya warga sekolah yang berbudi pekerti luhur, ramah bagi semua peserta didik, bersih dari narkoba dan lingkungan.
        8. Terciptanya budaya sopan santun, ramah dan bersahaja antar warga sekolah maupun lingkungannya.
        9. Terciptanya generasi muslim ala Ahlussunnah Wal Jamaah yang bisa berkipra ditengah-tengah masyarakat.</p>
      <hr>

  </section>

  <section id="courses" class="padding-medium">
    <div class="container">
      <div class="text-center mb-5">
        <p class="text" style="font-family: 'Times New Roman', Times, serif;">Apa Saja Yang Pernah Di Raih</p>
        <h2 class="text-success display-6 fw-semibold" style="font-family: 'Times New Roman', Times, serif;">Prestasi Siswa Siswi SMP NU Bancar</h2>
      </div>

      <div class="row">

        <tbody>
          @foreach ($prestasis as $prestasi)
          <div class="col-sm-6 col-lg-4 col-xl-3 mb-5">
            <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
              <a href="">@empty($prestasi->foto)
                <img src="{{url('images/logo.jpg')}}"
                  alt="project-image" class="img-fluid rounded-3">
                @else
                <img src="{{ asset('storage/' . $prestasi->foto) }}"
                  alt="project-image" class="img-fluid rounded-3">
                @endempty
                <div class="card-body p-0">

                  <div class="d-flex justify-content-between my-3">
                    <div class="d-flex align-items-center">
                      <svg width="20" height="20">
                        <use xlink:href="#clock" class="text-black-50"></use>
                      </svg>
                      <p class="text-black-50 fw-bold text-uppercase m-0">{{ \Carbon\Carbon::parse($prestasi->tanggal)->format('d-m-Y') }}</p>
                    </div>
                  </div>
                  <p class="text-black-50 fw-bold text-uppercase m-0">Predikat</p>
                  <a href="courses-details.html" data-bs-toggle="modal" data-bs-target="#{{ $prestasi->id }}">
                    <h5 class="course-title py-2 m-0">{{ $prestasi->judul }}</h5>
                  </a>
                  <div class="modal fade" id="{{ $prestasi->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5 text-success" id="exampleModalLabel">Detail Prestasi</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                          <!-- Foto di tengah atas -->
                          @empty($prestasi->foto)
                          <img src="{{url('images/logo.jpg')}}"
                            alt="project-image" class="img-fluid rounded-3">
                          @else
                          <img src="{{ asset('storage/' . $prestasi->foto) }}"
                            alt="project-image" class="img-fluid rounded-3">
                          @endempty

                          <br><br>
                          <!-- Detail prestasi -->
                          <h6 class="fw-bold">{{ $prestasi->name }}</h6>
                          <hr>
                          <h6 class="fw-bold">{{ $prestasi->judul }}</h6>
                          <p>{{ $prestasi->deskripsi }}</p>

                          <ul class="list-group">
                            <li class="list-group-item">Tanggal: {{ \Carbon\Carbon::parse($prestasi->tanggal)->format('d-m-Y') }}</li>
                            <li class="list-group-item">Kategori: {{ $prestasi->kategori }}</li>

                          </ul>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card-text">
                    <span class="rating d-flex align-items-center mt-3">
                      <p class="text-muted fw-semibold m-0 me-2">SMP NU BANCAR</p>
                      <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                      <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                      <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                      <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                      <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    </span>
                  </div>

                </div>
            </div>
          </div>
          @endforeach
        </tbody>
      </div>

      <div class="text-center mt-4">
        <a href="courses.html" class="btn btn-primary px-5 py-3">Lihat Semua Prestasi</a>
      </div>

    </div>
  </section>


  <section id="kegiatan" class="padding-medium">
    <div class="container">
      <div class="text-center mb-5">
        <p class="text" style="font-family: 'Times New Roman', Times, serif;">Apa Saja Sih Kegiatan-kegiatan Di SMP NU</p>
        <h2 class="text-success display-6 fw-semibold" style="font-family: 'Times New Roman', Times, serif;">Kegiatan Sekolah</h2>
      </div>

      <div class="row">
        <tbody>
          @foreach ($kegiatans as $kegiatan)
          <div class="col-sm-6 col-lg-4 col-xl-3 mb-5">
            <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
              <a href="courses-details.html">@empty($kegiatan->foto)
                <img src="{{url('images/logo.jpg')}}"
                  alt="project-image" class="img-fluid rounded-3">
                @else
                <img src="{{ asset('storage/' . $kegiatan->foto) }}"
                  alt="project-image" class="img-fluid rounded-3">
                @endempty
                <div class="card-body p-0">

                  <div class="d-flex justify-content-between my-3">
                    <div class="d-flex align-items-center">
                      <svg width="20" height="20">
                        <use xlink:href="#clock" class="text-black-50"></use>
                      </svg>
                      <p class="text-black-50 fw-bold text-uppercase m-0">{{ \Carbon\Carbon::parse($kegiatan->tanggal)->format('d-m-Y') }}</p>
                    </div>
                  </div>
                  <p class="text-black-50 fw-bold text-uppercase m-0">Kegiatan</p>
                  <a href="courses-details.html" data-bs-toggle="modal" data-bs-target="#kegiatan{{ $kegiatan->id }}">
                    <h5 class="course-title py-2 m-0">{{ $kegiatan->nama_kegiatan }}</h5>
                  </a>
                  <div class="modal fade" id="kegiatan{{ $kegiatan->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5 text-success" id="exampleModalLabel">Detail Kegiatan Sekolah</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                          <!-- Foto di tengah atas -->
                          @empty($kegiatan->foto)
                          <img src="{{url('images/logo.jpg')}}"
                            alt="project-image" class="img-fluid rounded-3">
                          @else
                          <img src="{{ asset('storage/' . $kegiatan->foto) }}"
                            alt="project-image" class="img-fluid rounded-3">
                          @endempty
                          <br><br>
                          <!-- Detail prestasi -->
                          <h6 class="fw-bold">{{ $kegiatan->nama_kegiatan }}</h6>
                          <hr>
                          <p>{{ $kegiatan->deskripsi_kegiatan }}</p>

                          <ul class="list-group">
                            <li class="list-group-item">Tanggal: {{ \Carbon\Carbon::parse($kegiatan->tanggal)->format('d-m-Y') }}</li>
                            <li class="list-group-item">Kategori: {{ $kegiatan->kategori }}</li>
                          </ul>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-text">
                    <span class="rating d-flex align-items-center mt-3">
                      <p class="text-muted fw-semibold m-0 me-2">SMP NU BANCAR</p>
                      <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                      <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                      <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                      <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                      <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                    </span>
                  </div>

                </div>
            </div>
          </div>
          @endforeach
        </tbody>
      </div>

      <div class="text-center mt-4">
        <a href="courses.html" class="btn btn-primary px-5 py-3">Lihat Semua Kegiatan Sekolah</a>
      </div>

    </div>
  </section>

  <section id="testimonial" class="padding-medium bg-primary-subtle">
    <div class="container">
      <div class="text-center mb-4">
        <p class="text " style="font-family: 'Times New Roman', Times, serif;">Bagaimana Ulasan Masyarakat Sekitar</p>
        <h2 class="display-6 fw-semibold text-success" style="font-family: 'Times New Roman', Times, serif;">Ulasan Masyarakat Umum</h2>
      </div>
      <div class="row">
        <div class="offset-md-1 col-md-10">
          <div class="swiper testimonial-swiper">
            <div class="swiper-wrapper">
              <tbody>
                @foreach($ulasans as $ulasan)
                <div class="swiper-slide pe-md-5">
                  <div class="my-4">
                    <p class="text-muted">“{{ $ulasan->ulasan }}”</p>
                    <div class="row">
                      <div class="col-3"> <img src="images/icon.png" alt="img" class="img-fluid rounded-circle">
                      </div>
                      <div class="col-9">
                        <h5 class="m-0 mt-2">{{ $ulasan->nama }}</h5>
                        <p class="text-muted">{{ \Carbon\Carbon::parse($ulasan->tanggal)->format('d-m-Y') }}</p>
                      </div>

                    </div>
                  </div>
                </div>
                @endforeach
              </tbody>
            </div>

            <div class="swiper-pagination"></div>

          </div>
        </div>
      </div>
    </div>


  </section>

  <section id="kependidikan" class="padding-medium">
    <div class="container">
      <div class="text-center mb-5">
        <p class="text" style="font-family: 'Times New Roman', Times, serif;">Bagaimana Sih Tenaga Kependidikannya</p>
        <h2 class="display-6 fw-semibold text-success" style="font-family: 'Times New Roman', Times, serif;">Tenaga Kependidikan </h2>
      </div>

      <div class="row" style="width: 550px;">
        <tbody>
          @foreach ($gurus as $guru)
          <div class="col mb-5">
            <div class="team-member position-relative card rounded-4 border-0 shadow-sm p-3">
              <div class="image-holder zoom-effect rounded-3">
                @empty($guru->foto)
                <img src="{{url('images/logo.jpg')}}"
                  alt="project-image" class="img-fluid rounded-3">
                @else
                <img style="width: 250px;" src="{{ asset('storage/' . $guru->foto) }}"
                  alt="project-image" class="img-fluid rounded-3">
                @endempty

              </div>
              <div class="card-body p-0" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                <div class="text mt-3">
                  <p class="fw-bold m-0 text-center">{{ $guru->nama }}</p>
                  <hr>
                  <p class="text-success m-0">{{ $guru->pelajaran }}</p><br>
                  <p class="text-success m-0">{{ $guru->alamat }}</p><br>
                  <p class="text-success m-0">{{ $guru->pendidikan }}</p>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </tbody>
      </div>
  </section>



  <section id="register">
    <div class="container padding-medium">
      <div class="row align-items-center">
        <div class="offset-md-1 col-md-5 ">
          <div>
            <h2 class="display-6 fw-semibold" style="font-family: 'Times New Roman', Times, serif;">Form Ulasan </h2>
            <p class="text-success ">Silahkan isi form dengan benar dan baik</p>
          </div>
        </div>
        <div class="col-md-5">
          <form action="" method="POST" enctype="multipart/form-data" id="form">
            @csrf
            <input type="text" name="nama" id="nama" placeholder="Silahkan Isi Nama Anda"
              class="form-control bg-white border-0 rounded-4 shadow-none rounded-pill text-center px-4 py-3 w-100 mb-4">
            <input type="text" name="ulasan" id="ulasan" placeholder="Silahkan Masukan Ulasan Anda"
              class="form-control  @error('ulasan') is-invalid @enderror bg-white border-0 rounded-4 shadow-none rounded-pill text-center px-4 py-3 w-100 mb-4">
            @error('ulasan')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <input type="date" name="tanggal" id="tanggal" placeholder="Silahkan Isi Nama Anda"
              class="form-control bg-white border-0 rounded-4 shadow-none rounded-pill text-center px-4 py-3 w-100 mb-4">
            <div class="d-grid">
              <button type="submit" class="btn btn-primary px-5 py-3"> Kirim</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>

  <footer id="footer">
    <div class="container padding-medium ">
      <div class="row">
        <div class="col-sm-6 col-lg-4 my-3">
          <div class="footer-menu">
            <a href="index.html">
              <img src="images/logo.jpg" alt="logo" class="img-fluid" style="height: 150px; width: 200px;">
            </a>
            <div class="social-links mt-4" style="margin-left:25px;">
              <ul class="d-flex list-unstyled ">
                <li class="me-4">
                  <a href="#">
                    <svg class="social-icon" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#facebook"></use>
                    </svg>
                  </a>
                </li>

                <li class="me-4">
                  <a href="https://www.instagram.com/smpnubancar?igsh=ODM2angzOGhqbWs3">
                    <svg class="social-icon" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#instagram"></use>
                    </svg>
                  </a>
                </li>

                <li class="me-4">
                  <a href="#">
                    <svg class="social-icon" width="30" height="30" aria-hidden="true">
                      <use xlink:href="#youtube"></use>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-2 my-3">
          <div class="footer-menu">
            <h5 class=" fw-bold mb-4">Bantuan Menu</h5>
            <ul class="menu-list list-unstyled">
              <li class="menu-item mb-2">
                <a href="#" class="footer-link">Beranda</a>
              </li>
              <li class="menu-item mb-2">
                <a href="#category" class="footer-link">Tentang Kami</a>
              </li>
              <li class="menu-item mb-2">
                <a href="#courses" class="footer-link">Prestasi</a>
              </li>
              <li class="menu-item mb-2">
                <a href="#kegiatan" class="footer-link">Kegiatan Sekolah</a>
              </li>
              <li class="menu-item mb-2">
                <a href="#testimonial" class="footer-link">Ulasan</a>
              </li>
              <li class="menu-item mb-2">
                <a href="#kependidikan" class="footer-link">Direktori</a>
              </li>
              <li class="menu-item mb-2">
                <a href="#register" class="footer-link">FAQ</a>
              </li>

            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 my-3">
          <div class="footer-menu">
            <h5 class=" fw-bold mb-4">Tentang</h5>
            <ul class="menu-list list-unstyled">
              <li class="menu-item mb-2">
                <a href="#" class="footer-link">Profil Sekolah</a>
              </li>
              <li class="menu-item mb-2">
                <a href="#" class="footer-link">Apa saja yang pernah di raih</a>
              </li>
              <li class="menu-item mb-2">
                <a href="#" class="footer-link">Apa Saja Sih Kegiatan-kegiatan Di SMP NU</a>
              </li>
              <li class="menu-item mb-2">
                <a href="#" class="footer-link">Bagaimana Ulasan Masyarakat Sekitar</a>
              </li>
              <li class="menu-item mb-2">
                <a href="#" class="footer-link">Bagaimana Sih Tenaga Kependidikannya</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-sm-6 col-lg-3 my-3">
          <div class="footer-menu">
            <h5 class=" fw-bold mb-4">Contact Us</h5>
            <ul class="menu-list list-unstyled">
              <li class="menu-item mb-2">
                <a href="#" class="footer-link">smpnubancarmail@gmail.com </a>
              </li>
              <li class="menu-item mb-2">
                <a href="#" class="footer-link">+110 4587 2445</a>
              </li>
              <li class="menu-item mb-2">
                <a href="#" class="footer-link">Jl. Raya Desa Bulujowo, Kec. Bancar, Kab. Tuban Jawa Timur</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <button class="btn btn-primary back-to-top" id="backToTopButton" style="position: fixed; bottom: 10px; right: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z" />
    </svg></button>

  <div id="footer-bottom">
    <hr class="text-black-50">
    <div class="container">
      <div class="row py-3">
        <div class="col-md-6 copyright">
          <p>© 2024 Website SMP NU BANCAR</p>
        </div>
        <div class="col-md-6 text-md-end">
          DiBangun Oleh: <a href="https://themewagon.com" target="_blank" class="fw-bold">
            Dhaaa.Production
          </a></p>
        </div>
      </div>
    </div>
  </div>





  <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="{{ asset('js/plugins.js') }}"></script>
  <script src="{{ asset('js/script.js') }}"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Scroll to top functionality
    document.getElementById('backToTopButton').addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  </script>

</body>

</html>