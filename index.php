<?php
$to      = 'bbj.work11@gmail.com,srinivasrao@digitowork.com';
$subject = 'the subject';
$message = 'hello';
$headers = array('From' => 'webmaster@example.com','Reply-To' => 'webmaster@example.com','X-Mailer' => 'PHP/' . phpversion());
if(mail($to, $subject, $message, $headers)){
echo "test ok ";
}else {
print_r(error_get_last());
}
?>
