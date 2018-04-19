<nav class="navbar navbar-expand-md navbar-dark px-md-4">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('images/footwear.svg') }}" alt="Logo" width="50" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/collection">COLLECTION</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Man">MAN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Woman">WOMAN</a>
            </li>
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">

            <li>
                <form class="form-inline my-lg-0" action="/search" method="get">
                    <div class="input-group mr-3">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="search">
                        <div class="input-group-append">
                            <button class="btn btn-search" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </li>

            <!-- Authentication Links -->
            @guest
                <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-custom" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item dropdown-item-custom text-white" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
            <li>
                <a href="/checkout" class="nav-link">
                    <span class="fa-layers fa-fw">
                    <i class="fas fa-shopping-bag fa-2x" style="color: white"></i>
                    <span class="fa-layers-text fa-inverse fa-2x mx-1" data-fa-transform="shrink-8 down-3" style="font-weight:900; color: #EE6F42;">2</span>
                </span>
                </a>
            </li>
        </ul>

    </div>
</nav>