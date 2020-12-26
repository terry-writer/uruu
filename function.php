<?php

function judge($number){
    if($number % 4 !== 0){
        return false;
    }
    if($number % 100 === 0){
        return false;
    }
    if($number % 400 === 0){
        return true;
    }
        return true;
}
