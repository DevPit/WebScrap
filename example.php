<?php
require_once('vendor/autoload.php'); 

$session = new \devpit\ScrapPage\scrap("https://www.t.me/Pit_Official"); // class initialization
$session->setFirstPoint('<meta property="og:description" content="'); // setting first point
$session->setSecondPoint('">'); //setting second point
print($session->scrapSite());
?>
