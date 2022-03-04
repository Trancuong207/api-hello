<?php
$url = array(
"https://i.imgur.com/tvGcbsL.gif",
"https://i.imgur.com/frVHqbZ.gif",
"https://i.imgur.com/v4zmTUL.gif",
"https://i.imgur.com/R05q8b5.gif",
"https://i.imgur.com/R8TkJyt.gif",
"https://i.imgur.com/M2J3OjM.gif",
"https://i.imgur.com/t1JK7t7.gif",
"https://i.imgur.com/VIAc9gP.gif",
"https://i.imgur.com/wX8zIpM.gif",
"https://i.imgur.com/6qqSD3q.gif",
"https://i.imgur.com/clCNXc4.gif",
"https://i.imgur.com/6ojyrut.gif",
"https://i.imgur.com/drBayKt.gif",
"https://i.imgur.com/y02aMUT.gif",
"https://i.imgur.com/XKLCjRf.gif",
"https://i.imgur.com/GA9FfOX.gif"
);
$rd = array_rand($url);
$cc = $url [$rd];
$kiss = array(
"data" => $cc,
"author" => "Trần khương",
"success" => "true",
);
$rdimg = json_encode($kiss);

$i = ['\/v\/','\/','L\u00ea C\u00f4ng Quy\u1ec1n'];
$t = ['/v/','/','Trần khương'];
$j = str_replace($i, $t, $rdimg);
echo $j;
