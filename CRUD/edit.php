<?php
require_once '../connection.php';
session_start();  
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit();
  }
  
  

  if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = "SELECT * FROM product WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {  
        $row = mysqli_fetch_assoc($result);
        $imagePath = str_replace("../", "", $row["product_image"]);
        $row["product_image"] = $imagePath;
        echo json_encode($row);
        return $row;
        exit();
    } else {
        echo "Record not found";
    }
    exit();
  }
?>