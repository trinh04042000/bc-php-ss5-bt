<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

class Circle
{
    public $radius;
    public $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function Radius($radius)
    {
        $this->radius = $radius;
    }

    public function Color($color)
    {
        $this->color = $color;
    }

    public function getArea()
    {
        return pi() * pow($this->radius, 2);
    }
    public function toString()
    {
        echo $this->radius."</br>";
        echo $this->color;
    }

}

class Cylinder extends Circle
{
    public $height;

    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    public function getVolume()
    {
       return parent::getArea() * $this->height;
    }
    public function toString()
    {
        echo $this->radius."</br>".$this->color."</br>".$this->height;

    }
}
$circle = new Circle(3,"red");
$circle->toString()."</br>";
echo $circle->getArea()."</br>";
//$radius = 15;
//$color ="blue";
//$height = 12;
$cylinder = new Cylinder(3,"red",12);
//echo $cylinder->radius."</br>";
//echo $cylinder->color."</br>";
//echo $cylinder->height."</br>";
$cylinder->toString()."</br>";
echo $cylinder->getVolume();
?>
</body>
</html>