<?php

session_start(); 

require_once "Common.php";
require_once "Config.php";
require_once "Visitor.php";

$test1 = new Visitor();
$info = $test1->getVisitorInfoByEmail("innocent@gmail.com");
$_SESSION['visitorInfo'] = $info;
echo "<pre>";
print_r($test1->getVisitByVisitor('1'));
echo "</pre>";

$a = array(
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "seventeen" => 17
);

foreach ($a as $k => $v) {
    echo $k." => $v.\n";
}

?>