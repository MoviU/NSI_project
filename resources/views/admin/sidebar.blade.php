<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin_index') }}" class="brand-link">
      <img src="{{ asset('img/logo.svg') }}" alt="AdminLTE Logo" class="brand-image">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


      <!-- Sidebar Menu -->
      <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

      <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-phone"></i>
              <p>
                Заявки
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('form.index', ['complete' => 1]) }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Виконані</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('form.index', ['complete' => 0]) }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Невиконані</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('catalog.index') }}" class="nav-link">
                <i class="nav-icon fas fa-paint-brush"></i>
                <p>
                  Каталог
                </p>
              </a>
          </li>
      </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>