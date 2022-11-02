<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Silicon | Blog Single Podcast</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Silicon - Multipurpose Technology Bootstrap Template">
    <meta name="keywords" content="bootstrap, business, creative agency, mobile app showcase, saas, fintech, finance, online courses, software, medical, conference landing, services, e-commerce, shopping cart, multipurpose, shop, ui kit, marketing, seo, landing, blog, portfolio, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon and Touch Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#6366f1">
    <link rel="shortcut icon" href="assets/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#080032">
    <meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor Styles -->
    <link rel="stylesheet" media="screen" href="assets/vendor/boxicons/css/boxicons.min.css"/>
    <link rel="stylesheet" media="screen" href="assets/vendor/swiper/swiper-bundle.min.css"/>

    <!-- Main Theme Styles + Bootstrap -->
    <link rel="stylesheet" media="screen" href="assets/css/theme.min.css">

    <!-- Page loading styles -->
    <style>
      .page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
      }
      .dark-mode .page-loading {
        background-color: #131022;
      }
      .page-loading.active {
        opacity: 1;
        visibility: visible;
      }
      .page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
      }
      .page-loading.active > .page-loading-inner {
        opacity: 1;
      }
      .page-loading-inner > span {
        display: block;
        font-size: 1rem;
        font-weight: normal;
        color: #9397ad;
      }
      .dark-mode .page-loading-inner > span {
        color: #fff;
        opacity: .6;
      }
      .page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        border: .15em solid #b4b7c9;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
      }
      .dark-mode .page-spinner {
        border-color: rgba(255,255,255,.4);
        border-right-color: transparent;
      }
      @-webkit-keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      @keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
    </style>

    <!-- Theme mode -->
    <script>
      let mode = window.localStorage.getItem('mode'),
          root = document.getElementsByTagName('html')[0];
      if (mode !== undefined && mode === 'dark') {
        root.classList.add('dark-mode');
      } else {
        root.classList.remove('dark-mode');
      }
    </script>

    <!-- Page loading scripts -->
    <script>
      (function () {
        window.onload = function () {
          const preloader = document.querySelector('.page-loading');
          preloader.classList.remove('active');
          setTimeout(function () {
            preloader.remove();
          }, 1000);
        };
      })();
    </script>
  </head>


  <!-- Body -->
  <body>

    <!-- Page loading spinner -->
    <div class="page-loading active">
      <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Loading...</span>
      </div>
    </div>


    <!-- Page wrapper for sticky footer -->
    <!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
    <main class="page-wrapper">


      <!-- Navbar -->
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page -->
      <header class="header navbar navbar-expand-lg navbar-light bg-light navbar-sticky">
        <div class="container px-3">
          <a href="index.html" class="navbar-brand pe-3">
            <img src="assets/img/logo.svg" width="47" alt="Silicon">
            Silicon
          </a>
          <div id="navbarNav" class="offcanvas offcanvas-end">
            <div class="offcanvas-header border-bottom">
              <h5 class="offcanvas-title">Menu</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Landings</a>
                  <div class="dropdown-menu p-0">
                    <div class="d-lg-flex">
                      <div class="mega-dropdown-column bg-position-center bg-repeat-0 bg-size-cover rounded-3 rounded-end-0" style="background-image: url(assets/img/landings.jpg); margin: -1px;"></div>
                      <div class="mega-dropdown-column pt-lg-3 pb-lg-4">
                        <ul class="list-unstyled mb-0">
                          <li><a href="index.html" class="dropdown-item">Template Intro Page</a></li>
                          <li><a href="landing-mobile-app-showcase.html" class="dropdown-item">Mobile App Showcase</a></li>
                          <li><a href="landing-saas-v1.html" class="dropdown-item">SaaS v.1</a></li>
                          <li><a href="landing-saas-v2.html" class="dropdown-item">SaaS v.2</a></li>
                          <li><a href="landing-financial.html" class="dropdown-item">Financial Consulting</a></li>
                          <li><a href="landing-online-courses.html" class="dropdown-item">Online Courses</a></li>
                          <li><a href="landing-medical.html" class="dropdown-item">Medical</a></li>
                          <li><a href="landing-software-company.html" class="dropdown-item">IT (Software) Company</a></li>
                        </ul>
                      </div>
                      <div class="mega-dropdown-column pt-lg-3 pb-lg-4">
                        <ul class="list-unstyled mb-0">
                          <li><a href="landing-conference.html" class="dropdown-item">Conference</a></li>
                          <li><a href="landing-digital-agency.html" class="dropdown-item">Digital Agency</a></li>
                          <li><a href="landing-blog.html" class="dropdown-item">Blog Homepage</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" aria-current="page">Pages</a>
                  <div class="dropdown-menu">
                    <div class="d-lg-flex pt-lg-3">
                      <div class="mega-dropdown-column">
                        <h6 class="px-3 mb-2">About</h6>
                        <ul class="list-unstyled mb-3">
                          <li><a href="about-v1.html" class="dropdown-item py-1">About v.1</a></li>
                          <li><a href="about-v2.html" class="dropdown-item py-1">About v.2</a></li>
                        </ul>
                        <h6 class="px-3 mb-2">Portfolio</h6>
                        <ul class="list-unstyled mb-3">
                          <li><a href="portfolio-grid.html" class="dropdown-item py-1">Grid View</a></li>
                          <li><a href="portfolio-list.html" class="dropdown-item py-1">List View</a></li>
                          <li><a href="portfolio-slider.html" class="dropdown-item py-1">Slider View</a></li>
                          <li><a href="portfolio-courses.html" class="dropdown-item py-1">Courses</a></li>
                          <li><a href="portfolio-single-project.html" class="dropdown-item py-1">Single Project</a></li>
                          <li><a href="portfolio-single-course.html" class="dropdown-item py-1">Single Course</a></li>
                        </ul>
                      </div>
                      <div class="mega-dropdown-column">
                        <h6 class="px-3 mb-2">Blog</h6>
                        <ul class="list-unstyled mb-3">
                          <li><a href="blog-list-with-sidebar.html" class="dropdown-item py-1">List View with Sidebar</a></li>
                          <li><a href="blog-grid-with-sidebar.html" class="dropdown-item py-1">Grid View with Sidebar</a></li>
                          <li><a href="blog-list-no-sidebar.html" class="dropdown-item py-1">List View no Sidebar</a></li>
                          <li><a href="blog-grid-no-sidebar.html" class="dropdown-item py-1">Grid View no Sidebar</a></li>
                          <li><a href="blog-simple-feed.html" class="dropdown-item py-1">Simple Feed</a></li>
                          <li><a href="blog-single.html" class="dropdown-item py-1">Single Post</a></li>
                          <li><a href="blog-podcast.html" class="dropdown-item py-1">Podcast</a></li>
                        </ul>
                        <h6 class="px-3 mb-2">Services</h6>
                        <ul class="list-unstyled mb-3">
                          <li><a href="services.html" class="dropdown-item py-1">Services Page</a></li>
                          <li><a href="services-single.html" class="dropdown-item py-1">Service Details</a></li>
                        </ul>
                      </div>
                      <div class="mega-dropdown-column">
                        <h6 class="px-3 mb-2">Contacts</h6>
                        <ul class="list-unstyled mb-3">
                          <li><a href="contacts-v1.html" class="dropdown-item py-1">Contacts v.1</a></li>
                          <li><a href="contacts-v2.html" class="dropdown-item py-1">Contacts v.2</a></li>
                        </ul>
                        <h6 class="px-3 mb-2">Specialty</h6>
                        <ul class="list-unstyled">
                          <li><a href="404-v1.html" class="dropdown-item py-1">404 Error v.1</a></li>
                          <li><a href="404-v2.html" class="dropdown-item py-1">404 Error v.2</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-current="page">Account</a>
                  <ul class="dropdown-menu">
                    <li><a href="account-details.html" class="dropdown-item">Account Details</a></li>
                    <li><a href="account-security.html" class="dropdown-item">Security</a></li>
                    <li><a href="account-notifications.html" class="dropdown-item">Notifications</a></li>
                    <li><a href="account-messages.html" class="dropdown-item">Messages</a></li>
                    <li><a href="account-saved-items.html" class="dropdown-item">Saved Items</a></li>
                    <li><a href="account-collections.html" class="dropdown-item">My Collections</a></li>
                    <li><a href="account-payment.html" class="dropdown-item">Payment Details</a></li>
                    <li><a href="account-signin.html" class="dropdown-item">Sign In</a></li>
                    <li><a href="account-signup.html" class="dropdown-item">Sign Up</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="components/typography.html" class="nav-link">UI Kit</a>
                </li>
                <li class="nav-item">
                  <a href="docs/getting-started.html" class="nav-link">Docs</a>
                </li>
              </ul>
            </div>
            <div class="offcanvas-footer border-top">
              <a href="#" class="btn btn-primary w-100">
                <i class="bx bx-cart fs-4 lh-1 me-1"></i>
                &nbsp;Buy now
              </a>
            </div>      
          </div>
          <div class="form-check form-switch mode-switch pe-lg-1 ms-auto me-4" data-bs-toggle="mode">
            <input type="checkbox" class="form-check-input" id="theme-mode">
            <label class="form-check-label d-none d-sm-block" for="theme-mode">Light</label>
            <label class="form-check-label d-none d-sm-block" for="theme-mode">Dark</label>
          </div>
          <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a href="#" class="btn btn-primary btn-sm fs-sm rounded d-none d-lg-inline-flex">
            <i class="bx bx-cart fs-5 lh-1 me-1"></i>
            &nbsp;Buy now
          </a>
        </div>
      </header>


      <!-- Breadcrumb -->
      <nav class="container pt-4 mt-lg-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item">
            <a href="index.html"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
          </li>
          <li class="breadcrumb-item">
            <a href="blog-grid-with-sidebar.html">Blog</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Podcast</li>
        </ol>
      </nav>


      <!-- Post title + Meta  -->
      <section class="container mt-4 mb-5 pt-2 pb-lg-5">
        <div class="row gy-4">
          <div class="col-lg-7 col-md-6">
            <img src="assets/img/blog/podcasts/06.jpg" alt="Cover" class="rounded-3">
          </div>
          <div class="col-lg-5 col-md-6">
            <div class="ms-xl-5 ms-lg-4 ps-xxl-34">
              <h3 class="h6 mb-2">
                <svg class="me-2 mt-n1" xmlns="http://www.w3.org/2000/svg" width="24" height="25" fill="none"><path d="M20 12.5003v-1.707c0-4.44199-3.479-8.16099-7.755-8.28999-2.204-.051-4.251.736-5.816 2.256S4 8.31831 4 10.5003v2c-1.103 0-2 .897-2 2v4c0 1.103.897 2 2 2h2v-10c0-1.63699.646-3.16599 1.821-4.30599s2.735-1.739 4.363-1.691c3.208.096 5.816 2.918 5.816 6.28999v9.707h2c1.103 0 2-.897 2-2v-4c0-1.103-.897-2-2-2z" fill="url(#A)"/><path d="M7 12.5003h2v8H7v-8zm8 0h2v8h-2v-8z" fill="url(#A)"/><defs><linearGradient id="A" x1="2" y1="11.5437" x2="22" y2="11.5437" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#6366f1"/><stop offset=".5" stop-color="#8b5cf6"/><stop offset="1" stop-color="#d946ef"/></linearGradient></defs></svg>
                Podcast
              </h3>
              <h1 class="display-5 pb-md-3">How to Choose a Fantastic SEO Agency</h1>
              <div class="d-flex align-items-center flex-wrap text-muted mb-lg-5 mb-md-4 mb-3">
                <div class="fs-xs border-end pe-3 me-3 mb-2">
                  <span class="badge bg-faded-primary text-primary fs-base">Startups</span>
                </div>
                <div class="fs-sm border-end pe-3 me-3 mb-2">10 hours ago</div>
                <div class="d-flex mb-2">
                  <div class="d-flex align-items-center me-3">
                    <i class="bx bx-like fs-base me-1"></i>
                    <span class="fs-sm">18</span>
                  </div>
                  <div class="d-flex align-items-center me-3">
                    <i class="bx bx-comment fs-base me-1"></i>
                    <span class="fs-sm">4</span>
                  </div>
                  <div class="d-flex align-items-center">
                    <i class="bx bx-share-alt fs-base me-1"></i>
                    <span class="fs-sm">2</span>
                  </div>
                </div>
              </div>
              <p class="mb-0 fs-lg">Massa massa sapien tristique cras enim. Diam at tempus tempus iaculis mattis et. Platea facilisis cursus congue diam in amet. Velit urna cras leo viverra mauris aenean arcu, cursus. Commodo rhoncus sit vulputate maecenas augue amet arcu libero. Lobortis enim, ut dui rutrum tempor at rutrum aenean pharetra. Quis vulputate egestas sed arcu.</p>
            </div>
          </div>
        </div>
      </section>


      <!-- Post content -->
      <section class="container mb-5 pb-lg-5">
        <div class="row gy-md-5 gy-4">

          <!-- Author -->
          <div class="col-lg-3 col-md-4 order-md-2 position-relative">
            <div class="sticky-top ms-xxl-5 ps-lg-4"  style="top: 105px !important;">
              <div class="d-flex align-items-center position-relative mb-lg-5 mb-4">
                <img src="assets/img/avatar/06.jpg" class="rounded-circle me-3" width="60" alt="Avatar">
                <div>
                  <h4 class="h6 mb-1">Hosted by</h4>
                  <a href="#" class="fw-semibold stretched-link">Jenny Wilson</a>
                </div>
              </div>
              <button class="btn btn-lg btn-outline-secondary mb-3">
                <i class="bx bx-like me-2 lead"></i>
                Like it
                <span class="badge bg-primary shadow-primary ms-3">8</span>
              </button>
            </div>
          </div>

          <!-- Player + Timeline -->
          <div class="col-lg-9 col-md-8 order-md-1">
            <div class="card p-lg-4 p-md-2 mb-4 mb-lg-5">

              <!-- Audio player -->
              <div class="audio-player card-body p-2 p-sm-4">
                <audio  src="assets/audio/sample.wav" preload="auto"></audio>
                <button type="button" class="ap-play-button btn btn-icon btn-primary shadow-primary"></button>
                <span class="ap-current-time flex-shr fw-medium mx-3 mx-lg-4">0:00</span>
                <input type="range" class="ap-seek-slider" max="100" value="0">
                <span class="ap-duration flex-shr fw-medium mx-3 mx-lg-4">0:00</span>
                <div class="dropup">
                  <button type="button" class="ap-volume-button btn btn-icon btn-secondary" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-volume-full"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-dark my-1">
                    <input type="range" class="ap-volume-slider" max="100" value="100">
                  </div>
                </div>
                <a href="assets/audio/sample.wav" download="audio-sample" class="btn btn-icon btn-secondary ms-2">
                  <i class="bx bx-download"></i>
                </a>
              </div>
            </div>
            <h3 class="h4 mb-4 pt-2 pt-md-0">Timeline</h3>
            <ul class="list-unstyled mb-0">
              <li class="d-flex mb-2">
                <span class="flex-shrink-0 fw-medium text-nowrap me-2" style="width: 80px;">00:05:12</span>
                Diam erat molestie duis auctor sit quis.
              </li>
              <li class="d-flex mb-2">
                <span class="flex-shrink-0 fw-medium text-nowrap me-2 text-primary" style="width: 80px;">00:28:19</span>
                Non mi eget molestie pretium commodo urna duis facilisis turpis.
              </li>
              <li class="d-flex mb-2">
                <span class="flex-shrink-0 fw-medium text-nowrap me-2" style="width: 80px;">00:45:37</span>
                Sit placerat adipiscing interdum libero neque, aliquam nec imperdiet ullamcorper.
              </li>
              <li class="d-flex mb-2">
                <span class="flex-shrink-0 fw-medium text-nowrap me-2" style="width: 80px;">00:56:04</span>
                Pulvinar eu porttitor nulla morbi varius tristique leo.
              </li>
              <li class="d-flex mb-2">
                <span class="flex-shrink-0 fw-medium text-nowrap me-2" style="width: 80px;">01:32:17</span>
                Cras et gravida iaculis vel at quis euismod.
              </li>
              <li class="d-flex mb-2">
                <span class="flex-shrink-0 fw-medium text-nowrap me-2" style="width: 80px;">01:50:43</span>
                Volutpat malesuada nulla lectus justo tempus est sollicitudin.
              </li>
            </ul>
          </div>
        </div>
      </section>


      <!-- Post comments -->
      <section class="container mb-4 pb-lg-3">
        <h2 class="h1">4 comments</h2>
        <div class="row">

          <!-- Comments -->
          <div class="col-lg-9">

            <!-- Comment -->
            <div class="py-4">
              <div class="d-flex align-items-center justify-content-between pb-2 mb-1">
                <div class="d-flex align-items-center me-3">
                  <img src="assets/img/avatar/03.jpg" class="rounded-circle" width="48" alt="Avatar">
                  <div class="ps-3">
                    <h6 class="fw-semibold mb-0">Esther Howard</h6>
                    <span class="fs-sm text-muted">4 mins ago</span>
                  </div>
                </div>
                <a href="#" class="nav-link fs-sm px-0">
                  <i class="bx bx-share fs-lg me-2"></i>
                  Reply
                </a>
              </div>
              <p class="mb-0">Nibh enim porta ut augue felis, donec sit luctus. Quis ullamcorper dolor sit mauris. Hendrerit eu libero, eu tristique sodales ultrices etiam adipiscing. Donec viverra sodales arcu gravida nibh at. Neque lobortis quis porta integer et placerat lectus scelerisque. Velit eget malesuada morbi faucibus at sed euismod. Tortor, eu ut id tincidunt leo placerat luctus.</p>
            </div>

            <hr class="my-2">

            <!-- Comment -->
            <div class="py-4">
              <div class="d-flex align-items-center justify-content-between pb-2 mb-1">
                <div class="d-flex align-items-center me-3">
                  <img src="assets/img/avatar/02.jpg" class="rounded-circle" width="48" alt="Avatar">
                  <div class="ps-3">
                    <h6 class="fw-semibold mb-0">Ralph Edwards</h6>
                    <span class="fs-sm text-muted">September 9 at 12:48</span>
                  </div>
                </div>
                <a href="#" class="nav-link fs-sm px-0">
                  <i class="bx bx-share fs-lg me-2"></i>
                  Reply
                </a>
              </div>
              <p class="mb-0 pb-2">Eget amet, ac scelerisque tellus sed. Sapien duis sit neque pulvinar. Est sit aenean nisl etiam donec mattis ut diam. Luctus massa eu nunc aliquam viverra tempus, eu amet, luctus. Ac faucibus vestibulum eu lacus. Ullamcorper sem ultrices tincidunt pharetra?</p>

              <!-- Comment reply -->
              <div class="position-relative ps-4 mt-4">
                <span class="position-absolute top-0 start-0 w-1 h-100 bg-primary"></span>
                <div class="d-flex align-items-center justify-content-between ps-3 pb-2 mb-1">
                  <div class="d-flex align-items-center me-3">
                    <img src="assets/img/avatar/05.jpg" class="rounded-circle" width="48" alt="Avatar">
                    <div class="ps-3">
                      <h6 class="fw-semibold mb-0">Albert Flores</h6>
                      <span class="fs-sm text-muted">16 hours ago</span>
                    </div>
                  </div>
                  <a href="#" class="nav-link fs-sm px-0">
                    <i class="bx bx-share fs-lg me-2"></i>
                    Reply
                  </a>
                </div>
                <p class="ps-3 mb-0"><a href="#" class="fw-semibold text-decoration-none">@Ralph Edwards</a> Vulputate malesuada amet, consequat ullamcorper. Orci, cras maecenas in sit purus pellentesque. Ridiculus blandit pellentesque eget arcu morbi nisl. Morbi volutpat adipiscing sapien sed ut tempor.</p>
              </div>
            </div>

            <hr class="my-2">

            <!-- Comment -->
            <div class="py-4">
              <div class="d-flex align-items-center justify-content-between pb-2 mb-1">
                <div class="d-flex align-items-center me-3">
                  <img src="assets/img/avatar/07.jpg" class="rounded-circle" width="48" alt="Avatar">
                  <div class="ps-3">
                    <h6 class="fw-semibold mb-0">Cameron Williamson</h6>
                    <span class="fs-sm text-muted">March 24 at 8:20</span>
                  </div>
                </div>
                <a href="#" class="nav-link fs-sm px-0">
                  <i class="bx bx-share fs-lg me-2"></i>
                  Reply
                </a>
              </div>
              <p class="mb-0">Mattis id ut sed arcu metus elit faucibus condimentum aliquam. Nam adipiscing diam et suspendisse. Sagittis massa maecenas laoreet nulla amet nunc sagittis, pulvinar neque. Duis imperdiet ipsum suspendisse massa lectus habitasse. Id ante volutpat hendrerit augue parturient eget. Ac vitae posuere leo morbi vitae at hac lectus. Nibh neque quam quis amet mattis sit. Faucibus risus at sit tempus ut.</p>
            </div>
          </div>
        </div>
      </section>


      <!-- Comment form + Subscription -->
      <section class="container mb-4 pb-2 mb-md-5 pb-lg-5">
        <div class="row gy-5">

          <!-- Comment form -->
          <div class="col-lg-9">
            <div class="card p-md-5 p-4 border-0 bg-secondary">
              <div class="card-body w-100 mx-auto px-0" style="max-width: 746px;">
                <h2 class="mb-4 pb-3">Leave a Comment</h2>
                <form class="row gy-4 needs-validation" novalidate>
                  <div class="col-sm-6 col-12">
                    <label for="c-name" class="form-label fs-base">Name</label>
                    <input id="c-name" type="text" class="form-control form-control-lg" required>
                    <span class="invalid-tooltip">Please, enter your name.</span>
                  </div>
                  <div class="col-sm-6 col-12">
                    <label for="c-email" class="form-label fs-base">Email</label>
                    <input id="c-email" type="email" class="form-control form-control-lg" required>
                    <span class="invalid-tooltip">Please, provide a valid email address.</span>
                  </div>
                  <div class="col-12">
                    <label for="c-comment" class="form-label fs-base">Comment</label>
                    <textarea id="c-comment" class="form-control form-control-lg" rows="3" placeholder="Type your comment here..." required></textarea>
                    <span class="invalid-tooltip">Please, enter your comment.</span>
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input id="c-save" type="checkbox" class="form-check-input">
                      <label for="c-save" class="form-check-label">Save my name and email in this browser for the next time I comment.</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-lg btn-primary w-sm-auto w-100 mt-2">Post comment</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- Subscription form + Sharing -->
          <div class="col-lg-3 position-relative">
            <div class="sticky-top ms-xl-5 ms-lg-4 ps-xxl-4" style="top: 70px !important;">
              <div class="row gy-lg-5 gy-4 justify-content-center text-lg-start text-center">

                <!-- Subscription form -->
                <div class="col-lg-12 col-sm-7 col-11">
                  <h6 class="fs-lg">Enjoy this post? Join our newsletter</h6>
                  <form class="needs-validation" novalidate>
                    <div class="input-group mb-3">
                      <i class="bx bx-envelope position-absolute start-0 top-50 translate-middle-y zindex-5 ms-3 text-muted d-lg-inline-block d-none"></i>
                      <input type="email" placeholder="Your Email" class="form-control ps-lg-5 rounded text-lg-start text-center" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Subscribe</button>
                  </form>
                </div>

                <!-- Sharing -->
                <div class="col-lg-12 col-sm-7 col-11">
                  <h6 class="fs-lg">Don’t forget to share it</h6>
                  <div class="mb-4 pb-lg-3">
                    <a href="#" class="btn btn-icon btn-secondary btn-linkedin me-2 mb-2">
                      <i class="bx bxl-linkedin"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-facebook me-2 mb-2">
                      <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-twitter me-2 mb-2">
                      <i class="bx bxl-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-instagram me-2 mb-2">
                      <i class="bx bxl-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Related podcasts (Slider below xl breakpoint) -->
      <section class="container mb-5 pt-md-4">
        <div class="d-flex flex-sm-row flex-column align-items-center justify-content-between mb-4 pb-1 pb-md-3">
          <h2 class="h1 mb-sm-0">Related Podcasts</h2>
          <a href="blog-grid-with-sidebar.html" class="btn btn-lg btn-outline-primary ms-4">
            All podcasts
            <i class="bx bx-right-arrow-alt ms-1 me-n1 lh-1 lead"></i>
          </a>
        </div>

        <!-- Carousel -->
        <div class="swiper" data-swiper-options='{
          "slidesPerView": 1,
          "spaceBetween": 24,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "500": {
              "slidesPerView": 2
            },
            "768": {
              "slidesPerView": 3
            },
            "1000": {
              "slidesPerView": 3
            },
            "1200": {
              "slidesPerView": 4
            }
          }
        }'>
          <div class="swiper-wrapper">

            <!-- Item -->
            <div class="swiper-slide h-auto pb-3">
              <article>
                <div class="d-block position-relative rounded-3 mb-3">
                  <a href="#" class="btn btn-icon btn-light bg-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Listen later">
                    <i class="bx bx-bookmark"></i>
                  </a>
                  <img src="assets/img/avatar/06.jpg" class="position-absolute top-0 start-0 rounded-circle zindex-2 mt-3 ms-3" width="48" alt="Avatar">
                  <span class="badge bg-dark position-absolute bottom-0 end-0 zindex-2 mb-3 me-3">0:25:43</span>
                  <a href="blog-podcast.html" class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3" aria-label="Listen podcast"></a>
                  <img src="assets/img/blog/podcasts/04.jpg" class="rounded-3" alt="Image">
                </div>
                <div class="d-flex align-items-center mb-2">
                  <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Digital</a>
                  <span class="fs-sm text-muted border-start ps-3 ms-3">2 hours ago</span>
                </div>
                <h3 class="h5">
                  <a href="blog-podcast.html">IOS and the Changing landscape of Data Privacy</a>
                </h3>
                <div class="d-flex align-items-center text-muted">
                  <div class="d-flex align-items-center me-3">
                    <i class="bx bx-like fs-lg me-1"></i>
                    <span class="fs-sm">4</span>
                  </div>
                  <div class="d-flex align-items-center me-3">
                    <i class="bx bx-comment fs-lg me-1"></i>
                    <span class="fs-sm">2</span>
                  </div>
                  <div class="d-flex align-items-center">
                    <i class="bx bx-share-alt fs-lg me-1"></i>
                    <span class="fs-sm">0</span>
                  </div>
                </div>
                <a href="blog-podcast.html" class="btn btn-link px-0 mt-3">
                  <i class="bx bx-play-circle fs-lg me-2"></i>
                  Listen now
                </a>
              </article>
            </div>

            <!-- Item -->
            <div class="swiper-slide h-auto pb-3">
              <article>
                <div class="d-block position-relative rounded-3 mb-3">
                  <a href="#" class="btn btn-icon btn-light bg-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Listen later">
                    <i class="bx bx-bookmark"></i>
                  </a>
                  <img src="assets/img/avatar/05.jpg" class="position-absolute top-0 start-0 rounded-circle zindex-2 mt-3 ms-3" width="48" alt="Avatar">
                  <span class="badge bg-dark position-absolute bottom-0 end-0 zindex-2 mb-3 me-3">1:12:05</span>
                  <a href="blog-podcast.html" class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3" aria-label="Listen podcast"></a>
                  <img src="assets/img/blog/podcasts/05.jpg" class="rounded-3" alt="Image">
                </div>
                <div class="d-flex align-items-center mb-2">
                  <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Processes &amp; Tools</a>
                  <span class="fs-sm text-muted border-start ps-3 ms-3">10 hours ago</span>
                </div>
                <h3 class="h5">
                  <a href="blog-podcast.html">Behavioral Science and Digital Marketing</a>
                </h3>
                <div class="d-flex align-items-center text-muted">
                  <div class="d-flex align-items-center me-3">
                    <i class="bx bx-like fs-lg me-1"></i>
                    <span class="fs-sm">9</span>
                  </div>
                  <div class="d-flex align-items-center me-3">
                    <i class="bx bx-comment fs-lg me-1"></i>
                    <span class="fs-sm">5</span>
                  </div>
                  <div class="d-flex align-items-center">
                    <i class="bx bx-share-alt fs-lg me-1"></i>
                    <span class="fs-sm">6</span>
                  </div>
                </div>
                <a href="blog-podcast.html" class="btn btn-link px-0 mt-3">
                  <i class="bx bx-play-circle fs-lg me-2"></i>
                  Listen now
                </a>
              </article>
            </div>

            <!-- Item -->
            <div class="swiper-slide h-auto pb-3">
              <article>
                <div class="d-block position-relative rounded-3 mb-3">
                  <a href="#" class="btn btn-icon btn-light bg-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Listen later">
                    <i class="bx bx-bookmark"></i>
                  </a>
                  <img src="assets/img/avatar/01.jpg" class="position-absolute top-0 start-0 rounded-circle zindex-2 mt-3 ms-3" width="48" alt="Avatar">
                  <span class="badge bg-dark position-absolute bottom-0 end-0 zindex-2 mb-3 me-3">0:32:15</span>
                  <a href="blog-podcast.html" class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3" aria-label="Listen podcast"></a>
                  <img src="assets/img/blog/podcasts/02.jpg" class="rounded-3" alt="Image">
                </div>
                <div class="d-flex align-items-center mb-2">
                  <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Technology</a>
                  <span class="fs-sm text-muted border-start ps-3 ms-3">10 hours ago</span>
                </div>
                <h3 class="h5">
                  <a href="blog-podcast.html">Why You Should Care About Your Competitors</a>
                </h3>
                <div class="d-flex align-items-center text-muted">
                  <div class="d-flex align-items-center me-3">
                    <i class="bx bx-like fs-lg me-1"></i>
                    <span class="fs-sm">45</span>
                  </div>
                  <div class="d-flex align-items-center me-3">
                    <i class="bx bx-comment fs-lg me-1"></i>
                    <span class="fs-sm">12</span>
                  </div>
                  <div class="d-flex align-items-center">
                    <i class="bx bx-share-alt fs-lg me-1"></i>
                    <span class="fs-sm">6</span>
                  </div>
                </div>
                <a href="blog-podcast.html" class="btn btn-link px-0 mt-3">
                  <i class="bx bx-play-circle fs-lg me-2"></i>
                  Listen now
                </a>
              </article>
            </div>

            <!-- Item -->
            <div class="swiper-slide h-auto pb-3">
              <article>
                <div class="d-block position-relative rounded-3 mb-3">
                  <a href="#" class="btn btn-icon btn-light bg-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Listen later">
                    <i class="bx bx-bookmark"></i>
                  </a>
                  <img src="assets/img/avatar/04.jpg" class="position-absolute top-0 start-0 rounded-circle zindex-2 mt-3 ms-3" width="48" alt="Avatar">
                  <span class="badge bg-dark position-absolute bottom-0 end-0 zindex-2 mb-3 me-3">0:48:02</span>
                  <a href="blog-podcast.html" class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3" aria-label="Listen podcast"></a>
                  <img src="assets/img/blog/podcasts/03.jpg" class="rounded-3" alt="Image">
                </div>
                <div class="d-flex align-items-center mb-2">
                  <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Marketing</a>
                  <span class="fs-sm text-muted border-start ps-3 ms-3">1 day ago</span>
                </div>
                <h3 class="h5">
                  <a href="blog-podcast.html">Tips for Marketing Managers: How to Maximise Leads</a>
                </h3>
                <div class="d-flex align-items-center text-muted">
                  <div class="d-flex align-items-center me-3">
                    <i class="bx bx-like fs-lg me-1"></i>
                    <span class="fs-sm">10</span>
                  </div>
                  <div class="d-flex align-items-center me-3">
                    <i class="bx bx-comment fs-lg me-1"></i>
                    <span class="fs-sm">4</span>
                  </div>
                  <div class="d-flex align-items-center">
                    <i class="bx bx-share-alt fs-lg me-1"></i>
                    <span class="fs-sm">6</span>
                  </div>
                </div>
                <a href="blog-podcast.html" class="btn btn-link px-0 mt-3">
                  <i class="bx bx-play-circle fs-lg me-2"></i>
                  Listen now
                </a>
              </article>
            </div>
          </div>

          <!-- Pagination (bullets) -->
          <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"></div>
        </div>
      </section>
    </main>


    <!-- Footer -->
    <footer class="footer dark-mode bg-dark border-top border-light pt-5 pb-4 pb-lg-5">
      <div class="container pt-lg-4">
        <div class="row pb-5">
          <div class="col-lg-4 col-md-6">
            <div class="navbar-brand text-dark p-0 me-0 mb-3 mb-lg-4">
              <img src="assets/img/logo.svg" width="47" alt="Silicon">
              Silicon
            </div>
            <p class="fs-sm text-light opacity-70 pb-lg-3 mb-4">Proin ipsum pharetra, senectus eget scelerisque varius pretium platea velit. Lacus, eget eu vitae nullam proin turpis etiam mi sit. Non feugiat feugiat egestas nulla nec. Arcu tempus, eget elementum dolor ullamcorper sodales ultrices eros.</p>
            <form class="needs-validation" novalidate>
              <label for="subscr-email" class="form-label">Subscribe to our newsletter</label>
              <div class="input-group">
                <input type="email" id="subscr-email" class="form-control rounded-start ps-5" placeholder="Your email" required>
                <i class="bx bx-envelope fs-lg text-muted position-absolute top-50 start-0 translate-middle-y ms-3 zindex-5"></i>
                <div class="invalid-tooltip position-absolute top-100 start-0">Please provide a valid email address.</div>
                <button type="submit" class="btn btn-primary">Subscribe</button>
              </div>
            </form>
          </div>
          <div class="col-xl-6 col-lg-7 col-md-5 offset-xl-2 offset-md-1 pt-4 pt-md-1 pt-lg-0">
            <div id="footer-links" class="row">
              <div class="col-lg-4">
                <h6 class="mb-2">
                  <a href="#useful-links" class="d-block text-dark dropdown-toggle d-lg-none py-2" data-bs-toggle="collapse">Useful Links</a>
                </h6>
                <div id="useful-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
                  <ul class="nav flex-column pb-lg-1 mb-lg-3">
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Services</a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Our Works</a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">About</a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Blog</a></li>
                  </ul>
                  <ul class="nav flex-column mb-2 mb-lg-0">
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Terms &amp; Conditions</a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Privacy Policy</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-4 col-lg-3">
                <h6 class="mb-2">
                  <a href="#social-links" class="d-block text-dark dropdown-toggle d-lg-none py-2" data-bs-toggle="collapse">Socials</a>
                </h6>
                <div id="social-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
                  <ul class="nav flex-column mb-2 mb-lg-0">
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Facebook</a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">LinkedIn</a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Twitter</a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Instagram</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-4 col-lg-5 pt-2 pt-lg-0">
                <h6 class="mb-2">Contact Us</h6>
                <a href="mailto:email@example.com" class="fw-medium">email@example.com</a>
              </div>
            </div>
          </div>
        </div>
        <p class="fs-xs text-center text-md-start pb-2 pb-lg-0 mb-0">
          <span class="text-light opacity-50">&copy; All rights reserved. Made by </span>
          <a class="nav-link d-inline-block p-0" href="https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a>
        </p>
      </div>
    </footer>


    <!-- Back to top button -->
    <a href="#top" class="btn-scroll-top" data-scroll>
      <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
      <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
    </a>


    <!-- Vendor Scripts -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main Theme Script -->
    <script src="assets/js/theme.min.js"></script>
  </body>
</html>