<?php require 'header.php'; ?> 


      <!-- Page content -->
      <section class="container">

        <!-- Breadcrumb -->
        <nav class="pt-4 mt-lg-3" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
              <a href="index.php"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Contacts</li>
          </ol>
        </nav>

        <!-- Page title -->
        <h1 class="pt-4 mt-lg-3 pb-3 pb-lg-4">Contact Us</h1>

        <div class="row pb-5 mb-md-2 mb-lg-4 mb-xl-5">

          <!-- Contact details -->
          <div class="col-xl-5 col-md-6 mb-4 mb-md-0">
            <div class="card card-hover mb-3">
              <div class="card-body d-flex align-items-start">
                <i class="bx bx-envelope fs-3 bg-secondary text-primary d-inline-block rounded-circle p-3"></i>
                <div class="ps-4">
                  <h3 class="h4 pb-1 mb-2">Email us</h3>
                  <p class="pb-1 mb-2">Please feel free to drop us a line. We will respond as soon as possible.</p>
                  <a href="mailto:silicon@example.com" class="btn btn-link stretched-link fs-base px-0">
                    Leave a message
                    <i class="bx bx-right-arrow-alt fs-4 ms-1"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="card card-hover mb-3">
              <div class="card-body d-flex align-items-start">
                <i class="bx bx-phone-call fs-3 bg-secondary text-primary d-inline-block rounded-circle p-3"></i>
                <div class="ps-4">
                  <h3 class="h4 pb-1 mb-2">Call any time</h3>
                  <p class="pb-1 mb-2">If you need immediate assistance feel free to call us any time.</p>
                  <a href="tel:4065550120" class="btn btn-link stretched-link fs-base px-0">(406) 555-0120</a>
                </div>
              </div>
            </div>
            <div class="card card-hover">
              <div class="card-body d-flex align-items-start">
                <i class="bx bx-map fs-3 bg-secondary text-primary d-inline-block rounded-circle p-3"></i>
                <div class="ps-4">
                  <h3 class="h4 pb-1 mb-2">Visit us</h3>
                  <p class="pb-1 mb-2">1904 3rd Ave, Seattle, WA 98101, United States, United Sates</p>
                  <a href="#" class="btn btn-link stretched-link fs-base px-0">
                    Get directions
                    <i class="bx bx-right-arrow-alt fs-4 ms-1"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Map -->
          <div class="col-md-6 offset-xl-1">
            <div class="d-flex flex-column h-100 shadow-sm rounded-3 overflow-hidden">
              <iframe class="d-block h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19629.434226530317!2d-122.33888855763911!3d47.61247058317426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5490154caee44595%3A0xc262d2caa19b903a!2s1904%203rd%20Ave%2C%20Seattle%2C%20WA%2098101%2C%20USA!5e0!3m2!1sen!2sua!4v1636380604362!5m2!1sen!2sua" style="border: 0; min-height: 300px;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>

        <!-- Contact form -->
        <div class="bg-secondary rounded-3 py-5 px-3 px-sm-0 mb-xl-4">
          <form class="needs-validation row justify-content-center py-lg-3 py-xl-4" novalidate>
            <div class="col-xl-8 col-lg-9 col-md-10 col-sm-11">
              <h2 class="h1 pb-lg-1 mb-4">Leave Us a Message</h2>
              <p class="fs-lg text-muted pb-lg-1 mb-4">Have a project in mind? To request a quote contact us directly or fill out the form and let us know how we can help.</p>
              <div class="row">
                <div class="col-sm-6 mb-4">
                  <label for="name" class="form-label fs-base">Full name</label>
                  <input type="text" id="name" class="form-control form-control-lg" required>
                  <div class="invalid-feedback">Please enter your name!</div>
                </div>
                <div class="col-sm-6 mb-4">
                  <label for="email" class="form-label fs-base">Email address</label>
                  <input type="email" id="email" class="form-control form-control-lg" required>
                  <div class="invalid-feedback">Please provide a valid email address!</div>
                </div>
                <div class="col-12 mb-4">
                  <label for="message" class="form-label fs-base">Message</label>
                  <textarea id="message" class="form-control form-control-lg" rows="4" required></textarea>
                  <div class="invalid-feedback">Please write your message!</div>
                </div>
              </div>
              <div class="form-check mb-4">
                <input type="checkbox" id="terms" class="form-check-input" required>
                <label for="terms" class="form-check-label fs-base">I agree to the <a href="#">Terms &amp; Conditions</a></label>
              </div>
              <button type="submit" class="btn btn-primary btn-lg shadow-primary">Send message</button>  
            </div>
          </form>
        </div>
      </section>
    </main>


    <!-- Footer -->
<?php require 'footer.php'; ?>