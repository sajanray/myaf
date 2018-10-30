<?php
/**
 * Created by PhpStorm.
 * User: leishaojin
 * Date: 2018/4/17
 * Time: 14:42
 */

namespace openapi\store;


class store
{
    public static function info()
    {
        echo "this si openapi/store server<br/>";
    }

    public static function test()
    {
        echo __FILE__,":",__LINE__;
    }
}