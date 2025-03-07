<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{ route('deliverydashboard') }}" class="logo logo-dark">
            <span class="logo-sm p-2">
                <img class="rounded-pill" src="{{ asset('assets/images/ajfavicon.jpg') }}" alt="dfavicon" height="35" />
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/mainlogo.png') }}" alt="dbalogo" height="80" />
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ route('deliverydashboard') }}" class="logo logo-light py-2">
            <span class="logo-sm p-2">
                <img class="rounded-pill" src="{{ asset('assets/images/ajfavicon.jpg') }}" alt=""
                    height="35" />
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/mainlogo.png') }}" alt="dbalogo" height="80" />
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item {{ request()->routeIs('deliverydashboard') ? 'active' : '' }}">
                    <a class="nav-link menu-link" href="{{ route('deliverydashboard') }}" role="button" aria-expanded="false"
                        aria-controls="sidebarDashboards">
                       <i class="bx bx-home-alt"></i>Home
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-background"></div>
</div>
