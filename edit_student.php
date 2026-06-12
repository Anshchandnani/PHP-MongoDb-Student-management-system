<?php
include 'db.php';
include 'header.php';

$id = $_GET['id'];

$student = $collection->findOne(['student_id'=>$id]);
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Student</title>
</head>

<body>

<h2>Edit Student</h2>

<form method="post" action="update_student.php">

<input type="hidden" name="student_id" value="<?php echo $student['student_id']; ?>">

Name<br>
<input type="text" name="name" value="<?php echo $student['name']; ?>"><br><br>

Course<br>
<input type="text" name="course" value="<?php echo $student['course']; ?>"><br><br>

Semester<br>
<input type="text" name="semester" value="<?php echo $student['semester']; ?>"><br><br>

Email<br>
<input type="text" name="email" value="<?php echo $student['email']; ?>"><br><br>

Phone<br>
<input type="text" name="phone" value="<?php echo $student['phone']; ?>"><br><br>

<input type="submit" name="update" value="Update Student">

</form>

</body>
</html>

<?php
	include 'footer.php';
?>