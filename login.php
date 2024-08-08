<?php
$login=false;
$noLogin=false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'dbconnect.php';
  $name = $_POST['name'];
//   $email = $_POST['email'];
  $password = $_POST['password'];
//   $confirm_password = $_POST['confirm_password'];

$sql = "SELECT * FROM audience WHERE name='$name' AND password='$password'";

    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num==1)
    {
        $login=true;
        header("location:welcome.php");
        exit();
     
    }
    else{
        $noLogin=true;
        // header("location:login_in_page.php");
    }


}
?>

