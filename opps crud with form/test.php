<?php
include "database.php";
$obj=new query();

//SELECT DATA FROM TABLE
// $condition_arr=array();
// // $result=$obj->getData('students','*','','id','asc',7);//select by condition  as id asc and limit then use this
// $result=$obj->getData('students');//select table complite data of student then use this 
// echo "<pre>";
// print_r($result);



//INSERT DATA IN TABLE
// $condition_arr=array('id'=>'16','student_name'=>'mukesh ambani','age'=>'10/10/2021','city'=>'jio vala');
// $result=$obj->insertData('students',$condition_arr);
// echo "<pre>";
// print_r($result);



//DELETE DATA FROM TABLE
//$condition_arr=array('id'=>16);
//$result=$obj->deleteData('students',$condition_arr);

//UPDATE DATA IN DATABASE TABLE
$condition_arr=array('id'=>10,'student_name'=>'check','age'=>'2021/07/14','city'=>'check');
$result=$obj->updateData('students',$condition_arr,'id',0);
print_r($result);
?>