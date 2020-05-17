
<?php
session_start();
require 'connect.php';

if(isset($_COOKIE['id']) && isset($_COOKIE['key']))
{
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    $result = mysqli_query($conn, "SELECT username FROM tb_user WHERE hak = $id");
    $row = mysqli_fetch_assoc($result);

    if($key === hash('sha256', $row['username']))
    {
        $_SESSION['login'] = true;
    }
}


if(isset($_SESSION["login"]))
{
    header("location: index.php");
    exit;
}

if(isset($_POST["login"]))
{
    $username = $_POST["user"];
    $password = $_POST["pass"];

    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE 
    username = '$username' AND password = '$password'");

    if($username != "" || $password != "")
    {
        if(mysqli_num_rows($result) != 0)
        {
            $row = mysqli_fetch_assoc($result);
            
            //set session
            $_SESSION["login"] = true;

            //cek remember me
            if(isset($_POST["remember"]))
            {
                //buat cookie
                setcookie('id', $row['hak'], time()+60);
                setcookie('key', hash('sha256', $row['username']), time()+60);
            }

            header("location: index.php");
            exit;
        }
        else
        {
            $error1 = true;
        }
    }
    else
    {
        $error2 = true;   
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Halaman Login</title>
<body>

<h1>Halaman Login</h1>

<div class="container">
  <form action=""  method="post" >
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="user" placeholder="Enter username" name="user" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <button type="submit" name="login" class="btn btn-primary">Login</button>  
  </form>
</div>
</body>
</head>
</html>