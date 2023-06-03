<nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">

        <a class="navbar-brand" href="/">
           <img  id="logo" src="/logo/logo.png" class="img-fluid"> Nenad Savkic
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav ml-auto mr-5">

                    <li class=" nav-item mr-3">
                        <a href="{{ route('welcome') }}" class="nav-link"></a>
                     </li>
                     <li class=" nav-item mr-3">
                        <a href="{{ route('aboutMe') }}" class="nav-link">About me</a>
                     </li>

                     <li class=" nav-item mr-3">
                        <a href="{{ route('cars') }}" class="nav-link">Cars</a>
                     </li>
                     <li class=" nav-item mr-3">
                        <a href="{{ route('computers') }}" class="nav-link">Computers</a>
                     </li>
                     <li class=" nav-item mr-3">
                        <a href="{{ route('phones') }}" class="nav-link">Phones</a>
                     </li>

                    <li class=" nav-item mr-3">
                       <a href="{{ route('contactForm') }}" class="nav-link">Contact</a>
		            </li>
                     @if (auth()->check())
                    <li class=" nav-item mr-3">
                        <a href="{{ route('home') }}" class="nav-link">My page</a>
                    </li>
                    @endif
                    <li class=" nav-item mr-3">
                        <a href="{{ route('myDesigns') }}" class="nav-link">My Designs</a>
                     </li>

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img class="nav-image"
                            @if (Auth::user()->user_image)
                               src="{{ asset('/storage/images/'.Auth::user()->user_image) }}"
                            @else
                                src="/images/user_image/noimage.jpg"
                            @endif
                            alt="user_image" width="40">


                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm pt-3 pb-3">
   <div class="container">
       @yield('content-title')
   </div>
</nav>

