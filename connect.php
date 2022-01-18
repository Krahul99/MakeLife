<?php

echo "Welcome let's get connected <br>";


$conn = new mysqli('localhost:3307','root','','reg_form_details');

//if not connected
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

?>