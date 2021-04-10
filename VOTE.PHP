<?php

use Symfony\Component\VarExporter\Internal\Values;

$connection = mysqli_connect ('localhost','root');


    mysqli_select_db($connection, 'authenticate');

$vote = $_POST['vote'];

$data ="INSERT INTO vote(VOTE) Values('$vote')";

mysqli_query($connection,$data);
header('location:c.php');
?>