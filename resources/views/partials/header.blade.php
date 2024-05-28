<header class="bg-white">
    <div  class="container d-flex">
        <div id="logo">
            <a class="nav-link {{ Route::currentRouteName() == 'characters' ? 'active' : '' }}"
                        href="{{route('home')}}">
                <img src="../../../images/dc-logo.png" alt="DC logo">
            </a>
        </div>
        <div id="main-menu">
        <nav class="navbar-nav container navbar-light">
            <ul class="list-unstyled d-flex justify-content-center gap-2 text-uppercase">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'characters' ? 'active' : '' }}"
                        href="{{route('home')}}">
                        Characters
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'comics.index' ? 'active' : '' }}"
                        href="{{route('comics.index')}}">
                        Comics
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'movies' ? 'active' : '' }}"
                        href="{{route('home')}}">
                        Movies
                    </a>
                </li><li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'tv' ? 'active' : '' }}"
                        href="{{route('home')}}">
                        tv
                    </a>
                </li><li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'games' ? 'active' : '' }}"
                        href="{{route('home')}}">
                        Games
                    </a>
                </li><li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'collectibles' ? 'active' : '' }}"
                        href="{{route('home')}}">
                        collectibles
                    </a>
                </li><li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'videos' ? 'active' : '' }}"
                        href="{{route('home')}}">
                        Videos
                    </a>
                </li><li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'fans' ? 'active' : '' }}"
                        href="{{route('home')}}">
                        Fans
                    </a>
                </li><li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'new' ? 'active' : '' }}"
                        href="{{route('home')}}">
                        New
                    </a>
                </li><li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'comics.create' ? 'active' : '' }}"
                        href="{{route('comics.create')}}">
                        inserisci un comics
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    </div>
</header>
