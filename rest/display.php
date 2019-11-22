<?php

$url = 'http://localhost/Prince/rest/search.php?id=1';
$obj = json_decode(file_get_contents($url), true);
echo $obj;	


?>