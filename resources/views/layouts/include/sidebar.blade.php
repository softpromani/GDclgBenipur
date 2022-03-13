<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link elevation-4">
      <img src="{{asset('adminlayout/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('adminlayout/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Himanshu Sharma</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('admin.dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-house-user"></i>
              <p> Dashboard </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.notice')}}" class="nav-link">
              <i class="nav-icon fas fa-bell"></i>
              <p> Notice </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.department')}}" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p> Department </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p> Manage Teacher <i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('admin.addteacher')}}" class="nav-link">
                    <i class="far fa-list nav-icon"></i>
                    <p>Add Teacher</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.viewteacher')}}" class="nav-link">
                      <i class="far fa-list nav-icon"></i>
                      <p>View Teacher</p>
                    </a>
                  </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p> Manage Non-Teaching <i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('admin.addnonteacher')}}" class="nav-link">
                    <i class="far fa-list nav-icon"></i>
                    <p>Add Non-Teaching</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.viewnonteacher')}}" class="nav-link">
                      <i class="far fa-list nav-icon"></i>
                      <p>View Non-Teaching</p>
                    </a>
                  </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.slider')}}" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p> Slider </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-images"></i>
              <p> Manage Gallery <i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-list nav-icon"></i>
                    <p>Add Image</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-list nav-icon"></i>
                      <p>View Image</p>
                    </a>
                  </li>
            </ul>
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-newspaper"></i>
                  <p> Manage Press <i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-list nav-icon"></i>
                        <p>Add Images</p>
                      </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-list nav-icon"></i>
                          <p>View Images</p>
                        </a>
                      </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-address-book"></i>
                  <p> Manage Academics <i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-list nav-icon"></i>
                        <p>Academic Calendar</p>
                      </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-list nav-icon"></i>
                          <p>Time Table</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-list nav-icon"></i>
                          <p>Fee Structure</p>
                        </a>
                    </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p> Manage Committee Cell<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-list nav-icon"></i>
                        <p>Committees</p>
                      </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-list nav-icon"></i>
                          <p>Members</p>
                        </a>
                      </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p> Manage NAAC <i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-list nav-icon"></i>
                        <p>AQAR</p>
                      </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-list nav-icon"></i>
                          <p>SSR</p>
                        </a>
                      </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-address-card"></i>
                  <p> Contact Us </p>
                </a>
              </li>
          </li>
        </ul>
        <br/><br/><br/><br/><br/>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
