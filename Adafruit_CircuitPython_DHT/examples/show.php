<?php
$file_path = "./test_sensor_data.txt";
if(file_exists($file_path)){
    $fp = fopen($file_path,"r");
    $str = fread($fp,filesize($file_path));
    echo $str = str_replace("\r\n","<br />",$str);
}
?>
