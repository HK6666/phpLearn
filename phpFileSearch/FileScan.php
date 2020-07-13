<?php
class FileScan{

    function getDir3($path)
    {
        $dir = new RecursiveDirectoryIterator($path);
        $fileItem = [];
        foreach(new RecursiveIteratorIterator($dir) as $k=>$v) {

            $fileName = $v->getBaseName();
            if($fileName != '.' && $fileName != '..') {
                $fileItem[] = $k;
            }
        }

        return $fileItem;
    }


}
$test = new FileScan();
$content = $test -> read_all("/Users/huangkai/Desktop");
print_r($content);
