<?php


function judge($number){
    if($number % 4 ===0){
        if($number % 100 !== 0){
            echo 'うるう年です';
        }else{
            if($number % 400 ===0){
                echo 'うるう年です';
            }
        }
    }else{
        echo 'うるう年ではありません';
        return false;
    }
}


echo "2003年は"; 
judge(2003);


echo '2004年は';
judge(2004);

echo '2017年は';
judge(2017);

echo '2020年は'; 
judge(2020);

echo '2022年は';
judge(2022);
