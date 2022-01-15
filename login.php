<html>
    <body>
           <form action="#" method="GET"> 
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <b>Username</b>
</br>
    <input  type="text" name="name" size="35" >
    <br>
    <b>Password</b>
    <br>
    <input   type="password" name="password" size="35">
    <br>
    <br>
    <input   type="submit"  name="login" value="login">
    <br>
     Dont have an account? 
    <a href="taskphp5.php" >Sign up now</a>
           </form>
    </body>
</html>

<?php
#6
//select==get from to TABLE
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname ='registration';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   echo $_GET['name'];
  if(! $conn ) {
       die('Could not connect: '  . mysqli_connect_error());
    }
   
    echo 'Connected successfully<br>';
  
   $sql = 'SELECT  u_username, u_password FROM user';
   mysqli_select_db($conn,$dbname);
   $result = mysqli_query($conn,$sql );
   
   if(! $result ) {
      die('Could not get data: ' . mysqli_error($conn));
   }


   if (mysqli_num_rows($result) > 0) {
      // output data of each row

      while($row = mysqli_fetch_assoc($result)) {
          
          if($_GET['name']==$row['u_username'] && $_GET['password']==$row['u_password'] )
{
     
    echo "<button> <a href =image.php >click</button>";
    // echo $_GET['name'].$row['u_username'] . $_GET['password']. $row['u_password'];
    break;
}
        
   }
}
else {
    echo "0 results";
  }
   
     

?>

