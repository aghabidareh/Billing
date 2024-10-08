  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('homePage') }}" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Billing</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('Admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('my-account') }}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>

          <li class="nav-item">
            <a href="{{ route('parties-type') }}" class="nav-link @if(Request::segment(2) == 'partiesType') active @endif">
              <i class="nav-icon far fa-user"></i>
              <p>
                Parties Type
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('parties') }}" class="nav-link @if(Request::segment(2) == 'parties') active @endif">
              <i class="nav-icon far fa-user"></i>
              <p>
                Parties
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('bills') }}" class="nav-link @if(Request::segment(2) == 'bills') active @endif">
              <i class="nav-icon far fa-user"></i>
              <p>
                Bills
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('my-account') }}" class="nav-link @if(Request::segment(2) == 'my-account') active @endif">
              <i class="nav-icon far fa-user"></i>
              <p>
                My Account
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
