<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
  data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Dashboard</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../Inventory/assets/img/icons/3.png" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="../Inventory/assets/vendor/fonts/materialdesignicons.css" />

  <!-- Menu waves for no-customizer fix -->
  <link rel="stylesheet" href="../Inventory/assets/vendor/libs/node-waves/node-waves.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../Inventory/assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../Inventory/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../Inventory/assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../Inventory/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="../Inventory/assets/vendor/libs/apex-charts/apex-charts.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="../Inventory/assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../Inventory/assets/js/config.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="dashboard.php" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-semibold ms-2">Inventory</span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="mdi menu-toggle-icon d-xl-block align-middle mdi-20px"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboards -->


          <li class="menu-item active">
            <a href="dashboard.php" class="menu-link">
              <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
              <div data-i18n="Dashboards">Dashboard</div>
            </a>
          </li>

          <li class="menu-item">
            <a href="product_list.php" class="menu-link">
              <i class="menu-icon tf-icons mdi mdi-store-outline"></i>
              <div data-i18n="User interface">Products List</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="add_product.php" class="menu-link">
              <i class="menu-icon tf-icons mdi mdi-cube-outline"></i>
              <div data-i18n="User interface">Add Products</div>
            </a>
          </li>

          

        </ul>
      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="mdi mdi-menu mdi-24px"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class="mdi mdi-magnify mdi-24px lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none bg-body" placeholder="Search..."
                  aria-label="Search..." />
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Place this tag where you want the button to render. -->
              <li class="nav-item lh-1 me-3">
                <label>Lakshitha Madumal</label>
              </li>

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="../Inventory/assets/img/profile/1.jpg" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end mt-3 py-2">
                  <li>
                    <a class="dropdown-item pb-2 mb-1" href="#">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 me-2 pe-1">
                          <div class="avatar avatar-online">
                            <img src="../Inventory/assets/img/profile/1.jpg" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="mb-0">Lakshitha Madumal</h6>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider my-1"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="mdi mdi-account-outline me-1 mdi-20px"></i>
                      <span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="mdi mdi-cog-outline me-1 mdi-20px"></i>
                      <span class="align-middle">Settings</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <span class="d-flex align-items-center align-middle">
                        <i class="flex-shrink-0 mdi mdi-credit-card-outline me-1 mdi-20px"></i>
                        <span class="flex-grow-1 align-middle ms-1">Billing</span>
                        <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                      </span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider my-1"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);">
                      <i class="mdi mdi-power me-1 mdi-20px"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row gy-4">
              
              <!-- Transactions -->
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Transactions</h5>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <i class="mdi mdi-dots-vertical mdi-24px"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                          <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                          <a class="dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row g-3">
                      <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                          <div class="avatar">
                            <div class="avatar-initial bg-primary rounded shadow">
                              <i class="mdi mdi-trending-up mdi-24px"></i>
                            </div>
                          </div>
                          <div class="ms-3">
                            <div class="small mb-1">Sales</div>
                            <h5 class="mb-0">0</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                          <div class="avatar">
                            <div class="avatar-initial bg-success rounded shadow">
                              <i class="mdi mdi-account-outline mdi-24px"></i>
                            </div>
                          </div>
                          <div class="ms-3">
                            <div class="small mb-1">Customers</div>
                            <h5 class="mb-0">0</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                          <div class="avatar">
                            <div class="avatar-initial bg-warning rounded shadow">
                              <i class="mdi mdi-cellphone-link mdi-24px"></i>
                            </div>
                          </div>
                          <div class="ms-3">
                            <div class="small mb-1">Product</div>
                            <h5 class="mb-0">0</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                          <div class="avatar">
                            <div class="avatar-initial bg-info rounded shadow">
                              <i class="mdi mdi-currency-usd mdi-24px"></i>
                            </div>
                          </div>
                          <div class="ms-3">
                            <div class="small mb-1">Revenue</div>
                            <h5 class="mb-0">0</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Transactions -->

             
              


              
            </div>
          </div>
          <!-- / Content -->

         

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->

 
  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="../Inventory/assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../Inventory/assets/vendor/libs/popper/popper.js"></script>
  <script src="../Inventory/assets/vendor/js/bootstrap.js"></script>
  <script src="../Inventory/assets/vendor/libs/node-waves/node-waves.js"></script>
  <script src="../Inventory/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="../Inventory/assets/vendor/js/menu.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="../Inventory/assets/vendor/libs/apex-charts/apexcharts.js"></script>

  <!-- Main JS -->
  <script src="../Inventory/assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="../Inventory/assets/js/dashboards-analytics.js"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>