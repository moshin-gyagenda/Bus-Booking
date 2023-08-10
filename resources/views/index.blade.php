<!DOCTYPE html>
<html>
    <head>
        <!-- for-mobile-apps -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, maximum-scale=1"
        />
        <meta name="theme-color" content="#25274d" />
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
        <link rel="icon" href="{{asset('images/p1.png')}}" type="image/x-icon" />
        <!-- //for-mobile-apps -->
        <title>Link Bus Booking System</title>
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
            <div class="col-md-11 col-lg-9 col-xl-8 mx-auto window">
                <section class="stepper">
                    <!-- progressbar -->
                    <ul id="progressbar" style="padding-inline-start: 8px">
                        <li class="active">Travel Date</li>
                        <li>Available Buses</li>
                        <li>Book Seat</li>
                        <li>Details</li>
                        <li>Payment</li>
                        <li>Ticket</li>
                    </ul>
                </section>
                <section class="body">
                    <form id="date_form">
                        <fieldset class="animated fadeIn">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>From</label>
                                    <select
                                        class="form-control from select2"
                                        name="from"
                                        required
                                    >
                                        <option>--PickUp Point--</option>
                                        <option value="Kampala">Kampala</option>
                                        <option value="Masindi">Masindi</option>
                                        <option value="Kasese">Kasese</option>
                                        <option value="Hoima">Hoima</option>
                                        <option value="FortPortal">
                                            FortPortal
                                        </option>
                                        <option value="Bundibugyo">
                                            Bundibugyo
                                        </option>
                                        <option value="Kagadi">Kagadi</option>
                                        <option value="Kasio Tonya">
                                            Kasio Tonya
                                        </option>
                                        <option value="Bweera">Bweera</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>To</label>
                                    <select
                                        class="form-control"
                                        name="to"
                                        required
                                    >
                                        <option>--Stop Point--</option>
                                        <option value="Kampala">Kampala</option>
                                        <option value="Masindi">Masindi</option>
                                        <option value="Kasese">Kasese</option>
                                        <option value="Hoima">Hoima</option>
                                        <option value="FortPortal">
                                            FortPortal
                                        </option>
                                        <option value="Bundibugyo">
                                            Bundibugyo
                                        </option>
                                        <option value="Kagadi">Kagadi</option>
                                        <option value="Kasio Tonya">
                                            Kasio Tonya
                                        </option>
                                        <option value="Bweera">Bweera</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Date of travel</label>
                                    <input
                                        type="date"
                                        class="form-control"
                                        required
                                    />
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Time of travel</label>
                                    <input
                                        type="time"
                                        class="form-control"
                                        required
                                    />
                                </div>
                            </div>
                            <div class="row justify-content-center buttons">
                                <button type="button" class="btn next_button">
                                    Continue
                                </button>
                            </div>
                        </fieldset>
                        <fieldset class="animated fadeIn">
                            <div id="results">
                                <!-- <h6>3 buses found</h6> -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div
                                                        class="col-md-3 bus-image"
                                                    >
                                                        <img
                                                            src="images/p2.png"
                                                            alt="bus"
                                                            height="130"
                                                            width="130"
                                                        />
                                                    </div>
                                                    <div
                                                        class="col-md-8 bus-details"
                                                    >
                                                        <h5
                                                            class="card-title bus-name"
                                                        >
                                                            UBE 452G (<span
                                                                class="bus-type fs-13"
                                                                >Majaoni
                                                                Bus</span
                                                            >)
                                                        </h5>
                                                        <div
                                                            class="row card-text m-b-10 bus-description"
                                                        >
                                                            <div
                                                                class="col-sm-6 fs-14"
                                                            >
                                                                <i
                                                                    class="material-icons"
                                                                    style="
                                                                        font-size: 13px;
                                                                    "
                                                                    >watch</i
                                                                >
                                                                Departure:
                                                                <span
                                                                    class="p-r-5 fr"
                                                                    >09:30AM
                                                                </span>
                                                            </div>
                                                            <div
                                                                class="col-sm-6 fs-14"
                                                            >
                                                                <i
                                                                    class="fa fa-road"
                                                                ></i>
                                                                Route:
                                                                <span>
                                                                    Kampala
                                                                    -Mbarara

                                                                    <span
                                                                        class="to"
                                                                    ></span>
                                                                </span>
                                                            </div>
                                                            <div
                                                                class="col-sm-6 fs-14"
                                                            >
                                                                <i
                                                                    class="material-icons"
                                                                    style="
                                                                        font-size: 13px;
                                                                    "
                                                                    >event_seat</i
                                                                >
                                                                Availability:
                                                                <span
                                                                    class="p-r-5 fr"
                                                                    ><span
                                                                        class="seats-left"
                                                                        >20</span
                                                                    >
                                                                    seats left
                                                                </span>
                                                            </div>
                                                            <div
                                                                class="col-sm-6 fs-14"
                                                            >
                                                                <i
                                                                    class="fa fa-money"
                                                                ></i>
                                                                Fare:
                                                                <span
                                                                    class="p-r-5 fr"
                                                                    >30,000 UGX
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="p-t-13">
                                                            <a
                                                                href="#"
                                                                class="btn btn-circle btn-success book_btn"
                                                                data-bus="1"
                                                                >Book Seats</a
                                                            >

                                                            <div
                                                                class="gallery1"
                                                                style="
                                                                    display: none;
                                                                "
                                                            >
                                                                <a
                                                                    href="gallery/majaoni1.jpg"
                                                                >
                                                                    <img
                                                                        src="gallery/majaoni1.jpg"
                                                                        alt=""
                                                                        title="Majaoni Secondary Bus"
                                                                    />
                                                                </a>
                                                                <a
                                                                    href="gallery/majaoni2.jpg"
                                                                >
                                                                    <img
                                                                        src="gallery/majaoni2.jpg"
                                                                        alt=""
                                                                        title="Majaoni Secondary Bus"
                                                                    />
                                                                </a>
                                                                <a
                                                                    href="gallery/majaoni3.jpg"
                                                                >
                                                                    <img
                                                                        src="gallery/majaoni3.jpg"
                                                                        alt=""
                                                                        title="Majaoni Secondary Bus"
                                                                    />
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div
                                                            class="col-md-3 bus-image"
                                                        >
                                                            <img
                                                                src="images/p.png"
                                                                alt="bus"
                                                                height="130"
                                                                width="130"
                                                            />
                                                        </div>
                                                        <div
                                                            class="col-md-8 bus-details"
                                                        >
                                                            <h5
                                                                class="card-title bus-name"
                                                            >
                                                                UAZ 578X (<span
                                                                    >45</span
                                                                >
                                                                Seater)
                                                            </h5>
                                                            <div
                                                                class="row card-text m-b-10 bus-description"
                                                            >
                                                                <div
                                                                    class="col-md-6 fs-14"
                                                                >
                                                                    <i
                                                                        class="material-icons"
                                                                        style="
                                                                            font-size: 13px;
                                                                        "
                                                                        >watch</i
                                                                    >
                                                                    Departure:
                                                                    <span
                                                                        class="p-r-5 fr"
                                                                        >11:00AM
                                                                    </span>
                                                                </div>
                                                                <div
                                                                    class="col-md-6 fs-14"
                                                                >
                                                                    <i
                                                                        class="fa fa-road"
                                                                    ></i>
                                                                    Route:
                                                                    <span
                                                                        class="p-r-5 fr"
                                                                        >Masindi
                                                                        - Hoima
                                                                    </span>
                                                                </div>
                                                                <div
                                                                    class="col-md-6 fs-14"
                                                                >
                                                                    <i
                                                                        class="material-icons"
                                                                        style="
                                                                            font-size: 13px;
                                                                        "
                                                                        >event_seat</i
                                                                    >
                                                                    Availability:
                                                                    <span
                                                                        class="p-r-5 fr"
                                                                        >12
                                                                        seats
                                                                        left
                                                                    </span>
                                                                </div>
                                                                <div
                                                                    class="col-md-6 fs-14"
                                                                >
                                                                    <i
                                                                        class="fa fa-money"
                                                                    ></i>
                                                                    Fare:
                                                                    <span
                                                                        class="p-r-5 fr"
                                                                        >15,000
                                                                        UGX
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="p-t-13">
                                                                <a
                                                                    href="#"
                                                                    class="btn btn-circle btn-success disabled book_btn"
                                                                    >Book
                                                                    Seats</a
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div
                                                            class="col-md-3 bus-image"
                                                        >
                                                            <img
                                                                src="images/p3.png"
                                                                alt="bus"
                                                                height="130"
                                                                width="130"
                                                            />
                                                        </div>
                                                        <div
                                                            class="col-md-8 bus-details"
                                                        >
                                                            <h5
                                                                class="card-title bus-name"
                                                            >
                                                                UBJ 122Y (<span
                                                                    >62</span
                                                                >
                                                                Seater)
                                                            </h5>
                                                            <div
                                                                class="row card-text m-b-10 bus-description"
                                                            >
                                                                <div
                                                                    class="col-md-6 fs-14"
                                                                >
                                                                    <i
                                                                        class="material-icons"
                                                                        style="
                                                                            font-size: 13px;
                                                                        "
                                                                        >watch</i
                                                                    >
                                                                    Departure:
                                                                    <span
                                                                        class="p-r-5 fr"
                                                                        >02:30PM
                                                                    </span>
                                                                </div>
                                                                <div
                                                                    class="col-md-6 fs-14"
                                                                >
                                                                    <i
                                                                        class="fa fa-road"
                                                                    ></i>
                                                                    Route:
                                                                    <span
                                                                        class="p-r-5 fr"
                                                                        >Bundibugyo
                                                                        - Kagadi
                                                                    </span>
                                                                </div>
                                                                <div
                                                                    class="col-md-6 fs-14"
                                                                >
                                                                    <i
                                                                        class="material-icons"
                                                                        style="
                                                                            font-size: 13px;
                                                                        "
                                                                        >event_seat</i
                                                                    >
                                                                    Availability:
                                                                    <span
                                                                        class="p-r-5 fr"
                                                                        >22
                                                                        seats
                                                                        left
                                                                    </span>
                                                                </div>
                                                                <div
                                                                    class="col-md-6 fs-14"
                                                                >
                                                                    <i
                                                                        class="fa fa-money"
                                                                    ></i>
                                                                    Fare:
                                                                    <span
                                                                        class="p-r-5 fr"
                                                                        >20,000
                                                                        UGX
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="p-t-13">
                                                                <a
                                                                    href="javascript:void(0);"
                                                                    class="btn btn-circle btn-success disabled book_btn"
                                                                    >Book
                                                                    Seats</a
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center buttons">
                                <button
                                    type="button "
                                    class="btn previous_button"
                                >
                                    Back
                                </button>
                            </div>
                        </fieldset>
                        <!-- seat map -->
                        <fieldset class="animated fadeIn">
                            <div id="seats">
                                <div class="row no-gutters">
                                    <div
                                        class="col-lg-8 col-xl-6 col-sm-8 col-md-7"
                                    >
                                        <div id="seat-map">
                                            <div class="front-indicator"></div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-lg-4 col-xl-6 col-sm-4 col-md-5"
                                    >
                                        <div class="booking-details">
                                            <h2 class="header">
                                                Booking Details
                                                <span
                                                    class="number_plate badge badge-primary fs-12"
                                                ></span>
                                            </h2>
                                            <h3>
                                                Selected Seats
                                                <span id="counter">0</span>:
                                            </h3>
                                            <ul id="selected-seats"></ul>
                                            <p>
                                                Total:
                                                <b
                                                    ><span id="total">0</span>
                                                    UGX</b
                                                >
                                            </p>
                                            <br />
                                        </div>
                                        <!-- <div id="legend" class=""></div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center buttons">
                                <button
                                    type="button "
                                    class="btn previous_button"
                                >
                                    Back
                                </button>
                                <button
                                    type="button "
                                    class="btn next_button btn-booked"
                                >
                                    Continue
                                </button>
                            </div>
                        </fieldset>
                        <!-- END SEAT MAP -->
                        <!-- PERSONAL INFO -->
                        <fieldset class="animated fadeIn p-info">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Full Name</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="name"
                                        placeholder="John Doe"
                                        onkeyup="verifyInfoForm()"
                                        id="name"
                                    />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="id">Id</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="id"
                                        placeholder="12345678"
                                        onkeyup="verifyInfoForm()"
                                        id="id"
                                    />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="phone">Mobile No.</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="phone"
                                        name="phone"
                                        id="phone"
                                        placeholder="0712345678"
                                        onkeyup="verifyInfoForm()"
                                    />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="email"
                                        name="email"
                                        placeholder="john@doe.com"
                                        onkeyup="verifyInfoForm()"
                                    />
                                </div>
                            </div>
                            <div class="row justify-content-center buttons">
                                <button
                                    type="button "
                                    class="btn previous_button"
                                >
                                    Back
                                </button>
                                <button type="button " class="btn next_button">
                                    Continue
                                </button>
                            </div>
                        </fieldset>
                        <!-- END PERSONAL INFO -->
                        <!-- PAYMENT -->
                        <fieldset class="animated fadeIn p-info">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-10">
                                    <h6>
                                        Please send your money to
                                        <b>0717456520 Peter Lemaron</b>. A
                                        Printable PDF ticket will be sent to
                                        your email (<span
                                            class="show-email"
                                        ></span
                                        >) upon payment completion. So please
                                        ensure you provide a valid email
                                        address. <br /><br />
                                        <span class="note"
                                            >Note: If you havent made a deposit
                                            by 3 days your reservation will be
                                            cancelled.</span
                                        >
                                    </h6>
                                </div>
                            </div>

                            <div class="row justify-content-center buttons">
                                <button
                                    type="button "
                                    class="btn previous_button"
                                >
                                    Back
                                </button>
                                <button type="button " class="btn next_button">
                                    Finish
                                </button>
                            </div>
                        </fieldset>
                        <!-- END PAYMENT -->
                        <!-- TICKET -->
                        <fieldset class="animated fadeIn p-info">
                            <div class="row d-flex justify-content-center">
                                <div
                                    class="col-md-3"
                                    style="margin: auto; left: 0; top: 0"
                                >
                                    <img
                                        src="booked.png"
                                        alt="Success"
                                        class="img-fluid p-b-10"
                                    />
                                </div>
                                <div class="col-md-8">
                                    <h6>
                                        An email has been sent to your email
                                        address (<span class="show-email"></span
                                        >). Don't forget to look in your spam
                                        folder. Safe Journey
                                        <i class="fa fa-heart text-danger"></i
                                        >.<br /><br />
                                        <span class="note"
                                            >Note: If you havent made a deposit
                                            by days your reservation will be
                                            cancelled.</span
                                        >
                                    </h6>
                                </div>
                            </div>

                            <div class="row justify-content-center buttons">
                                <button
                                    type="button "
                                    class="btn previous_button"
                                >
                                    Back
                                </button>
                            </div>
                        </fieldset>
                        <!-- END TICKET -->
                    </form>
                </section>
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
<script type="text/javascript">
    $("select").niceSelect();

    $(".g-link").on("click", function (event) {
        $(".gallery1 a").trigger("click");
    });

    var $gallery = $(".gallery1 a").simpleLightbox();

    //jQuery time
    var current_fs,
        next_fs,
        previous_fs,
        busId = 0,
        seatsArray = []; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    $(".next_button").on("click", function (event) {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent().parent();
        next_fs = current_fs.next();

        if ($("fieldset").index(next_fs) == 1) {
            $("span.from").text($("select.from").val());
            $("span.to").text($("input.to").val());
            $.ajax({
                method: "GET", //https://examinationcomplaint.theschemaqhigh.co.ke/HCI/api/book/
                url: "https://examinationcomplaint.theschemaqhigh.co.ke/HCI/api/book/?bus_id=1&booked_seats",
                success: function (data) {
                    $("span.seats-left").text(51 - data.length);
                },
                error: function (data) {
                    console.log(data);
                },
            });
        }

        if ($("fieldset").index(current_fs) == 2) {
            if ($("ul#selected-seats li").length == 0) {
                animating = false;
                Lobibox.notify("error", {
                    showClass: "fadeInDown",
                    hideClass: "fadeUpDown",
                    iconSource: "fontAwesome",
                    // img: 'images/logo-96.png',
                    title: "No Seat Selected!",
                    continueDelayOnInactiveTab: true,
                    size: "mini",
                    msg: "Please select at least one seat from the selected bus.",
                });
            } else {
                goNext(next_fs, current_fs);
                seatsArray.splice(0, seatsArray.length);
                sc.find("selected").each(function () {
                    seatsArray.push(this.settings.label);
                });
            }
        } else if ($("fieldset").index(current_fs) == 3) {
            animating = false;
            if (!verifyInfoForm()) {
            } else {
                goNext(next_fs, current_fs);
                $("span.show-email").text($('input[name="email"]').val());
            }
        } else {
            goNext(next_fs, current_fs);
            if ($("fieldset").index(next_fs) == 5) {
                $data = {
                    busId: busId,
                    seats: seatsArray.toString(),
                    personalInfo: $("form").serializeArray(),
                };
                $data = JSON.stringify($data);
                console.log($data);
                $.ajax({
                    method: "POST", //https://examinationcomplaint.theschemaqhigh.co.ke/HCI/api/book/
                    url: "api/book.php",
                    data: $data,
                    dataType: "json",
                    success: function (data) {
                        console.log(data);
                    },
                    error: function (data) {
                        console.log(data);
                    },
                });
            }
        }

        //     let date = $('#date').val();
        //     let regexp = /^(\d{4})[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/;
        //     if (!regexp.test(date)) return 0;
        // }

        //go to next fs
        // $(".next_button").unbind('click',goNext(next_fs, current_fs));
    });

    $(".book_btn").click(function () {
        busId = Number($(this).data("bus")); //determine which bus was choosen
        let busName = $(this)
            .parents(".bus-details")
            .children(".bus-name")
            .text();
        $("span.number_plate").text(
            $(this).parents(".bus-details").children(".bus-name").text()
        );
        if (animating) return false;
        animating = true;

        current_fs = $(this).parents("fieldset");
        next_fs = current_fs.next();

        if ($("fieldset").index(next_fs) == 2) {
            booked_seats(busId);
            setInterval(booked_seats(busId), 3000);
        }

        //de-activate current step on progressbar
        goNext(next_fs, current_fs);
    });

    $(".previous_button").click(function () {
        current_fs = $(this).parent().parent();

        previous_fs = current_fs.prev();

        if ($("fieldset").index(previous_fs) == 2) {
            booked_seats(busId);
            setInterval(booked_seats(busId), 3000);
        }

        //de-activate current step on progressbar
        if (previous_fs.length > 0) {
            if (animating) return false;
            animating = true;
            $("#progressbar li ")
                .eq($("fieldset").index(current_fs))
                .removeClass("active");

            //show the previous fieldset
            previous_fs.show();
            //hide the current fieldset with style
            current_fs.animate(
                {
                    opacity: 0,
                },
                {
                    duration: 100,
                    complete: function () {
                        current_fs.hide();
                        previous_fs.css("opacity", 1);
                        animating = false;
                    },
                    //this comes from the custom easing plugin
                    easing: "easeInOutBack",
                }
            );
        }
    });

    function goNext(next_fs, current_fs) {
        $("#progressbar li ")
            .eq($("fieldset").index(next_fs))
            .addClass("active");
        //show the next fieldset
        next_fs.show();

        current_fs.animate(
            {
                opacity: 0,
            },
            {
                duration: 10,
                complete: function () {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: "easeInOutBack",
            }
        );
    }

    function verifyInfoForm() {
        let name = $('input[name="name"]'),
            id = $('input[name="id"]'),
            phone = $('input[name="phone"]'),
            email = $('input[name="email"]'),
            nameRegexp = /^[a-zA-Z]+\s+[a-zA-Z\s]+$/,
            idRegexp = /^\d{8}$/,
            emailRegexp = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i,
            phoneRegexp = /^(0|\+?254)7(\d){8}$/,
            isValid = [];
        if ($.trim(name.val()) == "") {
            name.addClass("is-invalid");
            name.parent().find("small.text-danger").remove();
            name.parent().append(
                '<small class="text-danger">Name field cannot be empty</small>'
            );
            isValid["name"] = false;
        } else if (!nameRegexp.test($.trim(name.val()))) {
            name.addClass("is-invalid");
            name.parent().find("small.text-danger").remove();
            name.parent().append(
                '<small class="text-danger">Full name can only consist of alphabetical and atlest two names.</small>'
            );
            isValid["name"] = false;
        } else {
            name.removeClass("is-invalid");
            name.addClass("is-valid");
            name.parent().find("small.text-danger").remove();
            isValid["name"] = true;
        }

        // phone no

        if ($.trim(phone.val()) == "") {
            phone.addClass("is-invalid");
            phone.parent().find("small.text-danger").remove();
            phone
                .parent()
                .append(
                    '<small class="text-danger">Phone No field cannot be empty</small>'
                );
            isValid["phone"] = false;
        } else if (!phoneRegexp.test($.trim(phone.val()))) {
            phone.addClass("is-invalid");
            phone.parent().find("small.text-danger").remove();
            phone
                .parent()
                .append(
                    '<small class="text-danger">Please provide a valid phone number.</small>'
                );
            isValid["phone"] = false;
        } else {
            phone.removeClass("is-invalid");
            phone.addClass("is-valid");
            phone.parent().find("small.text-danger").remove();
            isValid["phone"] = true;
        }
        // id
        if ($.trim(id.val()) == "") {
            id.addClass("is-invalid");
            id.parent().find("small.text-danger").remove();
            id.parent().append(
                '<small class="text-danger">Id field cannot be empty</small>'
            );
            isValid["id"] = false;
        } else if (!idRegexp.test($.trim(id.val()))) {
            id.addClass("is-invalid");
            id.parent().find("small.text-danger").remove();
            id.parent().append(
                '<small class="text-danger">Please provide a valid ID number.</small>'
            );
            isValid["id"] = false;
        } else {
            id.removeClass("is-invalid");
            id.addClass("is-valid");
            id.parent().find("small.text-danger").remove();
            isValid["id"] = true;
        }

        // email
        if ($.trim(email.val()) == "") {
            email.addClass("is-invalid");
            email.parent().find("small.text-danger").remove();
            email
                .parent()
                .append(
                    '<small class="text-danger">Email field cannot be empty</small>'
                );
            isValid["email"] = false;
        } else if (!emailRegexp.test($.trim(email.val()))) {
            email.addClass("is-invalid");
            email.parent().find("small.text-danger").remove();
            email
                .parent()
                .append(
                    '<small class="text-danger">Please provide a valid email address.</small>'
                );
            isValid["email"] = false;
        } else {
            email.removeClass("is-invalid");
            email.addClass("is-valid");
            email.parent().find("small.text-danger").remove();
            isValid["email"] = true;
        }

        return Object.values(isValid).every(function (value) {
            return value == true;
        });
    }

    $("#date_form").on("submit", (event) => {
        event.preventDefault();
    });

    $("ul#progressbar").on("click", "li", function (event) {
        let i = $("#progressbar li").index(this);
        let j = $("#progressbar").find("li.active").length - 1;

        if (i > j) {
            if (j == 1) {
                Lobibox.notify("error", {
                    showClass: "fadeInDown",
                    hideClass: "fadeUpDown",
                    iconSource: "fontAwesome",
                    // img: 'images/logo-96.png',
                    title: "No Bus Selected!",
                    continueDelayOnInactiveTab: true,
                    size: "mini",
                    msg: "Please select a bus from which you want to book.",
                });
            } else {
                $("fieldset").eq(j).find(".next_button").trigger("click");
            }
        } else if (i < j) $("fieldset").eq(j).find(".previous_button").trigger("click");
    });
    if ("serviceWorker" in navigator) {
        window.addEventListener("load", function () {
            navigator.serviceWorker
                .register("service-worker.js")
                .then(function () {
                    console.log("Service Worker Registered,");
                });
        });
    }
</script>
<!-- end of js -->
</body>

</html>
