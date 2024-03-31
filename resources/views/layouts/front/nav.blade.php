<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html"><img src="{{ asset('assets') }}/img/logo.png"
                        alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-left">
                        @if (Route::has('login'))
                            <li class="nav-item @yield('home-active')"><a class="nav-link"
                                    href="{{ route('front.index') }}">Home</a></li>
                            @auth
                                <li class="nav-item submenu dropdown @yield('category-active')">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">Categories</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link"
                                                href="{{ route('front.category') }}">Food</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="blog-details.html">Bussiness</a></li>
                                        <li class="nav-item"><a class="nav-link" href="blog-details.html">Travel</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item @yield('contact-active')"><a class="nav-link"
                                        href="{{ route('front.contact') }}">Contact</a></li>
                        </ul>

                        <!-- Add new blog -->
                        <a href="#" class="btn btn-sm btn-primary mr-2">Add New</a>
                        <!-- End - Add new blog -->

                        <ul class="nav navbar-nav navbar-right navbar-social">
                            <nav class="-mx-3 flex flex-1 justify-end">

                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link"
                                                href="{{ route('profile.edit') }}">{{ __('Profile') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a class="nav-link" href="route('logout')"
                                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();">{{ __('Log Out') }}</a>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @else
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-sm btn-warning">Register / Login</a>
                                @endif
                            @endauth
                        </nav>
                        @endif <!-- <li class="nav-item submenu dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
              aria-expanded="false">Welcome User</a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link" href="blog-details.html">My Blogs</a></li>
            </ul>
          </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
