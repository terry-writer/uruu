<?php

// function judge($number){
//     if($number % 4 !== 0){
//         return "not うるう年1";
//     }
//     if($number % 100 !== 0){
//         return "うるう年2";
//     }
//     if($number % 400 === 0){
//         return "うるう年です";
//     }
//         return 'うるう年です';
// }

// 4でわりきれる
// 4,8,12,20,40,
// 2400,4000
// 2440,2880

// 100で割り切れる（うるう年ではない）
// 4000,2400

// // 100で割り切れない（うるう年かも）
// // 2440,2880

// 100で割り切れる、かつ400で割り切れる（うるう年）


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



// function judge($number){
//     if($number % 4 === 0){
//         if($number % 100 !== 0){
             //4で割り切れるが、100で割り切れないものはうるう年である
//             return true;
//         }else{
//             if($number % 400 === 0){
//                 //4で割り切れるが、100で割り切れるが、400で割り切れるものはうるう年である
//                 return true;
//             }
//         }
//     }else{
//         //4で割り切れない数値はうるう年ではない
//         return false;
//     }
// }


// function hoge($a, $b, $c) {
//     if ($a !== 'a') {
//       return 'not a';
//     }
//     if ($b !== 'b') {
//       return 'not b';
//     }
//     if ($c !== 'c') {
//       return 'not c';
//     }
//     return 'is c';
//   }
//   var_dump(hoge("a","a", "a"));











// judge(2003);

