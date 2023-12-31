 <body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
      <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
          <use xlink:href="<?php echo base_url('assets/admin/dist/assets/brand/coreui.svg#full');?>"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
          <use xlink:href="<?php echo base_url('assets/admin/dist/assets/brand/coreui.svg#signet');?>"></use>
        </svg>
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('auth/dashboard');?>">
            <svg class="nav-icon">
              <use xlink:href="<?php echo base_url('assets/admin/dist/vendors/@coreui/icons/svg/free.svg#cil-speedometer');?>"></use>
            </svg> Dashboard</a></li>
        <hr>
        <li class="nav-title">Kelola Data</li>
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('proyek');?>">
            <svg class="nav-icon">
              <use xlink:href="<?php echo base_url('assets/admin/dist/vendors/@coreui/icons/svg/free.svg#cil-notes');?>"></use>
            </svg> Proyek Galang Dana</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('transaksi');?>">
            <svg class="nav-icon">
              <use xlink:href="<?php echo base_url('assets/admin/dist/vendors/@coreui/icons/svg/free.svg#cil-money');?>"></use>
            </svg> Transaksi</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('kategori');?>">
            <svg class="nav-icon">
              <use xlink:href="<?php echo base_url('assets/admin/dist/vendors/@coreui/icons/svg/free.svg#cil-featured-playlist');?>"></use>
            </svg> Kategori</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('data_user');?>">
            <svg class="nav-icon">
              <use xlink:href="<?php echo base_url('assets/admin/dist/vendors/@coreui/icons/svg/free.svg#cil-user');?>"></use>
            </svg> User</a></li>
            <hr>
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('profilAdmin');?>">
            <svg class="nav-icon">
              <use xlink:href="<?php echo base_url('assets/admin/dist/vendors/@coreui/icons/svg/free.svg#cil-user');?>"></use>
            </svg> Profil Saya</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('auth/logout');?>">
            <svg class="nav-icon">
              <use xlink:href="<?php echo base_url('assets/admin/dist/vendors/@coreui/icons/svg/free.svg#cil-account-logout');?>"></use>
            </svg> Logout</a></li>
            
      
        
      </ul>
      <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <header class="header header-sticky mb-4">
        <div class="container-fluid">
          <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
              <use xlink:href="<?php echo base_url('assets/admin/dist/vendors/@coreui/icons/svg/free.svg#cil-menu');?>"></use>
            </svg>
          </button><a class="header-brand d-md-none" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
              <use xlink:href="<?php echo base_url('assets/admin/dist/assets/brand/coreui.svg#full');?>"></use>
            </svg></a>
          
          <ul class="header-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="<?php echo base_url('assets/admin/dist/vendors/@coreui/icons/svg/free.svg#cil-bell');?>"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="<?php echo base_url('assets/admin/dist/vendors/@coreui/icons/svg/free.svg#cil-list-rich');?>"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="<?php echo base_url('assets/admin/dist/vendors/@coreui/icons/svg/free.svg#cil-envelope-open');?>"></use>
                </svg></a></li>
          </ul>
          <ul class="header-nav ms-3">
            <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md"><img class="avatar-img" src="<?php echo base_url('assets/admin/dist/assets/img/avatars/8.jpg');?>" alt="user@email.com"></div>
              </a>
              <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Account</div>
                </div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="<?php echo base_url('assets/admin/dist/vendors/@coreui/icons/svg/free.svg#cil-bell');?>"></use>
                  </svg> Updates<span class="badge badge-sm bg-info ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="<?php echo base_url('assets/admin/dist/vendors/@coreui/icons/svg/free.svg#cil-envelope-open');?>"></use>
                  </svg> Messages<span class="badge badge-sm bg-success ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="<?php echo base_url('assets/admin/dist/vendors/@coreui/icons/svg/free.svg#cil-task');?>"></use>
                  </svg> Tasks<span class="badge badge-sm bg-danger ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="<?php echo base_url('assets/admin/dist/vendors/@coreui/icons/svg/free.svg#cil-comment-square');?>"></use>
                  </svg> Comments<span class="badge badge-sm bg-warning ms-2">42</span></a>
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Settings</div>
                </div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="<?php echo base_url('assets/admin/dist/vendors/@coreui/icons/svg/free.svg#cil-user');?>"></use>
                  </svg> Profile</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="<?php echo base_url('assets/admin/dist/vendors/@coreui/icons/svg/free.svg#cil-settings');?>"></use>
                  </svg> Settings</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="<?php echo base_url('assets/admin/dist/vendors/@coreui/icons/svg/free.svg#cil-credit-card');?>"></use>
                  </svg> Payments<span class="badge badge-sm bg-secondary ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="<?php echo base_url('assets/admin/dist/vendors/@coreui/icons/svg/free.svg#cil-file');?>"></use>
                  </svg> Projects<span class="badge badge-sm bg-primary ms-2">42</span></a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="<?php echo base_url('assets/admin/dist/vendors/@coreui/icons/svg/free.svg#cil-lock-locked');?>"></use>
                  </svg> Lock Account</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="<?php echo base_url('assets/admin/dist/vendors/@coreui/icons/svg/free.svg#cil-account-logout');?>"></use>
                  </svg> Logout</a>
              </div>
            </li>
          </ul>
        </div>