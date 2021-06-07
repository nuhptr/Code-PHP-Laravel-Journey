<?php /** @noinspection ALL */

namespace data;

use JetBrains\PhpStorm\Pure;

class Shape
{
    public function getCorner(): int
    {
        return 0;
    }
}

class Rectangle extends Shape
{
    public function getCorner(): int
    {
        return 4;
    }

    public function getParentCorner()
    {
        return parent::getCorner();
    }
}

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL; // 0

$rectangle = new Rectangle();
echo $rectangle->getCorner() . PHP_EOL; // 4
echo $rectangle->getParentCorner() . PHP_EOL; // 0