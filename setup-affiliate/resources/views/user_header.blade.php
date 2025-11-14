<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">

    <a class="navbar-brand" href="#">
      <img src="{{ asset('upload/logo.png') }}" class="logo-img" alt="Logo">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <!-- Left Menu -->
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('user_dash') ? 'active' : '' }}" href="{{ route('user_dash') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('user_referrals') ? 'active' : '' }}" href="{{ route('user_referrals') }}">Referrals</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('user_comissions') ? 'active' : '' }}" href="{{ route('user_comissions') }}">Commissions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('user_payouts') ? 'active' : '' }}" href="{{ route('user_payouts') }}">Payouts</a>
        </li>
      </ul>

      <!-- Right Auth Section -->
      <ul class="navbar-nav ms-auto">

        @guest
            <li class="nav-item">
                <a class="nav-link text-light" href="{{ route('login') }}">Login</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-light" href="{{ route('register') }}">Register</a>
            </li>
        @else
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown"
                   role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   {{ Auth::user()->name }}
                </a>

                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="#"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                       Logout
                    </a>
                  </li>
                </ul>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        @endguest

      </ul>
    </div>
  </div>
</nav>
