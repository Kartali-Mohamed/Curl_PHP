<?php

//  $url = 'http://127.0.0.1:8000/';
//  $r = curl_init($url);
//  curl_setopt($r, CURLOPT_RETURNTRANSFER, true);
//  $response = curl_exec($r);

//  echo $response;

// $data = $title . " : " . $description;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $data = array(
        'text' => $_POST['name'] . " : " . $_POST['email']
    );

    // Submit the data to the FastAPI endpoint using curl
    $url = 'http://127.0.0.1:8000/indexing/doc';
    $r = curl_init($url);
    curl_setopt($r, CURLOPT_POST, true);
    curl_setopt($r, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($r, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($r, CURLOPT_RETURNTRANSFER, true);


    $response = curl_exec($r);

    echo $response;

    curl_close($r);
}