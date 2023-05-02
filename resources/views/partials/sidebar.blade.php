<aside class="main-sidebar sidebar-white elevation-4 @if($setting_sidebar_color != '') {{ $setting_sidebar_color }} @endif">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="{{ asset('img/AdminLTELogo.png') }}" alt="Company Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('img/user.png') }}" class="img-circle elevation-2 bg-white" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-compact" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Inicio</p>
                    </a>
                </li>
                @hasanyrole('admin|dev')
                <li class="nav-header">{{ __('app.sidebar.titles.admin') }}</li>
                <li class="nav-item">
                    <a href="{{ route('status.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-clock"></i>
                        <p>{{ __('app.status.index') }}</p>
                    </a>
                </li>
                @can('roles index_show')
                <li class="nav-item">
                    <a href="{{ route('role.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>{{ __('app.roles.index') }}</p>
                    </a>
                </li>
                @endcan
                @can('users index_show')
                <li class="nav-item">
                    <a href="{{ route('user.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>{{ __('app.users.index') }}</p>
                    </a>
                </li>
                @endcan
                @endhasanyrole
                @if(auth()->user()->hasRole('admin') || $setting_master)
                <li class="nav-header">{{ __('app.sidebar.titles.dev') }}</li>
                <li class="nav-item">
                    <a href="{{ route('setting.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>{{ __('Settings') }}</p>
                    </a>
                </li>
                @endif
                <div class="mb-4"></div>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
