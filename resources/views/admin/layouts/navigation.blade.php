<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="{{ route('client.dashboard') }}">{{ __('admin.admin_panel') }}</a>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
    </ul>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm " id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link" href="{{ route('admin.statistic') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        {{ __('admin.statistic') }}
                    </a>
                    <div class="sb-sidenav-menu-heading"></div>
                    <a class="nav-link" href="{{ route('admin.help') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-question-circle"></i></div>
                        {{ __('main.Help') }}
                    </a>
                </div>
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
