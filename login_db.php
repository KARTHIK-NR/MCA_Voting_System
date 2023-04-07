<?php
if(isset($_POST['submit']))
{
    $usn_of_the_student=$_POST['usn'];
    $password_of_the_student=$_POST['pass'];
    $account_status=0;
$query="select * from voter where usn='$usn_of_the_student' and password='$password_of_the_student'";
include 'connection.php';
    $result=mysqli_query($con, $query);
    if(mysqli_num_rows($result)==1)
    {
         $query1="select * from voter  where usn='$usn_of_the_student' and password='$password_of_the_student' and status='$account_status'";
         $result1=mysqli_query($con,$query1);
         if(mysqli_num_rows($result1)==1)
         {

        session_start();
        $_SESSION['usn']=$usn_of_the_student;
        $_SESSION['password']=$password_of_the_student;

        echo "<script>alert('Login successfull...')</script>";
        echo "<script>window.location.replace('user_homepage.php')</script>";
         }
         else
         {
            echo "<script>alert('your alredy voted...')</script>";
            echo "<script>window.location.replace('index.php')</script>";
             }
         
    }
    else
    {
        echo "<script>alert('Invalid credention...')</script>";
        echo "<script>window.location.replace('index.php')</script>";
        
    }

}
?>