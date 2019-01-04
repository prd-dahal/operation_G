
<?php

$f_number = $_POST['f_number'];
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$education = $_POST['education'];
$phone_number = $_POST['phone_number'];
$familyDetails=$_POST['familyDetails'];
$n_mobile = $_POST['n_mobile'];
$purpose = $_POST['purpose'];
$f_purpose = $_POST['f_purpose'];
//$isPC=$_POST['isPC'];
$Cpurpose=$_POST['Cpurpose'];
$internet = $_POST['internet'];
//$isCS=$_POST['isCS'];
$programming = $_POST['programming'];


$connection = mysqli_connect('localhost', 'root', '', 'operation_g');

$query = "INSERT INTO users(f_number, full_name, email, education, phone_number,familyDetails,n_mobile, purpose, f_purpose,Cpurpose, internet, programming) VALUES('$f_number', '$full_name', '$email', '$education', '$phone_number','$familyDetails','$n_mobile', '$purpose', '$f_purpose','$Cpurpose', '$internet', '$programming')";

$result = mysqli_query($connection, $query);

if(!$result) {
	die(mysqli_error());
}

?>
<h1>Your Datas is Saved Succesfully</h1>
