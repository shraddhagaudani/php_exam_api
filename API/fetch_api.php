
<?php
    header("Access-Control-Allow-Methods: GET");
    include("../config.php");

    $config = new Config();

    if($_SERVER['REQUEST_METHOD']=="GET"){
        
        
        $res = $config->fetch();

        $data = [];

       while($record = mysqli_fetch_assoc($res)){
        array_push($data,$record);
       }
       $arr['data'] = $data;
    }else{
        $arr['error'] = "Only GET HTTP method allowed...";
    }

    echo json_encode($arr);
?>