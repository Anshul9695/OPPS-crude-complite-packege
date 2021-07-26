<?php
include "database.php";
$obj=new query();
if(isset($_GET['id']) && $_GET['id']!=''){
  $id=$obj->get_safe_str($_GET['id']);
  $condition_arr=array('id'=>$id);
  $result=$obj->getData('students','*',$condition_arr);
  //print_r($result);
  $students_name=$result['0']['student_name'];
  $age=$result['0']['age'];
  $city=$result['0']['city'];
}
 // $result=$obj->getData('students','*','','id','asc',7);//select by condition  as id asc and limit then use this


// $condition_arr=array('id'=>11,'student_name'=>'rahmat ali khan','age'=>'2020/04/12','city'=>'kuchbhi');

?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.date{
  width:100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize:none;
}
</style>
</head>
<body>
<div class="container">
<form method="post" action="update.php" >
    <div class="row">
      <div class="col-25">
        <label for="id">Id:</label>
      </div>
      <div class="col-75">
        <input type="text" id="id" name="id" value="<?php echo $id; ?>" placeholder="Enter your Id card here....">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="student_name">Student_Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="student_name" value="<?php echo $students_name; ?>" name="student_name" placeholder="Enter Your name here..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="age">Age</label>
      </div>
      <div class="col-75">
      <input type="date" id="age" class="date" value="<?php echo $age; ?>" name="age" placeholder="Enter Your age here.." >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="city">City</label>
      </div>
      <div class="col-75">
      <input type="text" id="city" value="<?php echo $city; ?>" name="city" placeholder="Enter Your city here..">
      </div>
    </div>
    <div class="row">
      <input type="submit" name="update" value="Update_Records">
    </div>
  </form>
</div>

</body>
</html>