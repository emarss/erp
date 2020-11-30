<nav class="navbar navbar-expand-md navbar-dark d-flex-none">
  <button class="btn btn-link text-white pl-0" type="button" data-toggle="sidebar">
    <i class="material-icons align-middle md-36">short_text</i>
  </button>
  <div class="page-title m-0">{{ $pageTitle ?? "Dashboard" }}</div>

  <div class="collapse navbar-collapse" id="mainNavbar">
    <ul class="navbar-nav ml-auto align-items-center">
      <li class="nav-item notifications d-flex align-self-center align-items-center" id="navbarNotifications">
        <a href="#" class="nav-link">
          <i class="material-icons align-middle">notifications</i>
        </a>
      </li>
      <li class="nav-item nav-divider">
      <li class="nav-item">
        <a href="#" class="nav-link">
          {{ Session::get('department')->name }}
        </a>
      </li>
    </ul>
  </div>
</nav>
