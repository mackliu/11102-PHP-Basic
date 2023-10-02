<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 


$age=50;

$name='劉勤永';
echo $age;
echo $name;

$tmp=$age;
$age=$name;
$name=$tmp;

echo $age;
echo $name;

?>
</body>
</html>