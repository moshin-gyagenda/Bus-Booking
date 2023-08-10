<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Link Bus</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="{{asset('images/p1.png')}}" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="plugins/icon-kit/dist/css/iconkit.min.css">
        <link rel="stylesheet" href="plugins/ionicons/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="plugins/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap.css">
        <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
        <link rel="stylesheet" href="plugins/weather-icons/css/weather-icons.min.css">
        <link rel="stylesheet" href="plugins/c3/c3.min.css">
        <link rel="stylesheet" href="plugins/owl.carousel/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="plugins/owl.carousel/dist/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="dist/css/theme.min.css">
        <link rel="stylesheet" href="../plugins/select2/dist/css/select2.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}">
        <script src="src/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="wrapper">
            <header class="header-top" header-theme="light">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <div class="top-menu d-flex align-items-center">
                            <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                            <div class="header-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i class="ik ik-x"></i></span>
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon search-btn"><i class="ik ik-search"></i></span>
                                </div>
                            </div>
                            {{-- <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button> --}}
                        </div>
                        <div class="top-menu d-flex align-items-center">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="notiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-bell"></i><span class="badge bg-danger">0</span></a>
                                <div class="dropdown-menu dropdown-menu-right notification-dropdown" aria-labelledby="notiDropdown">
                                    <h4 class="header">Notifications</h4>
                                    <div class="notifications-wrap">
                                        {{-- <a href="#" class="media">
                                            <span class="d-flex">
                                                <i class="ik ik-check"></i> 
                                            </span>
                                            <span class="media-body">
                                                <span class="heading-font-family media-heading">Invitation accepted</span> 
                                                <span class="media-content">Your have been Invited ...</span>
                                            </span>
                                        </a> --}}
                                        {{-- <a href="#" class="media">
                                            <span class="d-flex">
                                                <img src="img/users/1.jpg" class="rounded-circle" alt="">
                                            </span>
                                            <span class="media-body">
                                                <span class="heading-font-family media-heading">Steve Smith</span> 
                                                <span class="media-content">I slowly updated projects</span>
                                            </span>
                                        </a> --}}
                                        {{-- <a href="#" class="media">
                                            <span class="d-flex">
                                                <i class="ik ik-calendar"></i> 
                                            </span>
                                            <span class="media-body">
                                                <span class="heading-font-family media-heading">To Do</span> 
                                                <span class="media-content">Meeting with Nathan on Friday 8 AM ...</span>
                                            </span>
                                        </a> --}}
                                    </div>
                                    <div class="footer"><a href="javascript:void(0);">See all activity</a></div>
                                </div>
                            </div>
                            <button type="button" class="nav-link ml-10 right-sidebar-toggle"><i class="ik ik-message-square"></i><span class="badge bg-success">0</span></button>
                            <div class="dropdown">
                                {{-- <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-plus"></i></a> --}}
                                {{-- <div class="dropdown-menu dropdown-menu-right menu-grid" aria-labelledby="menuDropdown">
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Dashboard"><i class="ik ik-bar-chart-2"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Message"><i class="ik ik-mail"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Accounts"><i class="ik ik-users"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Sales"><i class="ik ik-shopping-cart"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Purchase"><i class="ik ik-briefcase"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Pages"><i class="ik ik-clipboard"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Chats"><i class="ik ik-message-square"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Contacts"><i class="ik ik-map-pin"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Blocks"><i class="ik ik-inbox"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Events"><i class="ik ik-calendar"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Notifications"><i class="ik ik-bell"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="More"><i class="ik ik-more-horizontal"></i></a>
                                </div> --}}
                            </div>
                            {{-- <button type="button" class="nav-link ml-10" id="apps_modal_btn" data-toggle="modal" data-target="#appsModal"><i class="ik ik-grid"></i></button> --}}
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="img/user.jpg" alt=""></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="profile.html"><i class="ik ik-user dropdown-icon"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="ik ik-settings dropdown-icon"></i> Settings</a>
                                    <a class="dropdown-item" href="/logout"><i class="ik ik-power dropdown-icon"></i> Logout</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </header>

            <div class="page-wrap">
                {{-- start of sidebar --}}
                @include('layouts.sidebar')
                {{-- end of sidebar --}}

                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-inbox bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Add Ticket</h5>
                                            {{-- <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="../index.html"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#">Dashboard</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Tickets</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <h3>Client's Information</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{route('add-tickets')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <label class="col-sm-4 col-lg-2 col-form-label">First Name</label>
                                        <div class="col-sm-8 col-lg-10">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <label class="input-group-text" style="border:1px solid green "><i class="ik ik-volume"></i></label>
                                                </span>
                                                <input type="text" class="form-control" name="first_name"  style="border:1px solid green ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-4 col-lg-2 col-form-label">Other Name</label>
                                        <div class="col-sm-8 col-lg-10">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <label class="input-group-text" style="border:1px solid green "><i class="ik ik-volume"></i></label>
                                                </span>
                                                <input type="text" class="form-control" name="other_name" style="border:1px solid green ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-4 col-lg-2 col-form-label">Email</label>
                                        <div class="col-sm-8 col-lg-10">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <label class="input-group-text" style="border:1px solid green "><i class="ik ik-volume"></i></label>
                                                </span>
                                                <input type="text" class="form-control"  name="email" style="border:1px solid green ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-4 col-lg-2 col-form-label">Phone Number</label>
                                        <div class="col-sm-8 col-lg-10">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <label class="input-group-text" style="border:1px solid green "><i class="ik ik-volume"></i></label>
                                                </span>
                                                <input type="text" class="form-control" name="phone_number" style="border:1px solid green ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-4 col-lg-2 col-form-label">Available Buses</label>
                                        <div class="col-sm-8 col-lg-10">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <label class="input-group-text" style="border:1px solid green "><i class="ik ik-volume"></i></label>
                                                </span>
                                                <select class="form-control select2" name="available_bus" style="border:1px solid green ">
                                                    <option >Select Bus</option>
                                                    @foreach ($buses as $bus)
                                                    <option value="{{$bus->number_plate}}">{{$bus->number_plate}}</option>  
                                                    @endforeach
                                                    
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-4 col-lg-2 col-form-label">Travel Date</label>
                                        <div class="col-sm-8 col-lg-10">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <label class="input-group-text" style="border:1px solid green "><i class="ik ik-volume"></i></label>
                                                </span>
                                                <input type="date" name="travel_date" class="form-control datetimepicker" name="date_of_birth" style="border:1px solid green ">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-4 col-lg-2 col-form-label">Travel Time</label>
                                        <div class="col-sm-8 col-lg-10">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <label class="input-group-text" style="border:1px solid green "><i class="ik ik-volume"></i></label>
                                                </span>
                                                <input type="time" name="travel_time" class="form-control"   style="border:1px solid green ">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-4 col-lg-2 col-form-label">From</label>
                                        <div class="col-sm-8 col-lg-10">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <label class="input-group-text" style="border:1px solid green "><i class="ik ik-volume"></i></label>
                                                </span>
                                                <select class="form-control select2" name="from" id="from" style="border:1px solid green ">
                                                    <option value="cheese">Select</option>
                                                    @foreach ($routes as $route)
                                                    <option value="{{$route->route_from}}">{{$route->route_from}}</option>  
                                                    @endforeach
                                                    
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-4 col-lg-2 col-form-label">To</label>
                                        <div class="col-sm-8 col-lg-10">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <label class="input-group-text" style="border:1px solid green "><i class="ik ik-volume"></i></label>
                                                </span>
                                                <select class="form-control select2" name="to" id='to' style="border:1px solid green ">
                                                    <option >Select</option>
                                                    @foreach ($routes as $route)
                                                    <option value="{{$route->route_to}}">{{$route->route_to}}</option>  
                                                    @endforeach
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-4 col-lg-2 col-form-label">Travel Fee</label>
                                        <div class="col-sm-8 col-lg-10">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <label class="input-group-text" style="border:1px solid green "><i class="ik ik-volume"></i></label>
                                                </span>
                                                <input type="text"   name="amount" class="form-control" style="border:1px solid green; color:red; font-weight: 700; " >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        
                                        <div class="col-sm-8 col-lg-10">
                                            <div class="input-group">
                                                <button type="submit" class="btn btn-success" style="margin-left: 200px; width: 120px;">Submit</button>
                                                
                                            </div>
                                        </div>
                                    </div>
                                   
                                    
                                </form>
                            </div>
                        </div>
                        
                      
                    </div>
                </div>

                {{-- <aside class="right-sidebar">
                    <div class="sidebar-chat" data-plugin="chat-sidebar">
                        <div class="sidebar-chat-info">
                            <h6>Chat List</h6>
                            <form class="mr-t-10">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search for friends ..."> 
                                    <i class="ik ik-search"></i>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </aside> --}}

                <div class="chat-panel" hidden>
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <a href="javascript:void(0);"><i class="ik ik-message-square text-success"></i></a>  
                            <span class="user-name">John Doe</span> 
                            <button type="button" class="close" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        {{-- <div class="card-body">
                            <div class="widget-chat-activity flex-1">
                                <div class="messages">
                                    <div class="message media reply">
                                        <figure class="user--online">
                                            <a href="#">
                                                <img src="img/users/3.jpg" class="rounded-circle" alt="">
                                            </a>
                                        </figure>
                                        <div class="message-body media-body">
                                            <p>Epic Cheeseburgers come in all kind of styles.</p>
                                        </div>
                                    </div>
                                    <div class="message media">
                                        <figure class="user--online">
                                            <a href="#">
                                                <img src="img/users/1.jpg" class="rounded-circle" alt="">
                                            </a>
                                        </figure>
                                        <div class="message-body media-body">
                                            <p>Cheeseburgers make your knees weak.</p>
                                        </div>
                                    </div>
                                    <div class="message media reply">
                                        <figure class="user--offline">
                                            <a href="#">
                                                <img src="img/users/5.jpg" class="rounded-circle" alt="">
                                            </a>
                                        </figure>
                                        <div class="message-body media-body">
                                            <p>Cheeseburgers will never let you down.</p>
                                            <p>They'll also never run around or desert you.</p>
                                        </div>
                                    </div>
                                    <div class="message media">
                                        <figure class="user--online">
                                            <a href="#">
                                                <img src="img/users/1.jpg" class="rounded-circle" alt="">
                                            </a>
                                        </figure>
                                        <div class="message-body media-body">
                                            <p>A great cheeseburger is a gastronomical event.</p>
                                        </div>
                                    </div>
                                    <div class="message media reply">
                                        <figure class="user--busy">
                                            <a href="#">
                                                <img src="img/users/5.jpg" class="rounded-circle" alt="">
                                            </a>
                                        </figure>
                                        <div class="message-body media-body">
                                            <p>There's a cheesy incarnation waiting for you no matter what you palete preferences are.</p>
                                        </div>
                                    </div>
                                    <div class="message media">
                                        <figure class="user--online">
                                            <a href="#">
                                                <img src="img/users/1.jpg" class="rounded-circle" alt="">
                                            </a>
                                        </figure>
                                        <div class="message-body media-body">
                                            <p>If you are a vegan, we are sorry for you loss.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <form action="javascript:void(0)" class="card-footer" method="post">
                            <div class="d-flex justify-content-end">
                                <textarea class="border-0 flex-1" rows="1" placeholder="Type your message here"></textarea>
                                <button class="btn btn-icon" type="submit"><i class="ik ik-arrow-right text-success"></i></button>
                            </div>
                        </form>
                    </div>
                </div>

                <footer class="footer">
                    <div class="w-100 clearfix">
                        <span class="text-center text-sm-left d-md-inline-block">Copyright © 2023 Link Bus Services Limited. All Rights Reserved.</span>
                     
                    </div>
                </footer>
                
            </div>
        </div>
        
        
        
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    
        <script src="plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="{{asset('assets/js/select2.min.js')}}"></script>
	<script src="{{asset('assets/js/moment.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="plugins/screenfull/dist/screenfull.js"></script>
        <script src="../plugins/select2/dist/js/select2.min.js"></script>
        <script src="plugins/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <script src="plugins/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js"></script>
        <script src="plugins/moment/moment.js"></script>
        <script src="plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="plugins/d3/dist/d3.min.js"></script>
        <script src="plugins/c3/c3.min.js"></script>
        <script src="js/tables.js"></script>
        <script src="js/widgets.js"></script>
        <script src="js/charts.js"></script>
        <script src="dist/js/theme.min.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        
            
        
    </body>
</html>
