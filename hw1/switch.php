<?php
$a = 110 ;
switch ($a) {
    case 80:
        echo "เกรด S";
       break;
    case ($a > 69 && $a < 80):
        echo "เกรด A";
        break;
    case ($a > 59 && $a < 70):
        echo "เกรด B";
        break;
        case ($a > 49 && $a < 60):
            echo "เกรด C";
        break;
    case ($a < 50):
        echo "ติดFแหละ";
        break;
    default:
        echo "...";
        break;
}