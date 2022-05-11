<body class="g-sidenav-show  bg-gray-200">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
      <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
          <img src="<?= url('/assets/img/logo-ct.png') ?>" class="navbar-brand-img h-100" alt="main_logo">
          <span class="ms-1 font-weight-bold text-white">Material Dashboard 2</span>
        </a>
      </div>
      <hr class="horizontal light mt-0 mb-2">
      <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white active bg-gradient-primary" href="<?= url('/pages/dashboard.html') ?>">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">dashboard</i>
              </div>
              <span class="nav-link-text ms-1">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="<?= url('/pages/tables.html') ?>">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">table_view</i>
              </div>
              <span class="nav-link-text ms-1">Tables</span>
            </a>
          </li>
          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Configurations</h6>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="<?= url('/dashboard/profile') ?>">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">person</i>
              </div>
              <span class="nav-link-text ms-1">My Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="<?= url('/dashboard/user') ?>">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">manage_accounts</i>
              </div>
              <span class="nav-link-text ms-1">Users List</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="<?= url('/dashboard/role') ?>">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">verified_user</i>
              </div>
              <span class="nav-link-text ms-1">Role</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="<?= url('/dashboard/navigation') ?>">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">autorenew</i>
              </div>
              <span class="nav-link-text ms-1">Navigation</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="<?= url('/dashboard/setting') ?>">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">settings</i>
              </div>
              <span class="nav-link-text ms-1">Setting</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
          <a class="btn bg-gradient-primary mt-4 w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Log Out</a>
        </div>
      </div>
    </aside>