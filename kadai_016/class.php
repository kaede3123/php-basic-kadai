<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kadai_016</title>
</head>
<body>
    <p>
        <?php
        class Food {
            private $name;
            private $price;

            public function show_price() {
                echo $this->price . '<br>';
            }

            public function ＿construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
        }

        class Animal {
            private $name;
            private $height;
            private $weight;

            public function show_height() {
                echo $this->height . '<br>';
            }

            public function ＿construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }

        $food = new Food('potato', 250);

        $animal = new Animal('dog', 60, 5000);

        print_r($food);
        print_r($animal);

        $food->show_price();
        $animal->show_height();
        ?>
    </p>
    
</body>
</html>