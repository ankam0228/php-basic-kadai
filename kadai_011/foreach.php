<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHP基礎編</title>
    </head>
    <body>
        <p>
            <?php
            $date = ['vegtable' => '玉ねぎ', 'price' => '200', 'from' => '北海道']
            foreach ($date as $date) {
                echo $date . '<br>';
            }
            ?>
        </p>
    </body>
</html>
