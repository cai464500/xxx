<?php

//function twoSum($nums, $target) {
//    $c=0;
//    foreach($nums as $k=>$v){
//        foreach($nums as $a=>$b){
//            if($nums[$k]+$nums[$a]==$target&&$k!=$a){
//                $res[$c]=$k;
//                $c++;
//            }
//        }
//    }
//    print_r($res);
//}
//function twoSum($nums, $target) {
//    $found = [];
//
//    foreach ($nums as $key => $val) {
//        $diff = $target - $val;
//
//        if (!isset($found[$diff])) {
//            $found[$val] = $key;
//            continue;
//        }
//
//        return [$found[$diff], $key];
//    }
//}
//    $d=[2,7,11,15];
//         $e = 9;
//         $r = twoSum($d,$e);
$url = 'https://www.baidu.com/';
//echo file_get_contents($url);
//r标识read，即标识只读
$fp = fopen($url, 'r');
stream_get_meta_data($fp);
while (!feof($fp)) {
    $body.= fgets($fp, 1024);
}
echo $body;
fclose($fp);