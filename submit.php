<?php
session_start();

$naam=$surnam=$num=$email=$query=" ";
    if (isset($_POST['btnSubmit'])) {
       // get values and assign to coresponding values
       // check if values are assigned 
       // if yes navigate to the thank you page
       // check if 
       //$_SESSION['person'] = $naam+" "+$surnam;
       header('location:thankyou.php');
    }

    if (isset($_POST['btnBack'])) {
        header('location:index.php');
    }

?>