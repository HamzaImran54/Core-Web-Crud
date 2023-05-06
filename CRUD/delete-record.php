<?php
require_once '../connection.php';
session_start();  
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit();
  }

  if(isset($_POST['id'])) {
    $id = $_POST['id'];
    mysqli_query($conn, "DELETE FROM product WHERE id='$id'");
    exit();
  }
?>