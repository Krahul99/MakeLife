<!-- <?php


include 'connect.php';

    $myemail=$_POST['myemail'];
    $mypass=$_POST['mypass'];



    $email_search="select * from registration_form where email='$myemail'";
    // $query=mysqli_query($conn,$email_search);

    $stmt= mysqli_prepare($conn,$email_search);
    
    mysqli_stmt_bind_param($stmt,"ss",$myemail,$mypass);
    mysqli_stmt_execute($stmt);

    $result_data=$stmt->get_result();


    $email_pass=mysqli_fetch_assoc($result_data);

    // $email_count=mysqli_num_rows($query);

    if($email_pass){
        $db_pass=$email_pass['password'];

        $check_pass=password_verify($mypass,$db_pass);

        if($check_pass){
            echo "Login successful";
        }
    }
        else{
            echo "Login not successful";

        }
    mysqli_stmt_close($stmt);


?> -->


<?php
  session_start();
  ob_start();
?>
<?php
include 'connect.php';
if(isset($_POST['login']))
{
    extract($_POST);
    $result=mysqli_query($conn,"SELECT * FROM registration_form WHERE email='".$_POST["email"]."' and  password='".$_POST["password"]."'");
    $row=mysqli_fetch_array($result);
   if(is_array($row)){
        session_start();

      $_SESSION['start_form'] = true;

        $_SESSION["email"]=$row['email'];
        // header("Location: .html");
        echo 'Successful.';
    }
    else{
      echo '<script type="text/javascript">';
      echo ' alert("Email Id or Password does not connect")';  //not showing an alert box.
      echo '</script>';
    }
}

?>