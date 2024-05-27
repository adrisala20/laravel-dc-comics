<header class="bg-white">
    <div  class="container d-flex">
        <div id="logo">
            <img src="../../../images/dc-logo.png" alt="DC logo">
        </div>
        <div id="main-menu">
        <nav class="navbar-nav container navbar-light">
            <ul class="list-unstyled d-flex justify-content-center gap-2 text-uppercase">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'characters' ? 'active' : '' }}"
                        href="{{route('characters')}}">
                        Characters
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'comics' ? 'active' : '' }}"
                        href="{{route('comics')}}">
                        Comics
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'movies' ? 'active' : '' }}"
                        href="{{route('movies')}}">
                        Movies
                    </a>
                </li><li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'tv' ? 'active' : '' }}"
                        href="{{route('tv')}}">
                        tv
                    </a>
                </li><li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'games' ? 'active' : '' }}"
                        href="{{route('games')}}">
                        Games
                    </a>
                </li><li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'collectibles' ? 'active' : '' }}"
                        href="{{route('collectibles')}}">
                        collectibles
                    </a>
                </li><li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'videos' ? 'active' : '' }}"
                        href="{{route('videos')}}">
                        Videos
                    </a>
                </li><li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'fans' ? 'active' : '' }}"
                        href="{{route('fans')}}">
                        Fans
                    </a>
                </li><li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'new' ? 'active' : '' }}"
                        href="{{route('new')}}">
                        New
                    </a>
                </li><li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'shops' ? 'active' : '' }}"
                        href="{{route('shops')}}">
                        Shops
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    </div>
</header>
