<?php

if (isset($_POST["width"]) && isset($_POST["length"]) && isset($_POST["height"]) && isset($_POST["thickness"]) ) { 
    // Формируем массив для JSON ответа
    $result = array(
        'width' => $_POST["width"],
        'length' => $_POST["length"],
        'height' => $_POST["height"],
        'thickness' => $_POST["thickness"]

    ); 
    // Переводим массив в JSON
    echo json_encode($result); 
}

if (isset($_POST["A"]) && isset($_POST["H"]) && isset($_POST["B"]) && isset($_POST["B1"]) && isset($_POST["D"]) && isset($_POST["D1"])   && isset($_POST["PCS"])  && isset($_POST["typ"])) { 

    $results = array(
        'A' => $_POST["A"], 
        'H' => $_POST["H"],
        'B' =>  $_POST["B"],
        'B1' => $_POST["B1"],
        'D' => $_POST["D"],
        'D1' => $_POST["D1"],
        'PCS' => $_POST["PCS"],
        'typ' => $_POST["typ"]
    ); 

    // Переводим массив в JSON
    echo json_encode($results); 
}
?>