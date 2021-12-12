<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial </title>
</head>


<body>
    <div class = "container">
    <h1> Lets learn about PHP :- </h1>
    <p>Your Party Status is here: </p>  
        <?php
        $age = 7;
        if($age>18){
            echo "You can go to the party..!";
        }
        elseif($age==7){
            echo "You are 7 years old..!";
        }
        else{
            echo "You can not go to the party..!";
        }

        // Uses of array..
        echo "<br>";
        $languages = array("Python", "C++", "PHP", "Nodels");
        echo $languages;
        echo "<br>";
        echo "First element of array is:";
        echo "<br>";
        echo $languages[0];
        echo "<br>";
        echo "Total number of element in array is:";
        echo count($languages); // Count number of element in array... 
        echo "<br>";

        // Loops in PHP..
        $a =0;
        while ($a <= 10){
            echo "<br>The value of a list is:";
            echo $a;
            $a++;
        }

        //Iterating arrays in PHP using while loop..
        $a = 0;
        while ($a <count($languages)){
            echo "<br>The value of Language is :";
            echo $languages[$a];
            $a++;
        }
        echo "<br>";

        // Similiar above program using do- while loop..
        echo "<br>Same above program using do-whiloe loop...!";
        $a = 0;
        do {
            echo "<br>The value of Language is :";
            echo $languages[$a];
            $a++;
        } while ($a <count($languages));
        echo "<br>";

        // Uses of for loop..
        $a = 200;
        for ($a=0; $a <10; $a++){
            echo "<br>The value of a is :";
            echo $a;
        }

        // Uses of foreach loop..
        foreach($languages as $value){
            echo "<br>The value using foreach loop is : ";
            echo $value;
        }

        // Study about Functions..
        echo "<br>";
        function print5(){
            echo "<br>Five";
        }
        print5();  

        // Funcions.. 
        echo "<br>";
        function print_number($number){
            echo "<br>Your Number is :";
            echo $number;
        }
        print_number(45);
        print_number(55);
        ?>
    </div>
</body>
</html>