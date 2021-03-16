<?php
    include './header.php';
    echo '<br>' . "<h1>Strings: Explaining String Functions w/ Examples</h1>";
    echo '<strong>What is a string?</strong><br>
    <p>A string is a collection of characters.</p><br>
    <ul>
        <li>you declare a VAR and assign string characters to it.</li>
        <li>you can directly use PHP strings w/ an echo statement.</li>
        <li>PHP String functions are language contruct, it help capture words.</li>
    </ul><br>
    ';
    echo '<h3>Create strings using single quotes</h3><br>';

    var_dump('You need to be logged in to view this page');
    echo '<br>I \'ll be back after 20 minutes<br>';

    $name ='Alicia';
    echo "$name is friends with kalinda<br>";

    $word = "word";
    $pwd = "pas\$word";
    echo $pwd . '<br>';


    $baby_name = "Shalon";

    echo <<<'EOT'
        When $baby_name was a baby,
        She used to look like a "boy".

    EOT;
    echo $my_variable;

    //String functions
    echo '
    <strong>strtolower</strong> - Converts all chars to lowercase<br>
    <strong>strtoupper</strong> - Converts all chars to uppercase<br>
    <strong>strlen</strong> - Counts the chars in a string(including spaces)<br>
    <strong>explode</strong> - Converts string to an array VAR<br>
    <strong>substr</strong> - Used to return part of a STR. Accepts 3 PARS. 1st PAR = the string to be shortened. 2nd PAR = position of the starting point. 3rd PAR = the number of Chars to be returned.<br>
    <strong>str_replace</strong> - Used to locate and replace specified string values. Accepts 3 ARGs. 1st ARG = The TXT to be replaced. 2rd ARG = The replacement TXT. 3rd ARG = The TXT that is analyzed.<br>
    <strong>strpos</strong> - Used to locate and return the position of a Char(s) in a string. (Accepts 2 ARGs)<br>
    <strong>sha1</strong> - Used to calculate the SHA-1 hash of a string value.<br>
    <strong>md5</strong> - Used to calculate the md5 hash of a string value.<br>
    <strong>str_word_count</strong> - Used to count the number of words in a string.<br>
    <strong>ucfirst</strong> - Make the 1st Char of a STR uppercase.<br>
    <strong>lcfirst</strong> - <ale the 1st Char of a STR lowercase.<br>
    ';

    $my_var = 'This is a really long sentence that I wish to cut short';
    echo substr($my_var,0, 12) . '...';
    echo '<br>';
    $laptop = 'the laptop is very expensive';
    echo str_replace ('the', 'that', $laptop);
    echo '<br>';
    echo strpos('PHP Programing','Pro');
    echo '<br>';
    echo sha1('password');
    echo '<br>';
    echo md5('password');
    echo '<br>';
    echo str_word_count ('This is a really long sentence that I wish to cut short');
    echo '<br>';



    $min = 45;
    $courses = 15;
    $total = $min * $courses;
    $hour = 60;
    $total_time = $total / $hour;

    echo '<br>' . $total_time;