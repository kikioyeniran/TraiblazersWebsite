<?php
 require_once("admin/includes/functions.php ");
 if(isset($_POST['submit']))
  {
    $eventID = $_GET['event'];
    $theme = $_GET['theme'];
    $name = $_POST['name'];
    $phone = $_POST['number'];
    $church = $_POST['church'];
    $query = "INSERT INTO eventregistration(name, church, phoneNumber, eventID, theme) Values ('$name', '$church', '$phone', '$eventID', '$theme')";
    if($mysqli->query($query) or die($mysqli->error))
    {
        redirect_to("events.php");
        echo "<script>alert('You have been registered Succesfully.')</script>";
    }
    else{
        echo "<script>alert('Your message could not be sent')</script>";
    }
  }
?>