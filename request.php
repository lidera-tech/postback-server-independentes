<?php

function request($data) {
    $postdata = json_encode($data);

    $url = "https://gucianotravel.com/api.v2/integration/web-hoock";

    // persiapkan curl
    $ch = curl_init(); 

    // set url
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT,10);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    // $output contains the output string 
    $output = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    // tutup curl 
    curl_close($ch);      

    // menampilkan hasil curl
    if ($httpcode === 200)
    {
        return true;
    }
    else
    {
        return false;
    }
}




// $url = 'https://gucianotravel.com/api.v2/integration/web-hoock/123';

// $postdata = http_build_query(
//     array(
//         'var1' => 'some content',
//         'var2' => 'doh'
//     )
// );

// $opts = array('http' =>
//     array(
//         'method'  => 'POST',
//         'header'  => 'Content-Type: application/x-www-form-urlencoded',
//         'content' => $postdata
//     )
// );

// $context  = stream_context_create($opts);

// $result = @file_get_contents($url, false, $context);
// // var_dump($http_response_header[0]);

// preg_match('/([0-9])\d+/',$http_response_header[0],$matches);

// $responsecode = intval($matches[0]);

// // echo $responsecode === 200; // Output: 200
// if ($responsecode === 200) {
//     echo $responsecode;
// } else {
//     echo 'Err';
// }