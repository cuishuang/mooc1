<?php
/**
 * Created by PhpStorm.
 * User: shuangcui
 * Date: 2018/1/3
 * Time: 下午3:30
 */

//打开文件
//将文件的内容读取出来,在开头加入hello world
//将拼接好的字符串写回到文件当中


$file = './hello.txt';//当前路径下的hello.txt文件

$handle = fopen($file, 'r');

$content = fread($handle, filesize($file));

$content = 'hello world' . $content;

fclose($handle);

$handle = fopen($file, 'w');

fwrite($handle, $content);
fclose($handle);





//对目录进行遍历~


$dir = '/test';
//打开目录,
//读取目录当中的文件
//如果文件类型实际目录,则继续打开目录
//读取子目录的文件,若还是目录,则继续打开(一个递归的操作)
//如果文件类型是文件,输出文件名称
//关闭目录

function loopDir($dir)
{
    $handle = opendir($dir);
    while (false !== ($file = readdir($handle))) // 当所有目录都读完了,这里才会是false。这时跳出while循环~
    {//不这样的话遇到0这样的目录就跳出来了...


        if ($file != '.' && $file != '..')
        {
            echo $file."\n";
            if (filetype($dir.'/'.$file) == 'dir') // 如果是目录的话就去遍历一次,不是的话就不要去遍历了
            {
                loopDir($dir.'/'.$file);
            }

        }


    }
}

loopDir($dir);



























