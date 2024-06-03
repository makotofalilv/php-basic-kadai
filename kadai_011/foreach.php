<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_011</title>
</head>

<body>
    <!-- PHPの埋め込み -->
    <?php
    // 連想配列の作成
    $products = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

    // 繰り返し処理
    foreach ($products as $key => $value) {
      echo "{$key}：{$value}<br>";
    }
    ?>
</body>

</html>
