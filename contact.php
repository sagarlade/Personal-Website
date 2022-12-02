
<?php

$conn = mysqli_connect('localhost','root','','myinfo_db');

if(isset($_POST['send'])){

   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];

   $insert = "INSERT INTO `det`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";

   mysqli_query($conn, $insert);

   header('location:index.php');

}

?>

