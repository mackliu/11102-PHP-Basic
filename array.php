<?php

//$a=array();
$a=[];

$a[]=10;
$a[]=30;
$a[]='泰山';
$a[]='新莊';

echo "<pre>";
print_r($a);
echo "</pre>";

echo $a[0];
echo $a[3];
echo "<br>";
$b=[];
$b['姓名']='劉勤永';
$b['最高學歷']='銘傳大學';
$b['tel']='0910123456';
$b['血型']='b';

echo "<pre>";
print_r($b);
echo "</pre>";

echo $b['姓名'];
echo $b['tel'];