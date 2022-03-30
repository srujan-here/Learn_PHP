<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color:gray;
        margin: auto;
    }
    </style>
<body>
    <div class="container">
    <h1>Welcome twice</h1>   
 <?php
 //if and else 
 $age=100;
 if($age>=15){
     echo "hai";
 }
 else{
     echo "fuck";
 }
$lang=array("c++","java","python");
echo $lang[0];

//loops

$a=0;
while($a<count($lang)){
    echo "goo on buddy $lang[$a]";
    echo "<br>";
    $a++;
}

//for loops
for($i=0;$i<count($lang);$i++){
    echo "gol $lang[$i]";
}
//for each loop

foreach ($lang as $key) {
    echo "here it is $key";
}


//function
function prin($num){
    echo "$num";
}
prin(10);
prin(30);
 ?>

    </div>
 
</body>
</html>