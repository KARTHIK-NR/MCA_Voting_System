<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
       <form class="form-horizontal" method="POST" action="">
<!--       <form action="logindb.jsp" method="post" onsubmit=" return myfunc()">-->
            <legend align="center"  style="color:DodgerBlue"><h2><b>MAHARAJA INSTITUTE OF TECHNOLOGY MYSORE</b></h2></legend>
<marquee scrollamount="5" colo><h3 style="color:Tomato;"><b>DEPARTMENT OF MCA </b></h3></marquee>
<marquee scrollamount="5" colo><h3 style="color:Tomato;"><b>EVENT VOTING SYSTEM </b></h3></marquee>

 <div class="form-group">
  <label class="col-md-4 control-label" for="NAME">USER_ID</label>
  <div class="col-md-4">
      <input id="usn" name="userid" type="text" placeholder="enter the id " class="form-control input-md" required>
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="NAME">PASSWORD</label>
  <div class="col-md-4">
      <input id="pass" name="pass" type="password" placeholder="enter the password " class="form-control input-md" required>
    
  </div>
</div>    

 <div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
 
    <button id="submit" name="submit" class="btn btn-success">SUBMIT</button>
</div>   
  </div>
  </form>
    </body>
</html>
<?php
if(isset($_POST['submit']))
{
    
$id=$_POST['userid'];
$password=$_POST['pass'];
if($id==333 && $password==1234)
{
    session_start();
    $_SESSION['id']=$id;
    $_SESSION['password']=$password;
    echo "<script>alert('login sucessfully.....')</script>";
    echo "<script>window.location.replace('admin_home.php')</script>";

}
else
{
    echo "<script>alert('login unsuces  sucessfully.....')</script>";
    echo "<script>window.location.replace('admin_page.php')</script>";
}

}
?>