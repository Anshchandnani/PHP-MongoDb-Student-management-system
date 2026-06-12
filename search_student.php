<?php
include 'db.php';
include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Search Student</title>
</head>

<body>

<h2>Search Student</h2>

<form method="post">

Enter Student ID<br>
<input type="text" name="student_id">

<input type="submit" name="search" value="Search">

</form>

<?php

if(isset($_POST['search']))
{

$id = $_POST['student_id'];

$student = $collection->findOne(['student_id'=>$id]);

if($student)
{

echo "<h3>Student Found</h3>";

echo "Name: ".$student['name']."<br>";
echo "Course: ".$student['course']."<br>";
echo "Semester: ".$student['semester']."<br>";
echo "Email: ".$student['email']."<br>";
echo "Phone: ".$student['phone']."<br>";

}
else
{
echo "Student Not Found";
}

}
?>

<br>
<a href="index.php">Back</a>

</body>
</html>

<?php
	include 'footer.php';
?>