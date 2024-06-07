<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_016</title>
</head>

<body>
    <!-- PHPの埋め込み -->
    <?php
    class Food {
      public $name;
      public $price;

      public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price = $price;
      }

      public function show_price() {
        echo "<br>".$this->price."<br>";
      }

    }
    class Animal {
      public $name;
      public $height;
      public $weight;

      public function __construct(string $name, int $height, int $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      public function show_height() {
        echo "<br>".$this->height."<br>";
      }

    }

    // インスタンス化
    $food = new Food('リンゴ', 150);
    $animal = new Animal('イヌ', 150, 40);

    print_r($food);
    $food->show_price();

    print_r($animal);
    $animal->show_height();
    ?>
</body>

</html>
