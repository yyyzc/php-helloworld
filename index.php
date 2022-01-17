<?php
print "Hello World !!! PHP version is " . PHP_VERSION . "\n";
?>

<br>
<?php 
print "REMOTE_ADDR:";
$ip=$_SERVER["REMOTE_ADDR"];
echo $ip;
?> 

<br>


<?php
$headers = apache_request_headers();

foreach ($headers as $header => $value) {
    echo "$header: $value <br />\n";
}
?>
