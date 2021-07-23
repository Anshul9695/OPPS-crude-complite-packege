<?php
 include 'database.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST['submit']) and !empty($_POST['submit'])){
		$id =isset($_POST['id'])?$_POST['id']:NULL;
		$student_name =isset($_POST['student_name'])?$_POST['student_name']:NULL;
		$age =isset($_POST['age'])?$_POST['age']:NULL;
		$city =isset($_POST['city'])?$_POST['city']:NULL;

  //////////////////////////////====server side validation===============///////////////////////
        if(is_null($id) or empty($id)){
	          echo "<script>";
			 echo "alert('*your Patient ID is empty')";
			 echo "</script>";
             }elseif(is_null($student_name) or empty($student_name)){
             echo "<script>";
			 echo "alert('*student name is empty')";
			 echo "</script>";
             }elseif(is_null($age) or empty($age)){
             echo "<script>";
			 echo "alert('*student age is empty')";
			 echo "</script>";
             }elseif(is_null($city) or empty($city)){
             echo "<script>";
			 echo "alert('*city is empty')";
			 echo "</script>";
             } 
    unset($_POST['students']);
    $i=0;
    foreach($_POST as $key => $value){
      if(empty($value))
        break;
      $i++;
    }

                if($i==count($_POST)){  
     	          $data=['id'=>"$id",'student_name'=>"$student_name",'age'=>"$age",'city'=>"$city"];
	                    $tablename='students';
	                    $query = new Database();
	                    $query->insert($tablename,$data);
	                    echo "<script>";
                            echo "alert('registration successfull your Registration number is $id');";
        	                 echo "window.location.href='index.php';";
                        echo "</script>";
	                    }
              //else start else if block server side validation
	              else{
		              echo "<script>";
		              echo "alert('fill every field ');";
		              echo "window.location.href='index.php';";
		              echo "</script>";
	              }//else close elseif block server side validation

}else{
	echo "send request using submit button";
}
}else{
	echo "<script>";
	echo "alert('not registered!!your request is not send by button (you hitting direct register.php in url)')";
	echo "</script>";
	echo "<script>";
	    echo "window.location.href='index.php';";
	echo "</script>";
} 


// end server side validation
// include 'database.php';
// $obj=new Database();
// echo "welcome to the index page";

// $obj->insert('students',['id'=>'3','student_name'=>'rakesh gupta','age'=>'20/5/2020','city'=>'bomby']);
// echo "insert result id";
// print_r($obj->getResult());
?>