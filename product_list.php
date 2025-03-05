<?php

session_start();
require "connection.php";

?>



<!DOCTYPE html>
<html
    lang="en"
    class="light-style layout-menu-fixed layout-compact"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>Product List</title>
    <meta name="description" content>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../Inventory/assets/img/icons/3.png">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Inventory/assets/vendor/fonts/materialdesignicons.css">
    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="../Inventory/assets/vendor/libs/node-waves/node-waves.css">
    <!-- Core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../Inventory/assets/vendor/css/core.css" class="template-customizer-core-css">
    <link rel="stylesheet" href="../Inventory/assets/vendor/css/theme-default.css" class="template-customizer-theme-css">
    <link rel="stylesheet" href="../Inventory/assets/css/demo.css">
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../Inventory/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../Inventory/assets/vendor/libs/apex-charts/apex-charts.css">
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
                    <li class="menu-item">
                        <a href="dashboard.php" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
                            <div data-i18n="Dashboards">Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-item active">
                        <a href="product_list.php" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-store-outline"></i>
                            <div data-i18n="User interface">
                                Products
                                List
                            </div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="add_product.php" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-cube-outline"></i>
                            <div data-i18n="User interface">
                                Add
                                Products
                            </div>
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
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5 class="card-title m-0 me-2">
                                                Manage
                                                Products
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Header -->
                            <div class="col-12">
                                <div class="card">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="text-truncate">PRODUCT</th>
                                                    <th class="text-truncate"></th>
                                                    <th class="text-truncate"></th>
                                                    <th class="text-truncate"></th>
                                                    <th class="text-truncate"></th>
                                                    <th class="text-truncate"></th>
                                                    <th class="text-truncate"></th>
                                                    <th class="text-truncate"></th>
                                                    <th class="text-truncate"></th>
                                                    <th class="text-truncate"></th>
                                                    <th class="text-truncate"></th>
                                                    <th class="text-truncate"></th>
                                                    <th class="text-truncate"></th>
                                                    <th class="text-truncate"></th>
                                                    <th class="text-truncate"></th>
                                                    <th class="text-truncate"></th>
                                                    <th class="text-truncate"></th>
                                                    <th class="text-truncate"></th>
                                                    <th class="text-truncate"></th>
                                                </tr>
                                            </thead>

                                            <?php


                                            $query = "SELECT * FROM `product`";
                                            $pageno;

                                            if (isset($_GET["page"])) {
                                                $pageno = $_GET["page"];
                                            } else {
                                                $pageno = 1;
                                            }

                                            $product_rs = Database::search($query);
                                            $product_num = $product_rs->num_rows;

                                            $results_per_page = 15;
                                            $number_of_pages = ceil($product_num / $results_per_page);

                                            $page_results = ($pageno - 1) * $results_per_page;
                                            $selected_rs =  Database::search($query . " LIMIT " . $results_per_page . " OFFSET " . $page_results . "");

                                            $selected_num = $selected_rs->num_rows;

                                            for ($x = 0; $x < $selected_num; $x++) {
                                                $selected_data = $selected_rs->fetch_assoc();


                                            ?>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-sm me-3">
                                                                    <?php
                                                                    $image_rs = Database::search("SELECT * FROM `product_img` WHERE `product_sku`='" . $selected_data["sku"] . "'");
                                                                    $image_num = $image_rs->num_rows;
                                                                    if ($image_num == 0) {
                                                                    ?>
                                                                        <img
                                                                            src="../Inventory/assets/img/product/empty.png"
                                                                            alt="Avatar"
                                                                            class="rounded-circle"
                                                                            data-bs-toggle="modal"
                                                                            onclick="viewProductModal('<?php echo $selected_data['sku']; ?>');">

                                                                    <?php
                                                                    } else {
                                                                        $image_data = $image_rs->fetch_assoc();

                                                                    ?>
                                                                        <img
                                                                            src="<?php echo $image_data["img_path"]; ?>"
                                                                            alt="Avatar"
                                                                            class="rounded-circle"
                                                                            data-bs-toggle="modal"
                                                                            onclick="viewProductModal('<?php echo $selected_data['sku']; ?>');">

                                                                    <?php
                                                                    }

                                                                    ?>
                                                                </div>
                                                                <div>
                                                                    <h6 class="mb-0 text-truncate">
                                                                        <?php echo $selected_data["name"]; ?>
                                                                    </h6>
                                                                    <small>
                                                                        <span class="badge bg-label-success rounded-pill">
                                                                            IN-STOCK

                                                                            </i>
                                                                        </span>
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>
                                                            <a href="update_product.php">
                                                                <span class="bg-label-primary">
                                                                    <i class="fa-solid fa-pen-to-square fa-xl"></i>
                                                                </span>
                                                            </a>
                                                        </td>
                                                        <td></td>

                                                    </tr>

                                                </tbody>
                                                <!-- Modal -->
                                                <div
                                                    class="modal fade"
                                                    id="modalCenter"
                                                    tabindex="-1"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="modalCenterTitle"><?php echo $selected_data["name"]; ?></h4>
                                                                <button
                                                                    type="button"
                                                                    class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="col-md">
                                                                    <div class="row g-0">
                                                                        <div class="col-md-8">
                                                                            <div class="card-body">
                                                                                <p class="card-text">
                                                                                <div class="row">
                                                                                    <label class="col-sm-3 col-form-label fw-bold" for="basic-default-name">SKU</label>
                                                                                    <div class="col-sm-9">
                                                                                        <p class="col-form-label"><?php echo $selected_data["sku"]; ?></p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <label class="col-sm-3 col-form-label fw-bold" for="basic-default-name">Barcode</label>
                                                                                    <div class="col-sm-9">
                                                                                        <p class="col-form-label"><?php echo $selected_data["barcode"]; ?></p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <label class="col-sm-3 col-form-label fw-bold" for="basic-default-name">Cost</label>
                                                                                    <div class="col-sm-9">
                                                                                        <p class="col-form-label">
                                                                                            LKR
                                                                                            <?php echo $selected_data["cost"]; ?>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <label class="col-sm-3 col-form-label fw-bold" for="basic-default-name">Price</label>
                                                                                    <div class="col-sm-9">
                                                                                        <p class="col-form-label">
                                                                                            LKR
                                                                                            <?php echo $selected_data["price"]; ?>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <label class="col-sm-3 col-form-label fw-bold" for="basic-default-name">Category</label>
                                                                                    <div class="col-sm-9">
                                                                                        <p class="col-form-label"><?php echo $selected_data["category_id"]; ?></p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <label class="col-sm-3 col-form-label fw-bold" for="basic-default-name">Brand</label>
                                                                                    <div class="col-sm-9">
                                                                                        <p class="col-form-label"><?php echo $selected_data["brand_id"]; ?></p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <label class="col-sm-3 col-form-label fw-bold" for="basic-default-name">Qty</label>
                                                                                    <div class="col-sm-9">
                                                                                        <p class="col-form-label"><?php echo $selected_data["qty"]; ?></p>
                                                                                    </div>
                                                                                </div>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <img class="card-img card-img-right" src="<?php echo $image_data["img_path"]; ?>" alt="Card image">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a href="../Inventory/update_product.php">
                                                                    <button type="button" class="btn btn-primary" onclick="sendId(<?php echo $selected_data['sku']; ?>);">
                                                                        Edit
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- modal 01 -->
                                                <div class="modal" tabindex="-1" id="viewProductModal<?php echo $selected_data["sku"]; ?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content bg-dark1">
                                                            <div class="modal-header border-dark">
                                                                <h5 class="modal-title fw-bold text-light"><?php echo $selected_data["title"]; ?></h5>
                                                                <button type="button" class="btn-close-whitie" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="offset-4 col-4">

                                                                    <img src="<?php echo $image_data["img_path"]; ?>" class="img-fluid" style="height: 150px;" />
                                                                </div>
                                                                <div class="col-12">
                                                                    <span class="fs-5 fw-bold text-light">Price :</span>&nbsp;
                                                                    <span class="fs-5 text-light">Rs. <?php echo $selected_data["price"]; ?></span><br />
                                                                    <span class="fs-5 fw-bold text-light">Description :</span>&nbsp;
                                                                    <span class="fs-6 text-light"><?php echo $selected_data["description"]; ?></span><br />
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer border-dark">
                                                                <button type="button" class="btn btn-dark fw-bold" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- modal 01 -->


                                            <?php

                                            }

                                            ?>
                                        </table>
                                    </div>
                                </div>

                            </div>
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