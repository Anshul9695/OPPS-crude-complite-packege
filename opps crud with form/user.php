<?php
include "database.php";
$obj=new query();
 $result=$obj->getData('students');//select table complite data of student then use this 
// echo "<pre>";
// print_r($result);
?>
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<table id="customers">
  <tr>
    <th>S. N.</th>
    <th>id</th>
    <th>student_name</th>
    <th>age</th>
    <th>city</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
<?php 
if(isset($result['0'])){
    foreach($result as $list){
?>
  <tr>
   <td><?php echo $list['s.n']; ?></td>
    <td><?php echo $list['id']; ?></td>
    <td><?php echo $list['student_name']; ?></td>
    <td><?php echo $list['age']; ?></td>
    <td><?php echo $list['city']; ?></td>

    <td style="textalign:center">
    <a href="edit.php?id=<?php echo $list['id'];?>">Update</a>
    </td>
    <td style="textalign:center;">
    <a href="delete.php?id=<?php echo $list['id']; ?>">Delete</a>
</td>

  </tr>
  <?php } }else{ ?>
    <tr>
        <td colspan="b" textalign="center">No Record Found ! </td>
    </tr>
    <?php } ?>
</table>

</body>
</html>
