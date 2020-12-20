<?php
ob_start();
include_once 'upload.php';
include_once 'message.php';

if (isset($_POST['submit'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];



    $uniqueId = mt_rand(10000, 99999);
    $orderId = $uniqueId;

    uploadPhotos($firstname, $lastname, $orderId);
    message($mobile, $firstname, $lastname, $orderId);


    echo("Submitted Successfully");

    //header("location: https://print.raahifrafeeu.com/");

    ob_end_flush();

}
