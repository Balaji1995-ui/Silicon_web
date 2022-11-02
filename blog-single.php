<?php require 'header.php'; require 'admin/api/lib.php';?> 

      <!-- Breadcrumb -->
      <nav class="container pt-4 mt-lg-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item">
            <a href="index.php"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
          </li>
          <li class="breadcrumb-item">
            <a href="blog.php">Blog</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Read Post</li>
        </ol> 
      </nav>

      <?php
      if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $result = fetchSingleBlog($id);
        if ($result !== false) {
          $result = mysqli_fetch_assoc($result);
        
     
      ?>
      <!-- Post title + Meta  -->
      <section class="container mt-4 pt-lg-2 pb-3">
        <h1 class="pb-3" style="max-width: 970px;"><?php echo $result['title'] ?></h1>
        <div class="d-flex flex-md-row flex-column align-items-md-center justify-content-md-between mb-3">
          <div class="d-flex align-items-center flex-wrap text-muted mb-md-0 mb-4">
            <div class="fs-xs border-end pe-3 me-3 mb-2">
              <span class="badge bg-faded-primary text-primary fs-base"><?php echo $result['category'] ?></span>
            </div>
            <div class="fs-sm border-end pe-3 me-3 mb-2"><?php echo $result['post_time'] ?></div>
            <div class="d-flex mb-2">
              <div class="d-flex align-items-center me-3">
                <i class="bx bx-like fs-base me-1"></i>
                <span class="fs-sm"><?php echo $result['likes'] ?></span>
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
          <div class="d-flex align-items-center position-relative ps-md-3 pe-lg-5 mb-2">
            <img src="assets/img/avatar/39.jpg" class="rounded-circle" width="60" alt="Avatar">
            <div class="ps-3">
              <h6 class="mb-1">Author</h6>
              <a href="#" class="fw-semibold stretched-link"><?php echo $result['author'] ?></a>
            </div>
          </div>
        </div>
      </section>
      <?php
        if (!empty($result['thum'])) {
      ?>
      <!-- Post image (parallax) -->
      <div class="jarallax mb-lg-5 mb-4" data-jarallax data-speed="0.4" style="height: 36.45vw; min-height: 300px;">
        <div class="jarallax-img" style="background-image: url(admin/img/blog/<?php echo $result['thum'] ?>);"></div>
      </div>

      <?php } ?>
      <!-- Post content + Sharing -->
      <section class="container mb-5 pt-4 pb-2 py-mg-4">
        <div class="row gy-4">

          <!-- Content -->
          <div class="col-lg-9">
            <h2><?php echo $result['sub_title'] ?></h2>
            <?php echo $result['blog_text'] ?>
          
          </div>
           <?php
         }else{
          echo '<h1 class="text-center">'.'No records found'.'</h1>';
         }
                }
            ?>
          <!-- Sharing -->
          <div class="col-lg-3 position-relative">
            <div class="sticky-top ms-xl-5 ms-lg-4 ps-xxl-4" style="top: 105px !important;">
              <span class="d-block mb-3">5 min read</span>
              <h6>Share this post:</h6>
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
              <button class="btn btn-lg btn-outline-secondary">
                <i class="bx bx-like me-2 lead"></i>
                Like it
                <span class="badge bg-primary shadow-primary mt-n1 ms-3">8</span>
              </button>
            </div>
          </div>
        </div>
      </section>


      <!-- Post comments -->
      <section class="container mb-4 pt-lg-4 pb-lg-3">
        <h2 class="h1 text-center text-sm-start">4 comments</h2>
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


      <!-- Related articles (Slider below lg breakpoint) -->
      <section class="container mb-5 pt-md-4">
        <div class="d-flex flex-sm-row flex-column align-items-center justify-content-between mb-4 pb-1 pb-md-3">
          <h2 class="h1 mb-sm-0">Related Articles</h2>
          <a href="blog-list-with-sidebar.php" class="btn btn-lg btn-outline-primary ms-4">
            All posts
            <i class="bx bx-right-arrow-alt ms-1 me-n1 lh-1 lead"></i>
          </a>
        </div>

        <div class="swiper mx-n2" data-swiper-options='{
          "slidesPerView": 1,
          "spaceBetween": 8,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "500": {
              "slidesPerView": 2
            },
            "1000": {
              "slidesPerView": 3
            }
          }
        }'>
          <div class="swiper-wrapper">

            <!-- Item -->
            <div class="swiper-slide h-auto pb-3">
              <article class="card border-0 shadow-sm h-100 mx-2">
                <div class="position-relative">
                  <a href="blog-single.php" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
                  <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Read later">
                    <i class="bx bx-bookmark"></i>
                  </a>
                  <img src="assets/img/blog/01.jpg" class="card-img-top" alt="Image">
                </div>
                <div class="card-body pb-4">
                  <div class="d-flex align-items-center justify-content-between mb-3">
                    <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Business</a>
                    <span class="fs-sm text-muted">May 19, 2021</span>
                  </div>
                  <h3 class="h5 mb-0">
                    <a href="blog-single.php">5 Bad Landing Page Examples &amp; How We Would Fix Them</a>
                  </h3>
                </div>
                <div class="card-footer py-4">
                  <a href="#" class="d-flex align-items-center fw-bold text-dark text-decoration-none">
                    <img src="assets/img/avatar/01.jpg" class="rounded-circle me-3" width="48" alt="Avatar">
                    Jerome Bell
                  </a>
                </div>
              </article>
            </div>

            <!-- Item -->
            <div class="swiper-slide h-auto pb-3">
              <article class="card border-0 shadow-sm h-100 mx-2">
                <div class="position-relative">
                  <a href="blog-single.php" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
                  <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Read later">
                    <i class="bx bx-bookmark"></i>
                  </a>
                  <img src="assets/img/blog/06.jpg" class="card-img-top" alt="Image">
                </div>
                <div class="card-body pb-4">
                  <div class="d-flex align-items-center justify-content-between mb-3">
                    <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Marketing</a>
                    <span class="fs-sm text-muted">Apr 2, 2021</span>
                  </div>
                  <h3 class="h5 mb-0">
                    <a href="blog-single.php">How Agile is Your Forecasting Process?</a>
                  </h3>
                </div>
                <div class="card-footer py-4">
                  <a href="#" class="d-flex align-items-center fw-bold text-dark text-decoration-none">
                    <img src="assets/img/avatar/05.jpg" class="rounded-circle me-3" width="48" alt="Avatar">
                    Albert Flores
                  </a>
                </div>
              </article>
            </div>

            <!-- Item -->
            <div class="swiper-slide h-auto pb-3">
              <article class="card border-0 shadow-sm h-100 mx-2">
                <div class="position-relative">
                  <a href="blog-single.php" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
                  <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Read later">
                    <i class="bx bx-bookmark"></i>
                  </a>
                  <img src="assets/img/blog/03.jpg" class="card-img-top" alt="Image">
                </div>
                <div class="card-body pb-4">
                  <div class="d-flex align-items-center justify-content-between mb-3">
                    <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Business</a>
                    <span class="fs-sm text-muted">Sep 16, 2021</span>
                  </div>
                  <h3 class="h5 mb-0">
                    <a href="blog-single.php">This Week in Search: New Limits and Exciting Features</a>
                  </h3>
                </div>
                <div class="card-footer py-4">
                  <a href="#" class="d-flex align-items-center fw-bold text-dark text-decoration-none">
                    <img src="assets/img/avatar/02.jpg" class="rounded-circle me-3" width="48" alt="Avatar">
                    Ralph Edwards
                  </a>
                </div>
              </article>
            </div>
          </div>

          <!-- Pagination (bullets) -->
          <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"></div>
        </div>
      </section>
    </main>


    <!-- Footer -->
<?php require 'footer.php'; ?>