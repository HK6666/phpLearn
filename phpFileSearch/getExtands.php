<?php

// 方法一
function ext_name1($path){
    $path_info = strrchr($path, '.');//.php
    return ltrim($path_info,'.');
}

// 方法二
function ext_name2($path){
    $path_info = substr($path,strrpos($path, '.'));
    return ltrim($path_info,'.');
}

// 方法三
function ext_name3($path){
    $path_info = pathinfo($path);
    return $path_info['extension'];
}

// 方法四
function ext_name4($path){
    $arr = explode('.', $path);
    return $arr[count($arr)-1];
}

// 方法五
function ext_name5($path){
    $pattern = '/^[^\.]+\.([\w]+)$/';
    return preg_replace($pattern, '${1}', basename($path));
}

// 实例
$path = str_replace('\\', '/', __FILE__);
echo "$path<br />";
echo ext_name1($path);echo "<br />";
echo ext_name2($path);echo "<br />";
echo ext_name3($path);echo "<br />";
echo ext_name4($path);echo "<br />";
echo ext_name5($path);echo "<br />";