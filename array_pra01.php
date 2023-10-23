<h2>建立一個學生成績陣列</h2>
<?php
$subject=['國文','英文','數學','地理','歷史'];
$judy=[95,64,70,90,84];
$amo=[88,78,54,81,71];
$john=[45,60,68,70,62];
$peter=[59,32,77,54,42];
$hebe=[71,62,80,62,64];

$avg=($judy[0]+$amo[0]+$john[0]+$peter[0]+$hebe[0])/5;

echo $avg;


$students=[
    '國文'=>[
        [
            'name'=>'judy',
            'score'=>'95',
        ],
        [
            'name'=>'amo',
            'score'=>'88',
        ],
        [
            'name'=>'john',
            'score'=>'45',
        ],
    ]
];

$avg=($students['國文'][0]['score']+
$students['國文'][1]['score']+
$students['國文'][2]['score'])/3;
?>