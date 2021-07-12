<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="{{ route('dashboard') }}">Discountcard manage</a>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <li><button onclick="event.preventDefault();
                                                this.closest('form').submit();" class="dropdown-item">Logout</button></li>
                </form>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm " id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        {{ __('Dashboard') }}
                    </a>
                    <div class="sb-sidenav-menu-heading"></div>
                    <a class="nav-link" href="index.html">
                        {{ __('Card') }}
                    </a>
                    <div class="sb-sidenav-menu-heading"></div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseStats" aria-expanded="false" aria-controls="collapseStats">
                        {{ __('Statistic') }}
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseStats" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="layout-static.html">{{ __('Card') }}</a>
                            <a class="nav-link" href="layout-sidenav-light.html">{{ __('User') }}</a>
                        </nav>
                    </div>
                    <div class="sb-sidenav-menu-heading"></div>
                    <a class="nav-link" href="index.html">
                        {{ __('Managers') }}
                    </a>
                    <div class="sb-sidenav-menu-heading"></div>
                    <a class="nav-link" href="index.html">
                        {{ __('Web push') }}
                    </a>
                    <div class="sb-sidenav-menu-heading"></div>
                    <a class="nav-link" href="index.html">
                       {{ __('Help') }}
                    </a>
                    <div class="sb-sidenav-menu-heading"></div>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                {{ Auth::user()-> first_name }} {{ Auth::user()-> last_name }}
            </div>
        </nav>
    </div>
</div>
