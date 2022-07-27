<?php 

    $json = $_POST['data'];
    //sleep(3);
    $student = json_decode($json);
    //print_r($student);
    echo $student->username;
    
    //$student = ['username'=>'alamin', 'password'=>'123', 'email'=>'alamin@aiub.edu'];
    //$json = json_encode($student);
    //echo $json;
?>