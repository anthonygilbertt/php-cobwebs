<?php
    include './header.php';
    
    echo '<br>' . "<h1>Form Handling using GET and POST Methods</h1>";

    $html_form = '<html>
<head>
	<title>Registration Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <h2>Registration Form</h2>
    <form action="registration_form.php" method="POST"> First name:
        <input type="text" name="firstname"> <br> Last name:
        <input type="text" name="lastname"> 
        <input type="hidden" name="form_submitted" value="1" />
        <input type="submit" value="Submit">
    </form>
</body>
</html>';

echo $html_form;


echo '<h3>POST Method</h3>
<ul>
    <li> This is the built in PHP super global array variable that is used to get values submitted via HTTP POST method.</li>
    <li> The array variable can be accessed from any script in the program; it has a global scope.</li>
    <li> This method is ideal when you do not want to display the form post values in the URL.</li>
    <li> A good example of using post method is when submitting login details to the server.</li>
</ul>';
echo $_POST['firstname'];
echo $_POST['lastname'];


echo '<h3>GET Method</h3>
<ul>
    <li> This is the built in PHP super global array variable that is used to get values submitted via HTTP GET method.</li>
    <li> The array variable can be accessed from any script in the program; it has a global scope.</li>
    <li> This method displays the form values in the URL.</li>
    <li> It’s ideal for search engine forms as it allows the users to book mark the results.</li>
</ul>
';

echo 'It has the following synyax:<br> $_GET[\'variable_name\']<br>';
echo '<h3>GET vs POST Methods</h3>';
echo '
    <table align="center" border="1" class="table table-striped">
        <tbody>
        <tr>
            <th valign="top" width="50%"> POST</th>
            <th valign="top"> GET</th>
        </tr>
        <tr>
            <td valign="top"> Values are not visible in the URL</td>
            <td valign="top"> Values are visible in the URL</td>
        </tr>
        <tr>
            <td valign="top"> Has not limitation of the length of the values since they are submitted via the body of HTTP</td>
            <td valign="top"> Has limitation on the length of the values usually 255 characters. This is because the values are displayed in the URL. <i>Note the upper limit of the characters is dependent on the browser</i>.</td>
        </tr>
        <tr>
            <td valign="top"> Has lower performance compared to Php_GET method due to time spent encapsulation the Php_POST values in the HTTP body</td>
            <td valign="top"> Has high performance compared to POST method dues to the simple nature of appending the values in the URL.</td>
        </tr>
        <tr>
            <td valign="top"> Supports many different data types such as string, numeric, binary etc.</td>
            <td valign="top"> Supports only string data types because the values are displayed in the URL</td>
        </tr>
        <tr>
            <td valign="top"> Results cannot be book marked</td>
            <td valign="top"> Results can be book marked due to the visibility of the values in the URL</td>
        </tr>
        </tbody>
    </table>
';






