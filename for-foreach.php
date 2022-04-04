<?php
$arr = array(1,2,3,4);
for($i=0; $i<4; $i++){
    echo $arr[$i]+1;
}

$arr = array(1,2,3,4);
//recorre este array ($sarr) y dale un alias a sus valores ( as $value)
foreach($arr as $value){
    echo $value;
}