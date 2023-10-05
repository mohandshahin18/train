<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link text-center">
      {{-- <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">TRAIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ auth()->user()->avatar }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-item @yield('user-menu-open')">
                <a href="#" class="nav-link @yield('user-active')">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                        {{ __('admin.Users') }}
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link @yield('user-index-active')">
                      <i class="far fa-circle nav-icon"></i>
                      <p>{{ __('admin.All Users') }}</p>
                    </a>
                  </li>

                </ul>
              </li>


          <li class="nav-item @yield('article-menu-open')">
            <a href="#" class="nav-link @yield('article-active')">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                    {{ __('admin.Articles') }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('articels.index') }}" class="nav-link @yield('article-index-active')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('admin.All Articles') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('articels.create') }}" class="nav-link @yield('article-create-active')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('admin.Add Article') }}</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item @yield('project-menu-open')">
            <a href="#" class="nav-link @yield('project-active')">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                    {{ __('admin.Projects') }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('projects.index') }}" class="nav-link @yield('project-index-active')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('admin.All Projects') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('projects.create') }}" class="nav-link @yield('project-create-active')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('admin.Add project') }}</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link"
            onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
               <i class="nav-icon fas fa-sign-out-alt"></i>
               <p>

                                 {{ __('admin.LogOut') }}
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

              </p>
            </a>
          </li>



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
