<?php

function judge($check_number){
    if($check_number % 4 !== 0){
        //4で割り切れない場合は、うるう年ではない
        return false;
    }
    if($check_number % 100 === 0){
        if($check_number % 400 === 0){
            //4で割り切れ、100で割り切れて、なおかつ400で割り切れるものはうるうどしである
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
