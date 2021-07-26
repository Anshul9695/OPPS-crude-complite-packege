<?php
include "database.php";
$obj=new query();
 //$result=$obj->getData('students');

  $id=$_GET['id'];
 $condition_arr=array('id'=>$id);
$result=$obj->deleteData('students',$condition_arr);

echo "<script>alert('Data Deleted successfully !!')</script>";
echo "<script>window.location.href='user.php';</script>";
?>