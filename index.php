<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>VOTING SYSTEM OF MCA</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
        
        <script>
            function myfunc()
            {
                 let t=document.getElementById("usn").value;
                 var password=document.getElementById("pass").value;
                 if(t.length==10)
                {
                   
                  var exp=/[4][M][H][2][1][M][C][0][0-6][0-9]$/;
                  if(t.match(exp))
                  {
                      var str1=t.slice(t.length-2);
                       var i2=parseInt(str1);
                       if(i2<=60)
                       {
                          // alert("yes your usn correct");

                       return true;
                   }
                   else
                   {
                       alert("you enter the invalid usn");
                       return false;
                   }
                  }
                  else
                  {
                      //document.write(t);
                      alert("enter write usn");
                      return false;
                  }
            }
            else
            {
                alert("enter the correct usn ");
                return false;
            }
        }
            </script>
    </head>
    <body>
        
         <form class="form-horizontal" method="POST" action="login_db.php" onsubmit=" return myfunc()">
<!--       <form action="logindb.jsp" method="post" onsubmit=" return myfunc()">-->
            <legend align="center"  style="color:DodgerBlue"><h2><b>MAHARAJA INSTITUTE OF TECHNOLOGY MYSORE</b></h2></legend>
<marquee scrollamount="5" colo><h3 style="color:Tomato;"><b>DEPARTMENT OF MCA </b></h3></marquee>
<marquee scrollamount="5" colo><h3 style="color:Tomato;"><b>EVENT VOTING SYSTEM </b></h3></marquee>

 <div class="form-group">
  <label class="col-md-4 control-label" for="NAME">USN</label>
  <div class="col-md-4">
      <input id="usn" name="usn" type="text" placeholder="enter the USN " class="form-control input-md" required>
    
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

        <center><a href="admin_page.php">admin_login</a></center>
    </body>
</html>
