<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('/assets/dist/img/www.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Websi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('/assets/dist/img/bb.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="">
            <a href="" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                Data
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @role(['admin','superadmin'])
              <li class="nav-item">
                <a href="{{route ('siswa.index')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon text-info"></i>
                  <p>Data Siswa</p>
                </a>
              </li>
              @endrole

              @role(['admin','superadmin'])
              <li class="nav-item">
                <a href="{{route ('data_pegawai.index')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon text-info"></i>
                  <p>Data Pegawai</p>
                </a>
              </li>
              @endrole

              @role(['admin','superadmin'])
              <li class="nav-item">
                <a href="{{route ('jurusan.index')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon text-info"></i>
                  <p>Data Jurusan</p>
                </a>
              </li>
              @endrole

              @role(['admin','superadmin'])
              <li class="nav-item">
                <a href="{{route ('kelas.index')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon text-info"></i>
                  <p>Data Kelas</p>
                </a>
              </li>
              @endrole
            </ul>
          </li>

          @role('member')
          <li class="nav-item">
            <a href="{{route ('pertanyaan.index')}}" class="nav-link">
              <i class="nav-icon fa fa-envelope-o"></i>
              <p>
                Pertanyaan
              </p>
            </a>
          </li>
          @endrole


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Pengaduan
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @role(['admin','superadmin'])
              <li class="nav-item">
                <a href="{{route ('jawab.index')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Jawab pertanyaan</p>
                </a>
              </li>
            </ul>
          </li>
          @endrole
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-plus-square-o"></i>
              <p>
                Pegaturan
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @role(['member','admin','superadmin'])
              <li class="nav-item">
                <a href="pages/examples/404.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              @endrole
            </ul>
          </li>

          @role(['member','admin','superadmin'])
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
              <i class="nav-icon fa fa-circle-o text-danger"></i>
              <p class="text">Logout</p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> {{ csrf_field() }}
            </form>
          </li>
          @endrole
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>