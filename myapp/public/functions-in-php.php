<?php
    include './header.php';
    echo '<br>' . "<h1>Functions</h1>" . '<br>';

    echo 'PHP has over 700 built-in functions.<br>';
    echo '<h3>Numeric Functions</h3><br>
        <strong>is_number</strong> - Accepts an ARG and returns true if it\'s true & false if it\'s not.<br>
        <strong>number_format</strong> - Used to format a numeric value using digit sparators and decimal points.<br>
        <strong>rand</strong> - Used to generate a random number.<br>
        <strong>round</strong> - Round off a number with decimal points to the nearest whole number.<br>
        <strong>sqrt</strong> - Returns the square root of a number.<br>
        <strong>cos</strong> - Returns the cosine.<br>
        <strong>sin</strong> - Returns the sine<br>
        <strong>tan</strong> - Returns the tangent<br>
        <strong>pi</strong> - Returns the value of pi.<br>
    ';
    if(is_numeric("guru")){
        echo '<br>' . "true";
    }
    else{
        echo '<br>' . "false";
    }


    echo '<br>' . number_format(2509663);
    echo '<br>' . rand();
    echo '<br>' . round(3.49);
    echo '<br>' . sqrt(100);
    echo '<br>' . cos(45);
    echo '<br>' . sin(45);
    echo '<br>' . tan(45);
    echo '<br>' . pi();


    echo '<br><h3>Date Function</h3><br>
        <p> The date func is used to format Unix date and time to human readable format.</p><br>
    ';

    echo '<br><h3>User Defined Functions</h3><br>
        <p>These come in handy when:</p><br>
        <ul>
            <li>You have routine tasks in your app such as adding data to the DB</li>
            <li>Performing validation checks in the data.</li>
            <li>Authenticating Users in the System.</li>
        </ul><br>
        <p>Rules to follow when creating functions:</p><br>
        <ul>
            <li>Func names must start w/ a letter or an underscore but NOT a number.</li>
            <li>Func name must be unique</li>
            <li>Func name must not contain spaces</li>
            <li>Use descriptive function names.</li>
            <li>Functions can optionally accept parameters and return values.</li>
        </ul><br>
    ';

    function add_numbers(){   
	    echo 1 + 2;
        echo '<br>';
    }
    add_numbers ();


    function display_name($name){
        echo "Hello " . $name;
        echo '<br>';
    }
    display_name("Elon Musk");



    function kilometers_to_miles($kilometers = 0){
        $miles_scale = 0.62;
        return $kilometers * $miles_scale;
    }
    echo kilometers_to_miles(100);