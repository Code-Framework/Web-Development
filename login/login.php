<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "id19251342_check", "Aa@123456789", "id19251342_conn");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_POST['submit']))
{    $user = $_POST['log_user'];
     $pass = $_POST['logpass'];
   
     $sql = "INSERT INTO conn (log_user,log_pass)
     VALUES ('$user','$pass')";
     if (mysqli_query($link, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($link);
}
?>