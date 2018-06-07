<?php
/**
 * Created by PhpStorm.
 * User: leishaojin
 * Date: 2018/6/8
 * Time: 0:11
 */

namespace Lib;


class Func
{
    public static function uuid()
    {
        echo md5(rand(100,999));
    }
}