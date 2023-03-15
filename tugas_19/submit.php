
<?php
session_start();

if(!isset($_SESSION['email'])){
    header("Location: main.php");
    exit;
}


$_SESSION['email'] = true;
if(isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo "Email: " . $_SESSION['email'] . "<br>";
    echo "Password: ".$password;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div>
      <form action="logout.php" method="post">
        <input class="button" type="submit" value="Logout">
      </form>
    </div>
  
</body>
</html>