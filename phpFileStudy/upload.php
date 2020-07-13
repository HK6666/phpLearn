<?php

include 'FileUploader.php';

$file = $_FILES['file'];

vendor\FileUploader::setTypes(array('image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png'));
$res = vendor\FileUploader::uploadOne($file, 'upload');
if ($res) echo "文件上传成功，更名为{$res}<br>";
else {
    $error = vendor\FileUploader::$error;
    echo "文件上传失败，error:{$error}！<br>";
}