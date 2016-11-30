 @include('layouts.partials.header')
 <link href="/css/app.css" rel="stylesheet">
    <div id="app">
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                   <a class="navbar-brand" href="{{route('pembeli')}}"><strong >Toko</strong><i>ku</i><small>.com</small></a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        

                        @if(!Auth::guest())
                          @include('layouts.dropdown')
                           @else
                          <li class="{{Request::segment(1)== "pembeli" ? "active" :""}}"><a href="{{route('pembeli')}}" class="">Home</a>
                           <li class="{{Request::segment(1)== "login" ? "active" :""}}"><a href="{{ url('/login') }}">Login</a></li>
                           <li class="{{Request::segment(1)== "register" ? "active" :""}}"><a href="{{ url('/register') }}">Register</a></li>
                           <li><a href="#">About</a></li>
                           <li><a href="#">Contact</a></li>
                        @endif 
                    </ul>
                </div>
            </div>
        </nav>
    </header>
        

        @yield('content')
    </div>

    <!-- Scripts -->
   <script src="/js/jquery.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/bootstrap.min.js"></script>
     <script src="/jquery-ui/jquery-ui.min.js"></script>
</body>
</html>
