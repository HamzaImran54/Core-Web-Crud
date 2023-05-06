<?php
require_once "../connection.php";
session_start();
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit();
  }

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $product_name = $_POST["product_name"];
    $product_price = $_POST["product_price"];
    $product_desc = $_POST["product_desc"];
    $product_id = $_POST["id"];
    // $product_Image = $_POST["product_image"];
    
    // Check if an image is uploaded
    if ($_FILES["product_image"]["name"] != "") {
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["product_image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        // Check if the image file is a valid image
        $check = getimagesize($_FILES["product_image"]["tmp_name"]);
        if($check !== false) {
            if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {   
                $sql = "UPDATE `product` SET `product_name`='$product_name',`product_price`='$product_price',`product_desc`='$product_desc',`product_image`='$target_file' WHERE id='$product_id'";
                if (mysqli_query($conn, $sql)) {
                    header('Location: ../dashboard.php');
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            } else {
                echo "Error uploading image";
            }
        }
    }
}

?>
