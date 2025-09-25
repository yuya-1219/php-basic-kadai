<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <p>
    <?php
    $yasai = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
     
    foreach ($yasai as $key => $value) {
      echo"${key}:${value}";
      echo'</br>';
    }


    ?>
  </p>
</body>
</html>