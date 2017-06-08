<?php
namespace NullData;

use NullData\Shapes\Square;
use NullData\Shapes\Circle;

class AreaCalculator
{
    public function area(array $shapes)
    {
        $area = [];

        foreach ($shapes as $shape) {
            $area[] = $shape->area();
        }

        return array_sum($area);
    }
}