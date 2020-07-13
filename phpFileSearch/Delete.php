<?php
//删除指定文件夹以及文件夹下的所有文件
class Delete{
    function deldir($dir) {
        //先删除目录下的文件：
        $dh=opendir($dir);
        while ($file=readdir($dh)) {
            if($file!="." && $file!="..") {
                $fullpath=$dir."/".$file;
                if(!is_dir($fullpath)) {
                    unlink($fullpath);
                } else {
                    deldir($fullpath);
                }
            }
        }

        closedir($dh);
        //删除当前文件夹：
        if(rmdir($dir)) {
            echo "true";
            return true;
        } else {
            echo "false";
            return false;
        }
    }

}
$test = new Delete();
$test ->deldir("/Users/huangkai/Desktop/test1");

