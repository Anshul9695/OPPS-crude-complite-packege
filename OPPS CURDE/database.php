<?php

require_once "debugger_helper.php";
//creating class 
class Database{

	private $db_host="localhost";
	private $db_user="root";
	private $db_pass="";
	private $db_database="akpersonalstudy";
       
       // create variable for connection and set value false
	private $mysqli="";
	private $conn=false;
	private $result=array();

	public function __construct(){
		if(!$this->conn){
          $this->mysqli=new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_database);
              $this->conn=true;
              if($this->mysqli->connect_error){
               array_push($this->result,$this->mysqli->connect_error);
               return false;
              }

		}else{
			return true;
		}
       
	}


	//insert function start insert data in database
	public function insert($table,$params=array()){
         if($this->tableExists($table)){
         	//prx($params);
      $table_columns=implode(',',array_keys($params));
      $table_value=implode("','",$params);
          $sql="INSERT INTO $table($table_columns) VALUES('$table_value')";
          if($this->mysqli->query($sql)){
             array_push($this->result, $this->mysqli->insert_id);
             return true;
          }else{

       array_push($this->result, $this->mysqli->error);
             return false;
          }
         }else{
         return false;
         }
	}
//insert function close


	//update function start update row data in database
	public function update()
	{
		// code...
	}
//update funciton close


	//delete function start delete table or roe from database
	public function delete(){

	}
//delete function close

	//  select function start select data from database
	public function select(){

	}//select function close
  

  //check table exit or not in database
	private function tableExists($table){
      $sql="SHOW TABLES FROM $this->db_database LIKE '$table'";
      $tableInDb=$this->mysqli->query($sql);
      if($tableInDb){
      	if($tableInDb->num_rows==1){
      		return true;
      	}else{
      		array_push($this->result,$table."does not exist in this database.");
      		return false;
      	}
      }
	}
	//end table exist funcion
	public function getResult(){
		$val=$this->result;
		$this->result=array();
		return $val;
	}
//get result
	//end get result
	//close connection  start
	public function __destruct(){
       if($this->conn){
          if($this->mysqli->close()){
          	$this->conn=false;
          	return true;
          }
       }else{
       	return false;
       }
	}
	//close connection  end
}//database class close

?> 