<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('lte/dist/img/logo-aplas.png')}}" alt="APLAS logo" class="brand-image elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">WebApps</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('lte/dist/img/avatar3.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</span>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="{{URL::to('student/tasks')}}" class="nav-link">
              <i class="nav-icon fas fa-space-shuttle"></i>
              <p>
                Start Learning
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('student/results')}}" class="nav-link">
              <i class="nav-icon fas fa-object-ungroup"></i>
              <p>
                Submit Task Result
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('student/valid')}}" class="nav-link">
              <i class="nav-icon fas fa-fire"></i>
              <p>
                Submission Result
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('student/rankview')}}" class="nav-link">
              <i class="nav-icon fas fa-fire"></i>
              <p>
                Top 20 Rank 
              </p>
            </a>
          </li>
 <li class="nav-item">
            <a href="{{URL::to('student/jplasdown')}}" class="nav-link">
              <i class="nav-icon fas fa-fire"></i>
              <p>
                Learning JPLAS <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
