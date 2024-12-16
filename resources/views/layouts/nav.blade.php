<nav class="main-sidebar ps-menu">
    <!-- <div class="sidebar-toggle action-toggle">
        <a href="#">
            <i class="fas fa-bars"></i>
        </a>
    </div> -->
    <!-- <div class="sidebar-opener action-toggle">
        <a href="#">
            <i class="ti-angle-right"></i>
        </a>
    </div> -->
    <div class="sidebar-header">
        <div class="text">E-PUSLING</div>
        <div class="close-sidebar action-toggle">
            <i class="ti-close"></i>
        </div>
    </div>
    <div class="sidebar-content">
        <ul>
            <li class="{{ request()->segment(1) == 'dashboard' ? 'active' : ''}}">
                <a href="{{ route('dashboard')}}" class="link">
                    <i class="ti-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            {{-- <li class="menu-category">
                <span class="text-uppercase">User Interface</span>
            </li> --}}

            {{-- Navigasi menu secara statis di blade --}}
            {{-- @can('read konfigurasi')
            <li class="{{ request()->segment(1) == 'konfigurasi' ? 'active open' : ''}}">
                <a href="#" class="main-menu has-dropdown">
                    <i class="ti-desktop"></i>
                    <span>Konfigurasi</span>
                </a>
                <ul class="sub-menu {{ request()->segment(1) == 'konfigurasi' ? 'expand' : ''}}">
                    @can('read role')
                        <li><a href="{{ route('roles.index')}}" class="link"><span>Roles</span></a></li>
                    @endcan
                </ul>
            </li>
            @endcan --}}

            {{-- Navigasi menu dari database --}}
            @foreach (getMenus() as $menu)
                @can('read', $menu->url)
                    <!-- Jika menu memiliki sub-menu -->
                    @if($menu->subMenus->isNotEmpty())
                        <li class="{{ request()->segment(1) == $menu->url ? 'active open' : '' }}">
                            <a href="#" class="main-menu has-dropdown">
                                <i class="{{ $menu->icon }}"></i>
                                <span>{{ $menu->name }}</span>
                            </a>

                            <!-- Sub-menu -->
                            <ul class="sub-menu {{ request()->segment(1) == $menu->url ? 'expand' : '' }}">
                                @foreach ($menu->subMenus as $submenu)
                                    @can('read', $submenu->url)
                                        <li class="{{ request()->segment(1) == explode('/', $submenu->url)[0] && request()->segment(2) == explode('/', $submenu->url)[1] ? 'active' : '' }}">
                                            <a href="{{ url($submenu->url) }}" class="link">
                                                <span>{{ $submenu->name }}</span>
                                            </a>
                                        </li>
                                    @endcan
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <!-- Jika menu tidak memiliki sub-menu -->
                        <li class="{{ request()->segment(1) == $menu->url ? 'active' : '' }}">
                            <a href="{{ url($menu->url) }}" class="link">
                                <i class="{{ $menu->icon }}"></i>
                                <span>{{ $menu->name }}</span>
                            </a>
                        </li>
                    @endif
                @endcan
            @endforeach


        


        </ul>
    </div>
</nav> 