@extends('frontend.layouts.app')
@section('title')
Foodify - Food HTML5 Template
@endsection
@section('content')
<div id="viewport">
    <div id="js-scroll-content">
      <section class="main-banner" id="home">
        <div class="js-parallax-scene">
          <div class="banner-shape-1 w-100" data-depth="0.30">
            <img
              src="{{ asset ('frontend/img/banner-shape-1.png') }} "
              alt="banner shape"
            />
          </div>
          <div class="banner-shape-2 w-100" data-depth="0.25">
            <img
              src="{{ asset ('frontend/img/plant.png') }} "
              alt="banner shape"
            />
          </div>
        </div>
        <div class="sec-wp">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="banner-text">
                  <h1 class="h1-title">
                    Bienvenido a nuestro <span>foodify</span> restaurante.
                  </h1>
                  <p>
                    Is it amet, consectetur adipisicing elit. Dolore atque
                    maiores libero saepe qui illo recusandae odit.
                    Voluptatibus hic veritatis officia eius autem saepe, in
                    quasi? Ab magni dolore odit!
                  </p>
                  <div class="banner-btn mt-4">
                    <a title="Check Our menu" href="#menu" class="sec-btn"
                      >Consulte nuestro menú ✌️</a
                    >
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="banner-img-wp">
                  <div
                    class="banner-img"
                    style="
                      background-image: url('{{ asset ('frontend/img/banner-img.jpg') }} ');
                    "
                  ></div>
                </div>
                <div class="banner-img-text mt-4 m-auto">
                  <h5 class="h5-title">Pila de panqueques 🔥</h5>
                  <p>
                    Si va a utilizar un pasajae de la misma es, usted necesita
                    estar seguro.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="brands-sec">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="brand-title mb-5">
                <h5 class="h5-title">
                  Con la distibucion de más de 100 empresas
                </h5>
              </div>
              <div class="brands-row">
                <div class="brands-box">
                  <img
                    src="{{ asset ('frontend/img/brand-1.svg') }} "
                    alt="Brand Logo"
                  />
                </div>
                <div class="brands-box">
                  <img
                    src="{{ asset ('frontend/img/brand-2.svg') }} "
                    alt="Brand Logo"
                  />
                </div>
                <div class="brands-box">
                  <img
                    src="{{ asset ('frontend/img/brand-3.svg') }} "
                    alt="Brand Logo"
                  />
                </div>
                <div class="brands-box">
                  <img
                    src="{{ asset ('frontend/img/brand-4.svg') }} "
                    alt="Brand Logo"
                  />
                </div>
                <div class="brands-box">
                  <img
                    src="{{ asset ('frontend/img/brand-5.svg') }} "
                    alt="Brand Logo"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="about-sec section" id="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="sec-title text-center mb-5">
                <p class="sec-sub-title mb-3">Sobre nosotros</p>
                <h2 class="h2-title">
                  descubra nuestro <span>historia del restaurante</span>
                </h2>
                <div class="sec-title-shape mb-4">
                  <img
                    src="{{ asset ('frontend/img/title-shape.svg') }} "
                    alt="Title Shape"
                  />
                </div>
                <p>
                  it is dolor sit amet consectetur adipisicing elit.
                  Repellendus possimus cumque impedit dolorum quidem
                  distinctio, enim ad! Sapiente et mollitia hic? Minus facere
                  suscipit officia impedit molestias, officiis veritatis
                  aperiam doloribus nesciunt nulla commodi aut non quisquam
                  possimus! Excepturi iste esse ullam animi. Consectetur
                  mollitia possimus ipsa libero, exercitationem temporibus
                  delectus asperiores natus rem neque quidem nulla facilis, ut
                  necessitatibus.
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 m-auto">
              <div class="about-video">
                <div
                  class="about-video-img"
                  style="
                    background-image: url('{{ asset ('frontend/img/about-img.jpg') }}');
                  "
                ></div>
                <div class="play-btn-wp">
                  <a
                    title="Play Video"
                    href="img/recipe.mp4"
                    class="play-btn"
                    data-fancybox="video"
                  >
                    <svg
                      width="24"
                      height="30"
                      viewBox="0 0 20 26"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M19.1021 10.9331L3.19255 0.344479C1.83572 -0.560077 0 0.424293 0 2.04717V23.1978C0 24.8473 1.83572 25.8051 3.19255 24.9005L19.1021 14.3119C20.2993 13.5404 20.2993 11.7312 19.1021 10.9331Z"
                        fill="var(--primary-color)"
                      />
                    </svg>
                  </a>
                  <span>Ver la receta </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section
        class="our-menu section bg-light repeat-img"
        id="menu"
        style="
          background-image: url('{{ asset ('frontend/img/menu-bg.png') }}');
        "
      >
        <div
          class="our-menu-shape rellax"
          data-rellax-speed="1"
          data-rellax-percentage="-0.5"
        >
          <img
            width="600"
            src="{{ asset ('frontend/img/mashroom.png') }} "

            alt="Mashroom"
          />
        </div>
        <div class="sec-wp">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="sec-title text-center mb-5">
                  <p class="sec-sub-title mb-3">nuestro menú</p>
                  <h2 class="h2-title">
                    Levántate temprano,<span>comer fresco y sano</span>
                  </h2>
                  <div class="sec-title-shape mb-4">
                    <img
                      src="{{ asset ('frontend/img/title-shape.svg') }} "
                      alt="Title Shape"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="menu-tab-wp">
              <div class="row">
                <div class="col-lg-12 m-auto">
                  <div class="menu-tab text-center">
                    <ul class="filters">
                      <div class="filter-active"></div>
                      <li
                        class="filter"
                        data-filter=".all, .breakfast, .lunch, .dinner"
                      >
                        <img
                          src="{{ asset ('frontend/img/menu-1.png') }} "
                          alt="Menu Images"
                        />
                        Todo
                      </li>
                      <li class="filter" data-filter=".breakfast">
                        <img
                          src="{{ asset ('frontend/img/menu-2.png') }} "
                          alt="Menu Images"
                        />
                        desayuno
                      </li>
                      <li class="filter" data-filter=".lunch">
                        <img
                          src="{{ asset ('frontend/img/menu-3.png') }} "
                          alt="Menu Images"
                        />
                        almuerzo
                      </li>
                      <li class="filter" data-filter=".dinner">
                        <img
                          src="{{ asset ('frontend/img/menu-4.png') }} "
                          alt="Menu Images"
                        />
                        cena
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="menu-list-row">
              <div class="row g-xxl-5 bydefault_show" id="menu-dish">
                <div
                  class="col-lg-4 col-sm-6 dish-box-wp breakfast"
                  data-cat="breakfast"
                >
                  <div class="dish-box text-center">
                    <div class="dist-img">
                      <img
                        src="{{ asset ('frontend/img/dish-1.png') }} "
                        alt="Dish Image"
                      />
                    </div>
                    <div class="dish-rating">5<span>★</span></div>
                    <div class="dish-title">
                      <h3 class="h3-title">
                        Pasta fresca y ensalada saludable
                      </h3>
                      <p>60 calorías</p>
                    </div>
                    <div class="dish-info">
                      <ul>
                        <li>
                          <p>tiempo</p>
                          <b>20 minutos</b>
                        </li>
                        <li>
                          <p>personas</p>
                          <b>4</b>
                        </li>
                      </ul>
                    </div>
                    <div class="dist-bottom-row">
                      <ul>
                        <li>
                          <b>$30</b>
                        </li>
                        <li>
                          <button type="button" class="dish-add-btn">
                            <i class="fas fa-plus"></i>
                          </button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div
                  class="col-lg-4 col-sm-6 dish-box-wp breakfast"
                  data-cat="breakfast"
                >
                  <div class="dish-box text-center">
                    <div class="dist-img">
                      <img
                        src="{{ asset ('frontend/img/dish-2.png') }} "
                        alt="Dish Image"
                      />
                    </div>
                    <div class="dish-rating">4.5<span>★</span></div>
                    <div class="dish-title">
                      <h3 class="h3-title">ensalada de pollo chshewunt</h3>
                      <p>80 calorías</p>
                    </div>
                    <div class="dish-info">
                      <ul>
                        <li>
                          <p>tiempo</p>
                          <b>30 min</b>
                        </li>
                        <li>
                          <p>persona s</p>
                          <b>4</b>
                        </li>
                      </ul>
                    </div>
                    <div class="dist-bottom-row">
                      <ul>
                        <li>
                          <b>$40</b>
                        </li>
                        <li>
                          <button type="button" class="dish-add-btn">
                            <i class="fas fa-plus"></i>
                          </button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div
                  class="col-lg-4 col-sm-6 dish-box-wp lunch"
                  data-cat="lunch"
                >
                  <div class="dish-box text-center">
                    <div class="dist-img">
                      <img
                        src="{{ asset ('frontend/img/dish-3.png') }} "
                        alt="Dish Image"
                      />
                    </div>
                    <div class="dish-rating">4<span>★</span></div>
                    <div class="dish-title">
                      <h3 class="h3-title">ingredientes frescos</h3>
                      <p>100 calorías</p>
                    </div>
                    <div class="dish-info">
                      <ul>
                        <li>
                          <p>tiempo</p>
                          <b>15 min</b>
                        </li>
                        <li>
                          <p>personas</p>
                          <b>3</b>
                        </li>
                      </ul>
                    </div>
                    <div class="dist-bottom-row">
                      <ul>
                        <li>
                          <b>$15</b>
                        </li>
                        <li>
                          <button type="button" class="dish-add-btn">
                            <i class="fas fa-plus"></i>
                          </button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div
                  class="col-lg-4 col-sm-6 dish-box-wp lunch"
                  data-cat="lunch"
                >
                  <div class="dish-box text-center">
                    <div class="dist-img">
                      <img
                        src="{{ asset ('frontend/img/dish-4.png') }} "
                        alt="Dish Image"
                      />
                    </div>
                    <div class="dish-rating">4.5<span>★</span></div>
                    <div class="dish-title">
                      <h3 class="h3-title">Proin gravida gravida</h3>
                      <p>60 calorías</p>
                    </div>
                    <div class="dish-info">
                      <ul>
                        <li>
                          <p>tiempo</p>
                          <b>15 min</b>
                        </li>
                        <li>
                          <p>personas</p>
                          <b>2</b>
                        </li>
                      </ul>
                    </div>
                    <div class="dist-bottom-row">
                      <ul>
                        <li>
                          <b>10$</b>
                        </li>
                        <li>
                          <button type="button" class="dish-add-btn">
                            <i class="fas fa-plus"></i>
                          </button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div
                  class="col-lg-4 col-sm-6 dish-box-wp dinner"
                  data-cat="dinner"
                >
                  <div class="dish-box text-center">
                    <div class="dist-img">
                      <img
                        src="{{ asset ('frontend/img/dish-5.png') }} "
                        alt="Dish Image"
                      />
                    </div>
                    <div class="dish-rating">5<span>★</span></div>
                    <div class="dish-title">
                      <h3 class="h3-title">huevo foo young</h3>
                      <p>130 calorías</p>
                    </div>
                    <div class="dish-info">
                      <ul>
                        <li>
                          <p>tiempo</p>
                          <b>30 min</b>
                        </li>
                        <li>
                          <p>personas</p>
                          <b>4</b>
                        </li>
                      </ul>
                    </div>
                    <div class="dist-bottom-row">
                      <ul>
                        <li>
                          <b>$25</b>
                        </li>
                        <li>
                          <button type="button" class="dish-add-btn">
                            <i class="fas fa-plus"></i>
                          </button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div
                  class="col-lg-4 col-sm-6 dish-box-wp dinner"
                  data-cat="dinner"
                >
                  <div class="dish-box text-center">
                    <div class="dist-img">
                      <img
                        src="{{ asset ('frontend/img/dish-6.png') }} "
                        alt="Dish Image"
                      />
                    </div>
                    <div class="dish-rating">4.2<span>★</span></div>
                    <div class="dish-title">
                      <h3 class="h3-title">Huevos chinos al vapor</h3>
                      <p>80 calorías</p>
                    </div>
                    <div class="dish-info">
                      <ul>
                        <li>
                          <p>tiempo</p>
                          <b>20 min</b>
                        </li>
                        <li>
                          <p>personas</p>
                          <b>4</b>
                        </li>
                      </ul>
                    </div>
                    <div class="dist-bottom-row">
                      <ul>
                        <li>
                          <b>30$</b>
                        </li>
                        <li>
                          <button type="button" class="dish-add-btn">
                            <i class="fas fa-plus"></i>
                          </button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="two-col-sec section">
        <div
          class="food-shape rellax"
          data-rellax-speed="0.5"
          data-rellax-percentage="-1"
        >
          <img
            src="{{ asset ('frontend/img/food-shape.png') }} "
            alt="Food Shape"
          />
        </div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5">
              <div class="sec-img mt-5">
                <img
                  src="{{ asset ('frontend/img/pizza.png') }} "
                  alt="Pizza Image"
                />
              </div>
            </div>
            <div class="col-lg-7">
              <div class="sec-text">
                <h2 class="xxl-title">las mejores recetas internacionales</h2>
                <p>
                  it is dolor sit amet consectetur adipisicing elit.
                  Voluptatem ratione nisi aspernatur, tempora illo ea
                  inventore repellat ullam nobis nulla numquam ipsam ad
                  quibusdam doloribus quia autem incidunt dolore, dolorum
                  quisquam eligendi? Deleniti in, aut dolores neque magnam
                  veniam earum quaerat? Laboriosam inventore dolor
                  exercitationem in perspiciatis quae aspernatur sunt eligendi
                  quis, quisquam molestiae tenetur deserunt aperiam ducimus.
                  Optio, ab!
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="two-col-sec section pt-0">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1 order-2">
              <div class="sec-text">
                <h2 class="xxl-title">
                  la gran apertura de la tienda foodify
                </h2>
                <p>
                  it is dolor sit amet consectetur adipisicing elit.
                  Voluptatem ratione nisi aspernatur, tempora illo ea
                  inventore repellat ullam nobis nulla numquam ipsam ad
                  quibusdam doloribus quia autem incidunt dolore, dolorum
                  quisquam eligendi? Deleniti in, aut dolores neque magnam
                  veniam earum quaerat? Laboriosam inventore dolor
                  exercitationem in perspiciatis quae aspernatur sunt eligendi
                  quis, quisquam molestiae tenetur deserunt aperiam ducimus.
                  Optio, ab!
                </p>
              </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1">
              <div class="sec-img">
                <img
                  src="{{ asset ('frontend/img/breakfast-dish.png') }} "
                  alt="Chef Image"
                />
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="book-table section bg-light">
        <div class="book-table-shape">
          <img
            src="{{ asset ('frontend/img/table-leaves-shape.png') }} "
            alt="Table Leaves Shape"
          />
        </div>
        <div class="book-table-shape book-table-shape2">
          <img
            src="{{ asset ('frontend/img/table-leaves-shape.png') }} "
            alt="Table Leaves Shape"
          />
        </div>
        <div class="sec-wp">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="sec-title text-center mb-5">
                  <p class="sec-sub-title mb-3">Mesa del libro</p>
                  <h2 class="h2-title">mesa de apertura</h2>
                  <div class="sec-title-shape mb-4">
                    <img
                      src="{{ asset ('frontend/img/title-shape.svg') }} "
                      alt="Title Shape"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="book-table-info">
              <div class="row align-items-center">
                <div class="col-lg-4">
                  <div class="table-title text-center">
                    <h3>de lunes a martes</h3>
                    <p>9:00 am - 22:00 pm</p>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="call-now text-center">
                    <i
                      class="fas fa-phone-alt"
                      data-scroll
                      data-scroll-repeat
                      data-scroll-target="#icon"
                    ></i>
                    <a title="+503 377 1500" href="tel:503-377-1500"
                      >+503 377 1500</a
                    >
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="table-title text-center">
                    <h3>De viernes a domingo</h3>
                    <p>11:00 am - 20:00 pm</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" id="gallery">
              <div class="col-lg-10 m-auto">
                <div class="book-table-img-slider" id="icon">
                  <div class="swiper-wrapper">
                    <a
                      href="{{ asset ('frontend/img/book-table-img.jpg') }} "                        
                      data-fancybox="table-slider"
                      class="book-table-img back-img swiper-slide"
                      style="
                        background-image: url('{{ asset ('frontend/img/book-table-img.jpg') }} ');
                      "
                    ></a>
                    <a
                      href="{{ asset ('frontend/img/book-table-img2.jpg') }} "
                      data-fancybox="table-slider"
                      class="book-table-img back-img swiper-slide"
                      style="
                        background-image: url('{{ asset ('frontend/img/book-table-img2.jpg') }} ');
                      "
                    ></a>
                    <a
                      href="{{ asset ('frontend/img/book-table-img3.jpg') }} "
                      data-fancybox="table-slider"
                      class="book-table-img back-img swiper-slide"
                      style="
                        background-image: url('{{ asset ('frontend/img/book-table-img3.jpg') }} ');
                      "
                    ></a>
                    <a
                      href="{{ asset ('frontend/img/book-table-img4.jpg') }} "
                      data-fancybox="table-slider"
                      class="book-table-img back-img swiper-slide"
                      style="
                        background-image: url('{{ asset ('frontend/img/book-table-img4.jpg') }} ');
                      "
                    ></a>
                    <a
                      href="{{ asset ('frontend/img/book-table-img.jpg') }} "                        
                      data-fancybox="table-slider"
                      class="book-table-img back-img swiper-slide"
                      style="
                        background-image: url('{{ asset ('frontend/img/book-table-img.jpg') }} ');
                      "
                    ></a>
                    <a
                      href="{{ asset ('frontend/img/book-table-img2.jpg') }} "
                      data-fancybox="table-slider"
                      class="book-table-img back-img swiper-slide"
                      style="
                        background-image: url('{{ asset ('frontend/img/book-table-img2.jpg') }} ');
                      "
                    ></a>
                    <a
                      href="{{ asset ('frontend/img/book-table-img3.jpg') }} "
                      data-fancybox="table-slider"
                      class="book-table-img back-img swiper-slide"
                      style="
                        background-image: url('{{ asset ('frontend/img/book-table-img3.jpg') }} ');
                      "
                    ></a>
                    <a
                      href="{{ asset ('frontend/img/book-table-img4.jpg') }} "
                      data-fancybox="table-slider"
                      class="book-table-img back-img swiper-slide"
                      style="
                        background-image: url('{{ asset ('frontend/img/book-table-img4.jpg') }} ');
                      "
                    ></a>
                  </div>
                  <div class="swiper-button-wp">
                    <div class="swiper-button-prev swiper-button">
                      <i class="fas fa-chevron-left"></i>
                    </div>
                    <div class="swiper-button-next swiper-button">
                      <i class="fas fa-chevron-right"></i>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="our-team section">
        <div
          class="food-shape rellax"
          data-rellax-speed="0.5"
          data-rellax-percentage="-1"
        >
          <img
            src="{{ asset ('frontend/img/food-shape.png') }} "

            alt="Food Shape"
          />
        </div>
        <div class="sec-wp">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="sec-title text-center mb-5">
                  <p class="sec-sub-title mb-3">nuestro equipo</p>
                  <h2 class="h2-title">Conozca a nuestros chefs</h2>
                  <div class="sec-title-shape mb-4">
                    <img
                      src="{{ asset ('frontend/img/title-shape.svg') }} "
                      alt="Title Shape"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="row team-slider">
              <div class="swiper-wrapper">
                <div class="col-lg-4 swiper-slide">
                  <div class="team-box text-center">
                    <div
                      class="team-img back-img"
                      style="
                        background-image: url('{{ asset ('frontend/img/chef-1.jpg') }}');
                      "
                    ></div>
                    <h3 class="h3-title">Donald C. Foster</h3>
                    <div class="social-icon">
                      <ul>
                        <li>
                          <a
                            title="Follow On Facebook"
                            href="javascript:void(0)"
                          >
                            <i class="fab fa-facebook-f"></i>
                          </a>
                        </li>
                        <li>
                          <a
                            title="Follow On Twitter"
                            href="javascript:void(0)"
                          >
                            <i class="fab fa-twitter"></i>
                          </a>
                        </li>
                        <li>
                          <a
                            title="Follow On Instagram"
                            href="javascript:void(0)"
                          >
                            <i class="fab fa-instagram"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 swiper-slide">
                  <div class="team-box text-center">
                    <div
                      class="team-img back-img"
                      style="
                        background-image: url('{{ asset ('frontend/img/chef-2.jpg') }}');
                      "
                    ></div>
                    <h3 class="h3-title">Keith K. Dennison</h3>
                    <div class="social-icon">
                      <ul>
                        <li>
                          <a
                            title="Follow On Facebook"
                            href="javascript:void(0)"
                          >
                            <i class="fab fa-facebook-f"></i>
                          </a>
                        </li>
                        <li>
                          <a
                            title="Follow On Twitter"
                            href="javascript:void(0)"
                          >
                            <i class="fab fa-twitter"></i>
                          </a>
                        </li>
                        <li>
                          <a
                            title="Follow On Instagram"
                            href="javascript:void(0)"
                          >
                            <i class="fab fa-instagram"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 swiper-slide">
                  <div class="team-box text-center">
                    <div
                      class="team-img back-img"
                      style="
                        background-image: url('{{ asset ('frontend/img/chef-3.jpg') }}');
                      "
                    ></div>
                    <h3 class="h3-title">Larry A. Theroux</h3>
                    <div class="social-icon">
                      <ul>
                        <li>
                          <a
                            title="Follow On Facebook"
                            href="javascript:void(0)"
                          >
                            <i class="fab fa-facebook-f"></i>
                          </a>
                        </li>
                        <li>
                          <a
                            title="Follow On Twitter"
                            href="javascript:void(0)"
                          >
                            <i class="fab fa-twitter"></i>
                          </a>
                        </li>
                        <li>
                          <a
                            title="Follow On Instagram"
                            href="javascript:void(0)"
                          >
                            <i class="fab fa-instagram"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 swiper-slide">
                  <div class="team-box text-center">
                    <div
                      class="team-img back-img"
                      style="
                        background-image: url('{{ asset ('frontend/img/chef-4.jpg') }}');
                      "
                    ></div>
                    <h3 class="h3-title">William S. Delacruz</h3>
                    <div class="social-icon">
                      <ul>
                        <li>
                          <a
                            title="Follow On Facebook"
                            href="javascript:void(0)"
                          >
                            <i class="fab fa-facebook-f"></i>
                          </a>
                        </li>
                        <li>
                          <a
                            title="Follow On Twitter"
                            href="javascript:void(0)"
                          >
                            <i class="fab fa-twitter"></i>
                          </a>
                        </li>
                        <li>
                          <a
                            title="Follow On Instagram"
                            href="javascript:void(0)"
                          >
                            <i class="fab fa-instagram"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 swiper-slide">
                  <div class="team-box text-center">
                    <div
                      class="team-img back-img"
                      style="
                        background-image: url('{{ asset ('frontend/img/chef-5.jpg') }}');
                      "
                    ></div>
                    <h3 class="h3-title">John W. Moore</h3>
                    <div class="social-icon">
                      <ul>
                        <li>
                          <a
                            title="Follow On Facebook"
                            href="javascript:void(0)"
                          >
                            <i class="fab fa-facebook-f"></i>
                          </a>
                        </li>
                        <li>
                          <a
                            title="Follow On Twitter"
                            href="javascript:void(0)"
                          >
                            <i class="fab fa-twitter"></i>
                          </a>
                        </li>
                        <li>
                          <a
                            title="Follow On Instagram"
                            href="javascript:void(0)"
                          >
                            <i class="fab fa-instagram"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-button-wp">
                <div class="swiper-button-prev swiper-button">
                  <i class="fas fa-chevron-left"></i>
                </div>
                <div class="swiper-button-next swiper-button">
                  <i class="fas fa-chevron-right"></i>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </section>

      <section
        class="testimonials section back-img"
        style="
          background-image: url('{{ asset ('frontend/img/testimonials-bg.jpg') }}');
        "
      >
        <div class="sec-wp">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="sec-title text-center mb-5">
                  <p class="sec-sub-title mb-3">lo que dicen</p>
                  <h2 class="h2-title">
                    lo que nuestros clientes <span>dicen de nosotros</span>
                  </h2>
                  <div class="sec-title-shape mb-4">
                    <img
                      src="{{ asset ('frontend/img/title-shape.svg') }} "
                      alt="Title Shape"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-5">
                <div class="testimonials-img">
                  <img
                    src="{{ asset ('frontend/img/testimonial-img.png') }} "
                    alt="Testimonial Img"
                  />
                </div>
              </div>
              <div class="col-lg-7">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="testimonials-box">
                      <div class="testimonial-box-top">
                        <div
                          class="testimonials-box-img back-img"
                          style="
                            background-image: url('{{ asset ('frontend/img/testimonial-1.jpg') }}');
                          "
                        ></div>
                        <div class="star-rating-wp">
                          <div class="star-rating">
                            <span
                              class="star-rating__fill"
                              style="width: 85%"
                            ></span>
                          </div>
                        </div>
                      </div>
                      <div class="testimonials-box-text">
                        <h3 class="h3-title">Ashley T. Childers</h3>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Quam saepe asperiores odit perspiciatis.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="testimonials-box">
                      <div class="testimonial-box-top">
                        <div
                          class="testimonials-box-img back-img"
                          style="
                            background-image: url('{{ asset ('frontend/img/testimonial-2.jpg') }}');
                          "
                        ></div>
                        <div class="star-rating-wp">
                          <div class="star-rating">
                            <span
                              class="star-rating__fill"
                              style="width: 80%"
                            ></span>
                          </div>
                        </div>
                      </div>
                      <div class="testimonials-box-text">
                        <h3 class="h3-title">Robert E. Cain</h3>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Quam saepe asperiores odit perspiciatis.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="testimonials-box">
                      <div class="testimonial-box-top">
                        <div
                          class="testimonials-box-img back-img"
                          style="
                            background-image: url('{{ asset ('frontend/img/testimonial-3.jpg') }}');
                          "
                        ></div>
                        <div class="star-rating-wp">
                          <div class="star-rating">
                            <span
                              class="star-rating__fill"
                              style="width: 89%"
                            ></span>
                          </div>
                        </div>
                      </div>
                      <div class="testimonials-box-text">
                        <h3 class="h3-title">Brad J. Barnes</h3>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Quam saepe asperiores odit perspiciatis.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="testimonials-box">
                      <div class="testimonial-box-top">
                        <div
                          class="testimonials-box-img back-img"
                          style="
                            background-image: url('{{ asset ('frontend/img/testimonial-4.jpg') }}');
                          "
                        ></div>
                        <div class="star-rating-wp">
                          <div class="star-rating">
                            <span
                              class="star-rating__fill"
                              style="width: 100%"
                            ></span>
                          </div>
                        </div>
                      </div>
                      <div class="testimonials-box-text">
                        <h3 class="h3-title">Frances G. Becerra</h3>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Quam saepe asperiores odit perspiciatis.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section
        class="faq-sec section repeat-img"
        style="
          background-image: url('{{ asset ('frontend/img/faq-bg.png') }}');
        "
      >
        <div
          class="faq-shape rellax"
          data-rellax-speed="1"
          data-rellax-percentage="0.2"
        >
          <img
            width="345"
            height="348"
            src="{{ asset ('frontend/img/tomato.png') }} "
            alt="Tomato"
          />
        </div>
        <div class="sec-wp">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="sec-title text-center mb-5">
                  <p class="sec-sub-title mb-3">faqs</p>
                  <h2 class="h2-title">
                    con frecuencia <span>pregunta formulada</span>
                  </h2>
                  <div class="sec-title-shape mb-4">
                    <img
                      src="{{ asset ('frontend/img/title-shape.svg') }} "
                      alt="Title Shape"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="faq-row">
              <div class="faq-box">
                <h4 class="h4-title">
                  ¿cuál es el coste de la comida y la entrega?
                </h4>
                <p>
                  it sit amet consectetur adipisicing elit. Accusantium et,
                  tenetur quidem, velit consectetur animi quaerat fugit error
                  dolore aut quam, odit doloremque ipsa sunt.
                </p>
              </div>
              <div class="faq-box">
                <h4 class="h4-title">¿se utiliza sal en los alimentos?</h4>
                <p>
                  cupiditate minus. In culpa temporibus autem! Hic delectus
                  dicta nesciunt temporibus aliquam voluptas, suscipit dolorum
                  ipsum accusantium doloribus quidem provident ut!.
                </p>
              </div>
              <div class="faq-box">
                <h4 class="h4-title">
                  ¿puedo recibir otra comida en su lugar?
                </h4>
                <p>
                  Accusantium et, tenetur quidem, velit consectetur animi
                  quaerat fugit error dolore aut quam.
                </p>
              </div>
              <div class="faq-box">
                <h4 class="h4-title">
                  ¿cuánto tiempo tardará en llegar la comida?
                </h4>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Accusantium et, tenetur quidem, odit doloremque ipsa sunt
                  consequuntur alias unde sapiente suscipit. ipsa sunt
                  consequuntur alias unde sapiente suscipit
                </p>
              </div>
              <div class="faq-box">
                <h4 class="h4-title">
                  what is cost of the food and delivery?
                </h4>
                <p>
                  Accusantium et, tenetur quidem, velit consectetur animi
                  quaerat fugit error dolore aut quam, odit doloremque ipsa
                  sunt consequuntur alias unde sapiente suscipit.
                </p>
              </div>
              <div class="faq-box">
                <h4 class="h4-title">¿puedo beber también zumo?</h4>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Accusantium et, tenetur quidem, odit doloremque ipsa sunt
                  consequuntur alias unde sapiente suscipit.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div
        class="bg-pattern bg-light repeat-img"
        style="
          background-image: url('{{ asset ('frontend/img/blog-pattern-bg.png') }}');
        "
      >
        <section class="blog-sec section" id="blog">
          <div
            class="blog-shape rellax"
            data-rellax-speed="1"
            data-rellax-percentage="-0.5"
          >
            <img
              width="340"
              height="384"
              src="{{ asset ('frontend/img/blog-shape-1.png') }} "
              alt="Blog Shape"
            />
          </div>
          <div class="sec-wp">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sec-title text-center mb-5">
                    <p class="sec-sub-title mb-3">nuestro blog</p>
                    <h2 class="h2-title">Últimas publicaciones</h2>
                    <div class="sec-title-shape mb-4">
                      <img
                        src="{{ asset ('frontend/img/title-shape.svg') }} "
                        alt="Title Shape"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="blog-box">
                    <div
                      class="blog-img back-img"
                      style="
                        background-image: url('{{ asset ('frontend/img/blog-1.jpg') }}');
                      "
                    ></div>
                    <div class="blog-text">
                      <p class="blog-date">Marzo.02.2021</p>
                      <a
                        class="h4-title"
                        title="Aenean magna, a lobortis mauris vehicula sed."
                        href="javascript:void(0)"
                      >
                        Aenean magna, a lobortis mauris vehicula sed.</a
                      >
                      <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. culpa atque nostrum cum praesentium nam,
                        eveniet, quas magni.
                      </p>
                      <a
                        title="Read more"
                        href="javascript:void(0)"
                        class="sec-btn"
                      >
                        Leer más 👉</a
                      >
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="blog-box">
                    <div
                      class="blog-img back-img"
                      style="
                        background-image: url('{{ asset ('frontend/img/blog-2.jpg') }}');
                      "
                    ></div>
                    <div class="blog-text">
                      <p class="blog-date">Agosto.08.2021</p>
                      <a
                        class="h4-title"
                        title="Vehicula magna, a lobortis mauris vehicula sed."
                        href="javascript:void(0)"
                      >
                        Vehicula magna, a lobortis mauris vehicula sed.</a
                      >
                      <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. culpa atque nostrum cum praesentium nam,
                        eveniet, quas magni.
                      </p>
                      <a
                        title="Read more"
                        href="javascript:void(0)"
                        class="sec-btn"
                      >
                        Leer más 👉</a
                      >
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="blog-box">
                    <div
                      class="blog-img back-img"
                      style="
                        background-image: url('{{ asset ('frontend/img/blog-3.jpg') }}');
                      "
                    ></div>
                    <div class="blog-text">
                      <p class="blog-date">Octubre.12.2021</p>
                      <a
                        class="h4-title"
                        title="culpa atque nostrum cum praesentium nam"
                        href="javascript:void(0)"
                        >culpa atque nostrum cum praesentium nam</a
                      >
                      <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. culpa atque nostrum cum praesentium nam,
                        eveniet, quas magni.
                      </p>
                      <a
                        title="Read more"
                        href="javascript:void(0)"
                        class="sec-btn"
                      >
                        Leer más 👉</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="newslatter-sec section pt-0">
          <div
            class="newslatter-sec-shape rellax"
            data-rellax-speed="1"
            data-rellax-percentage="0.5"
          >
            <img
              src="{{ asset ('frontend/img/garlic.png') }} "
              alt="garlic"
            />
          </div>
          <div class="sec-wp">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 m-auto">
                  <div
                    class="newslatter-box text-center back-img white-text"
                    style="
                      background-image: url('{{ asset ('frontend/img/newsletter-bg.jpg') }}');
                    "
                  >
                    <div class="bg-overlay dark-overlay"></div>
                    <div class="sec-wp">
                      <div class="newslatter-box-text">
                        <h2 class="h2-title">
                          Suscríbase a nuestro boletín de noticias
                        </h2>
                        <p>
                          In beatae, consequatur, nulla quas nemo, similique
                          nobis incidunt corporis modi commodi neque
                          temporibus illo excepturi.
                        </p>
                      </div>
                      <form class="newslatter-form">
                        <input
                          type="email"
                          class="form-input"
                          placeholder="Introduzca su correo electrónico aquí"
                          required
                        />
                        <button type="submit" class="sec-btn primary-btn">
                          enviar
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="newslatter-sec-shape2 rellax"
            data-rellax-speed="1.2"
            data-rellax-percentage="0.5"
          >
            <img
              src="{{ asset ('frontend/img/garlic-2.png') }} "
              alt="garlic"
            />
          </div>
        </section>
      </div>

      <footer class="site-footer" id="contact">
        <div class="top-footer section">
          <div
            class="footer-shape rellax"
            data-rellax-speed="1"
            data-rellax-percentage="0.5"
          >
            <img
              src="{{ asset ('frontend/img/leaf.png') }} "
              alt="Leaf"
            />
          </div>
          <div class="sec-wp">
            <div class="container">
              <div class="row">
                <div class="col-lg-4">
                  <div class="footer-info">
                    <div class="footer-logo">
                      <a href="{{ route('Index') }}">
                        <img
                          src="{{ asset ('frontend/img/logo.svg') }} "
                          alt="Logo"
                        />
                      </a>
                    </div>
                    <p>
                      dolor sit amet consectetur, adipisicing elit.
                      Dignissimos est sapiente fugit enim quisquam! Iste
                      laboriosam aperiam sunt in eligendi?
                    </p>
                    <div class="social-icon">
                      <ul>
                        <li>
                          <a
                            title="Follow On Facebook"
                            href="javascript:void(0)"
                          >
                            <i class="fab fa-facebook-f"></i>
                          </a>
                        </li>
                        <li>
                          <a
                            title="Follow On Twitter"
                            href="javascript:void(0)"
                          >
                            <i class="fab fa-twitter"></i>
                          </a>
                        </li>
                        <li>
                          <a
                            title="Follow On Instagram"
                            href="javascript:void(0)"
                          >
                            <i class="fab fa-instagram"></i>
                          </a>
                        </li>
                        <li>
                          <a
                            title="Follow On Youtube"
                            href="javascript:void(0)"
                          >
                            <i class="fab fa-youtube"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="footer-flex-box">
                    <div class="footer-table-info">
                      <h3 class="h3-title">horario de atención al público</h3>
                      <ul>
                        <li>🕑 De lunes a martes: de 9 a 22 horas</li>
                        <li>🕑 De viernes a domingo: de 11 a 22 horas</li>
                      </ul>
                    </div>
                    <div class="footer-menu foody-nav-menu">
                      <h3 class="h3-title">links</h3>
                      <ul class="column-2">
                        <li>
                          <a
                            title="Home"
                            href="#home"
                            class="footer-active-menu"
                            >Inicio</a
                          >
                        </li>
                        <li><a title="About" href="#about">Acerca de</a></li>
                        <li><a title="Menu" href="#menu">Menú</a></li>
                        <li>
                          <a title="Gallery" href="#gallery">Galería</a>
                        </li>
                        <li><a title="Blog" href="#blog">Blog</a></li>
                        <li>
                          <a title="Contact" href="#contact">Contacte con</a>
                        </li>
                      </ul>
                    </div>
                    <div class="footer-menu">
                      <h3 class="h3-title">empresa</h3>
                      <ul>
                        <li>
                          <a
                            title="Terms & Conditions"
                            href="javascript:void(0)"
                            >términos y condiciones</a
                          >
                        </li>
                        <li>
                          <a title="Privacy Policy" href="javascript:void(0)"
                            >política de privacidad</a
                          >
                        </li>
                        <li>
                          <a title="Cookie Policy" href="javascript:void(0)"
                            >Política de cookies</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bottom-footer">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center">
                <div class="copyright-text">
                  <p>
                    Copyright © 2021
                    <a
                      href="#"
                      title="GeekCodeLab"
                      target="_blank"
                      >GeekCodeLab</a
                    >. All Rights Reserved.
                  </p>
                </div>
              </div>
            </div>
            <button type="button" class="scrolltop">
              <i class="fas fa-chevron-up"></i>
            </button>
          </div>
        </div>
      </footer>
    </div>
  </div>
@endsection