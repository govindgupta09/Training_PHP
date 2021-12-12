<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
        This is my first php website. 
        My name is ..*****...
        Here we write programs for only training..
    <?php
        echo "<br>";
        echo "Hello world..!"
    ?> 
    <?php
        echo "<br>";
        echo "Hello world..! Good Morning."
    ?>
    <?php
        echo "<br>";
        echo "Hello world..! again..!  Very very good morning..!"  
    ?>
    <?php
    //echo "<h1> Uses of Operators.. <h1>";
    // Above line is used to change php to html.. ie.--> capitalise..

    // Defining of constants..
    define('PI',3.14);  

    // Arithmetic operators..
    $variable1 = 3;
    $variable2 = 5;
    echo "<br>";
    echo "variable1 is:";
    echo $variable1;
    echo "<br>";
    echo "variable2 is:";
    echo $variable2;
    echo "<br>";
    echo "The value of variable1 + variable2 is:";
    echo $variable1 + $variable2;
    echo "<br>";
    echo "The value of variable1 - variable2 is:";
    echo $variable1 - $variable2;
    echo "<br>";
    echo "The value of variable1 * variable2 is:";
    echo $variable1 * $variable2;
    echo "<br>";
    echo "The value of variable1 / variable2 is:";
    echo $variable1 / $variable2;
    echo "<br>";
    echo "The value of variable1 % variable2 is:";
    echo $variable1 % $variable2;
    echo "<br>";
    
    //Assignment operators..
    echo "<br>";
    $newvar = $variable1;
    $newvar /=2;
    echo "The value of new variable is:";
    echo $newvar;
    echo "<br>";
    //$newvar +=2;
    //$newvar -=2;
    //$newvar *=2;

    // Comparison operators..
    // Below compareison are used in if-else statement..
    echo "<br>";
    echo 'The value of 1==4 is:';
    echo var_dump(1==4);
    echo "<br>";
    echo 'The value of 1!=4 is:';
    echo var_dump(1!=4);
    echo "<br>";
    echo 'The value of 1>=4 is:';
    echo var_dump(1>=4);
    echo "<br>";
    echo 'The value of 1<=4 is:';
    echo var_dump(1<=4);
    echo "<br>";

    // Increment/Decrement operators..
    echo "<br>";
    echo $variable1++;
    echo "<br>";
    echo $variable1;
    echo "<br>";
    echo $variable1--;
    echo "<br>";
    echo $variable1;
    echo "<br>";
    echo ++$variable1;
    echo "<br>";
    echo $variable1;
    echo "<br>";
    echo --$variable1;
    echo "<br>";

    // Logical operators..
    // and(&&) , or(||), not(!),xor , xnor..
    echo "<br>";
    $myVar = (true) and (false);
    echo var_dump($myVar);
    echo "<br>";
    ?>
    <?php
    // Data Types....!
    //1. String
    //2. Integer
    //3. Float
    //4. Boolean
    //5. Array
    //6. Object
    echo "<br> Data Types <br>";

    echo "<br> 1. String <br>";
    echo  "This is a String";
    echo "<br>";
    $var = "Govind";
    echo var_dump($var);
    echo "<br>";

    echo "<br> 2. Integer <br>";
    echo  "This is a Integer ";
    echo "<br>";
    $var = 55;
    echo var_dump($var);
    echo "<br>";

    echo "<br> 3. Float <br>";
    echo  "This is a Floating number: ";
    echo "<br>";
    $var = 55.2;
    echo var_dump($var);
    echo "<br>";

    echo "<br> 4. Boolean <br>";
    echo  "This is a Boolean";
    echo "<br>";
    $var = true;
    echo var_dump($var);
    echo "<br>";
    
    echo "<br> 5. Array <br>";
    $var = "This is a Array";
    echo var_dump($var);

    echo "<br>";
    echo "<br> 6. Object <br>";
    $var = "This is a Array";
    echo var_dump($var);
    echo "<br>";
    
    echo "<br>";
    echo "Caliing of Constants PI:-  ";
    echo "<br>";
    echo PI;   // Calling of <constants..
    echo "<br>";
    ?>
    </div>
</body>
</html>