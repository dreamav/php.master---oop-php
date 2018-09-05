<?php
/**
 * Created by PhpStorm.
 * User: Mevericks
 * Date: 05.09.2018
 * Time: 10:39
 */

namespace app;


class A
{
    const TEST = "Const A";

    public function getTest()
    {
        var_dump(self::TEST);
    }

    public function getTest2()
    {
        var_dump(static::TEST);
    }
}