<!DOCTYPE html>
<html lang="es">
  <!-- Mirrored from html.geekcodelab.com/foodify/Single_page/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Oct 2021 21:10:29 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="keywords" content="Foodify - Food HTML5 Template" />
    <meta name="description" content="Foodify - Food HTML5 Template" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <title> @yield('title')</title>

    <link
      rel="icon"
      href="{{ asset ('frontend/img/favicon.png') }} "
      sizes="32x32"
      type="image/png"
    />

    <link
      href="{{ asset ('frontend/css/googleapis.css') }} "
      rel="stylesheet"
    />

    <link rel="stylesheet" href="{{ asset ('frontend/css/bootstrap.min.css') }} " />

    <link rel="stylesheet" href="{{ asset ('frontend/css/swiper-bundle.min.css') }} " />

    <link rel="stylesheet" type="text/css" href="{{ asset ('frontend/css/jquery.fancybox.min.css') }} " />

    <link rel="stylesheet" href="{{ asset ('frontend/css/style.css') }} " />
  </head>
  <body class="body-fixed">
    <div class="page-loader">
      <img
        width="300"
        height="300"
        src="{{ asset ('frontend/img/loader.gif') }} "
        alt="Loader"
      />
    </div>

    <header class="site-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-2">
            <div class="header-logo">
              <a title="Foodify" href="{{ route('Index') }}">
                <img
                  width="160"
                  height="36"
                  src="{{ asset ('frontend/img/logo.svg') }} "
                  alt="Logo"
                />
              </a>
            </div>
          </div>
          <div class="col-lg-10">
            <div class="main-navigation">
              <button class="menu-toggle"><span></span><span></span></button>
              <nav class="header-menu">
                <ul class="menu foody-nav-menu">
                  <li><a title="Home" href="#home">Inicio</a></li>
                  <li><a title="About" href="#about">Acerca de</a></li>
                  <li><a title="Menu" href="#menu">Menú</a></li>
                  <li><a title="Gallery" href="#gallery">Galería</a></li>
                  <li><a title="Blog" href="#blog">Blog</a></li>
                  <li><a title="Contact" href="#contact">Contacte con</a></li>
                </ul>
              </nav>
              <div class="header-right">
                <form class="header-search-form for-des">
                  <input
                    class="form-input"
                    type="search"
                    placeholder="Buscar aquí..."
                  />
                  <button type="submit">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="18"
                      height="18"
                      viewBox="0 0 21 21"
                      fill="none"
                    >
                      <path
                        d="M19.8121 18.9148L14.6484 13.8335C16.0006 12.3644 16.8314 10.4214 16.8314 8.28335C16.8308 3.70967 13.0636 0.00250244 8.41614 0.00250244C3.7687 0.00250244 0.00149536 3.70967 0.00149536 8.28335C0.00149536 12.857 3.7687 16.5642 8.41614 16.5642C10.4242 16.5642 12.2659 15.8697 13.7125 14.715L18.8963 19.8163C19.1489 20.0651 19.559 20.0651 19.8115 19.8163C20.0647 19.5675 20.0647 19.1636 19.8121 18.9148ZM8.41614 15.2901C4.4839 15.2901 1.29621 12.1531 1.29621 8.28335C1.29621 4.4136 4.4839 1.27656 8.41614 1.27656C12.3484 1.27656 15.5361 4.4136 15.5361 8.28335C15.5361 12.1531 12.3484 15.2901 8.41614 15.2901Z"
                        fill="#4F4F4F"
                      />
                    </svg>
                  </button>
                </form>
                <a
                  title="Cart"
                  href="javascript:void(0)"
                  class="header-btn header-cart"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    version="1.1"
                    width="18"
                    height="18"
                    x="0"
                    y="0"
                    viewBox="0 0 450.391 450.391"
                    style="enable-background: new 0 0 512 512"
                  >
                    <g>
                      <path
                        d="M143.673,350.322c-25.969,0-47.02,21.052-47.02,47.02c0,25.969,21.052,47.02,47.02,47.02     c25.969,0,47.02-21.052,47.02-47.02C190.694,371.374,169.642,350.322,143.673,350.322z M143.673,423.465     c-14.427,0-26.122-11.695-26.122-26.122c0-14.427,11.695-26.122,26.122-26.122c14.427,0,26.122,11.695,26.122,26.122     C169.796,411.77,158.1,423.465,143.673,423.465z"
                        fill="var(--dark-color)"
                      ></path>
                      <path
                        d="M342.204,350.322c-25.969,0-47.02,21.052-47.02,47.02c0,25.969,21.052,47.02,47.02,47.02s47.02-21.052,47.02-47.02     C389.224,371.374,368.173,350.322,342.204,350.322z M342.204,423.465c-14.427,0-26.122-11.695-26.122-26.122     c0-14.427,11.695-26.122,26.122-26.122s26.122,11.695,26.122,26.122C368.327,411.77,356.631,423.465,342.204,423.465z"
                        fill="var(--dark-color)"
                      ></path>
                      <path
                        d="M448.261,76.037c-2.176-2.377-5.153-3.865-8.359-4.18L99.788,67.155L90.384,38.42     C83.759,19.211,65.771,6.243,45.453,6.028H10.449C4.678,6.028,0,10.706,0,16.477s4.678,10.449,10.449,10.449h35.004     c11.361,0.251,21.365,7.546,25.078,18.286l66.351,200.098l-5.224,12.016c-5.827,15.026-4.077,31.938,4.702,45.453     c8.695,13.274,23.323,21.466,39.184,21.943h203.233c5.771,0,10.449-4.678,10.449-10.449c0-5.771-4.678-10.449-10.449-10.449     H175.543c-8.957-0.224-17.202-4.936-21.943-12.539c-4.688-7.51-5.651-16.762-2.612-25.078l4.18-9.404l219.951-22.988     c24.16-2.661,44.034-20.233,49.633-43.886l25.078-105.012C450.96,81.893,450.36,78.492,448.261,76.037z M404.376,185.228     c-3.392,15.226-16.319,26.457-31.869,27.69l-217.339,22.465L106.58,88.053l320.261,4.702L404.376,185.228z"
                        fill="var(--dark-color)"
                      ></path>
                    </g>
                  </svg>
                  <span class="cart-number">5</span>
                </a>
                <a title="Account" href="javascript:void(0)" class="header-btn">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 32 32"
                    width="22"
                    height="22"
                  >
                    <g
                      data-name="user people person users man"
                      id="user_people_person_users_man"
                    >
                      <path
                        d="M23.74,16.18a1,1,0,1,0-1.41,1.42A9,9,0,0,1,25,24c0,1.22-3.51,3-9,3s-9-1.78-9-3a9,9,0,0,1,2.63-6.37,1,1,0,0,0,0-1.41,1,1,0,0,0-1.41,0A10.92,10.92,0,0,0,5,24c0,3.25,5.67,5,11,5s11-1.75,11-5A10.94,10.94,0,0,0,23.74,16.18Z"
                        fill="var(--dark-color)"
                      ></path>
                      <path
                        d="M16,17a7,7,0,1,0-7-7A7,7,0,0,0,16,17ZM16,5a5,5,0,1,1-5,5A5,5,0,0,1,16,5Z"
                        fill="var(--dark-color)"
                      ></path>
                    </g>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    @yield('content')

    <script src="{{ asset ('frontend/js/jquery-3.5.1.min.js') }} "></script>

    <script src="{{ asset ('frontend/js/bootstrap.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/popper.min.js') }} "></script>

    <script src="{{ asset ('frontend/js/font-awesome.min.js') }} "></script>

    <script src="{{ asset ('frontend/js/swiper-bundle.min.js') }} "></script>

    <script src="{{ asset ('frontend/js/jquery.mixitup.min.js') }} "></script>

    <script src="{{ asset ('frontend/js/jquery.fancybox.min.js') }} "></script>

    <script src="{{ asset ('frontend/js/parallax.min.js') }} "></script>

    <script src="{{ asset ('frontend/js/gsap.min.js') }} "></script>

    <script src="{{ asset ('frontend/js/ScrollTrigger.min.js') }} "></script>

    <script src="{{ asset ('frontend/js/ScrollToPlugin.min.js') }} "></script>

    <script src="{{ asset ('frontend/js/rellax.min.js') }} "></script>

    <script src="{{ asset ('frontend/js/rellax-custom.js') }} "></script>

    <script src="{{ asset ('frontend/js/smooth-scroll.js') }} "></script>

    <script src="{{ asset ('frontend/js/custom.js') }} "></script>
  </body>

  <!-- Mirrored from html.geekcodelab.com/foodify/Single_page/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Oct 2021 21:10:29 GMT -->
</html>
