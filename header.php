<?php
session_start();

if(!isset($_SESSION['admin']))
{
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Management System</title>

<style>
body{
    margin:0;
    font-family: Arial;
    display:flex;
    flex-direction:column;
    min-height:100vh;
}

.header{
    background:#35424a;
    color:white;
    padding:20px 20px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.header h1{
    margin:0;
}

.nav{
    background:#35424a;
    display:flex;
    justify-content:center;
    flex-wrap:wrap;
}

.nav a{
    color:white;
    padding:12px 20px;
    text-decoration:none;
    font-weight:bold;
}

.nav a:hover{
    background:#35425a;
}

.container{
    flex:1;
    padding:20px;
}
</style>

</head>

<body>

<div class="header">
    <h1>Student Management</h1>
    <div>Welcome, <?php echo $_SESSION['admin']; ?></div>
</div>

<div class="nav">
    <a href="index.php">Home</a>
    <a href="add_student.php">Add Student</a>
    <a href="view_students.php">View Students</a>
    <a href="delete_student_form.php">Delete Student</a>
    <a href="logout.php">Logout</a>
</div>

<div class="container">