<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "welcome <br>";
    //strings

    $str="srujan is here";
    echo "welcome ".$str;
    $str2="hai welcome here buddy";
    echo "<br>";
    echo "here ".str_word_count($str2);
    echo "<br> reverse :".strrev($str2);

    echo "<br> search for he is :".strpos($str2,"he");
    echo "<br> replace string is :".str_replace("is","is coming",$str)
    ?>
</body>
</html>