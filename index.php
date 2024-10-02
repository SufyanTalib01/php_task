<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First</title>
</head>
<body>
    <?php echo "<b> hey </b>"; 
    $a = "Sufyan Talib";
    $num = 03133502107;
    echo $a . " your number is: " , $num , "</br>";

    define('test' , 100);
    echo test;


    $text = "Hello";
    $text .= "World";
    $text .= "I'm Sufyan Talib";
    $text .= "What's Your Name?";

    echo $text . "</br>";

    $newa = "Sufyan";
    $newb = "Hello " . $newa . "</br>";
    echo $newb;


    $newa = "Sufyan";
    $newb = '"Hello"  . $newa';
    echo $newb . "</br>";

    $str = "Hello I'm Sufyan Talib";
    echo str_word_count("$str");
    echo "</br>";

    $str = "Sufyan Talib";
    echo str_replace("Sufyan" , "Jibran" , $str);
    echo "</br>";


    $time = "07:00 AM";
    $str = "Hello Sufyan Talib";
    if($time == "07:00 AM"){
        echo str_replace("Hello" , "Good Morning" , $str);
    echo "</br>";

    }
    elseif($time == "07:00 PM"){
        echo str_replace("Hello" , "Good Night" , $str); 
    echo "</br>";

    }
    else{
        $newstr = str_replace('Hello' , " " , $str);
        echo "Please Use Correct Time" , $newstr;
    echo "</br>";

    }

    $a = "Hello Sufyan";
    echo strrev($a);

    $a = "New Here";
    $b = explode(" " , $a);
    print_r($b);


    $a = 1;
    while($a < 10){
        echo "Sufyan Talib" , "</br>";
        $a += 1;
    }
    ?>
</body>
</html>