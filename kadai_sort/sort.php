<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
            function sort_2way($array, $order) {
                if($order) {
                    echo '昇順にソートします。<br>';
                    sort($array);
                }else {
                    echo '降順にソートします。<br>';
                    rsort($array);
                }
                    // 配列を表示
                    foreach($array as $value) {
                        echo $value . "<br>";
                    }
                }

            // 出力結果
            $nums = [15, 4, 18, 23, 10 ];

            sort_away($nums,true);
                echo"<br>";
            sort_2way($num,false);
        ?>
    </p>
</body>

</html>