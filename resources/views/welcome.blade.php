<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link
      rel="shortcut icon"
      href="assets/images/favicon.svg"
      type="image/x-icon"
    />
    <title>SeedIn OJT</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/lineicons.css" />
    <link rel="stylesheet" href="assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body>
    <main class="main-wrapper">
      <!-- ========== signin-section start ========== -->
      <section class="signin-section">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title mb-30">
           
                </div>
              </div>
              
              <!-- end col -->
              <div class="col-md-6">
                <div class="breadcrumb-wrapper mb-30">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                 
                    </ol>
                  </nav>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->

          <div class="row g-0 auth-row">
            <div class="col-lg-6">
              <div class="auth-cover-wrapper bg-primary-100">
                <div class="auth-cover">
                  <div class="title text-center">
                    <h1 class="text-primary mb-10">Welcome to SeedIn Technology Inc.</h1>
                    <p class="text-medium">
                        Seedin understands your business needs and is with you every step of the way in your growth journey
                    </p>
                  </div>
                  <div class="cover-image">
                    <img src="assets/images/auth/signin-image.svg" alt="" />
                  </div>
                  <div class="shape-image">
                    <img src="assets/images/auth/shape.svg" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <!-- end col -->
            <div class="col-lg-6">
              <div class="signin-wrapper">
                <div class="form-wrapper">
                  <h6 class="mb-15">About SeedIn</h6>
                  <p class="text-bg mb-15">
                    SeedIn is South East Asia's largest Business Financing Platform where local businesses seeking short-term financing connect with individuals and businesses seeking short-term investments.
                  </p>
                  <p class="text-bg mb-15">
                    Our concept is simple: Demand meets Supply.
                  </p>
                  <p class="text-bg mb-15">
                    Established in 2013 with the vision to connect local businesses, SeedIn has facilitated over Php10,376,696,292 worth of funds since its launch in February 2014.
                  </p>
                  <p class="text-bg mb-15">
                    We believe that Union is strength. Housing both Business issuers and Retail/Qualified Investors (Individuals and Businesses) on our technology-enabled platform, SeedIn serves two main groups of customers:
                  </p>
                  <h6 class="mb-15">Business Issuers</h6>
                  <p class="text-bg mb-15">
                    SeedIn is committed to support budding local SMEs, helping them achieve their potential, through alternative financing solutions. By reducing cash-flow gaps, the capital growth of local SMEs can be enhanced. Business issuers can expect lower cost of credit than other traditional alternative financing companies, and short fund-processing period.
                  </p>
                  <h6 class="mb-15">Retail/Qualified Investors</h6>
                  <p class="text-bg mb-15">
                    SeedIn provides attractive annualized returns from 7%, which come in the form of Monthly Repayments. Retail/Qualified Investors can invest with a peace of mind with SeedIn as we provide a platform for investment reviewing and monitoring of potential crowdfunding projects.
                  </p>
                  <form id="form-signin" >
                    <div class="row">
                      <div class="col-12">
                       
                      <div class="col-12">
             
                    <!-- end row -->
                  </form>
                  <div class="singin-option pt-40">
                 
                    </div>
                    <p class="text-sm text-medium text-dark text-center">
                      Don’t have any account yet?
                      <a href="{{ route('register') }}">Create an account</a><br>
                      You already have an account?
                      <a href="{{ route('login') }}">Go to login.</a>
                    </p>
                </div>
              </div>
            </div>
            <!-- end col -->
          </div>
          <!-- end row -->
        </div>
      </section>
      <!-- ========== signin-section end ========== -->

      <!-- ========== footer start =========== -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 order-last order-md-first">
              <div class="copyright text-center text-md-start">
                <p class="text-sm">
       
                  <a
                    href="https://plainadmin.com"
                    rel="nofollow"
                    target="_blank"
                  >
           
                  </a>
                </p>
              </div>
            </div>
            <!-- end col-->
            <div class="col-md-6">
              <div
                class="
                  terms
                  d-flex
                  justify-content-center justify-content-md-end
                "
              >
                <a href="#0" class="text-sm">Term & Conditions</a>
                <a href="#0" class="text-sm ml-15">Privacy & Policy</a>
              </div>
            </div>
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </footer>
      <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/Chart.min.js"></script>
    <script src="assets/js/dynamic-pie-chart.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/fullcalendar.js"></script>
    <script src="assets/js/jvectormap.min.js"></script>
    <script src="assets/js/world-merc.js"></script>
    <script src="assets/js/polyfill.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>

