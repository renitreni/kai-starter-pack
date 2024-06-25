<!-- Sidebar R.R.T.-->
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
                <img src="{{ asset('vendor/assets/img/kaiadmin/logo_light.svg') }}" alt="navbar brand" class="navbar-brand"
                    height="20">
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>

        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <x-sidebar-link-component routeName="home">
                    <i class="fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </x-sidebar-link-component>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Components</h4>
                </li>

                <x-sidebar-link-collapsable-component prefix="/users" :sub="[
                    'All List' => 'user',
                ]">
                    <i class="fas fa-user"></i>
                    <p>Users</p>
                </x-sidebar-link-collapsable-component>

            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
