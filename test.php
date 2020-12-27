<?php
 require ('function.php');


 $numbers = [
    3 => false,
    4 => true,
    20 => true,
    100 => false,
    400 => true,
    1900 => false,
    2000 => true,
    2001 => false,
    2003 => false,
    2004 => true,
];

foreach ($numbers as $number => $expect) {
    echo '評価する数値 = '.  $number, ' 期待値 = '.  ($expect ? 'true' : 'false');

    if (judge($number) === $expect) {
        echo ' OK 一致';
    } else {
        echo ' NG 不一致';
    }
    echo '<br>', PHP_EOL;
}