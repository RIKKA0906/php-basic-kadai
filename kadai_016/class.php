<?php
// クラスを定義する
class Food {
// プロパティを定義する
      public $name;
      public $price;

// コンストラクタを定義する
      public function __construct(string $name, int $price) {
        $this->name =$name;
        $this->price = $price;
      }

       public function show_price() {
        echo $this->price . '<br>';
      }
    }
// インスタンス化する
      $food = new Food('potato',250);
      print_r($food);
      

     
    echo '<br>';

class Animal {
     public $name;
     public $height;
     public $weight;

     public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
     }
     
        public function show_height() {
        echo $this->height . '<br>';
       }
     }

     $animal = new Animal('dog',60,5000);
     print_r($animal);

     echo '<br>';
$food->show_price();
$animal->show_height();

?>