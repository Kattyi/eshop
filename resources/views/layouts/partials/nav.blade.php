<nav class="navbar navbar-expand-md navbar-dark px-md-4">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('images/footwear.svg') }}" alt="Logo" width="50" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="collection.html">COLLECTION</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    MAN
                </a>
                <div class="dropdown-menu dropdown-menu-custom text-center" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item dropdown-item-custom text-white" href="#">1</a>
                    <a class="dropdown-item dropdown-item-custom text-white" href="#">2</a>
                    <a class="dropdown-item dropdown-item-custom text-white" href="#">3</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    WOMAN
                </a>
                <div class="dropdown-menu dropdown-menu-custom text-center" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item dropdown-item-custom text-white" href="#">1</a>
                    <a class="dropdown-item dropdown-item-custom text-white" href="#">2</a>
                    <a class="dropdown-item dropdown-item-custom text-white" href="#">3</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">SALE</a>
            </li>
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">

            <li>
                <form class="form-inline my-lg-0">
                    <div class="input-group mr-3">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-search" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </li>
            <li>
                <a href="checkout.html" class="btn">
                    <i class="fas fa-shopping-bag"></i>
                </a>
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
        </ul>

    </div>
</nav>