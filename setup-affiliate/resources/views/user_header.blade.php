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
    </div>
  </div>
</nav>
