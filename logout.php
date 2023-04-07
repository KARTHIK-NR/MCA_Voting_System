<?php
session_start();
if(isset($_POST['logout']))
{
    session_unset();
    echo "<script>alert('logout sucessfully...')</script>";
    echo "<script> window.location.replace('index.php')</script>";

}
?>