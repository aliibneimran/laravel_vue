<aside class="left-sidebar sidebar-dark" id="left-sidebar">
  <div id="sidebar" class="sidebar sidebar-with-footer">
      <!-- Aplication Brand -->
      <div class="app-brand">
        @if (Auth::guard('admin')->check())
            <a href="{{route('admin_dashboard')}}">
                <img src="{{asset('backend/images/logo.png')}}" alt="Mono" />
                <span class="brand-name">Job Box</span>
            </a>

        @elseif(Auth::guard('company')->check())
          <a href="{{route('company_dashboard')}}">
              <img src="{{asset('backend/images/logo.png')}}" alt="Mono" />
              <span class="brand-name">Job Box</span>
          </a>
        @endif
      </div>
      <!-- begin sidebar scrollbar -->
      <div class="sidebar-left" data-simplebar style="height: 100%">
          <!-- sidebar menu -->
            @if (Auth::guard('admin')->check())
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="active"><a class="sidenav-item-link" href="{{route('admin_dashboard')}}"><i class="mdi mdi-briefcase-account-outline"></i><span class="nav-text">Admin Dashboard</span></a>
                </li>
                <li><a class="sidenav-item-link" href="{{route('all-jobs')}}"><i class="mdi mdi-arrow-all"></i><span class="nav-text">Jobs</span></a></li>

                <li><a class="sidenav-item-link" href="{{route('categories.index')}}"><i class="mdi mdi-arrow-all"></i><span class="nav-text">Categories</span></a></li>

                <li><a class="sidenav-item-link" href="{{route('locations.index')}}"><i class="mdi mdi-arrow-all"></i><span class="nav-text">Locations</span></a></li>

                <li><a class="sidenav-item-link" href="{{route('industries.index')}}"><i class="mdi mdi-arrow-all"></i><span class="nav-text">Industries</span></a></li>

                <li><a class="sidenav-item-link" href="{{route('packages.index')}}"><i class="mdi mdi-arrow-all"></i><span class="nav-text">Packages</span></a></li>

                <li><a class="sidenav-item-link" href="{{route('payments.index')}}"><i class="mdi mdi-arrow-all"></i><span class="nav-text">Payment</span></a></li>
            </ul>               

            @elseif(Auth::guard('company')->check())

            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="active"><a class="sidenav-item-link" href="{{route('company_dashboard')}}"><i class="mdi mdi-briefcase-account-outline"></i><span class="nav-text">Company Dashboard</span></a>
                </li>
                <li><a class="sidenav-item-link" href="{{route('jobs.index')}}"><i class="mdi mdi-arrow-all"></i><span class="nav-text">Jobs</span></a></li>
                <li><a class="sidenav-item-link" href="{{route('applications.index')}}"><i class="mdi mdi-arrow-all"></i><span class="nav-text">Applicants</span></a></li>

                <li><a class="sidenav-item-link" href="{{route('packages')}}"><i class="mdi mdi-arrow-all"></i><span class="nav-text">Package</span></a></li>

                <li><a class="sidenav-item-link" href="{{route('payments')}}"><i class="mdi mdi-arrow-all"></i><span class="nav-text">Payment</span></a></li>
               

                
            </ul>                
            @endif
      </div>
  </div>
</aside>
