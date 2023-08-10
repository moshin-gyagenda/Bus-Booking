<!DOCTYPE html>
<html>
    <head>
        <!-- for-mobile-apps -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, maximum-scale=1"
        />
        <link rel="icon" href="{{asset('images/p1.png')}}" type="image/x-icon" />
        <meta name
        ="theme-color" content="#25274d" />
        <meta
            name="description"
            content="A bus seat reservation system made by James"
        />
        <meta name="author" content="James Muriitih" />
        <meta name="keywords" content="bus,bus seats," />
        <meta property="og:site_name" content="google.com" />
        <meta property="og:title" content="Bus Seat Reservation System" />
        <meta
            property="og:description"
            content="A bus seat reservation system made by James"
        />
        <meta
            property="og:image:url"
            itemprop="image"
            content="A bus seat reservation system made by James"
        />
        <meta
            property="og:image"
            content="https://james-muriithi.github.io/bus/images/logo-400.png"
        />
        <meta
            property="og:image:url"
            content="https://james-muriithi.github.io/bus/images/logo-400.png"
        />
        <meta
            property="og:image:secure_url"
            content="https://james-muriithi.github.io/bus/images/logo-400.png"
        />
        <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="400" />
        <meta property="og:locale" content="en_GB" />
        <meta property="og:type" content="website" />
        <meta name="application-name" content="My Bus" />
        <meta name="apple-mobile-web-app-title" content="My Bus" />
        <meta name="msapplication-TileColor" content="#2b5797" />

        <!-- //for-mobile-apps -->
        <title>Bus Seat Reservation System</title>
        <!-- icons -->
        <link
            rel="icon"
            type="image/png"
            href="images/logo-96.png"
            sizes="96x96"
        />
        <link
            rel="icon"
            type="image/png"
            href="images/logo-16.png"
            sizes="16x16"
        />
        <link
            rel="icon"
            type="image/png"
            href="images/logo-32.png"
            sizes="32x32"
        />
        <link
            rel="icon"
            type="image/png"
            href="images/logo-64.png"
            sizes="64x64"
        />
        <link
            rel="icon"
            type="image/png"
            href="images/logo-128.png"
            sizes="128x128"
        />
        <link
            rel="apple-touch-icon"
            sizes="120x120"
            href="images/apple-touch-icon.png"
        />
        <link
            rel="mask-icon"
            href="images/safari-pinned-tab.svg"
            color="#5bbad5"
        />
        <link rel="manifest" href="site.webmanifest" />
        <!-- end of icons  -->
        <!-- css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link
            rel="stylesheet"
            type="text/css"
            href="css/bootstrapValidator.css"
        />
        <link rel="stylesheet" type="text/css" href="css/nice-select.css" />
        <link rel="stylesheet" type="text/css" href="css/util.css" />
        <link
            rel="stylesheet"
            type="text/css"
            href="css/jquery.seat-charts.css"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="fonts/font-awesome/css/font-awesome.min.css"
        />
        <link
            href="fonts/material-design-icons/material-icon.css"
            rel="stylesheet"
            type="text/css"
        />
        <link
            rel="stylesheet"
            href="plugins/material-datetimepicker/bootstrap-material-datetimepicker.css"
        />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <link rel="stylesheet" type="text/css" href="css/material.min.css" />
        <link
            rel="stylesheet"
            type="text/css"
            href="plugins/lobibox/css/lobibox.min.css"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="css/simplelightbox.min.css"
        />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <!-- end of css -->
    </head>

    <body>
        <nav
            class="navbar navbar-expand-lg navbar-dark static-top"
            style="background: green"
        >
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <h1>
                        <img
                            src="images/p1.png"
                            alt="logo"
                            width="30"
                            height="30"
                            style="margin-top: -10px"
                        />
                        <span>L</span>
                        <span>I</span>
                        <span>N</span>
                        <span>K</span>
                        <span>B</span>
                        <span>U</span>
                        <span>S</span>
                    </h1>
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarResponsive"
                    aria-controls="navbarResponsive"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('login')}}"
                                class="btn btn-outline-warning my-2 my-sm-0 ml-3"
                                
                                >
                                Login to your Account
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('register')}}"
                                class="btn btn-outline-warning my-2 my-sm-0 ml-2"
                                >Register</a>
                            
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- </navbar -->
        <!-- main content -->
        <main class="col-md-12">
            <div class="col-md-8 col-lg-7 col-xl-6 mx-auto window">
                <div class="container">
                    <h4 style="color: green">Create Your Account</h4>
                    <form>
                      <div class="form-group">
                        <label for="username">Username <span style="color: red">*</span></label>
                        <input type="text" class="form-control btn-outline-success" id="username" placeholder="Enter username">
                      </div>
                      <div class="form-group">
                        <label for="email">Email <span style="color: red">*</span></label>
                        <input type="email" class="form-control btn-outline-success" id="email" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="password">Password <span style="color: red">*</span></label>
                        <input type="password" class="form-control btn-outline-success" id="password" placeholder="Enter password">
                      </div>
                      <div class="form-group">
                        <label for="confirm-password">Confirm Password <span style="color: red">*</span></label>
                        <input type="password" class="form-control btn-outline-success" id="confirm-password" placeholder="Confirm password">
                      </div>
                      <button type="submit" class="btn btn-success" style="width: 200px">Register</button>
                      <button type="submit" class="btn btn-warning" style="width: 150px">Login</button>
                    </form>
                  </div>
                  
                
            </div>
        </main>
        <br /><br /><br /><br />

        <section class="bg-light py-5 mt-5">
            <div class="container">
                <h2 class="text-center mb-5" style="color: green">
                    Why Choose Us?
                </h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <h4 class="card-title" style="color: green">
                                    Comfortable Seats
                                </h4>
                                <p class="card-text">
                                    Our buses feature comfortable seats with
                                    ample legroom to ensure a comfortable
                                    journey.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <h4 class="card-title" style="color: green">
                                    Safe and Reliable
                                </h4>
                                <p class="card-text">
                                    We prioritize your safety and ensure our
                                    buses are well-maintained and serviced
                                    regularly.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <h4 class="card-title" style="color: green">
                                    Affordable Prices
                                </h4>
                                <p class="card-text">
                                    We offer competitive and affordable prices
                                    to make travel accessible to everyone.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <h4 class="card-title" style="color: green">
                                    Convenient Schedules
                                </h4>
                                <p class="card-text">
                                    We offer a variety of convenient schedules
                                    to fit your travel needs.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <h4 class="card-title" style="color: green">
                                    Friendly Service
                                </h4>
                                <p class="card-text">
                                    Our staff is friendly and ready to assist
                                    you with any questions or concerns you may
                                    have.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <h4 class="card-title" style="color: green">
                                    Easy Booking
                                </h4>
                                <p class="card-text">
                                    Booking your bus ticket is easy and
                                    hassle-free with our online booking system.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="mt-3" style="background: green">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h5 class="text-warning">Company</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">About Us</a></li>
                            <li><a href="#" class="text-white">Our Team</a></li>
                            <li>
                                <a href="#" class="text-white">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5 class="text-warning">Services</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#" class="text-white">Service 1</a>
                            </li>
                            <li>
                                <a href="#" class="text-white">Service 2</a>
                            </li>
                            <li>
                                <a href="#" class="text-white">Service 3</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5 class="text-warning">Quick Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Blog</a></li>
                            <li>
                                <a href="#" class="text-white">Whitepapers</a>
                            </li>
                            <li><a href="#" class="text-white">Webinars</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5 class="text-white">Newsletter</h5>
                        <p class="text-white">
                            Sign up to receive news and updates
                        </p>
                        <form>
                            <div class="form-group">
                                <input
                                    type="email"
                                    class="form-control"
                                    placeholder="Email Address"
                                />
                            </div>
                            <button
                                type="submit"
                                class="btn btn-outline-warning btn-block"
                            >
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
                <hr class="bg-light" />
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="text-white">
                            &copy; 2023 Link Bus Services Limited. All Rights
                            Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
       

   
<!-- javascript -->
<script type="text/javascript " src="js/jquery.min.js "></script>
<script type="text/javascript " src="js/popper.min.js "></script>
<script type="text/javascript " src="js/bootstrap.min.js "></script>
<script type="text/javascript " src="js/bootstrapValidator.js"></script>
<script type="text/javascript " src="js/jquery-easing.min.js "></script>
<script type="text/javascript " src="js/jquery.nice-select.js "></script>
<script type="text/javascript " src="js/jquery.seat-charts.js "></script>
<script src="plugins/material-datetimepicker/moment-with-locales.min.js "></script>
<script src="plugins/material-datetimepicker/bootstrap-material-datetimepicker.js "></script>
<script src="plugins/material-datetimepicker/datetimepicker.js "></script>
<script type="text/javascript" src="js/simple-lightbox.min.js"></script>
<script type="text/javascript" src="plugins/lobibox/js/lobibox.min.js"></script>
<script type="text/javascript " src="js/script.js "></script>

<!-- end of js -->
</body>

</html>
