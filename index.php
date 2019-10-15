<?php

$url = 'http://tenping.kr/adbox/list?MemberID=Rc%2fg4Tm9iyAylA4x%2bMjZiBZlKBKO2rd8sIVajaEKNDoMYUeZO1woS%2f6bhcxMwwwW&PageSize=10&CampaignType=0&MinClickPoint=0&MinCurrentPoint=0&ExistMiddleImage=&ExistRectangleImage=&IsPartner=';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$output = curl_exec($ch);
$response = json_decode($output, true);
curl_close($ch);

$a=$response['List'];
print_r($a[0]);
?>