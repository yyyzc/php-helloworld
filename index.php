<?php
print "Hello World !!! PHP version is " . PHP_VERSION . "\n";
?>

<br>
<?php 
print "FORWARDED:";
$ip=$_SERVER["FORWARDED"];
echo $ip;
?> 

<br>
<?php
print "$user_IP:";
$user_IP = ($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"];
$user_IP = ($user_IP) ? $user_IP : $_SERVER["REMOTE_ADDR"];  
echo $user_IP;
?>
<br>
<br>
<?php
$headers = apache_request_headers();

foreach ($headers as $header => $value) {
    echo "$header: $value <br />\n";
}
?>
