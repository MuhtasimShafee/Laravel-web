

<nav class="navbar navbar-inverse ">
  <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
          {{ config('app.name', 'Laravel') }}
      </a>
      <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class=" navbar   " id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class=" navbar">

          </ul>


          <ul class=" navbar nav collapsed">
            <li><a href="/">Home</a></li>
            <li><a href="/About">About</a></li>
            <li><a href="/services">Service</a></li>
            <li><a href="/posts">Blog</a></li>
          </ul>


          <!-- Right Side Of Navbar -->
          <ul class=" navbar nav ">
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
                          {{ Auth::user()->name }}
                      </a>

                      

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>
                          <li><a href="/Dashboard">Dashboard</a></li>
                          

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










 