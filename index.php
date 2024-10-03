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
        echo "hello world" , "</br>";
        $a += 1;
    }

    echo "Sufyan Talib" , "</br>";
    echo "Jibran Talib" , "</br>";
    echo "Sufyan Talib" , "</br>";
    goto kashan;
    echo "Jibran Talib" , "</br>";
    echo "Sufyan Talib" , "</br>";
    echo "Jibran Talib" , "</br>";
    echo "Sufyan Talib" , "</br>";
    echo "Jibran Talib" , "</br>";
    echo "Sufyan Talib" , "</br>";
    echo "Jibran Talib" , "</br>";
    
    kashan:
    echo "Kashan Talib" , "</br>";

    function newFunction($name){
        echo "hello $name How are you?" , "</br>";
    }

    newFunction("Yahoo baba");
    newFunction("sufyan talib");
    
    function newDemo($fname="sufyan",$lname="talib"){
        echo "hello $fname $lname How are you?" , "</br>";
    }
    newDemo("jibran","malik");


    function check($math , $eng , $chem){
        $total = $math + $eng + $chem;
        $per = $total / 3;
        return $per;
    }
    echo check(10 , 10 ,153);


    function testing($str){
        echo "$str nice person";
    }
    $string = "Sufyan Talib";
    testing("Hello WOrld");

    function disply($num){
        if($num <= 10){
            echo $num , "</br>";
            disply($num + 1);
        }
    }
   
    disply(1);
    
    ?>
</body>
</html>