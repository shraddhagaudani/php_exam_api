
<?php
    header("Access-Control-Allow-Methods: POST");
    include("../config.php");

    $config = new Config();

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $joinyear = $_POST['joinyear'];
        $salary = $_POST['salary'];

        $res = $config->insert($name,$gender,$joinyear,$salary);

        if($res){
            $arr['msg'] = "Record inserted....";
            http_response_code(201);
        }else{
            $arr['msg'] = "Record not inserted....";
        }
    }else{
        $arr['error'] = "Only POST Method are allowed...";
    }

    echo json_encode($arr);
?>