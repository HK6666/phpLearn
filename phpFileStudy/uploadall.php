<?php
include 'FileUploader.php';
use vendor\FileUploader;

$files = $_FILES['file'];

FileUploader::setTypes(array('image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png'));
$res = FileUploader::uploadAll($files, 'upload', 2000000);
if($res){
    echo '文件上传成功，文件重命名信息如下：<br>';
    foreach(FileUploader::$files as $file){
        echo $file. '<br>';
    }
}else{
    echo '文件没有全部上传成功，错误信息如下：<br>';
    foreach(FileUploader::$errors as $error){
        echo $error. '<br>';
    }
}