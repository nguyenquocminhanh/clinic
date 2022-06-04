<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="{{ url('dashboard') }}">
            <div class="logo-img">
                
            </div>
            <span class="text">Hospital</span>
        </a>

        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
    </div>
    
    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">
                <div class="nav-lavel">Navigation</div>
                <div class="nav-item active">
                    <a href="{{ url('dashboard') }}"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                </div>
                
                @if(Auth::check() && Auth::user()->role->name == 'Admin')
                <div class="nav-lavel">Work</div>
                <div class="nav-item has-sub">
                    <a href="javascript:void(0)"><i class="ik ik-users"></i><span>Doctor</span> <span class="badge badge-danger"></span></a>
                    <div class="submenu-content">
                        <a href="{{ route('doctor.create') }}" class="menu-item">Add Doctor</a>
                        <a href="{{ route('doctor.index') }}" class="menu-item">Doctor List</a>
                    </div>
                </div>

                <div class="nav-item has-sub">
                    <a href="javascript:void(0)"><i class="ik ik-clipboard"></i><span>Department</span> <span class="badge badge-danger"></span></a>
                    <div class="submenu-content">
                        <a href="{{ route('department.create') }}" class="menu-item">Add Department</a>
                        <a href="{{ route('department.index') }}" class="menu-item">Department List</a>
                    </div>
                </div>

                <div class="nav-lavel">Patients</div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-calendar"></i><span>Patient Booking</span></a>
                    <div class="submenu-content">
                        <a href="{{ route('today.booking') }}" class="menu-item">Today Booking</a>
                        <a href="{{ route('all.booking') }}" class="menu-item">All Booking</a>
                    </div>
                </div>
                @endif

                @if(Auth::check() && Auth::user()->role->name == 'Doctor')
                <div class="nav-lavel">Work</div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-clock"></i><span>Appointment Time</span></a>
                    <div class="submenu-content">
                        <a href="{{ route('appointment.create') }}" class="menu-item">Add Time Slots</a>
                        <a href="{{ route('appointment.index') }}" class="menu-item"><span>Check Time Slots</span></a>
                    </div>
                </div>

                <div class="nav-lavel">Patients</div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-users"></i><span>Patient Prescription</span></a>
                    <div class="submenu-content">
                        <a href="{{ route('patients.visited.today') }}" class="menu-item">Today Patients</a>
                        <a href="{{ route('patients.from.prescription') }}" class="menu-item"><span>All Patients (Prescription)</span></a>
                    </div>
                </div>
                @endif

                <div class="nav-item">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="ik ik-power dropdown-icon"></i>
                        <span>Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </nav>
        </div>
    </div>
</div>
