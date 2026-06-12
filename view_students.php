<?php
include 'header.php';
require 'db.php';

$students = [];

if(isset($_GET['search']))
{
    $keyword = $_GET['keyword'];

    $students = $collection->find([
        '$or'=>[
            ['student_id'=>$keyword],
            ['name'=>['$regex'=>$keyword,'$options'=>'i']]
        ]
    ]);
}
else
{
    $students = $collection->find();
}
?>

<h2>Student List</h2>

<!-- 🔍 SEARCH BAR -->
<form method="get" style="margin-bottom:20px;">
    <input type="text" name="keyword" placeholder="Search by ID or Name"
    style="padding:10px;width:250px;">
    
    <button name="search" style="padding:12px 20px;background:#3498db;color:white;border:none;">
        Search
    </button>

    <a href="view_students.php" style="margin-left:10px;">Reset</a>
</form>

<!-- 📋 TABLE -->
<table border="0" width="100%" style="border-collapse:collapse;">

<tr style="background:#2c3e50;color:white;">
<th>ID</th>
<th>Name</th>
<th>Course</th>
<th>Semester</th>
<th>Email</th>
<th>Phone</th>
<th>Action</th>
</tr>

<?php
foreach($students as $student)
{
?>
<tr style="background:#ecf0f1;text-align:center;">
<td><?php echo $student['student_id']; ?></td>
<td><?php echo $student['name']; ?></td>
<td><?php echo $student['course']; ?></td>
<td><?php echo $student['semester']; ?></td>
<td><?php echo $student['email']; ?></td>
<td><?php echo $student['phone']; ?></td>

<td>
<a href="edit_student.php?id=<?php echo $student['student_id']; ?>"
style="color:green;font-weight:bold;">Edit</a>

|

<a href="delete_student.php?id=<?php echo $student['student_id']; ?>"
style="color:red;font-weight:bold;"
onclick="return confirm('Are you sure?')">Delete</a>
</td>
</tr>

<?php } ?>

</table>

<?php include 'footer.php'; ?>