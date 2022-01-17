<?php
print "Hello World !!! PHP version is " . PHP_VERSION . "\n";
?>


<?php 
print "REMOTE_ADDR:";
$ip=$_SERVER["REMOTE_ADDR"];
echo $ip;
?> 

<?php
print "$user_IP:";
$user_IP = ($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"];
$user_IP = ($user_IP) ? $user_IP : $_SERVER["REMOTE_ADDR"];  
echo $user_IP;
?>
<br>


<?php
$headers = get_headers( void )
echo $headers;
foreach ($headers as $header => $value) {
    echo "$header: $value <br />\n";
}
?>
