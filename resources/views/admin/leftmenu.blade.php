<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-text">
      <img src="{{asset('images')}}/site_logo/Logo-Niemi-Vietnam.png" alt="" class="brand-image elevation-3" style="max-width: 100%; opacity: .8;">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('be')}}/dist/img/avatar2.png" class="img-circle elevation-2" alt="avatar">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/view/products/" class="nav-link">
              <i class="fas fa-angle-right mr-1"></i>
              <p>
                Product Manage
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/view/products/" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Products</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="{{route('product-groups.index')}}" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Product Groups</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('product-types.index')}}" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Product Types</p>
                </a>
              </li> --}}
            </ul>
          </li>
          {{-- <li class="nav-item">
            <a href="/view/products/" class="nav-link">
              <i class="fas fa-angle-right mr-1"></i>
              <p>
                Gallery
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('album.index')}}" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Album</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('gallery.index')}}" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Gallery</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('about.index')}}" class="nav-link">
              <i class="fas fa-angle-right mr-1"></i>
              <p>
                About
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="{{route('sns.index')}}" class="nav-link">
            <i class="fas fa-angle-right mr-1"></i>
              <p>
                Social Network
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('site-info.index')}}" class="nav-link">
              <i class="fas fa-angle-right mr-1"></i>
              <p>
                Site Info
              </p>
            </a>
          </li> --}}
          <li class="nav-item">
            <a href="/view/users/" class="nav-link">
              <i class="fas fa-angle-right mr-1"></i>
              <p>
                Users
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>