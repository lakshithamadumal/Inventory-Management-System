<?php

session_start();
require "connection.php";


$category = $_POST["ca"];
$game_type = $_POST["b"];
$title = $_POST["t"];
$link = $_POST["gl"];
$cost = $_POST["cost"];
$desc = $_POST["desc"];
$d = new DateTime();
$tz = new DateTimeZone("Asia/Colombo");
$d->setTimezone($tz);
$date = $d->format("Y-m-d H:i:s");


$status = 1;

$uploading_status = 0; //0 Problem 

$length = sizeof($_FILES);

if ($length <= 3 && $length > 0) {


    Database::iud("INSERT INTO `product`(`price`,`description`,`title`,`datetime_added`,
`category_cat_id`,`status_status_id`,
`game_type_id`,`game_link`) VALUES ('" . $cost . "',
'" . $desc . "','" . $title . "','" . $date . "','" . $category . "','" . $status . "','" . $game_type . "','" . $link . "')");



    $product_id = Database::$connection->insert_id;



    $allowed_img_extentions = array("image/jpg", "image/jpeg", "image/png", "image/svg+xml");

    for ($x = 0; $x < $length; $x++) {
        if (isset($_FILES["img" . $x])) {

            $img_file = $_FILES["img" . $x];
            $file_extention = $img_file["type"];

            if (in_array($file_extention, $allowed_img_extentions)) {

                $new_img_extention;

                if ($file_extention == "image/jpg") {
                    $new_img_extention = ".jpg";
                } else if ($file_extention == "image/jpeg") {
                    $new_img_extention = ".jpeg";
                } else if ($file_extention == "image/png") {
                    $new_img_extention = ".png";
                } else if ($file_extention == "image/svg+xml") {
                    $new_img_extention = ".svg";
                }

                $file_name = "resourses//game//" . $title . "_" . $x . "_" . uniqid() . $new_img_extention;
                move_uploaded_file($img_file["tmp_name"], $file_name);

                Database::iud("INSERT INTO `product_img`(`img_path`,`product_id`) 
                                VALUES ('" . $file_name . "','" . $product_id . "')");

                $uploading_status = 1;
            } else {
                $uploading_status = 0;
                echo ("Not an allowed image type uploaded.");
            }
        }
    }
} else {
    $uploading_status = 0;
    echo ("Invalid Image Count");
}

if ($uploading_status == 1) {
    echo ("success");
}
