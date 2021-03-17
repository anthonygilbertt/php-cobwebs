<?php
    include './header.php';

    echo '<h1>Regular Expressions</h1><br>
        <p>Use Cases:</p>
        <ul>
            <li>Simplify udentifying patterns in</li>
            <li>Validates User Input such as email address, email domains, telephone numbers, IP addresses.</li>
            <li>Highlight keywords in search results</li>    
            <li>Used to identiy the template tags and replace them with data.</li>
        </ul>
        <ul>
            <li><strong>preg_match()</strong> - Used to perform pattern matching. Returns true if it found the pattern and false if a match is not found.</li>
            <li><strong>preg_split()</strong> - Used to perform a pattern match on a string. Then splits the result into a numeric array.</li>
            <li><stong>preg_replace()</strong> - Used to perform a pattern match on a string and then replace the match with the specified text.</li>
        </ul>';



    $my_url = "www.guru99.com";
    if (preg_match("/guru/", $my_url)){
        echo "the url $my_url contains guru" . '<br>';
    }
    else{
        echo "the url $my_url does not contain guru" . '<br>';
    }


    $my_text = "I Love Regular Expressions";
    $my_array  = preg_split("/ /", $my_text . '<br>');
    print_r($my_array );


    $text = "We at Guru99 strive to make quality education affordable to the masses. Guru99.com";
    $text = preg_replace("/Guru/", '<span style="background:yellow">Guru</span>', $text);

    echo $text;

    