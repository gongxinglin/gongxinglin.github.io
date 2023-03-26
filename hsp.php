<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "http://45.207.53.112/cosapi/list1679650489666.html?token=5fe7a162fda002980484aff23e2c2652&biaoshi=1679650455135&typeName=".$_GET['aa']."&soname=&page=".$_GET['bb'],
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "-----011000010111000001101001\r\nContent-Disposition: form-data; name=\"file\"\r\n\r\nC:\\Users\\Administrator\\Desktop\\QQ截图20230324170904.png\r\n-----011000010111000001101001--\r\n\r\n",
  CURLOPT_HTTPHEADER => [
    "User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 14_8_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.2 Mobile/15E148 Safari/604.1",
    "content-type: multipart/form-data; boundary=---011000010111000001101001"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
