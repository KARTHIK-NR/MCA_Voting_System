<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['password']))
{
   echo "<script>alert('login sucesfully.....')</script>";
    $id=$_SESSION['id'];
    $password=$_SESSION['password'];
    

?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
         <script>
                $(document).ready(function () {
    $('#example').DataTable();
                  });
                </script>
        
    </head>
    
    
        <br><br><br>
         <table id="example" class="display" style="width:100%">
            <thead> <tr>
                <th>  voters name </th>
                <th> number of votes </th>
            </tr>
             </thead>
      <tbody>
<?php
$query="select *from contastent ";
include 'connection.php';
    $result=mysqli_query($con, $query);
    while($row=mysqli_fetch_array($result))
    {
        echo "<tr><td>".$row['contastent_name']."</td>";
        echo "<td>".$row['number_of_vote']."</td></tr>";
    }
    
    ?>
      </table>
      </tbody>
</html>
    <?php
}
else
{
    echo "<script>alert('login correctly.....')</script>";
    echo "<script>window.location.replace('admin_page.php')</script>";
}

?>

<form action="logout.php" method="post">
            <div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
 
      <button id="submit" name="logout" class="btn btn-success">LOGOUT</button>

</div>   
  </div>
            </form>
