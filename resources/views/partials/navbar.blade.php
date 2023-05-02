<nav class="main-header navbar navbar-expand @if($setting_navbar_color != '') {{ $setting_navbar_color }} @else navbar-white @endif navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        @if($setting_maintenance)
        <li class="nav-item pt-2">
            <label for="" class="label bg-warning pl-2 pr-2">Modo mantenimiento activado</label>
        </li>
        @endif
    </ul>

    <ul class="navbar-nav ml-auto">
        @if($setting_languages)
        <li class="nav-item">
            <div class="mt-2">
            @livewire('language-switcher')
            </div>
        </li>
        @endif
        <li class="nav-item">
            <div class="mt-2">
                <input type="checkbox" value="1" id="chk_dark_mode" class="mr-1"><span>Dark Mode</span>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" class="dropdown-item" href="{{ route('logout') }}"
               href="#" role="button"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-2x fa-sign-out-alt"></i>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</nav>
