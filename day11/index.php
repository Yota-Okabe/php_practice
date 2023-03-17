<?php

    // 配列
        // イメージはタンス
        // [0,1,2] 0番から数字が振られていく。
        // 下記、バナナを取り出したかったら、0を指定する。

use function PHPSTORM_META\exitPoint;

    $fruits = ['バナナ', 'リンゴ', 'スイカ'];
    echo $fruits[0] , '<br>';

    // 連想配列
        // イメージは鍵付きのタンス
        // キーとバリュー（タンスの鍵と中身をセットで記載）
        // 'キー'=>'バリュー'
    $animals = ['犬'=>'dog', '猫'=>'cat', '馬'=>'horse', '牛'=>'bull'];
    echo $animals['犬'] . '<br>';

    // foreach文
        // 配列の中身を一覧で取り出す
    
    $students = ['ゴン', 'キルア', 'ズシ'];
    foreach($students as $student){
        echo $student . '<br>';
    }

    // 宿題『switch文』
    $var = 'male';

    switch ($var) {
    case 'male':
      // 処理
    echo 'オス' . '<br>';
    break;
    case 'female' . '<br>':
      // 処理
    echo 'メス' . '<br>';
    break;
    default:
      // 処理
    echo '？' . '<br>';
    break;
    }

    // 演習問題
    // 問題1 
    // 変数$i = 15; を用意し、100から1まで1つずつカウントダウンするプログラムを作成してください。 （1つずつ改行して表示して下さい）
    for($i=15; $i>0; $i=$i-1){
        echo $i . '<br>';
    }

    // 問題2
    // 正の整数1から9に、それぞれ3を掛けた数を半角スペース区切りで出力して下さい。
    for($i=1; $i<=9; $i++){
        echo $i * 3 . "\t" . '<br>';
    }

    // 問題3 FizzBuzz問題
    // 1~30の数字に対して、3の倍数は「Fizz」5の倍数は「Buzz」15の倍数は「FizzBuzz」
    // それ以外は「入力された数字」を出力してください。全てに改行を入れること

    for($i=1; $i<=30; $i++){
        if($i%3==0 && $i%5==0){
            echo 'FizzBuzz' . '<br>';
        }elseif($i%5==0){
            echo 'Buzz' . '<br>';
        }elseif($i%3==0){
            echo 'Fizz' . '<br>';
        }else{
            echo $i . '<br>';
        }
    }
?>