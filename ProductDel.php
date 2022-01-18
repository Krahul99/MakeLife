<?php
  session_start();
  ob_start();
?>
<?php

include("connect.php");
if(isset($_POST["submit"])){

    $ProductID = $_POST['ProductID'];  
    
    $sql = "DELETE FROM `product` WHERE ProductID='$ProductID'";
        
    $result = mysqli_query($conn, $sql);
    if($result)
    {
      echo '<script type="text/javascript">';
      echo ' alert("Product Deleted  From Database")';  
      echo '</script>';
      // header('location:adminproductadd.php');
    }
    else
    {
      echo '<script type="text/javascript">';
      echo ' alert("Some error have occured")';  //not showing an alert box.
      echo '</script>';
     }
}
?>


<!DOCTYPE html>
<html>
<head>
	<title> Product Deleting Page</title>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Google fonts --->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style >
body{
  background-color: #19E46C;
}

.topnav {
  overflow: hidden;
  background-color: #19E46C;
}
.preview{
    width: 200px;
    height: 200px;
    border: 4px solid #19E46C;
    background-color: #19E46C;
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
  background-color: white;
  color: black;
  font-weight: bold;
}

.topnav a.active {
  background-color: white;
  color: black;
  font-weight: bold;
}
.e{
  background-color:#FCDADA; 
  font-family:'Montserrat', sans-serif;
  color:black;
  border-radius: 30px;
  width: 168px;
  height:58px; 
  font-size:16px;
  line-height: 20px;
}

h4{
    font-weight: bold;
    font-family:'Montserrat', sans-serif;
}
</style>
</head>

<body>
 <section>

    <nav class="navbar navbar-expand-md " style="opacity: 100%;box-shadow: 5px 5px 5px grey;">
      <ul class="navbar-nav">
      <li class="nav-item">
       <li class="nav-item">
      </ul> 
    </div>
  </nav>
</section>
<div class="topnav">
  <a  href="ProductAdd.php">Product Add</a>
  <a  href="ProductDel.php" class="active">Product Delete</a>
  <a  href="ProductUpdate.php">Product Update</a>
  <a  href="home.html">Home</a>
</div>
 <div class="container-fluid" style="background-color:#19E46C;">
        <div class="row">
          <div class="col-md-1">
            
          </div>
          <div class="col-md-10">
            <br>
            <b><h4 class="b">Product <span class="a">Deletions </span></h4></b>
           <!--  <b><p class="c">Complete this form and be a Admin<br></p></b> -->
            <hr style="border: 1px solid #19E46C">
            <div class="container card card-body" style="background-color:#19E46C;border-radius:10px;border: 0px;">
              <div class="row">
                <div class="col-md-6">
            <form action="ProductDel.php" method="POST" class="text-center container" enctype="multipart/form-data" style="border-radius:50%;">
            <div class="form-group">
              <input type="text" name="ProductID" class="form-control d" placeholder="ProductID" required>
              
              </div>
           </div> 

                <div class="col-md-6">
            <div class="form-group ">
              <br>
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
          <hr style="border: 1px solid #19E46C">
          </div>
        
          <div class="col-md-1">
            
          </div>
        </div>

      </div>
  
     </section>
     <hr style="border:10px solid #19E46C">

      <script>
        function showPreview(event){
            if(event.target.files.length > 0){
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("default-btn-preview");
                preview.src = src;
                preview.width="180";
                preview.height="190";
                preview.style.display = 'center';
            }
        }
    </script>
    

</body>
</html>