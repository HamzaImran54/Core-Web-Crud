<?php
   
    session_start();  
    if(!isset($_SESSION['user_id'])){
        header('Location: login.php');
        exit();
      }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Dashboard</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" ></script>
  <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>  -->
  <script src="assets/jquery-3.6.4.min.js"></script>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Admin Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Product </button>
          <!-- <a class="nav-link" href="#">Add Product</a> -->
        </li>
      </ul>
      <ul class="navbar-nav ml-auto text-right">
        <li class="nav-item text-right">
          <a class="nav-link text-right" href="Logout/logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Table -->
  <div class="container my-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Product Information</h5>
        <table class="table table-striped">
          <thead>
            <tr>
              <!-- <th scope="col">ID</th> -->
              <th scope="col">Product Name</th>
              <th scope="col">Price</th>
              <th scope="col">Description</th>
              <th scope="col">Image</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
           <?php
            require_once "connection.php";
            $result = mysqli_query($conn, "SELECT * FROM product");
            foreach ($result as $row) {
              $imagePath = str_replace("../", "", $row["product_image"]);
                echo "<tr>";
                echo "<td>" . $row["product_name"] . "</td>";
                echo "<td>" . $row["product_price"] . "</td>";
                echo "<td>" . $row["product_desc"] . "</td>";
                echo "<td><img src='" . $imagePath  . "' width='70' height='70'></td>";
                echo "<td><a href='#' data-id='". $row["id"] ."'  class='btn btn-sm btn-primary edit-button'>Edit</a> <a href='#' data-id='". $row["id"] ."'  class='btn btn-sm btn-danger delete-button'>Delete</a></td>";
                echo "</tr>";
              }
           ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- jQuery and Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK7WgmalDz2jq0Cf6x2y9MnBPKUakLX9WO9m6RSV6HJD7p" crossorigin="anonymous"></script>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Product</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="CRUD/create.php" enctype="multipart/form-data">
      <div class="modal-body">
        <input type="text" placeholder="Enter Product Name.." required name="product_name" class="form-control"> <br>
        <input type="text" placeholder="Enter Product Price.." required name="product_price" class="form-control"> <br>
        <textarea type="text" placeholder="Enter Product Description.." required name="product_desc" class="form-control"> </textarea> <br>
        <input type="file" placeholder="Enter Product Image.." required name="product_image" class="form-control" accept="image/png, image/gif, image/jpeg"> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
    <!--Edit Modal -->
<div class="modal fade" id="edit-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Product</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="CRUD/update.php" enctype="multipart/form-data">
      <div class="modal-body">
        <input type="hidden" name="id" id="product_id">
        <input type="text" placeholder="Enter Product Name.." required name="product_name" id="product_name" class="form-control"> <br>
        <input type="text" placeholder="Enter Product Price.." required name="product_price" id="product_price" class="form-control"> <br>
        <textarea type="text" placeholder="Enter Product Description.." required name="product_desc" id="product_desc" class="form-control"> </textarea> <br>
        <input type="file" placeholder="Enter Product Image.." required name="product_image" id="product_image" class="form-control" accept="image/png, image/gif, image/jpeg">  <br>
        <img id="product_image_preview" src="" width="100" height="100">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
  $('.delete-button').on('click', function(e) {
    e.preventDefault();
    var id = $(this).data('id');
    if (confirm('Are you sure you want to delete this record?')) {
      $.ajax({
        type: 'POST',
        url: 'CRUD/delete-record.php',
        data: { id: id },
        success: function(response) {
            alert('Record deleted successfully');
            window.location.reload();
        },
        error: function() {
          alert('An error occurred while deleting the record');
        }
      });
    }
  });


  $('.edit-button').on('click',function(ev){
    ev.preventDefault();
    var id = $(this).data('id');
    $.ajax({
      type: 'POST',
        url: 'CRUD/edit.php',
        data: { id: id },
         dataType: 'json',
        success: function(data) {
          $('#product_name').val(data.product_name);
            $('#product_price').val(data.product_price);
            $('#product_desc').val(data.product_desc);
            $('#product_id').val(data.id);
            $('#product_image_preview').attr('src', data.product_image);
            $('#edit-modal').modal('show');
        },
    });

  });
});



</script>
</body>
</html>
