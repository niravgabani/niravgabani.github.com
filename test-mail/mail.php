<?php

$to = "niravgabani22@gmail.com";
$subject = "Hellow Nikey";
$message ="Hey... Nikeyyyy your so great";
$from = "niravgabani8787@gmail.com";
$headers = "From : $from";

mail($to , $subject , $message , $headers);

echo "Succes mail";





?>