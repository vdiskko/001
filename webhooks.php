<?php
 
$strAccessToken = "ZNFXW2UqxuulR1s8f4gqZAA43FII0iWyLZ52NA/ujqF3GJbaO4ChdGOjoJEA/u01+V75Yfw2Ev0aHKyTbs+4X73ACv4OWhSOmkK4ZnWmHiMeGtPTJsHNE9N14gYj9aLQurf+dTC4FqcbkZVPUJeTsAdB04t89/1O/w1cDnyilFU=";
 
$strUrl = "https://api.line.me/v2/bot/message/push";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
$arrPostData = array();
$arrPostData['to'] = "U518d9aeb1e290df2bc31fe25aa5e6e93";
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = "มีงานเข้า 1 งาน ";
 
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);
 
?>
