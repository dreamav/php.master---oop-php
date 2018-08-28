<?php
namespace classes;

use classes\interfaces\I3D;

class BookProduct extends Product implements I3D
{

    function __construct($name)
    {
        echo $name;
//        var_dump(self::class);
    }

    public function test()
    {
        // TODO: Implement test() method.
    }
}