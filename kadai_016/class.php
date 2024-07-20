<!DOCTYPE html>
<html lang="ja">
 
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
 
<body>
    <p>
        <?php
        class Food {
            private $name;
            private $price;

            private function show_price() {
                $this->price=250;
                echo $this->price .'<br>';
            }
            private function __construct(string $name,int $price) {
                $this->name=$name;
                $this->price=$price;
            }
        }
        $food=new Food('potato',250);

        print_r($food);
        echo '<br>';
        ?>
    </p>
    <p>
        <?php
        class Animal {
            private $name;
            private $height;
            private $weight;

            private function show_height() {
                $this->height=60;
                echo $this->name .'<br>';
            }

        }
        private function __construct(string $name,int $height, float $weight) {
            $this->name=$name;
            $this->height=$height;
            $this->weight=$weight;
        }

        $animal =new Animal('dog',60 , 5000);

        print_r($animal);
        echo '<br>';      
        ?>
    </p>
</body>
</html>