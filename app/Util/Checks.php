<?php

namespace App\Util;

class Checks
{
    public static function routeCheck(string $str):bool {
        return request()->route()->uri == $str;
    }
}
