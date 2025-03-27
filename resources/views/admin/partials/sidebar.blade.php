<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route('admin.dashboard') }}" class="brand-link">
    <img src="{{asset('adminassets')}}/dist/img/adminpp.jpg" alt="Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light"><b>&emsp; {{ Auth::user()->full_name }}</b></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('adminassets')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{Auth::user()->full_name}}</a>
      </div>
    </div> --}}

    {{-- <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div> --}}

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
          <a href="{{ route('admin.dashboard') }}" class="nav-link {{(Request::is('dashboard'))?'active':''}}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>

        {{-- @can('users')
          <li class="nav-item">
            <a href="#" class="nav-link {{(Request::is('users*'))?'active':''}}">
              <i class="nav-icon fas fa-users"></i>
              <p>Users</p>
            </a>
          </li>
        @endcan --}}

        {{-- @can('venue-users')
        <li class="nav-item">
          <a href="" class="nav-link {{(Request::is('venue-users*'))?'active':''}}">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>Venue Users</p>
          </a>
        </li>

        <li class="nav-item {{(Request::is('venue-users','signup-venue-users'))?'menu-is-opening menu-open':''}}">
          <a href="#" class="nav-link {{(Request::is('venue-users','signup-venue-users'))?'active':''}}">
            <i class="nav-icon far fa-envelope"></i>
            <p>
              Venue Users
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link {{(Request::is('venue-users'))?'active':''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Venue Users</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link {{(Request::is('signup-venue-users'))?'active':''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Signup Venue Users</p>
              </a>
            </li>
          </ul>
        </li>
        @endcan

        @can('venue-types')
        <li class="nav-item">
          <a href="#" class="nav-link {{(Request::is('venue-type*','add-venue-type','edit-venue-type*'))?'active':''}}">
            <i class="nav-icon fas fa-copy"></i>
            <p>Venue Types</p>
          </a>
        </li>
        @endcan

        @can('venues')
        <li class="nav-item">
          <a href="#" class="nav-link {{(Request::is('venues','add-venue','edit-venue*','add-venue-gallery*','view-venue-details/*'))?'active':''}}">
            <i class="nav-icon far fa-image"></i>
            <p>Venues</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link {{(Request::is('venue-enquiries'))?'active':''}}">
            <i class="nav-icon fas fa-book"></i>
            <p>Venue Enquiry</p>
          </a>
        </li>
        @endcan

        @can('states')
        <li class="nav-item">
          <a href="#" class="nav-link {{(Request::is('state*','add-state','edit-state*'))?'active':''}}">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>States</p>
          </a>
        </li>
        @endcan

        @can('regions')
        <li class="nav-item">
          <a href="#" class="nav-link {{(Request::is('region*','add-region','edit-region*'))?'active':''}}">
            <i class="nav-icon fas fa-table"></i>
            <p>Regions</p>
          </a>
        </li>
        @endcan

        @can('banners')
        <li class="nav-item">
          <a href="#" class="nav-link {{(Request::is('banners*','add-banner','edit-banner*'))?'active':''}}">
            <i class="nav-icon far fa-plus-square"></i>
            <p>Banners</p>
          </a>
        </li>
        @endcan

        @can('cms-pages')
        <li class="nav-item">
          <a href="#" class="nav-link {{(Request::is('cms-page*'))?'active':''}}">
            <i class="nav-icon fas fa-tree"></i>
            <p>CMS Pages</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link {{(Request::is('blog*'))?'active':''}}">
            <i class="nav-icon fas fa-ellipsis-h"></i>
            <p>Blogs</p>
          </a>
        </li>
        @endcan

        @can('site-settings')
        <li class="nav-item">
          <a href="#" class="nav-link {{(Request::is('site-settings'))?'active':''}}">
            <i class="nav-icon fas fa-th"></i>
            <p>Site Settings</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link {{(Request::is('sub-account*'))?'active':''}}">
            <i class="fas fa-circle nav-icon"></i>
            <p>Sub accounts</p>
          </a>
        </li>
        @endcan

        @can('contact-us')
        <li class="nav-item">
          <a href="#" class="nav-link {{(Request::is('contact-us-list'))?'active':''}}">
            <i class="nav-icon fas fa-columns"></i>
            <p>Contact Us</p>
          </a>
        </li>
        @endcan --}}


        {{-- <li class="nav-item">
          <a href="#" class="nav-link {{(Request::is('change-password'))?'active':''}}">
            <i class="nav-icon fas fa-lock"></i>
            <p>Change Password</p>
          </a>
        </li> --}}
        
        {{--
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-envelope"></i>
            <p>
              Mailbox
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/mailbox/mailbox.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inbox</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/mailbox/compose.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Compose</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/mailbox/read-mail.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Read</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-search"></i>
            <p>
              Search
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/search/simple.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Simple Search</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/search/enhanced.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Enhanced</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">MISCELLANEOUS</li>
        <li class="nav-item">
          <a href="https://adminlte.io/docs/3.1/" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>Documentation</p>
          </a>
        </li>
        <li class="nav-header">MULTI LEVEL EXAMPLE</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-circle nav-icon"></i>
            <p>Level 1</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-circle"></i>
            <p>
              Level 1
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Level 2</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Level 2
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Level 3</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Level 3</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Level 3</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Level 2</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-circle nav-icon"></i>
            <p>Level 1</p>
          </a>
        </li>
        <li class="nav-header">LABELS</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-danger"></i>
            <p class="text">Important</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-warning"></i>
            <p>Warning</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-info"></i>
            <p>Informational</p>
          </a>
        </li> --}}
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>