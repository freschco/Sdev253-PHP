// didn't find reading on preg match so I used parsing
<?php
    $url = '$http://www.sdev253.net/home.html';
    $parse = parse_url($url);
    echo $parse["host"];
 ?>
