<?php
    $mhs= array(
        array("Ardika","2201010322", "Denpasar"),
        array("Dona","2201010322", "Mataram"),
        array("Samsul","2201010322", "Magelang"),
        array("Zizi","2201010322", "Manado"),
    );
    header("Contect-Type; application/json");
    echo json_encode($mhs);
