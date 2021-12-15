<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

class Char1 {

// properties
public $name;

public $phrase1;

public $phrase2;

public $level = 0;


function __construct($name, $phrase1, $phrase2, $level) {
    $this->name = $name;
    
    $this->phrase1 = $phrase1;
    $this->phrase2 = $phrase2;
    $this->level = $level;
    
}
// methods
function get_name() {
    return $this->name . $this->phrase1 . $this->phrase2 . $this->level;
    return $this->phrase1;
    return $this->phrase2;
    return $this->level;
}

function speak($phraseNum) {
    if ($phraseNum == 1) {
    return $this->phrase1;
    } else if ($phraseNum == 2) {
    return $this->phrase2;
    } 
}

function setLevel($newLevel) {
    $this->level = $newLevel;
    return $this->level;
    }
}

$obj1 = new Char1('Iron Man', 'bang', 'pow', 4);
$obj2 = new Char1('Incredible Hulk', 'SMASH', 'grrr', 3);
print_r($obj1);
echo $obj1->speak(1);
echo $obj1->get_name();
echo $obj1->setLevel(2);
echo $obj2->speak(2);




// class Fruit {
//     public $name;
//     public $color;
  
//     function __construct($name) {
//       $this->name = $name;
//     }
//     function get_name() {
//       return $this->name;
//     }
//   }
  
//   $apple = new Fruit("Apple");
//   echo $apple->get_name();

//   $level = new Char1('level');
//   echo $level->get_name();

//   $phrase1 = new Char1.speak('hi');
//   echo $phrase1->get_name();



//car example
// class Car {
//     //properties
//     function __construct($year, $make, $model) {
//         $this->year = $year;
//         $this->make = $make;
//         $this->model = $model;
//         $this->running = false;
//         $this->speed = 0;
//     }
//     //methods
//     function turnOn() {
//         $this->running = true;
//         return 'works';
//     }

//     function turnOff() {
//         $this->running = false;
//     }

//     function changeSpeed($accel) {
//         $this->speed += $accel;
//     }
// }

// $car1 = new Car(2018, 'Ford', 'Mustang');
// $car2 = new Car(1962, 'Ferrari', '250 GTO');
// $car3 = new Car(2018, 'Bugatti', 'Chiron');



// echo $car1->turnOn();
// $car1->changeSpeed(50);
// $car1->changeSpeed(30);
// $car1->changeSpeed(-80);
// $car1->turnOff();

// class BaseClass {
//     function __construct() {
//         echo "In BaseClass constructor\n";
//     }
// }

// class SubClass extends BaseClass {
//     function __construct() {
//         parent::__construct();
//         echo "In SubClass constructor\n";
//     }
// }


?>
    
</body>
</html>