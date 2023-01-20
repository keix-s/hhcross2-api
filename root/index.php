<?php

#    $url = "nginx:8080";
#    //$url = "http://localhost:8080";
#    //$url = "http://host.docker.internal:8080";
#
#    //$url = "http://www.yahoo.co.jp/";
#    $ch = curl_init(); // はじめ
#
#    //オプション
#    curl_setopt($ch, CURLOPT_URL, $url); 
#    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
#    $html =  curl_exec($ch);
#    var_dump($html);
#    curl_close($ch); //終了
#

    header('Content-Type: application/json');
    echo json_encode(["Hello" => "World!!"]);
