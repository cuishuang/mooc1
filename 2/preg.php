<?php
/**
 * Created by PhpStorm.
 * User: shuangcui
 * Date: 2018/1/3
 * Time: 下午2:31
 */

$str = '中文';

//对于utf-8的
$pattern = '/[\x{4e00}-\x{9fa5}]+/u';//加号代表匹配一次或多次,如果不写,就只能匹配一个'中'

//对于gbk的
//$pattern = '/['.chr(0xb0).'-'.chr(0xf7).'-'.chr(0xfe).']/


preg_match($pattern, $str, $match);

//var_dump($match);


//写出以139开头的11位手机号码的正则表达式

$str = '13912345678';
$pattern = '/^139\d{8}$/';

preg_match($pattern, $str, $match);


var_dump($match);