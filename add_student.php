<?php
include 'header.php';
require 'db.php';

if(isset($_POST['submit']))
{
    $collection->insertOne([
        'student_id'=>$_POST['student_id'],
        'name'=>$_POST['name'],
        'course'=>$_POST['course'],
        'semester'=>$_POST['semester'],
        'email'=>$_POST['email'],
        'phone'=>$_POST['phone']
    ]);

    echo "<script>alert('Student Added Successfully');</script>";
}
?>

<style>
.form-box{
    width:400px;
    margin:40px auto;
    background:white;
    padding:30px;
    border-radius:15px;
    box-shadow:0 0 12px rgba(0,0,0,0.2);
}

.form-box h2{
    text-align:center;
    margin-bottom:20px;
}

.form-box input{
    width:95%;
    padding:10px;
    margin:10px 0;
    border-radius:5px;
    border:1px solid #ccc;
}

.form-box button{
    width:100%;
    padding:12px;
    background:#2c3e50;
    color:white;
    border:none;
    border-radius:5px;
    font-size:16px;
    cursor:pointer;
}
</style>

<div class="form-box">

<h2>Add Student</h2>

<form method="post">

<input type="text" name="student_id" placeholder="Student ID" required>

<input type="text" name="name" placeholder="Full Name" required>

<input type="text" name="course" placeholder="Course" required>

<input type="text" name="semester" placeholder="Semester" required>

<input type="email" name="email" placeholder="Email" required>

<input type="text" name="phone" placeholder="Phone" required>

<button name="submit">Add Student</button>

</form>

</div>

<?php include 'footer.php'; ?>