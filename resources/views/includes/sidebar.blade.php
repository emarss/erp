<nav class="drawer drawer--dark">
  <div class="drawer-spacer">
    <div class="media align-items-center">
      <a href="{{ route('dashboard') }}" class="drawer-brand-circle bg-primary mr-2">
        <img src="{{ asset('images/logos/emarss.png') }}" alt="logo" class="img-fluid rounded-circle">
      </a>
      <div class="media-body">
        <a href="{{ route('dashboard') }}" class="h5 m-0 text-link">{{ config('app.name') }}</a>
      </div>
    </div>
  </div>
  <!-- HEADING -->
  <div class="py-2 drawer-heading">
    Dashboards
  </div>
  <!-- DASHBOARDS MENU -->
  <ul class="drawer-menu">
    <li class="drawer-menu-item">
      <a href="{{ route('dashboard') }}">
        <i class="material-icons">home</i>
        <span class="drawer-menu-text"> Home</span>
      </a>
    </li>

    <li class="drawer-menu-item drawer-submenu">
      <a data-toggle="collapse" data-parent="#pagesMenu" href="#" data-target="#salesMenu" aria-controls="salesMenu"  aria-expanded="false"  class="collapsed">
        <i class="material-icons">business</i>
        <span class="drawer-menu-text"> Sales</span>
      </a>
      <ul class="collapse" id="salesMenu">
        <li class="drawer-menu-item"><a href="{{ route('sales') }}">Sales</a></li>
        <li class="drawer-menu-item"><a href="{{ route('stocks') }}">Products (Stock)</a></li>
        <li class="drawer-menu-item"><a href="">Received Products</a></li>
        <li class="drawer-menu-item"><a href="">Suppliers</a></li>
        <li class="drawer-menu-item"><a href="">Clients</a></li>
      </ul>
    </li>

    <li class="drawer-menu-item drawer-submenu">
      <a data-toggle="collapse" data-parent="#pagesMenu" href="#" data-target="#financesMenu" aria-controls="financesMenu"  aria-expanded="false"  class="collapsed">
        <i class="material-icons">monetization_on</i>
        <span class="drawer-menu-text"> Finances</span>
      </a>
      <ul class="collapse" id="financesMenu">
        <li class="drawer-menu-item"><a href="">Quotations</a></li>
        <li class="drawer-menu-item"><a href="">Invoices</a></li>
        <li class="drawer-menu-item"><a href="">Requisitions</a></li>
      </ul>
    </li>


    <li class="drawer-menu-item drawer-submenu">
      <a data-toggle="collapse" data-parent="#pagesMenu" href="#" data-target="#adminMenu" aria-controls="adminMenu"  aria-expanded="false"  class="collapsed">
        <i class="material-icons">nature_people</i>
        <span class="drawer-menu-text"> Administration</span>
      </a>
      <ul class="collapse" id="adminMenu">
        <li class="drawer-menu-item"><a href="{{ route('properties') }}">Properties</a></li>
        <li class="drawer-menu-item"><a href="{{ route('employees') }}">Employees</a></li>
        <li class="drawer-menu-item"><a href="{{ route('users') }}">Users</a></li>
        <li class="drawer-menu-item"><a href="{{ route('departments') }}">Departments</a></li>
      </ul>
    </li>


    <li class="drawer-menu-item drawer-submenu">
      <a data-toggle="collapse" data-parent="#pagesMenu" href="#" data-target="#systemMenu" aria-controls="systemMenu"  aria-expanded="false"  class="collapsed">
        <i class="material-icons">security</i>
        <span class="drawer-menu-text"> System</span>
      </a>
      <ul class="collapse" id="systemMenu">
        <li class="drawer-menu-item"><a href="{{ route('currencies') }}">Currencies</a></li>
        <li class="drawer-menu-item"><a href="{{ route('user-roles') }}">User Roles</a></li>
        <li class="drawer-menu-item"><a href="{{ route('unit-of-measures') }}">Unit of Measures</a></li>
        <li class="drawer-menu-item"><a href="{{ route('payment-methods') }}">Payment Methods</a></li>
        <li class="drawer-menu-item"><a href="">Logs</a></li>
      </ul>
    </li>


    <li class="drawer-menu-item drawer-submenu">
      <a href="{{ route('settings') }}" >
        <i class="material-icons">settings</i>
        <span class="drawer-menu-text"> Settings</span>
      </a>
    </li>
    <li class="drawer-menu-item drawer-submenu">
      <a href="" >
        <i class="material-icons">contact_mail</i>
        <span class="drawer-menu-text"> Subscribers</span>
      </a>
    </li>
    <li class="drawer-menu-item drawer-submenu">
      <a href="" >
        <i class="material-icons">feedback</i>
        <span class="drawer-menu-text"> Feedback</span>
      </a>
    </li>
    <div class="py-2 drawer-heading"> Account </div>
    <li class="drawer-menu-item drawer-submenu">
      <a href="{{ route('profile') }}" >
        <i class="material-icons">person</i>
        <span class="drawer-menu-text"> Profile</span>
      </a>
    </li>
    <li class="drawer-menu-item drawer-submenu">
      <a href="#" data-toggle="modal" data-target="#logoutModal">
        <i class="material-icons">exit_to_app</i>
        <span class="drawer-menu-text"> Logout</span>
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    </li>
  </ul>

</nav>
