<?php
session_start();
require 'db.php';

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $admin = $db->admin_login->findOne([
        'username'=>$username,
        'password'=>$password
    ]);

    if($admin)
    {
        $_SESSION['admin'] = $username;
        header("Location: index.php");
    }
    else
    {
        echo "<script>alert('Invalid Login');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>

<style>
body{
    background:#ecf0f1;
    font-family:Arial;
}

.login-box{
    width:300px;
    margin:120px auto;
    padding:20px;
    background:white;
    border-radius:10px;
    text-align:center;
    box-shadow:0 0 10px rgba(0,0,0,0.2);
}

input{
    width:90%;
    padding:10px;
    margin:10px;
}

button{
    padding:10px 20px;
    background:#2c3e50;
    color:white;
    border:none;
    cursor:pointer;
}
</style>

</head>

<body>

<div class="login-box">
<h2>Admin Login</h2>

<form method="post">
<input type="text" name="username" placeholder="Username" required><br>
<input type="password" name="password" placeholder="Password" required><br>
<button name="login">Login</button>
</form>

</div>

</body>
</html>