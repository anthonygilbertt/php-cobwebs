<?php
    include './header.php';
    echo '<br>' . "<h1>Cookies & Sessions</h1>";
    echo '<p>A cookie is a small file with the maximum size of 4KB that the web server stores on the client computer.</p>
    <p>Most of the websites on the internet display elements from other domains such as advertising. The domains serving these elements can also set their own cookies. These are known as third party cookies.</p>
    <p>Most web browsers have options for disabling cookies, third party cookies or both.</p><br>
    ';

    echo '<h3>Creating Cookies</h3><br>';
    setcookie(cookie_name, cookie_value, [expiry_time], [cookie_path], [domain], [secure], [httponly]);


    echo '<p><i>Note: the php set cookie function must be executed before the HTML opening tag.</i></p><br>';
    
    setcookie("user_name", "TheNovaGlow", time()+ 60,'/'); // expires after 60 seconds
    echo 'the cookie has been set for 60 seconds' . '<br>';
    // setcookie("user_name", "TheNovaGlow", time() - 360,'/');
    print_r($_COOKIE);
    //output the contents of the cookie array variable 
    
    
    echo '<h3>What is a Session?</h3>';
    echo '
    <ul>
    <li> A session is a global variable stored on the server.</li>
    <li> Each session is assigned a unique id which is used to retrieve stored values.</li>
    <li> Whenever a session is created, a cookie containing the unique session id is stored on the user’s computer and returned with every request to the server.&nbsp; If the client browser does not support cookies, the unique php session id is displayed in the URL</li>
    <li> Sessions have the capacity to store relatively large data compared to cookies.</li>
    <li> The session values are automatically deleted when the browser is closed. If you want to store the values permanently, then you should store them in the database.</li>
    <li> Just like the $_COOKIE array variable, session variables are stored in the $_SESSION array variable. Just like cookies, the session must be started before any HTML tags.</li>
    </ul>
    ';

    session_start(); //start the PHP_session function 

    if(isset($_SESSION['page_count'])){
         $_SESSION['page_count'] += 1;
    }
    else{
         $_SESSION['page_count'] = 1;
    }
    echo 'You are visitor number ' . $_SESSION['page_count'];

    // session_destroy();
    unset($_SESSION['2nu5idvgoh543roljvtohqqu47']);





