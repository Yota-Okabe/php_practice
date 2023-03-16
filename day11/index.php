<?php

    // 配列
        // イメージはタンス
        // [0,1,2] 0番から数字が振られていく。
        // 下記、バナナを取り出したかったら、0を指定する。
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
    echo '男性です';
    break;
    case 'female':
      // 処理
    echo '女性です';
    break;
    default:
      // 処理
    echo '？';
    break;
    }
?>