<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo mr-5" href="{{ route('admin.home') }}">WASCAL</a>
    <a class="navbar-brand brand-logo-mini" href="{{ route('admin.home') }}">WASCAL</a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="ti-view-list"></span>
    </button>
    <ul class="navbar-nav navbar-nav-right">
      
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
          <img src="{{ asset('images/header.png') }}" alt="profile"/>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="ti-power-off text-primary"></i>
            {{ __('Logout') }}
        </a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
  <!-- partial:partials/_sidebar.html --><nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.home') }} ">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Forms</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.registred') }} ">Submited forms</a></li>

              </ul>
            </div>
          </li>

         
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" ><i class="ti-power-off text-primary" style="padding-right: 20px"> </i>
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
        </ul>
      </nav>