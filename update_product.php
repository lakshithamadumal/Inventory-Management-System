<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr"
    data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

        <title>Update Product</title>

        <meta name="description" content />

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon"
            href="../Inventory/assets/img/icons/3.png" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
            rel="stylesheet" />

        <link rel="stylesheet"
            href="../Inventory/assets/vendor/fonts/materialdesignicons.css" />

        <!-- Menu waves for no-customizer fix -->
        <link rel="stylesheet"
            href="../Inventory/assets/vendor/libs/node-waves/node-waves.css" />

        <!-- Core CSS -->
        <link rel="stylesheet" href="../Inventory/assets/vendor/css/core.css"
            class="template-customizer-core-css" />
        <link rel="stylesheet"
            href="../Inventory/assets/vendor/css/theme-default.css"
            class="template-customizer-theme-css" />
        <link rel="stylesheet" href="../Inventory/assets/css/demo.css" />

        <!-- Vendors CSS -->
        <link rel="stylesheet"
            href="../Inventory/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
        <link rel="stylesheet"
            href="../Inventory/assets/vendor/libs/apex-charts/apex-charts.css" />

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

                <aside id="layout-menu"
                    class="layout-menu menu-vertical menu bg-menu-theme">
                    <div class="app-brand demo">
                        <a href="dashboard.php" class="app-brand-link">
                            
                            <span
                                class="app-brand-text demo menu-text fw-semibold ms-2">Inventory</span>
                        </a>

                        <a href="javascript:void(0);"
                            class="layout-menu-toggle menu-link text-large ms-auto">
                            <i
                                class="mdi menu-toggle-icon d-xl-block align-middle mdi-20px"></i>
                        </a>
                    </div>

                    <div class="menu-inner-shadow"></div>

                    <ul class="menu-inner py-1">
                        <!-- Dashboards -->

                        <li class="menu-item">
                            <a href="dashboard.php" class="menu-link">
                                <i
                                    class="menu-icon tf-icons mdi mdi-home-outline"></i>
                                <div data-i18n="Dashboards">Dashboard</div>
                            </a>
                        </li>

                        <li class="menu-item active">
                            <a href="product_list.php" class="menu-link">
                                <i
                                    class="menu-icon tf-icons mdi mdi-store-outline"></i>
                                <div data-i18n="User interface">
                                    Products List</div>

                            </a>
                        </li>
                        <li class="menu-item ">
                            <a href="add_product.php" class="menu-link">
                                <i
                                    class="menu-icon tf-icons mdi mdi-store-outline"></i>
                                <div data-i18n="User interface">Add
                                    Products</div>
                            </a>
                        </li>

                    </ul>
                </aside>
                <!-- / Menu -->

                <!-- Layout container -->
                <div class="layout-page">

                    <!-- Content wrapper -->
                    <div class="content-wrapper">
                        <!-- Content -->

                        <div class="container-xxl flex-grow-1 container-p-y">
                            <div class="row gy-4">

                                <!-- Header -->
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div
                                                class="d-flex align-items-center justify-content-between">
                                                <h5
                                                    class="card-title m-0 me-2">Update
                                                    Product</h5>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!--/ Header -->

                                <!-- body -->

                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-10">
                                                        <input type="text"
                                                        value="SKU-L5EZO1WK"
                                                            class="form-control border rounded-3"
                                                            id="title" />
                                                    </div>
                                                    <div
                                                        class="col-2 btn btn-success">generate</div>
                                                </div>
                                            </div>

                                            <div class="col-12 mt-3">
                                                <input type="text"
                                                value="LG LED TV"
                                                    class="form-control border rounded-3"
                                                    id="title" />
                                            </div>
                                            <div class="col-12 mt-3">
                                                <div class="row">
                                                    <div class="col-10">
                                                        <input type="text"
                                                        value="646754757667866"
                                                            class="form-control border rounded-3"
                                                            id="title" />
                                                    </div>
                                                    <div
                                                        class="col-2 btn btn-success">generate</div>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-5">
                                                <div class="input-group">
                                                    <span
                                                        class="input-group-text border">LKR</span>
                                                    <input type="number"
                                                    value="34500"
                                                        class="form-control border rounded-3"
                                                        id="price" />
                                                </div>
                                            </div><div class="col-12 mt-3">
                                                <div class="input-group">
                                                    <span
                                                        class="input-group-text border">LKR</span>
                                                    <input type="number"
                                                    value="40000"
                                                        class="form-control border rounded-3"
                                                        id="price" />
                                                </div>
                                            </div>

                                            <div class="col-12 mt-5">
                                                <select
                                                    class="form-select border rounded-3 text-start"
                                                    id="category">
                                                    <option>Select
                                                        Category</option>
                                                    <option>Item 01</option>
                                                    <option selected>Electronic</option>
                                                    <option>Item 03</option>
                                                </select>
                                            </div>
                                            <div class="col-12 mt-3">
                                                <select
                                                    class="form-select border rounded-3 text-start"
                                                    id="model">
                                                    <option>Select
                                                        Brand</option>
                                                    <option>Item 01</option>
                                                    <option selected>LG</option>
                                                    <option>Item 03</option>

                                                </select>
                                            </div>

                                            <div class="col-12 mt-5">
                                                <input type="number"
            
                                                    class="form-control border rounded-3"
                                                    value="24"
                                                    id="qty" />
                                            </div>

                                            <div class="col-12 mt-5">
                                                <div class="row">
                                                    <div
                                                        class="offset-lg-3 col-12 col-lg-6">
                                                        <div class="row">
                                                            <div
                                                                class="col-4 border border-primary rounded">
                                                                <img
                                                                    src="../Inventory/assets/img/product/32LK526BPTA_UHD-4K-TVs_D1_V1.jpg"
                                                                    class="img-fluid"
                                                                    style="width: 250px;"
                                                                    id="i0" />
                                                            </div>
                                                            <div
                                                                class="col-4 border border-primary rounded">
                                                                <img
                                                                    src="../Inventory/assets/img/addproductimg.svg"
                                                                    class="img-fluid"
                                                                    style="width: 250px;"
                                                                    id="i1" />
                                                            </div>
                                                            <div
                                                                class="col-4 border border-primary rounded">
                                                                <img
                                                                    src="../Inventory/assets/img/addproductimg.svg"
                                                                    class="img-fluid"
                                                                    style="width: 250px;"
                                                                    id="i2" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div
                                                class="col-12 col-lg-12 d-grid mt-5 mb-3 text-center d-flex justify-content-center">
                                                <label for
                                                    class="col-12 btn btn-primary"
                                                    onclick="addProduct();">Update
                                                    Product</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- body -->

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
        <script
            src="../Inventory/assets/vendor/libs/node-waves/node-waves.js"></script>
        <script
            src="../Inventory/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="../Inventory/assets/vendor/js/menu.js"></script>

        <!-- endbuild -->

        <!-- Vendors JS -->
        <script
            src="../Inventory/assets/vendor/libs/apex-charts/apexcharts.js"></script>

        <!-- Main JS -->
        <script src="../Inventory/assets/js/main.js"></script>

        <!-- Page JS -->
        <script src="../Inventory/assets/js/dashboards-analytics.js"></script>

        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
    </body>

</html>