<?php
class database{
    private $host;
    private $dbusername;
    private $dbpassword;
    private $dbname;
    protected function connect(){
        $this->host="localhost";
        $this->dbusername="root";
        $this->dbpassword="";
        $this->dbname="akpersonalstudy";
        $con=new mysqli($this->host,$this->dbusername,$this->dbpassword,$this->dbname);
        return $con;
    }
}
class query extends database{
    //SELECT DATA FROM DATABASE 
    public function getData($table,$field='*',$condition_arr='',$order_by_field='',$order_by_type='desc',$limit=''){
        $sql="SELECT $field from $table";//STUDENTS IS TABLE NAME HERE..
      if($condition_arr !=''){
          $sql .=' where ';
          $c=count($condition_arr);
          $i=1;
          foreach($condition_arr as $key=>$val){
              if($i==$c){
                  $sql .="$key='$val'";
              }else{
                  $sql .="$key='$val' and ";
              }
              $i++;
          }
      }
        if($order_by_field!=''){
           $sql .=" order by $order_by_field $order_by_type ";
       }
       if($limit!=''){
           $sql .="limit $limit ";
       }
        $result=$this->connect()->query($sql);
        if($result->num_rows>0){
            $arr=array();
            while($row=$result->fetch_assoc()){
                //print_r($row);TO PRINT ALL DATA OF THE TABLE
                $arr[]=$row;
            }
            return $arr;
        }else{
            return 0;
        }
    }
    //INSERT DATA IN TABLE CREATE QUERY
    public function insertData($table,$condition_arr){
        if($condition_arr !=''){
            foreach($condition_arr as $key=>$val){
                $fieldArr[]=$key;
                $valueArr[]=$val;
            }
            $field=implode(",",$fieldArr);
            $value=implode("','",$valueArr);
            $value="'".$value."'";
            $sql="INSERT INTO $table($field) VALUES($value)";
            $result=$this->connect()->query($sql);
        }
    }

    //DELETE DATA FROM TABLE QUERY
    public function deleteData($table,$condition_arr){
        if($condition_arr !=''){
            $sql="DELETE FROM $table where ";
            $c=count($condition_arr);
            $i=1;
            foreach($condition_arr as $key=>$val){
                if($i==$c){
                    $sql .="$key='$val'";
                }else{
                    $sql .="$key='$val' and ";
                }
                $i++;
            }
            $result=$this->connect()->query($sql);
        }
    }
//UPDATE RECORD IN TABLE 
public function updateData($table,$condition_arr,$where_field,$where_value){
    if($condition_arr !=''){
        $sql="UPDATE $table SET ";
        $c=count($condition_arr);
        $i=1;
        foreach($condition_arr as $key=>$val){
            if($i==$c){
                $sql .="$key='$val'";
            }else{
                $sql .="$key='$val' , ";
            }
            $i++;
        }
        $sql .=" where $where_field='$where_value'";
       // echo $sql;
        $result=$this->connect()->query($sql);
    }
}

public function get_safe_str($str){
    if($str !=''){
        return mysqli_real_escape_string($this->connect(),$str);
    }
}

}

?>