<div class="app-sidebar " style="background: green; color:white;" >
    <div class="sidebar-header">
        <a class="header-brand" href="index.html">
            <div class="logo-img">
                <img
                src="{{asset('images/p1.png')}}"
                alt="logo"
                width="30"
                height="30"
                style="margin-top: -10px"
            />
            </div>
            <span class="text" style=" color:white;">Link Bus</span>
        </a>
        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
    </div>
    
    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">
                <div class="nav-lavel" style=" color:white;">Main Navigation</div>
                <div class="nav-item active">
                    <a href="{{route('dashboard')}}"><i class="ik ik-bar-chart-2" style=" color:white;"></i><span style=" color:white;">Dashboard</span></a>
                </div>
                
                <div class="nav-item has-sub">
                    <a href="javascript:void(0)" style=" color:white;"><i class="ik ik-layers" style=" color:white;"></i><span style=" color:white;">Ticket Bookings</span> <span class="badge badge-danger" style=" color:white;">0</span></a>
                    <div class="submenu-content" style="background: green; color:white;">
                        <a href="{{route('view-tickets')}}" class="menu-item" style=" color:white;">View Tickets</a>
                        <a href="{{route('add-ticket')}}" class="menu-item" style=" color:white;">Add Ticket</a>
                        
                    </div>
                </div>
                
                <div class="nav-item has-sub">
                    <a href="#" style=" color:white;"><i class="ik ik-box" style=" color:white;"></i><span style=" color:white;">Bus Management</span></a>
                    <div class="submenu-content" style="background: green;">
                        <a href="{{route('add-bus')}}" class="menu-item" style=" color:white;">Add Bus</a>
                        <a href="{{route('view-buses')}}" class="menu-item" style=" color:white;">View Buses</a>
                        
                    </div>
                </div>
                <div class="nav-item has-sub">
                    <a href="#" style=" color:white;"><i class="ik ik-gitlab" style=" color:white;"></i><span style=" color:white;">Route Management</span> </a>
                    <div class="submenu-content" style="background: green;">
                        <a href="{{route('add-route')}}" class="menu-item" style=" color:white;">Add Route </a>
                        <a href="{{route('view-routes')}}" class="menu-item" style=" color:white;">View Routes</a>
                       
                    </div>
                </div>
                <div class="nav-item has-sub">
                    <a href="#" style=" color:white;"><i class="ik ik-bar-chart-2" style=" color:white;"></i><span style=" color:white;">Payments</span></a>
                    <div class="submenu-content" style="background: green;">
                        <a href="{{route('pay-for-ticket')}}" class="menu-item" style=" color:white;">Add Payment</a>
                        {{-- <a href="" class="menu-item" style=" color:white;">View Payments</a> --}}
                        
                    </div>
                </div>

                <div class="nav-item has-sub">
                    <a href="#" style=" color:white;"><i class="ik ik-user" style=" color:white;"></i><span style=" color:white;">User Management</span></a>
                    <div class="submenu-content" style="background: green;">
                        <a href="pages/ui/modals.html" class="menu-item" style=" color:white;">Add User</a>
                        <a href="pages/ui/notifications.html" class="menu-item" style=" color:white;">View Users</a>
                        
                    </div>
                </div>
                
            </nav>
        </div>
    </div>
</div>