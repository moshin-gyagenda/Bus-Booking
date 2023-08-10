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
        
        <link rel="stylesheet" href="{{asset('plugins/bootstrap/dist/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/icon-kit/dist/css/iconkit.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/ionicons/dist/css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/jvectormap/jquery-jvectormap.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/weather-icons/css/weather-icons.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/c3/c3.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/owl.carousel/dist/assets/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/owl.carousel/dist/assets/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('dist/css/theme.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/print-styles.css')}}" media="print">
        <script src="{{asset('src/js/vendor/modernizr-2.8.3.min.js')}}"></script>
		<style>
			@media print {
    .receipt-main {
      font-size: 14pt;
      line-height: 1.5;
    }
    
    .receipt-main .logo {
      display: none;
    }
    
    /* etc. */
  }
  .text-danger strong {
    color: #9f181c;
}
.receipt-main {
background: #ffffff none repeat scroll 0 0;
border-bottom: 12px solid #333333;
border-top: 12px solid green;
margin-top: 50px;
margin-bottom: 50px;
padding: 40px 30px !important;
position: relative;
box-shadow: 0 1px 21px #acacac;
color: #333333;
font-family: open sans;
}
.receipt-main p {
color: #333333;
font-family: open sans;
line-height: 1.42857;
}
.receipt-footer h1 {
font-size: 15px;
font-weight: 400 !important;
margin: 0 !important;
}
.receipt-main::after {
background: #414143 none repeat scroll 0 0;
content: "";
height: 5px;
left: 0;
position: absolute;
right: 0;
top: -13px;
}
.receipt-main thead {
background: #414143 none repeat scroll 0 0;
}
.receipt-main thead th {
color:#fff;
}
.receipt-right h5 {
font-size: 16px;
font-weight: bold;
margin: 0 0 7px 0;
}
.receipt-right p {
font-size: 12px;
margin: 0px;
}
.receipt-right p i {
text-align: center;
width: 18px;
}
.receipt-main td {
padding: 9px 20px !important;
}
.receipt-main th {
padding: 13px 20px !important;
}
.receipt-main td {
font-size: 13px;
font-weight: initial !important;
}
.receipt-main td p:last-child {
margin: 0;
padding: 0;
}	
.receipt-main td h2 {
font-size: 20px;
font-weight: 900;
margin: 0;
text-transform: uppercase;
}
.receipt-header-mid .receipt-left h1 {
font-weight: 100;
margin: 34px 0 0;
text-align: right;
text-transform: uppercase;
}
.receipt-header-mid {
margin: 24px 0;
overflow: hidden;
}

#container {
background-color: #dcdcdc;
}
		</style>
    </head>

    <body>
        

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
                                <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="{{asset('img/user.jpg')}}" alt=""></a>
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
                                            <h5>Reciepts</h5>
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
                                            <li class="breadcrumb-item active" aria-current="page">Reciept</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
						<div class="col-md-12 " style="margin-left: 200px;">   
							<div class="row">
								   
								   <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
									   <div class="row">
										   <div class="receipt-header">
											   <div class="col-xs-6 col-md-6 col-md-6">
												   <div class="receipt-left">
													   <img class="img-responsive" alt="iamgurdeeposahan" src="{{asset('images/p1.png')}}" style="width: 71px; border-radius: 43px;">
												   </div>
											   </div>
											   <div class="col-xs-12 col-sm-12 col-md-12 text-left">
												   <div class="receipt-right">
													   <h5 style="color: green;">Link Bus</h5>
													   <p>+256 364-658 <i class="fa fa-phone"></i></p>
													   <p>linkbus23@gmail.com <i class="fa fa-envelope-o"></i></p>
													   
												   </div>
											   </div>
										   </div>
									   
									   
										   <div class="receipt-header receipt-header-mid">
											   <div class="col-xs-12 col-sm-12 col-md-12 text-left">
												   <div class="receipt-right">
													   <h5>Customer: {{$ticket->first_name.' '.$ticket->other_name}} </h5>
													   <p><b>Mobile :</b>{{$ticket->phone_number}}</p>
													   <p><b>Email :</b> {{$ticket->email}}</p>
													   <p><b>Address :</b> Uganda</p>
												   </div>
											   </div>
											</div>
											   
										</div>
										<div class="row">
										<div class="col-xs-4 col-sm-4 col-md-4">
											<div class="receipt-left">
												<p>Date: {{ date('F j, Y') }}</p>												</p>
											</div>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-4">
											<div class="receipt-right">
												<p style="background: grey; color: white; text-align:center;">Reciept No: <span style="color:red;">LB0-{{$ticket->id}}</span></p>
											</div>
										</div>
									</div>
									   <div>
										   <table class="table table-bordered">
											   <thead>
												   <tr>
													   <th>Description</th>
													   <th>Amount</th>
												   </tr>
											   </thead>
											   <tbody>
												   <tr>
													   <td class="col-md-9">Payment for Travel Fee</td>
													   <td class="col-md-3"><i class="fa fa-inr"></i> {{$ticket->amount}}/-</td>
												   </tr>
												   
												   <tr>
													   <td class="text-right">
													   
													   <p>
														   <strong>Paid Amount: </strong>
													   </p>
													   
													   </td>
													   <td>
													   
													   <p>
														   <strong><i class="fa fa-inr"></i> 500/-</strong>
													   </p>
													   
													   </td>
												   </tr>
												   <tr>
													  
													   <td class="text-right"><h2><strong>Balance: </strong></h2></td>
													   <td class="text-left text-danger"><h2><strong> 31.566/-</strong></h2></td>
												   </tr>
											   </tbody>
										   </table>
									   </div>
									   
									   <div class="row">
										   <div class="receipt-header receipt-header-mid receipt-footer">
											   <div class="col-xs-12 col-sm-12 col-md-12 text-left">
												   <div class="receipt-right">
													   <p><b>Date :</b> {{ date('Y-m-d') }}</p>
													   <h5 style="color: rgb(140, 140, 140);">Thanks for Travelling with us.!</h5>
												   </div>
											   </div>
											   <div class="col-xs-4 col-sm-4 col-md-4">
												   <div class="receipt-left">
													   <img src="{{asset('img/signature.webp')}}" alt="" width="80px" height="30px">
												   </div>
											   </div>
											   <button class="print-btn btn btn-primary" onclick="printReceipt()"><i class="fa fa-print"></i> Print</button>
											   <button class="print-btn btn btn-success" onclick="downloadPdf()"><i class="fa fa-download"></i> Download PDF</button>

											</div>
									   </div>
									   
								   </div>    
							   </div>
						   </div>
                      
                    </div>
                </div>


                <div class="chat-panel" hidden>
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <a href="javascript:void(0);"><i class="ik ik-message-square text-success"></i></a>  
                            <span class="user-name">John Doe</span> 
                            <button type="button" class="close" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        
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
    
        <script src="{{asset('plugins/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{asset('plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
        <script src="{{asset('plugins/screenfull/dist/screenfull.js')}}"></script>
        <script src="{{asset('plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('plugins/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{asset('plugins/jvectormap/jquery-jvectormap.min.js')}}"></script>
        <script src="{{asset('plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script src="{{asset('plugins/moment/moment.js')}}"></script>
        <script src="{{asset('plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js')}}"></script>
        <script src="{{asset('plugins/d3/dist/d3.min.js')}}"></script>
        <script src="{{asset('plugins/c3/c3.min.js')}}"></script>
        <script src="{{asset('js/tables.js')}}"></script>
        <script src="{{asset('js/widgets.js')}}"></script>
        <script src="{{asset('js/charts.js')}}"></script>
        <script src="{{asset('dist/js/theme.min.js')}}"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
			function printReceipt() {
				var content = document.querySelector('.receipt-main').innerHTML;
				var mywindow = window.open('', 'Receipt', 'height=600,width=800');
				mywindow.document.write('<html><head><title>Receipt</title>');
				mywindow.document.write('</head><body>');
				mywindow.document.write(content);
				mywindow.document.write('</body></html>');
				mywindow.document.close();
				mywindow.focus();
				mywindow.print();
				mywindow.close();
				return true;
			}
		</script>

{{-- these are for downloadPdf --}}
<script>
    function downloadPdf() {
        var content = document.querySelector('.receipt-main').innerHTML;
        $.ajax({
            url: '{{ route('download-pdf') }}',
            method: 'POST',
            data: { content: content, _token: '{{ csrf_token() }}' },
            xhrFields: {
                responseType: 'blob'
            },
            success: function(response) {
                var blob = new Blob([response]);
                var link = document.createElement('a');
                link.href = window.URL.createObjectURL(blob);
                link.download = 'receipt.pdf';
                link.click();
            },
            error: function(xhr) {
                alert('Error downloading PDF');
            }
        });
    }
</script>


		
    </body>
</html>
