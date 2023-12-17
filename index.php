<?php
// *empty
$name="shahid";
var_dump(empty($name));

// *isset
$name="Tanim";
var_dump(isset($name));

// *implode
 $words= [
    "i",
    "am",
    "shahidul",
    "islam",
    "tanim"
 ];

 print_r(implode(" ",$words));

//  explode
$words= "i am shahidul islam tanim";
print_r(explode(" ",$words));


// // *HW


// // * Video thumbnail

// function videoThumbnail($vidUrl){
//     $api ="https://img.youtube.com/vi/%3Cinsert-youtube-video-id-here%3E/maxresdefault.jpg";

// $mainUrl = explode('?si=', $vidUrl);
// $videoArray = explode("/", $mainUrl[0]);
// $videoId = end($videoArray);

// $link = str_replace("%3Cinsert-youtube-video-id-here%3E",$videoId,$api);
//  echo"<img src='$link'>";
// }

// videoThumbnail("https://youtu.be/NoCCIzP4y7A?si=k3f1lBHaTi99V76R");
// videoThumbnail("https://youtu.be/zVwDzhLp8Bs?si=XXT9PyhCeRZuTFjd");


// *Compact
$user =[
    "tanim", 23,"football"
];
$userTwo=[
    "sahed",23,"music"
];
$result=compact('user','userTwo');
print_r($result);

// *count,sizeof
$words =[ 
    'tanim',
    23,
    'footalll',
    'o-',
];

print_r(count($words));
echo "<br>";

// array diff
$num1=[
    60,120,180,240
];
$num2=[
    60,100,180,250
];
$diff1 = array_diff($num1, $num2);
$diff2 = array_diff($num2,$num1);
$newArray = array_merge($diff1,$diff2);
print_r($newArray);
echo "<br>";

// * array intersect
$tanim =[
    'Tanim',
    '23',
    'Playing Football',
    'watchin movies',
    'bitching'
];
$srabon=[
    'srabon',
    '24',
    'Playing Football',
    'watchin movies',
    'bitching'
];
$result = array_intersect($tanim,$srabon);
print_r($result);
echo "<br>";

// *array pop
$tanim =[
    'Tanim',
    '23',
    'Playing Football',
    'watchin movies',
    'bitching'
];
array_pop($tanim);
print_r($tanim);

// *array posh
$srabon=[
    'srabon',
    '24',
    'Playing Football',
    'watchin movies',
    'bitching'
];
array_push($srabon, 'runnig');
print_r($srabon);
echo "<br>";

// *array rand
$tanim =[
    'Tanim',
    '23',
    'Playing Football',
    'watchin movies',
    'bitching',
    'coding',
    'scrolling'
];
print_r($tanim [array_rand($tanim)]);
echo '<br>';

// *in array
// $tanim =[
//     'Tanim',
//     '23',
//     'Playing Football',
//     'watchin movies',
//     'bitching',
//     'coding',
//     'scrolling'
// ];
// print_r(in_array('Tanim',$tanim));

$acceptedTypes =[
    "jpg",
    "exe",
    "html",
    "svg",
    "css",
    "mp4",
    "php"
];
$except = "php";
var_dump(in_array("php",$acceptedTypes));
echo"<br>";

// *array filt
$temp=[
    20,25,28,35,37,40,
];
$result = array_filter($temp,function($data){
    if($data > 30){
        return $data;
    }
});
print_r($result);



// *api
$api ="https://img.youtube.com/vi/%3Cinsert-youtube-video-id-here%3E/maxresdefault.jpg";

$vidUrl ="https://youtu.be/PGvrnas2_Pk?si=hCN1RWy_ex-S5hv4";
$mainUrl = explode('?si=', $vidUrl);
$videoArray = explode("/", $mainUrl[0]);
$videoId = end($videoArray);

$link = str_replace("%3Cinsert-youtube-video-id-here%3E",$videoId,$api);
 echo"<img src='$link'>";