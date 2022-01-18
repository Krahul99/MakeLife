<?php
if(isset($_POST['submit']))
{
$xml = new DOMDocument("1.0","UTF-8");
$xml->load("info.xml");

$rootTag= $xml-> getElementByTagName("document")->item(0);
$dataTag=$xml->createElement("data");

    $nameTag->createElement('name', $_POST['name']);
    $passwordTag->createElement('password', $_POST['password']);
    $cpasswordTag->createElement('cpassword', $_POST['cpassword']);
    $birthdayTag->createElement('birthday', $_POST['birthday']);
    $genderTag->createElement('gender', $_POST['gender']);
    $phoneTag->createElement('phone', $_POST['phone']);
    $emailTag->createElement('email', $_POST['email']);
    $countryTag->createElement('country', $_POST['country']);
    $addressTag->createElement('address', $_POST['address']);


    $dataTag->appendChild($nameTag);
    $dataTag->appendChild($passwordTag);
    $dataTag->appendChild($cpasswordTag);
    $dataTag->appendChild($birthdayTag);
    $dataTag->appendChild($genderTag);
    $dataTag->appendChild($phoneTag);
    $dataTag->appendChild($emailTag);
    $dataTag->appendChild($countryTag);
    $dataTag->appendChild($addressTag);

    $rootTag->appendChild($dataTag);

    $xml->save("info.xml");
}

?>


