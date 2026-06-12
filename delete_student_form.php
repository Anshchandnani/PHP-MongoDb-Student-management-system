<?php
include 'header.php';
require 'db.php';

$student = null;

if(isset($_POST['search']))
{
    $id = $_POST['student_id'];
    $student = $collection->findOne(['student_id'=>$id]);
}

if(isset($_POST['delete']))
{
    $id = $_POST['student_id'];

    $collection->deleteOne(['student_id'=>$id]);

    echo "<h3 style='color:red;'>Student Deleted Successfully</h3>";
}
?>

<h2>Delete Student</h2>

<form method="post">

Enter Student ID:<br>
<input type="text" name="student_id" required>

<br><br>

<button name="search">Search</button>

</form>

<br>

<?php if($student) { ?>

<h3>Student Details</h3>

<p><b>ID:</b> <?php echo $student['student_id']; ?></p>
<p><b>Name:</b> <?php echo $student['name']; ?></p>

<form method="post">
<input type="hidden" name="student_id" value="<?php echo $student['student_id']; ?>">
<button name="delete" onclick="return confirm('Are you sure to delete?')">
Delete Student
</button>
</form>

<?php } ?>

<?php include 'footer.php'; ?>