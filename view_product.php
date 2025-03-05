<?php

session_start();
require "connection.php";

?>


<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr"
    data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

        <title>Product List</title>

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
                                <div data-i18n="User interface">Products
                                    List</div>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="add_product.php" class="menu-link">
                                <i
                                    class="menu-icon tf-icons mdi mdi-cube-outline"></i>
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
                                                    class="card-title m-0 me-2">View
                                                    Product</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Header -->

                                

                            </div>
                        </div>
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

