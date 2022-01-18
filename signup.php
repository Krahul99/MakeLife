<?php

if(isset($_POST['submit'])){
    $phone=$_POST['phone'];
    $email=$_POST['email'];

    
    $errorEmpty=false;
    $errorEmail=false;

    if(empty($phone)){ 
        echo "<span class='form-error'>Write a valid number</span>";
        $errorEmpty=true;
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "<span class='form-error'>Write a valid email</span>";
        $errorEmail=true;
    }
    elseif($errorEmail==false && $errorEmpty==false && isset($_POST['submit'])){

        echo "Form is Validated";


        $name=$_POST['name'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        $birthday=$_POST['birthday'];
        $gender=$_POST['gender'];
        $country=$_POST['country'];
        $address=$_POST['address'];
        
        include 'connect.php';


        $stmt =$conn->prepare("insert into registration_form(name, password, cpassword, birthday, gender, phone,email,country,address) values(?, ?, ?, ?, ?, ?, ?, ?, ?)");

		$stmt->bind_param("sssssisss", $name, $password, $cpassword, $birthday, $gender, $phone,$email,$country,$address);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
    }

}


?>


<script>
    $("#cname,#corr_pass,#cemail").removeClass("input-error");

    var errorEmpty="<?php echo $errorEmpty;?>;
    var errorEmail="<?php echo $errorEmail;?>;

    if(errorEmpty==true){
        $("#cphone).addClass("input-error");
    }
    if(errorEmail==true){
        $("#cemail").addClass("input-error");
    }
    if(errorEmpty==false && errorEmail==false){
        $("#cname,#corr_pass,#cemail").val("");
    }
</script>