<?php
    include './header.php';
    echo '<br>' . "<h1>Loops:  For, ForEach, While, Do While</h1>";

    echo '<h3>For Loop</h3>';
    for ($i = 0; $i < 10; $i++){
        $product = 10 * $i;
        echo "The product of 10 * $i is $product <br/>";
    }


    echo '<h3>ForEach Loop</h3><br>';
    echo 'Used to iterate through array values.<br>';

    $animals_list = array("Lion","Wolf","Dog","Leopard","Tiger");
    
    foreach($animals_list as $array_values){
        echo $array_values . "<br>";
    }


    echo '<br>';
    echo '<u>Looping through an associative array:</u><br>';
    $persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");

    foreach($persons as $key => $value){
        echo "$key is $value"."<br>";
    }

    echo '<h3>While Loop</h3><br>';
    echo '
            Used to execute a block of code repeatedly until the set condition is satisfied.<br>
            <ul>When to use:
                <li>Used to execute a block of code until a certain condition becomes true.</li>
                <li>Used to read records returned from a DB query</li>
            </ul>
            <p>Example:</p>
        ';
    $i = 0;
    
    while($i < 5) {
        echo $i + 1 . '<br>';
        $i++;
    }


    echo '<h3>Do While Loop</h3><br>';
    echo '
            The difference between While and Do While is Do While is executed at-least once b4 the condition is evaluated.<br>
            <p>Example:</p>
        ';

    $i = 9;

    do{
        echo "\$i is $i"." <br>";
    }
    while($i < 9);