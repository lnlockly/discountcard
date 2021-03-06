<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="{{ route('client.dashboard') }}">{{ __('main.site_name') }}</a>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                <li><a href="{{ route('client.edit') }}" class="dropdown-item">{{ __('main.Settings') }}</a></li>
                <li>
                    <a href="{{ route('client.logout') }}" class="dropdown-item">{{ __('main.Logout') }}</a>
                </li>

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
                    <a class="nav-link mt-3" href="{{ route('client.dashboard') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        {{ __('main.Dashboard') }}
                    </a>
                    <div class="sb-sidenav-menu-heading"></div>
                    <a class="nav-link" href="{{ route('client.card.edit') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-credit-card"></i></div>
                        {{ __('main.Card') }}
                    </a>
                    <div class="sb-sidenav-menu-heading"></div>
                    <a class="nav-link" href="{{ route('client.statistic.users') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                        {{ __('main.Users') }}
                    </a>
                    <div class="sb-sidenav-menu-heading"></div>
                    <a class="nav-link" href="{{ route('client.statistic.card') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        {{ __('main.Statistic') }}
                    </a>
                    <div class="sb-sidenav-menu-heading"></div>
                    <a class="nav-link" href="{{ route('client.managers') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-address-book"></i></div>
                        {{ __('main.Managers') }}
                    </a>
                    <div class="sb-sidenav-menu-heading"></div>
                    <a class="nav-link" href="index.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                        {{ __('main.Web_push') }}
                    </a>
                    <div class="sb-sidenav-menu-heading"></div>
                    <a class="nav-link" href="{{ route('client.help') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-question-circle"></i></div>
                        {{ __('main.Help') }}
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">{{ __('main.Logged_in_as') }}:</div>
                {{ Auth::user()-> first_name }} {{ Auth::user()-> last_name }}
            </div>
        </nav>
    </div>
</div>
<script type="text/javascript">
    window.addEventListener('DOMContentLoaded', event => {

        // Toggle the side navigation
        const sidebarToggle = document.body.querySelector('#sidebarToggle');
        if (sidebarToggle) {
            sidebarToggle.addEventListener('click', event => {
                event.preventDefault();
                document.body.classList.toggle('sb-sidenav-toggled');
                localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
            });
        }

    });
</script>