<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="mobile-web-app-capable" content="yes">
  <title>MYKO APP</title>
  <link rel="stylesheet" type="text/css" href= "/css/bulma.min.css">
  <link rel="stylesheet" type="text/css" href= "/css/bulma.css">
  <script src="/js/all.js"></script>
  <script src="/js/jquery.min.js"></script>
</head>
<body>
  <div class="bd-example is-paddingless">
    <nav class="navbar is-black is-fixed-top">
      <div class="navbar-brand">
        <a class="navbar-item">

        </a>
      </div>

      <div id="navMenuColorblack-example" class="navbar-menu">
        <div class="navbar-end">
          <div class="navbar-item">
            <div class="field is-grouped">
              @guest
                <button  onclick="window.location='{{ route('login') }}'" class="button has-background-warning">
                  <span class="icon">
                    <i class="fas fa-sign-in-alt"></i>
                  </span>
                  <span class="is-font">Login</span>
                </button>
                  @else
              <div class="dropdown is-right">
                <div class="dropdown-trigger">
                  <button class="button has-background-warning" aria-haspopup="true" aria-controls="dropdown-menu6">
                    <span class="icon">
                      <i class="fas fa-user"></i>
                    </span>
                    <span class="is-font">  {{ Auth::user()->fullname }} </span>
                    <span class="icon is-small">
                      <i class="fas fa-angle-down" aria-hidden="true"></i>
                    </span>
                  </button>
                </div>
                <div class="dropdown-menu is-font" id="dropdown-menu6" role="menu">
                  <div class="dropdown-content">
                    <a href="#" class="dropdown-item">
                      <span class="icon">
                        <i class="fas fa-user"></i>
                      </span>
                        <span>Profile Setting</span>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="{{ route('logout') }}" class="dropdown-item"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                      <span class="icon">
                        <i class="fas fa-heart-broken"></i>
                      </span>
                        <span>  {{ __('Logout') }}</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                  </div>
                </div>
              </div>
              @endguest
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <div class="bg-img">
@yield('content')
 </div>



</body>
<script>
var dropdown = document.querySelector('.dropdown');
dropdown.addEventListener('click', function(event) {
  event.stopPropagation();
  dropdown.classList.toggle('is-active');
});
</script>
</html>
