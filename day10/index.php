<?php
    echo 'day10 start!' . '<br>';

    // 動画学習memo
        
        // インデントは4つ

        // 文字列：文字を出力するもの
            // ''で囲う
            // echo = 出力せよ 

        // 文字列と文字列をくっつける際に、文字連結という考えがあります。
            // 連結は、.を使用します。
        echo 'okabe' . "\t" . 'yota' . '<br>';

        // 四則演算
        echo 3 + 3 . "\t" ;
        echo 8 - 2 . "\t" ;
        echo 3 * 2 . "\t" ;
        echo 12 / 2 . "\t" ;
        // 剰余の計算
        echo 10 % 3 . "\t" . '<br>'; 
        // 文字列
        echo '5 - 2' . "\t" ;

        // 変数
            // 変数は箱
            // 右辺の'wework'という文字列を左辺のnameという箱に格納する
            // 右辺から左辺に格納するという認識
        $name = 'wework';
        echo $name . '<br>';

        // 変数 実践

        $orange_price = 150;
        $tax = 1.1;
        echo 'オレンジの価格（税込）' . $orange_price * $tax . '円' . '<br>';

            // 下記は'ベーやん'が反映される。上から下に読み込まれていくから最後に格納した値が反映
        $nickname = 'よーた';
        $nickname = 'ベーやん';
        echo $nickname . '<br>';

        $first_name = 'yota';
        $last_name = 'okabe';
        echo $first_name . "\n" . $last_name . '<br>';

        // 制御文　条件文（if文）
            // 形
            // if(条件){真の時に処理を実行（=条件が成功した場合の処理を記載）}
                // else{偽の時に処理を実行}

        $var = 4;

        if($var >= 5){
            // 真の時
            echo '5以上';
        }else{
            // 偽の時
            echo '4以下' . '<br>';
        }
        
        // 比較演算子
            // a==b   aとbの値は等しい
            // a===b  aとbの値と型も等しい
            // a!=b   aとbの値は等しくない
            // a!==b  aとbは値と型も等しくない
            // a>b    bよりaが大きい
            // a>=    bよりaが大きい、もしくは等しい
            // a<b    bよりaが小さい
            // a<=    bよりaが小さい、もしくは等しい

        // 型 = 値の姿、状態
            // 整数型 integer
            // 文字列型 string
            // 浮動小数点型 float,double
            // 理論型 boolean
            // 配列型 array
            // オブジェクト型
            // Null型 null
            // リソース型 resource
        
        // 例
            // a==b
                // integer
                $num1 = 13;
                // string
                $num2 = '13';
                $num1 == $num2 . '<br>';

                // a===b
                // $num1 = 13;
                // $num2 = 13;
                // $num1 === $num2

        // 30代
        $var1 = 29;

        if($var1 >= 30 && $var1 < 40){
            echo 'あなたは30代です。';
        }elseif($var1 >= 20 && $var1 < 30){
            echo 'あなたは20代です' . '<br>';
        }

        // 条件式 switch文 → 宿題

        // 繰り返し文
        // while文
        // for文

        // while文
        $var2 = 0;
        while($var2 < 5){
            echo $var2 . '<br>';
            // $var2 = $var2 + 1;
            $var2++;
        }

        // for文
        // for(初期化式; 条件式; 変化式;){ 実行する処理 }
        for($i = 0; $i <= 10; $i = $i + 2){
            echo $i . '<br>';
        }
?>