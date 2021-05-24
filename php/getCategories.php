<?php

function getCategories(){
    $curl = curl_init();
    $url = "http://zutiws.dis.rs/serpod/SerPodM.dll/onl_liskat";

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);

    $resp = curl_exec($curl);

    if($error = curl_error($curl)){
        echo "Error" . $error;
        curl_close($curl);
    }else{
        $decoded = json_decode($resp, true);
        curl_close($curl);
        return $decoded;
    }
    
}
    
?>