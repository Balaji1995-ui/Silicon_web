<?php require 'header.php'; require 'admin/api/lib.php'; ?>


      <!-- Breadcrumb -->
      <nav class="container mt-lg-4" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item">
            <a href="index.php"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Our Blog</li>
        </ol>
      </nav>


      <!-- Page content -->
      <section class="container mt-4 mb-2 mb-md-4 mb-lg-5 pt-lg-2 pb-5">

        <!-- Page title + Layout switcher -->
        <div class="d-flex align-items-center justify-content-between mb-4 pb-1 pb-md-3">
          <h1 class="mb-0">Our Case Study </h1>
          <div class="d-flex align-items-center ms-sm-4 ms-3">
            <a href="blog-list-with-sidebar.php" class="nav-link me-2 p-0 active">
              <i class="bx bx-list-ul fs-4"></i>
            </a>
            <a href="blog-grid-with-sidebar.php" class="nav-link p-0">
              <i class="bx bx-grid-alt fs-4"></i>
            </a>
          </div>
        </div>


        <!-- Blog list + Sidebar -->
        <div class="row">
          <div class="col-xl-9 col-lg-8">

            <!-- Item -->
            <?php
              $result = fetchBlog();
              while ($blog = mysqli_fetch_assoc($result)) {
                
            ?>
            <article class="card border-0 bg-transparent me-xl-5 mb-4">
              <div class="row g-0">
                <?php
                  $col = 12;
                  if (!empty($blog['thum'])) {
                    $col = 7;
                ?>
                <div class="col-sm-5 position-relative bg-position-center bg-repeat-0 bg-size-cover rounded-3" style="background-image: url(assets/img/blog/<?php echo $blog['thum'] ?>); min-height: 15rem;">
                  <a href="blog-single.php" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
                  <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Read later">
                    <i class="bx bx-bookmark"></i>
                  </a>
                </div>
              <?php } ?>
                <div class="col-sm-<?php echo $col ?>">
                  <div class="card-body px-0 pt-sm-0 ps-sm-4 pb-0 pb-sm-4">
                    <a href="#" class="badge fs-sm text-white bg-info shadow-info text-decoration-none mb-3"><?php echo $blog['category'] ?></a>
                    <h3 class="h4">
                      <a href="blog-single.php?key=11&id=<?php echo $blog['id']; ?>"><?php echo $blog['title'] ?></a>
                    </h3>
                    <p class="mb-4"><?php echo $blog['sub_title'] ?></p>
                    <div class="d-flex align-items-center text-muted">
                      <div class="fs-sm border-end pe-3 me-3"><?php echo $blog['post_time'] ?></div>
                      <div class="d-flex align-items-center me-3">
                        <i class="bx bx-like fs-lg me-1"></i>
                        <span class="fs-sm"><?php echo $blog['likes'] ?></span>
                      </div>
                      <div class="d-flex align-items-center me-3">
                        <i class="bx bx-comment fs-lg me-1"></i>
                        <span class="fs-sm">0</span>
                      </div>
                      <div class="d-flex align-items-center">
                        <i class="bx bx-share-alt fs-lg me-1"></i>
                        <span class="fs-sm">2</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </article>

            <div class="pb-2 pb-lg-3"></div>
          <?php 
        }
          ?>
           
            <!-- Load more button -->
            <button class="btn btn-lg btn-outline-primary w-100 mt-4">
              <i class="bx bx-down-arrow-alt fs-xl me-2"></i>
              Show more
            </button>
          </div>


          <!-- Sidebar (Offcanvas below lg breakpoint) -->
          <aside class="col-xl-3 col-lg-4">
            <div class="offcanvas offcanvas-end offcanvas-expand-lg" id="blog-sidebar" tabindex="-1">

              <!-- Header -->
              <div class="offcanvas-header border-bottom">
                <h3 class="offcanvas-title fs-lg">Sidebar</h3>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
              </div>

              <!-- Body -->
              <div class="offcanvas-body">

                <!-- Search form -->
                <form class="input-group mb-4">
                  <input type="text" placeholder="Search the blog..." class="form-control rounded pe-5">
                  <i class='bx bx-search position-absolute top-50 end-0 translate-middle-y me-3 fs-lg zindex-5'></i>
                </form>

                <!-- Categories -->
                <div class="card card-body mb-4">
                  <h3 class="h5">Categories</h3>
                  <ul class="nav flex-column fs-sm">
                    <li class="nav-item mb-1">
                      <a href="#" class="nav-link py-1 px-0 active">All topics <span class="fw-normal opacity-60 ms-1">(48)</span></a>
                    </li>
                    <li class="nav-item mb-1">
                      <a href="#" class="nav-link py-1 px-0">Digital <span class="fw-normal opacity-60 ms-1">(12)</span></a>
                    </li>
                    <li class="nav-item mb-1">
                      <a href="#" class="nav-link py-1 px-0">Marketing <span class="fw-normal opacity-60 ms-1">(5)</span></a>
                    </li>
                    <li class="nav-item mb-1">
                      <a href="#" class="nav-link py-1 px-0">Startups <span class="fw-normal opacity-60 ms-1">(10)</span></a>
                    </li>
                    <li class="nav-item mb-1">
                      <a href="#" class="nav-link py-1 px-0">Technology <span class="fw-normal opacity-60 ms-1">(9)</span></a>
                    </li>
                    <li class="nav-item mb-1">
                      <a href="#" class="nav-link py-1 px-0">Business <span class="fw-normal opacity-60 ms-1">(4)</span></a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link py-1 px-0">Processes & Tools <span class="fw-normal opacity-60 ms-1">(3)</span></a>
                    </li>
                  </ul>
                </div>

                <!-- Popular posts -->
                <div class="card card-body border-0 position-relative mb-4">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-primary opacity-10 rounded-3"></span>
                  <div class="position-relative zindex-2">
                    <h3 class="h5">Popular posts</h3>
                    <ul class="list-unstyled mb-0">
                      <li class="border-bottom pb-3 mb-3">
                        <h4 class="h6 mb-2">
                          <a href="#">5 Bad Landing Page Examples &amp; How We Would Fix Them</a>
                        </h4>
                        <div class="d-flex align-items-center text-muted pt-1">
                          <div class="fs-xs border-end pe-3 me-3">12 hours ago</div>
                          <div class="d-flex align-items-center me-3">
                            <i class="bx bx-like fs-base me-1"></i>
                            <span class="fs-xs">8</span>
                          </div>
                          <div class="d-flex align-items-center me-3">
                            <i class="bx bx-comment fs-base me-1"></i>
                            <span class="fs-xs">4</span>
                          </div>
                          <div class="d-flex align-items-center">
                            <i class="bx bx-share-alt fs-base me-1"></i>
                            <span class="fs-xs">2</span>
                          </div>
                        </div>
                      </li>
                      <li class="border-bottom pb-3 mb-3">
                        <h4 class="h6 mb-2">
                          <a href="#">How Agile is Your Forecasting Process?</a>
                        </h4>
                        <div class="d-flex align-items-center text-muted pt-1">
                          <div class="fs-xs border-end pe-3 me-3">Oct 9, 2021</div>
                          <div class="d-flex align-items-center me-3">
                            <i class="bx bx-like fs-base me-1"></i>
                            <span class="fs-xs">4</span>
                          </div>
                          <div class="d-flex align-items-center me-3">
                            <i class="bx bx-comment fs-base me-1"></i>
                            <span class="fs-xs">1</span>
                          </div>
                          <div class="d-flex align-items-center">
                            <i class="bx bx-share-alt fs-base me-1"></i>
                            <span class="fs-xs">0</span>
                          </div>
                        </div>
                      </li>
                      <li>
                        <h4 class="h6 mb-2">
                          <a href="#">Inclusive Marketing: Why and How Does it Work?</a>
                        </h4>
                        <div class="d-flex align-items-center text-muted pt-1">
                          <div class="fs-xs border-end pe-3 me-3">Sep 13, 2021</div>
                          <div class="d-flex align-items-center me-3">
                            <i class="bx bx-like fs-base me-1"></i>
                            <span class="fs-xs">5</span>
                          </div>
                          <div class="d-flex align-items-center me-3">
                            <i class="bx bx-comment fs-base me-1"></i>
                            <span class="fs-xs">2</span>
                          </div>
                          <div class="d-flex align-items-center">
                            <i class="bx bx-share-alt fs-base me-1"></i>
                            <span class="fs-xs">4</span>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>

                <!-- Tags -->
                <div class="card card-body mb-4">
                  <h3 class="h5">Tags</h3>
                  <div class="d-flex flex-wrap">
                    <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#lifestyle</a>
                    <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#ux</a>
                    <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#tech</a>
                    <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#user</a>
                    <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#software</a>
                    <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#it</a>
                    <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#network</a>
                    <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#engineering</a>
                  </div>
                </div>

                <!-- Follow Us -->
                <div class="card mb-4">
                  <div class="card-body">
                    <h5 class="mb-4">Follow Us</h5>
                    <a href="#" class="btn btn-icon btn-sm btn-secondary btn-linkedin me-2 mb-2">
                      <i class="bx bxl-linkedin"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-sm btn-secondary btn-facebook me-2 mb-2">
                      <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-sm btn-secondary btn-twitter me-2 mb-2">
                      <i class="bx bxl-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-sm btn-secondary btn-instagram me-2 mb-2">
                      <i class="bx bxl-instagram"></i>
                    </a>
                  </div>
                </div>

                <!-- Advertising -->
                <div class="card border-0 bg-faded-primary bg-repeat-0 bg-size-cover" style="min-height: 25rem; background-image: url(assets/img/blog/banner.png);">
                  <div class="card-body">
                    <h5 class="h3 mb-4 pb-2 text-center">Ad Banner</h5>
                  </div>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </section>


      <!-- Subscription CTA -->
      <section class="py-5 bg-secondary">
        <div class="container py-md-3 py-lg-5">
          <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9 col-md-11">
              <h2 class="h1 d-md-inline-block position-relative mb-md-5 mb-sm-4 text-sm-start text-center">
                Don't Want to Miss Anything?
  
                <!-- Arrow shape -->
                <svg class="d-md-block d-none position-absolute top-0 ms-4 ps-1" style="left: 100%;" xmlns="http://www.w3.org/2000/svg" width="65" height="68" fill="#6366f1"><path d="M53.9527 51.0012c8.396-10.5668 2.0302-26.0134-11.7481-26.7511-.6899-.0646-1.4612.0015-2.1258.0431.1243 9.0462-4.1714 18.8896-11.5618 21.3814-6.6695 2.2133-10.3337-4.2224-7.5813-9.676 3.2966-6.4755 9.103-11.8504 16.1678-13.8189-.5654-5.6953-3.3436-10.7672-9.485-12.48517C17.2678 6.8204 6.49364 16.3681 4.98841 26.127c-.09276 1.0297-1.68569.9497-1.59293-.0801C3.98732 12.9139 19.7395 2.55212 31.9628 8.5787c4.7253 2.3813 7.2649 7.3963 7.9368 13.067 7.4237-.9311 14.5154 3.3683 18.3422 9.5422 4.3988 7.1623 2.3584 15.1401-2.6322 21.1108-.7826.9653-2.3331-.3572-1.6569-1.2975zM26.7754 32.1845c-1.9411 2.2411-4.076 5.0872-4.3542 8.1764-.3036 2.9829 3.7601 3.0525 5.4905 2.7645 2.1568-.3863 3.7221-2.3164 4.8863-4.0419 2.6228-3.6308 4.3657-9.0752 4.4844-14.2563-4.0808 1.279-7.6514 4.2327-10.507 7.3573zm24.6311 25.592c-.7061-2.9738-1.2243-6.1031-1.1591-9.143.0423-1.242 1.767-1.0805 1.8313.1372.1284 2.435.815 4.8532 1.4764 7.1651l4.1619-1.4098c1.0153-.4586 2.4373-1.5714 3.6544-1.1804.6087.1954.7347.7264.6475 1.3068-.2302 1.3976-2.4683 1.9147-3.5901 2.398-1.8429.7619-3.6293 1.2865-5.5477 1.7298-.6391.1476-1.3233-.3665-1.4746-1.0037z"/></svg>
              </h2>
  
              <!-- Title + checkboxes -->
              <div class="row gy-4 align-items-center mb-lg-5 mb-4 pb-3">
                <div class="col-md-3">
                  <h3 class="h5 mb-0 text-sm-start text-center">Sign up for Newsletters</h3>
                </div>
                <div class="col-md-9">
                  <div class="row row-cols-sm-3 row-cols-2 gy-2">
                    <div class="col">
                      <div class="form-check mb-0">
                        <input type="checkbox" id="s-daily-newsletter" class="form-check-input">
                        <label for="s-daily-newsletter" class="form-check-label">Daily Newsletter</label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-check mb-0">
                        <input type="checkbox" id="s-advertising-updates" class="form-check-input" checked>
                        <label for="s-advertising-updates" class="form-check-label">Advertising Updates</label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-check mb-0">
                        <input type="checkbox" id="s-week-in-review" class="form-check-input">
                        <label for="s-week-in-review" class="form-check-label">Week in Review</label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-check mb-0">
                        <input type="checkbox" id="s-event-updates" class="form-check-input">
                        <label for="s-event-updates" class="form-check-label">Event Updates</label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-check mb-0">
                        <input type="checkbox" id="s-startups-weekly" class="form-check-input">
                        <label for="s-startups-weekly" class="form-check-label">Startups Weekly</label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-check mb-0">
                        <input id="s-podcasts" type="checkbox" class="form-check-input">
                        <label for="s-podcasts" class="form-check-label">Podcasts</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
              <!-- Email field -->
              <form class="d-flex flex-sm-row flex-column mb-3 needs-validation" novalidate>
                <div class="input-group me-sm-3 mb-sm-0 mb-3">
                  <i class="bx bx-envelope position-absolute start-0 top-50 translate-middle-y ms-3 zindex-5 fs-5 text-muted"></i>
                  <input type="email" class="form-control form-control-lg rounded-3 ps-5" placeholder="Your email" required>
                  <div class="invalid-tooltip position-absolute start-0 top-0 mt-n4">Please provide a valid email address!</div>
                </div>
                <button class="btn btn-lg btn-primary">Subscribe *</button>
              </form>
              <div class="form-text fs-sm text-sm-start text-center">
                * Yes, I agree to the <a href="#">terms</a> and <a href="#">privacy policy</a>.
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>


    <!-- Footer -->
<?php require 'footer.php'; ?>