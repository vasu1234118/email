<?php
<h1>bbhhgghhh</h1>
$to      = 'bbj.work11@gmail.com,srinivasrao@digitowork.com';
$subject = 'the subject';
$message = 'hello';
function mymail($to='', $subject='',$body='' ){
    
 //extract($_GET);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://dqci.in/bbj/mymail",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "to=$to&subject=$subject&body=htmlentities($body)",
  CURLOPT_HTTPHEADER => array(
    
    "cache-control: no-cache",
    "content-type: application/x-www-form-urlencoded",
    
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
}
mymail($to, $subject, $message);
$headers = array('From' => 'webmaster@example.com','Reply-To' => 'webmaster@example.com','X-Mailer' => 'PHP/' . phpversion());
if(mail($to, $subject, $message, $headers)){
echo "test ok ";
}else {
print_r(error_get_last());
}
?>
