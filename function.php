<?php

//check_leap_yearはうるう年を判定する関数
//うるう年の条件は
//１．４で割り切れない
//２．１の中で100で割り切れない
//３．１の中で100で割り切れるが、400で割り切れる
//の条件を満たす


function checkLeapYear($year){
    
    //4で割り切れない場合は、うるう年ではない
    if($year % 4 !== 0){
        return false;
    }

    //4で割り切れる場合、次のチェックにうつる
    if($year % 100 === 0){
        //4で割り切れ、100で割り切れて、なおかつ400で割り切れるものはうるうどしである
        if($year % 400 === 0){
            return true;
        }else{
            return false;
        }
        //4で割り切れ、100で割り切れるものはうるう年ではない
        return false;
    }

        //4で割り切れるモノはうるう年である
        return true;
}
