<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_sort</title>
</head>

<body>
    <!-- PHPの埋め込み -->
    <?php
    // 配列の定義
    $nums = [15, 4, 18, 23, 10 ];
    
    // ソート（昇順,降順）フラグ。True:昇順、False:降順
    $order_flg = TRUE;

    sort_2way($nums, $order_flg);

    function sort_2way($array, $order) {
      
      if ($order) {
        sort($array);
        echo "昇順にソートします<br>";
      }else {
        rsort($array);
        echo "降順にソートします<br>";
      }

      // ソートした配列の内容を表示
      foreach ($array as $item) {
          echo "{$item}<br>";
      }
    }
    
    ?>
</body>

</html>