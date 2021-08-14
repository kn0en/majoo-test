  <!-- Page Wrapper -->
  <div id="wrapper">

      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin'); ?>">
              <div class="sidebar-brand-icon rotate-n-15">
                  <i class="fab fa-mastodon"></i>
              </div>
              <div class="sidebar-brand-text mx-auto">Majoo | Admin</div>
          </a>

          <!-- Divider -->
          <hr class="sidebar-divider my-0">

          <!-- Nav Item - Dashboard -->
          <li class="nav-item">
              <a class="nav-link" href="<?= base_url('admin'); ?>">
                  <i class="fas fa-fw fa-tachometer-alt"></i>
                  <span>Dashboard</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Nav Item - Charts -->
          <li class="nav-item">
              <a class="nav-link" href="<?= base_url('admin/addproduct'); ?>">
                  <i class="fas fa-fw fa-plus"></i>
                  <span>Add Product</span></a>
          </li>

          <!-- Nav Item - Charts -->
          <li class="nav-item">
              <a class="nav-link" href="<?= base_url('admin/listproduct'); ?>">
              <i class="fas fa-fw fa-list-ul"></i>
                  <span>List Product</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">
          
          <!-- Nav Item - Tables -->
          <li class="nav-item">
              <a class="nav-link" href="<?= base_url('admin/revieworder'); ?>">
                  <i class="fas fa-fw fa-cart-plus"></i>
                  <span>Review Order</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">

          <!-- Nav Item - Tables -->
          <li class="nav-item">
              <a class="nav-link" href="<?= base_url('product'); ?>">
                  <i class="fas fa-fw fa-home"></i>
                  <span>Back to Landing</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">

          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>

      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

          <!-- Main Content -->
          <div id="content">

              <!-- Topbar -->
              <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                  <!-- Sidebar Toggle (Topbar) -->
                  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                      <i class="fa fa-bars"></i>
                  </button>

                  <!-- Topbar Navbar -->
                  <ul class="navbar-nav ml-auto">

                      <div class="topbar-divider d-none d-sm-block"></div>

                      <!-- Nav Item - User Information -->
                      <li class="nav-item dropdown no-arrow">
                          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['fullname']; ?></span>
                              <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
                          </a>
                          <!-- Dropdown - User Information -->
                          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                              <a class="dropdown-item" href="<?= base_url('admin/myprofile'); ?>">
                                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                  My Profile
                              </a>
                              <a class="dropdown-item" href="<?= base_url('admin/editprofile'); ?>">
                                  <i class="fas fa-user-cog fa-sm fa-fw mr-2 text-gray-400"></i>
                                  Edit Profile
                              </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                  Logout
                              </a>
                          </div>
                      </li>

                  </ul>

              </nav>
              <!-- End of Topbar -->
