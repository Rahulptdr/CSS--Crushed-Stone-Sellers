<?php
$insert = false;
if(isset($_POST['fame'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "css";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password ,$dbname);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $Name = $_POST['fame'];
    $Email = $_POST['email'];
    $Message = $_POST['message'];
    
    $sql ="INSERT INTO `css_response` (`name`, `email`, `message`) VALUES ('".$Name."', '".$Email."', '".$Message."')";
    if (mysqli_query($con, $sql)) {
  echo "<h1>"."New Order"."</h1>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
?>