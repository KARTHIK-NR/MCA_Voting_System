<?php
session_start();
if(isset($_SESSION['usn']) && isset($_SESSION['password']))
{
   
$usn_of_the_student=$_SESSION['usn'];
$password_of_the_student=$_SESSION['password'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>VOTING SYSTEM OF MCA</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
  <script>
      function myfun()
      {
         var dropdown1=document.getElementById("options").value ;
         var dropdown2=document.getElementById("options1").value;
         if(dropdown1.match(dropdown2))
         {
             alert('both are same so please change the selections');
             return false;
         }
         else
         {
             return true;
         }
         
      }
      </script>
      
        
    </head>
    <body>
            <form class="form-horizontal" method="POST" action="voting_db.php" onsubmit="return myfun()">
<!--       <form action="logindb.jsp" method="post" onsubmit=" return myfunc()">-->
            <legend align="center"  style="color:DodgerBlue"><h2><b>MAHARAJA INSTITUTE OF TECHNOLOGY MYSORE</b></h2></legend>
<marquee scrollamount="5" colo><h3 style="color:Tomato;"><b>DEPARTMENT OF MCA </b></h3></marquee>
<marquee scrollamount="5" colo><h3 style="color:Tomato;"><b>EVENT VOTING SYSTEM </b></h3></marquee>
            
            
    
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Vice-President</label>
  <div class="col-md-4">
    <select id="options" name="options" class="form-control">
      <option>Shashank Kumar S N</option>
      <option>Nithish</option>
       <option>Sahana G</option>
        <option>Chandra K</option>
        
         <!-- <option>Anusha M</option>
      <option>Sahana G</option>
      <option>Manisha M</option> -->
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">General Secratory</label>
  <div class="col-md-4">
    <select id="options1" name="options1" class="form-control">
      <option>Nithin</option>
      <option>Anush O L</option>
      <option>Anusha M</option>
      <option>Manisha M</option>
      
     
      
    </select>
  </div>
</div>

 <div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
 
      <button id="submit" name="submit" class="btn btn-success">VOTE</button>

</div>   
  </div>

            </form>
            <form action="logout.php" method="post">
            <div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
 
      <button id="submit" name="logout" class="btn btn-success">LOGOUT</button>

</div>   
  </div>
            </form>
 <?php
}
else
{
    echo "<script> alert('correct login')</script>";
    echo "<script> window.location.replace('index.php')</script>";
}
?>       