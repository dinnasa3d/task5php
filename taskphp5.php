
<html>
<body>
<form action="#" method="GET"> 
   <!-- <form action="" method="GET">  -->
    <h2>Sign Up</h2>
    <p>Please fill this form to create an account. </p>
    <b>Username</b>
</br>
    <input  type="text" name="name" size="35" >
    <br>
    <b>Password</b>
    <br>
    <input type="password" name="password"size="35">
    <br>
    <b>Confirm Password</b>
    <br>
    <input type="password" name="Confirmpassword"size="35" >
    <br>
    <br>
    <input type="submit"  value="submit">
    <input type="reset" name="Reset">
    </form>
    <!-- <button>Reset</button> -->
    <p>Already have an account?  <a href="login.php"><button> login here </button></a></p>

</body>
</html>
<?php

#5
//insert data to TABLE
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname ='registration';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: '   . mysqli_connect_error());
   }
   else
   echo 'Connected successfully<br>';
   
   //select
   mysqli_select_db( $conn,$dbname );
     echo $_GET['name'];
   $a=$_GET['name'];
   $b=$_GET['password'];
   $c=$_GET['Confirmpassword'];
  // $r=$_GET['checked'];


   //create table
   $sql = "INSERT INTO User(u_username,u_password, u_confirmpassword) 
   VALUES ( '$a', '$b', '$c' )";

   $retval = mysqli_query( $conn,$sql );
   
   if(! $retval ) {
      die('Could not insert to table: ' . mysqli_error($conn));
   }
    
  else echo "<br>Data inserted to table successfully\n";

   mysqli_close($conn);

    

    if (!empty($_GET["username"]) && !empty($_GET["password"])) {

        echo "<br>";
        echo "username: " . $_GET['username'] . "<br />";
        echo "password:" . $_GET['password'];
        echo "<br>";
        echo "confirmpassword: " . $_GET['confirm_password']; }
            
        
        
    
    ?>



<!-- <?php
#2
//create db & select
//    $dbhost = 'localhost';
//    $dbuser = 'root';
//    $dbpass = '';
//    $dbname ='registration';
//    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
//    if(! $conn ) {
//       die('Could not connect: ' . mysqli_error($conn));
//    }
   
//    echo 'Connected successfully';
//    //create
//    $sql = "create database $dbname";
//      $retval = mysqli_query( $conn,$sql );
   
//    if(! $retval ) {
//       die('Could not create database: ' . mysqli_error($conn));
//    }
//     //select
//     mysqli_select_db( $conn,$dbname );
//    echo "Database <span style='color:red'>$dbname </span>created & selected successfully\n";
//    mysqli_close($conn); -->
// ?>

<?php
// #3
// //create db TABLE
//    $dbhost = 'localhost';
//    $dbuser = 'root';
//    $dbpass = '';
//    $dbname ='registration';
//    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
//    if(! $conn ) {
//       die('Could not connect: ' . mysqli_error($conn));
//    }
   
//    echo 'Connected successfully<br>';
   
//    //select
//    mysqli_select_db( $conn,$dbname );

//    //create table
//    $sql = 'CREATE TABLE User( u_username varchar(20),
//    u_password VARCHAR(20) NOT NULL,
//    u_confirmpassword  VARCHAR(20) NOT NULL
//    )';

//      $retval = mysqli_query( $conn,$sql );
   
//    if(! $retval ) {
//       die('Could not create table: ' . mysqli_error($conn));
//    }
    
//    echo "<br>Database Table  created successfully\n";
//    mysqli_close($conn);
//?>

 
