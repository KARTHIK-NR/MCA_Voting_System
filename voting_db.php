<?php
if(isset($_POST['submit']))
{
    session_start();
    
    $usn_of_the_student=$_SESSION['usn'];
  //  echo $usn;
    $password_of_the_student=$_SESSION['password'];
    $vice_precedent=$_POST['options'];
    $general_secretary=$_POST['options1'];
    include 'connection.php';
    $query1="select * from contastent where contastent_name='$vice_precedent'";
    $result=mysqli_query($con,$query1);
    if($row=mysqli_fetch_array($result))
    {
        $add= $row ['number_of_vote'];
        $adds=$add+1;
        $query2="update contastent set number_of_vote='$adds' where contastent_name='$vice_precedent'";
        $result1=mysqli_query($con,$query2);
        if($result1)
        {
            $query3="select * from contastent where contastent_name='$general_secretary'";
            $result3=mysqli_query($con,$query3);
    if($row=mysqli_fetch_array($result3))
    {
        $add2= $row ['number_of_vote'];
        $adds=$add2+1;
        $query4="update contastent set number_of_vote='$adds' where contastent_name='$general_secretary'";
        $result1=mysqli_query($con,$query4);
        if($result1)
        {

           $query1="select *from voter where usn='$usn_of_the_student'";
           $result=mysqli_query($con,$query1);
           if($row=mysqli_fetch_array($result))
           {
            // $status= $row ['status'];
            $changing_the_account_status=1;
            $query="update voter set status='$changing_the_account_status' where usn='$usn_of_the_student'";
            $result=mysqli_query($con,$query);
            if($result)
            {
               
                
                    session_unset();
                    echo "<script> alert('thank _you guys')</script>";
                    echo "<script> window.location.replace('index.php')</script>";

        }
    }
}
    }
}
    }


}
?>
