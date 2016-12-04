
 <header>
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#the-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{route('pembeli')}}"><strong >Toko</strong><i>ku</i><small>.com</small></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="the-navbar-collapse">
            
              <ul class="nav navbar-nav navbar-right">
                <li class="{{Request::segment(1)== "" ? "active" :""}}"><a href="{{route('pembeli')}}" class="">Home</a>
                </li>
                 <li class="{{Request::segment(1)== "/login" ? "active" :""}}"><a href="{{ url('/login') }}">Login</a></li>
                 <li class="{{Request::segment(1)== "register" ? "active" :""}}"><a href="{{ url('/register') }}">Register</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container -->
        </nav>
    </header>