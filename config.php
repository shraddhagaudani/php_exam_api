<?php
class config{
    public $HOSTNAME = "localhost";
    public $USERNAME = "root";
    public $PASSWORD = "";
    public $DB_NAME = "viva";
    public $connect_res;


    public function connect(){
        $this->connect_res = mysqli_connect($this->HOSTNAME,$this->USERNAME,$this->PASSWORD,$this->DB_NAME);
        return $this->connect_res;

    }

    public function insert($name,$gender,$joinyear,$salary){
     $this->connect;

    $query =  "INSERT INTO employe_info(name,gender,joinyear,salary) VALUES('$name','$gender','$joinyear','$salary');";

    $res=  mysqli_query($this->connect_res,$query);

    return $res;
    }

    public function fetch_data(){
        $this->connect;

     $query =   "SELECT * FROM employe_info";

      $res= mysqli_query($this->connect_res,$query);

      return $res;
    }

}

?>