<?php

$subjects = ['数学', '英語', '理科', '社会', '国語'];

foreach ($subjects as $subject) {
    switch ($subject) {
        case '数学':
            $exam = '明日';
            break;
        case '英語':
            $exam = '明後日';
            break;
        case '理科':
            $exam = '明々後日';
            break;
        case '社会':
            $exam = '昨日';
            break;
        case '国語':
            $exam = '中止';
            break;
        default:
            break;
    }
    echo "{$subject}の試験は{$exam}です。<br>";
}
