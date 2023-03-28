<?php
    //model 1
    //$age = array ("Petter"=>"35", "Ben"=>"37", "Joe"=> "43");

    $age["AGUS"] = "35";
    $age["DONA"] = "70";
    $age["TINA"] = "40";
    $age["BOBON"]= "50";

    header("Contect-Type; application/json");
    echo json_encode($age);
