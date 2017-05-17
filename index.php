<?php

// ## Script created by coRpSE
// ## Owner of www . headshotdomain . net
// ## You are free to modify this code any way you
// ## feel like, just give credit where credit is due . 

$m1 = "It is certain";
$m2 = "It is decidedly so";
$m3 = "Without a doubt";
$m4 = "Yes, definitely";
$m5 = "You may rely on it";
$m6 = "As I see it, yes";
$m7 = "Most likely";
$m8 = "Outlook good";
$m9 = "I think, Yes";
$m10 = "Signs point to yes";
$m11 = "Reply hazy try again";
$m12 = "Ask again later";
$m13 = "Better not tell you now";
$m14 = "Cannot predict now";
$m15 = "Concentrate and ask again";
$m16 = "Don't count on it";
$m17 = "My reply is no";
$m18 = "My sources say no";
$m19 = "Outlook not so good";
$m20 = "Very doubtful";

$rm = array($m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10, $m11, $m12, $m13, $m14, $m15, $m16, $m17, $m18, $m19, $m20);
$random_keys = array_rand($rm, 1);
echo $rm[$random_keys];
?>
