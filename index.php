<?php
require "Car.php";
require "Employee.php";
require "Product.php";

// $bmw = new Car("BMW", "blue", true);
// $mercedes = new Car("Mercedes Benz");
// $audi = new Car("Audi", "black", false);

// $bmw->color = 'blue';
// $bmw->comp = "BMW";
// $mercedes->comp = "Mercedes Benz";
// $audi->comp = "Audi";
// $audi->color = "black";

// echo $bmw->comp . "\n";
// echo $bmw->color . "\n";
// echo $mercedes->comp . "\n";
// echo $mercedes->color . "\n";
// echo $audi->comp . "\n";
// echo $audi->color;

// $cars = [$bmw, $mercedes, $audi];
// for ($i = 0; $i < count($cars); $i++) {
//     echo $cars[$i]->comp . " " . $cars[$i]->color . "\n";
//     $cars[$i]->show_info();
//     if ($cars[$i]->hasSunRoof) {
//         echo "has a sun roof";
//     }
// }
// echo $bmw->beep();

// $emp = new Employee();
// $emp->surname = "Борисенко";
// $emp->name = "Ігор";
// echo $emp->surname . " " . $emp->name . " " . "\n ";
// if (!$emp->set_age(23)) {
//     exit("Помилка обчислення віку");
// }

//-----------------------------------

$apple = new Product("Apple", 12);
$toy = new Product("Toy", 150);

$prod = [$apple, $toy];
echo "Products\n";
for ($i = 0; $i < count($prod); $i++) {
    $prod[$i]->show_info();
}
