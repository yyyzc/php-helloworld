<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center>
<?php
print "Hello World";
?>
</center>
<br>
<br>
<br>
<center>
<?php
$headers = apache_request_headers();

foreach ($headers as $header => $value) {
    if ($header == "forwarded") {
    echo "$value <br />\n";
    }
}
?>
</center>
