<?php

//  $url = 'http://127.0.0.1:8000/';
//  $r = curl_init($url);
//  curl_setopt($r, CURLOPT_RETURNTRANSFER, true);
//  $response = curl_exec($r);

//  echo $response;

// $data = $title . " : " . $description;
    // curl_setopt($r, CURLOPT_POSTFIELDS, json_encode($data));
    // curl_setopt($r, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $title = $_POST['title'];
    $description = $_POST['desc'];
    echo urlencode($title);
    echo '</br>';
    echo urlencode($description);
    echo '</br>';
    // Submit the data to the FastAPI endpoint using curl
    $url = 'http://127.0.0.1:8000/indexing/doc?title='.urlencode($title).'&desc='.urlencode($description);
    $r = curl_init($url);
    curl_setopt($r, CURLOPT_POST, true);
    curl_setopt($r, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($r);

    echo $response;

    curl_close($r);
}