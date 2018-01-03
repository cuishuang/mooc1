<?php
/**
 * Created by PhpStorm.
 * User: shuangcui
 * Date: 2018/1/3
 * Time: 下午1:36
 */

$var1 = 5;
$var2 = 10;

function foo(&$my_var)
{
    global $var1;
    $var1 += 2;
    $var2 = 4;
    $my_var += 3;
    return $var2;
}

$my_var = 5;
echo foo($my_var)."\n";
echo $my_var."\n";
echo $var1;
echo $var2;
$bar = 'foo';
$my_var = 10;
echo $bar($my_var)."\n";




