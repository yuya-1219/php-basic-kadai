<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // $array = [15, 4, 18, 23, 10 ];
        function sort_2way($order) {
            $array = [15, 4, 18, 23, 10 ];
            if($order === true){
                echo '昇順にソートします。</br>';
                sort($array);
            } else {
                echo '降順にソートします。</br>';
                rsort($array);
            }

            return $array;
        }

        $asc = sort_2way(true);
        for($i = 0; $i < count($asc); $i ++) {
            echo $asc[$i];
            echo '</br>';
        }
        $desc = sort_2way(false);
        for($n = 0; $n < count($desc); $n ++) {
            echo $desc[$n];
            echo '</br>';
        }
        ?>
    </p>
</body>

</html>
