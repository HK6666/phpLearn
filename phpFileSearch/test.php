<?php
include FileScan::class;
echo "test";
$filescan = new FileScan();
$filescan ->test();
$content = $filescan ->my_scandir("/Users/huangkai");
print_r($content);