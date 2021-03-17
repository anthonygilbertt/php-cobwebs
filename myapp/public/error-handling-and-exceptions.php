<?php
    include './header.php';

    echo '<br><h1>Error Handling and Exceptions</h1>';

    echo <<<EOT
        <p>PHP offers a number ways of handling errors. We are going to look at 3 common methods:</p>
        <ul>
            <li><strong>Die Statements</strong> - Combines the exho and exit function in on. Very useful when we want to output a msg and stop the script execution when an error occurs.</li>
            <li><strong>Custom error handlers</strong> - User defined functions that are called whenever an error occurs.</li>
            <li><strong>PHP error reporting</strong> - The error msg depending on your PHP error reporting settings. This method is very useful in dev envs when you have no idea what caused the error. The info displayed can help you debug your app.</li>
        </ul>
    EOT;

    $denominator = 0;
    if($denominator != 0){
        echo 2 / $denominator;
    }else{
        echo "Cannot divide by zero(0)<br>";
    }


    function my_error_handler($error_no, $error_msg){
        echo "Opps, something went wrong:<br>";
        echo "Error number: [$error_no]<br>";
        echo "Error Description: [$error_msg]<br>";
    }
    set_error_handler("my_error_handler");
    echo (5 / 0);

    error_reporting($reporting_level);