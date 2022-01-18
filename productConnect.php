<?php

//value retirevals
// $name=$_POST['name'];
// $password=$_POST['pass'];
// $cpassword=$_POST['cpass'];
// $birthday=$_POST['birthday'];
// $gender=$_POST['gender'];
// $phone=$_POST['phone'];
// $email=$_POST['email'];
// $country=$_POST['country'];
// $address=$_POST['review'];

//database connection
echo "Welcome let's get connected <br>";

// $servername = "localhost:3307";
// $username = "root";
// $password = "";
// $table="reg_form_details"

// // Creating a connection
// $conn = mysqli_connect($servername, $username, $password,$table);

$conn = new mysqli('localhost:3307','root','','reg_form_details');

//if not connected
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
// else{
//         $stmt =$conn->prepare("insert into registration_form(name, password, cpassword, birthday, gender, phone,email,country,address) values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
// 		$stmt->bind_param("sssssisss", $name, $password, $cpassword, $birthday, $gender, $phone,$email,$country,$address);
// 		$execval = $stmt->execute();
// 		echo $execval;
// 		echo "Registration successfully...";
// 		$stmt->close();
// 		$conn->close();
//     ```echo "Connection was successful";
// }

// if(isset($_POST['login'])){
//     $myemail=$_POST['myemail'];
//     $mypass=$_POST['mypass'];

//     $email_search="select * from registration_form where email='$myemail'";
//     $query=mysqli_query($conn,$email_search);

//     $email_count=mysqli_num_rows($query);

//     if($email_count){
//         $email_pass=mysqli_fetch_assoc($query);
//         $db_pass=$email_pass['password'];

//         if($db_pass){
//             echo "Login successful";
//         }
//         else{
//             echo "Login not successful";
//         }
//     }
//     else{
//         echo "Invalid email";
//     }
// }
?>