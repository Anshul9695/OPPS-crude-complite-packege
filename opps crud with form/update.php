<?php
include "database.php";
$obj=new query();

if($_SERVER['REQUEST_METHOD']=='POST'){

	if(isset($_POST['update']) and !empty($_POST['update'])){
    $id = isset($_POST['id'])?$_POST['id']:NULL;
    $student_name = isset($_POST['student_name'])?$_POST['student_name']:NULL;
    $age = isset($_POST['age'])?$_POST['age']:NULL;
    $city = isset($_POST['city'])?$_POST['city']:NULL;
    }
    //UPDATE DATA IN DATABASE TABLE
$condition_arr=array('id'=>$id,'student_name'=>$student_name,'age'=>$age,'city'=>$city);
$result=$obj->updateData('students',$condition_arr,'id',$id);
//echo $result;
//print_r($result);
//exit();
echo "<script>alert('your recard updated success fully')</script>";
echo "<script>window.location.href='user.php';</script>";
}
?>