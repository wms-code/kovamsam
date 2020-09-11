<div class="navbar-container container-fluid">
    <!-- Navbar Collapse -->
    <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
      <!-- Navbar Toolbar -->
      <ul class="nav navbar-toolbar">
        <li class="nav-item hidden-float" id="toggleMenubar">
          <a class="nav-link" data-toggle="menubar" href="#" role="button">
            <i class="icon hamburger hamburger-arrow-left">
              <span class="sr-only">Toggle menubar</span>
              <span class="hamburger-bar"></span>
            </i>
          </a>
        </li>
        <li class="nav-item hidden-sm-down" id="toggleFullscreen">
          <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
            <span class="sr-only">Toggle fullscreen</span>
          </a>
        </li>
        <li class="nav-item hidden-float">
          <a class="nav-link icon md-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
            role="button">
            <span class="sr-only">Toggle Search</span>
          </a>
        </li>
        
      </ul>
      <!-- End Navbar Toolbar -->

      <!-- Navbar Toolbar Right -->
      <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
        
        <li class="nav-item dropdown">
          <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="scale-up" role="button">
            <span class="avatar avatar-online">
              <img src="{{ url('/global') }}/portraits/5.jpg" alt="...">
              <i></i>
            </span>
          </a>
          <div class="dropdown-menu" role="menu">
            @admin('super')
            <a class="dropdown-item" href="{{ route('admin.show') }}" role="menuitem"><i class="icon md-account" aria-hidden="true"></i> Admin</a>
            @permitToParent('Role')
            <a class="dropdown-item" href="{{ route('admin.roles') }}" role="menuitem"><i class="icon md-card" aria-hidden="true"></i> Roles</a>
            @endpermitToParent
            @endadmin

            <a class="dropdown-item" href="{{ route('admin.password.change') }}" role="menuitem"><i class="icon md-settings" aria-hidden="true"></i> Change Password</a>
            <div class="dropdown-divider" role="presentation"></div>
            <a class="dropdown-item" href="/admin/logout" role="menuitem" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
               <i class="icon md-power" aria-hidden="true"></i> {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                style="display: none;">
                @csrf
            </form>

         
            
            
          </div>
        </li>
     
      </ul>
      <!-- End Navbar Toolbar Right -->
    </div>
    <!-- End Navbar Collapse -->

    <!-- Site Navbar Seach -->
    <div class="collapse navbar-search-overlap" id="site-navbar-search">
      <form role="search">
        <div class="form-group">
          <div class="input-search">
            <i class="input-search-icon md-search" aria-hidden="true"></i>
            <input type="text" class="form-control" name="site-search" placeholder="Search...">
            <button type="button" class="input-search-close icon md-close" data-target="#site-navbar-search"
              data-toggle="collapse" aria-label="Close"></button>
          </div>
        </div>
      </form>
    </div>
    <!-- End Site Navbar Seach -->
  </div>