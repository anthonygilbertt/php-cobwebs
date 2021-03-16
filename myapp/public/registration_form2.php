<?php
    if(!isset($_POST['agree'])){
        echo 'You have NOT agreed to the Terms of Serivice';
    }else{
        echo '<b>First Name:</b> '. $_POST['firstname'] . '<br>';
        echo '<b>Last Name:</b> ' . $_POST['lastname'] . '<br>';
        echo 'You have agreed to the Terms of Service';
    }
    // echo $_POST['form_submitted'];

