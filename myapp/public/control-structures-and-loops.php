<?php
    include './header.php';
    echo '<br>' . "<h1>Control-Structures-and-Loops</h1>";
    echo '<br>';
    echo '<b>Sequential</b> - Executes code in the order in which is was written<br>';
    echo '<b>Decision</b> - Makes a choice given a number of options. The code executed depends on the value of the condition.';
    echo '<br><h2>If Else</h2><br>';
    echo 'If Else example:<br>';
    $first_number = 7;
    $second_number = 21;

    if($first_number > $second_number){
        echo "$first_number is greater than $second_number";
    }else{
        echo "$second_number is greater than $first_number";
    }

    echo '<br><h2>Switch Case</h2><br>';
    echo 'Switch Case example:<br>';

    $today = "wednesday";
    switch($today){
    case "sunday";
        echo "It's Sunday.";
        break;
    case "wednesday":
        echo "It's Wednesday";
        break;
    case "saturday":
        echo "It's Saturday.";
        break;
    default:
        echo "Default statement";
        break;
    }