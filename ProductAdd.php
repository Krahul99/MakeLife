<?php
session_start();
ob_start();
?>
<?php

include("connect.php");
if (isset($_POST["submit"])) {

  $ProductID = $_POST['ProductID'];
  $ProductName = $_POST['ProductName'];
  $ProductPrice = $_POST['ProductPrice'];
  $Productdescription = $_POST['Productdescription'];
  $sql = "INSERT INTO product(ProductID,ProductName,ProductPrice,Productdescription) 
    VALUES ('$ProductID','$ProductName','$ProductPrice','$Productdescription')";

  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo '<script type="text/javascript">';
    echo ' alert("Product Added to Database")';
    echo '</script>';
  } else {
    echo '<script type="text/javascript">';
    echo ' alert("Some error have occured")'; 
    echo '</script>';
  }
}
?>


<!DOCTYPE html>
<html>

<head>
  <title> Product Adding Page</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Google fonts --->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    body {
        background-color:#19E46C;
        }

    .topnav {
      overflow: hidden;
      background-color:#19E46C;
    }

    .preview {
      width: 200px;
      height: 200px;
      border: 4px solid white;
;
      background-color:#19E46C;
      border-radius: 100px;
    }


    .topnav a {
      float: left;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 15px;
    }

    .topnav a:hover {
        background-color:white;
      color: black;
      font-weight: bold;
    }

    .topnav a.active {
        background-color:white;
      color: black;
      font-weight: bold;
    }

    .e {
        background-color:#FCDADA;
;
      font-family: 'Montserrat', sans-serif;
      color: black;
      border-radius: 30px;
      width: 168px;
      height: 58px;
      font-size: 16px;
      line-height: 20px;
    }

    h4 {
      font-weight: bold;
      font-family: 'Montserrat', sans-serif;
    }
  </style>
</head>

<body>

  <div class="topnav">
    <a href="ProductAdd.php" class="active">Product Add</a>
    <a href="ProductDel.php">Product Delete</a>
    <a href="ProductUpdate.php">Product Update</a>
    <a href="home.html">Home</a>

  </div>
  <div class="container-fluid" style="19E46C">
    <div class="row">
      <div class="col-md-1">

      </div>
      <div class="col-md-10">
        <br>
        <b>
          <h4 class="b">Product <span class="a"> Additions </span></h4>
        </b>
        <hr style="border: 1px solid background-color:#19E46C;
">
        <div class="container card card-body" style="background-color:#19E46C;;border-radius:10px;border: 0px;">
          <div class="row">
            <div class="col-md-6">
              <form action="ProductAdd.php" method="POST" class="text-center container" enctype="multipart/form-data" style="border-radius:50%;">
                <div class="form-group">
                  <input type="text" name="ProductID" class="form-control d" placeholder="ProductID" required>
                  <br>
                  <input type="text" name="ProductName" class="form-control d" placeholder="ProductName" required>
                  <br>
                  <input type="number" name="ProductPrice" class="form-control d" placeholder="Product Price" required>
                  <br>
                  <textarea type="varchar" name="Productdescription" class="form-control d" placeholder="Product Description" required></textarea>
                </div>
            </div>

          </div>
          </center>
        </div>
      </div>
    </div>
    <br>

    <center>
      <br>
      <input type="submit" name="submit" method="POST" class="btn e">
    </center>
    </form>

    <div class="text-center">
    

    </div>
    <hr style="border: 1px solid white;
">
  </div>

  <div class="col-md-1">

  </div>
  </div>

  </div>

  </section>
  <hr style="border:20px solid #19E46C">

  <script>
    function showPreview(event) {
      if (event.target.files.length > 0) {
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("default-btn-preview");
        preview.src = src;
        preview.width = "180";
        preview.height = "190";
        preview.style.display = 'center';
      }
    }
  </script>
</body>

</html>