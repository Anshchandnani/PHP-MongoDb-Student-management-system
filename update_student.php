<?php
include 'db.php';

if(isset($_POST['update']))
{
    $id = $_POST['student_id'];

    $collection->updateOne(
    ['student_id'=>$id],
    ['$set'=>[
        'name'=>$_POST['name'],
        'course'=>$_POST['course'],
        'semester'=>$_POST['semester'],
        'email'=>$_POST['email'],
        'phone'=>$_POST['phone']
    ]]
    );

    // ✅ Alert + Redirect
    echo "<script>
            alert('Student Updated Successfully');
            window.location.href='index.php';
          </script>";
}
?>