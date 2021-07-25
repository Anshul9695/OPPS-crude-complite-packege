<?php
include "database.php";
$obj=new query();

if($_SERVER['REQUEST_METHOD']=='POST'){

	if(isset($_POST['submit']) and !empty($_POST['submit'])){
    $id = isset($_POST['id'])?$_POST['id']:NULL;
    $student_name = isset($_POST['student_name'])?$_POST['student_name']:NULL;
    $age = isset($_POST['age'])?$_POST['age']:NULL;
    $city = isset($_POST['city'])?$_POST['city']:NULL;

//**********************************************SERVER SIDE VALIDATION********************* */
    if(is_null($id) or empty($id)){
        echo "<script>";
        echo "alert('your student id is empty!');";
        echo "window.location.href='index.php';";
        echo "</script>";
      }elseif(is_null($student_name) or empty($student_name)){
        echo "<script>";
        echo "alert('student name is empty!');";
        echo "window.location.href='index.php';";
        echo "</script>";
         
       }elseif(is_null($age) or empty($age)){
        echo "<script>";
        echo "alert('student age is empy!');";
        echo "window.location.href='index.php';";
        echo "</script>";
         
       }elseif(is_null($city) or empty($city)){
        echo "<script>";
        echo "alert('student city name is empty!');";
        echo "window.location.href='index.php';";
        echo "</script>";
       }
    unset($_POST['submit']);
    $i=0;
    foreach($_POST as $key => $value){
      if(empty($value))
        break;
      $i++;
    }
if($i==count($_POST)){  
     	$data=[
    	 'id'=>"$id",
        'student_name'=>"$student_name",
         'age'=>"$age",
         'city'=>"$city"
         ];
//INSERT DATA IN TABLE
$result=$obj->insertData('students',$data);

echo "<script>";
echo "alert('your registration successfull !');";
echo "window.location.href='index.php';";
echo "</script>";
        } 
        else{
            echo "<script>";
            echo "alert('Please Fill The All Neccessary Fields,Then Submit The Form !');";
            echo "window.location.href='index.php';";
            echo "</script>";
        }  
    }else{
        echo "your Request in not valied";
    }
}else{
    echo "<script>alert('your request is not post please dont hit url');</script>";
    echo "<script>window.location.href='index.php';</script>";
}
?>