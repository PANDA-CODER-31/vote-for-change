<?php

use Symfony\Component\VarExporter\Internal\Values;

$connection = mysqli_connect ('localhost','root');


    mysqli_select_db($connection, 'authenticate');

$name1 =$_POST['fname'];

$username =$_POST['username'];

$pass1 =$_POST['pass1'];

$pass2 =$_POST['pass2'];

$aadhar =$_POST['aadhar'];

$state =$_POST['state'];

$data ="INSERT INTO credentials(NAMES , VOTER_ID, PASSWORDS, CONFIRM_PASSWORDS, AADHAR_CARD_NO, STATES) Values('$name1 ','$username','$pass1','$pass2','$aadhar','$state')";

mysqli_query($connection,$data);


header('location:b.php');

?>