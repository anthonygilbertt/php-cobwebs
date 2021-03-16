<?php
    include './header.php';

    echo '<br><h1>File Processing</h1>';

$filename = 'header.php';
// echo file_exists($filename); 
if(file_exists($filename)){
echo 'true<br>';
}else{
echo 'false<br>';
}


//fopen($file_name,$mode,$use_include_path,$context);
//  $mode  is the mode in which the file should be opened
//  the modes are listed below

/*
r - read file from beginning
  - returns false if the file doesn't exit
  - read only

r+ - read file from beginning
   - returns false if the file doesn't exit
   - read and write

w - write the file at beginning
  - truncate file to zero length
  - if the file doesn't exit attemt to create it
  - write only

w+ - write the file at the beginning, truncate file to zero length
   - if the file doesn't exit, attempt to create it
   - read and write

a - append to file at end
  - if the file doesn't exit attempt to create it
  - write only

a+ - php append to file at end
   - if the file doesn't exit attempt to create it
   - read and write
*/


// $use_include_path  is optional, default is false, if set true,
// the function searches in the include path too.

// $context  is optiona, can be used to specify the context support.

echo '<b>Fwrite Function</b> - Used to write files<br>
has the following syntax: <br>
<code>fwrite($hadle, $string, $length);</code>
<b>fwrite</b> - is the function for writing to files.<br>
<b>$handle</b> - the file pointer resource<br>
<b>$string</b> - is the data to be written to the file.<br>
<b>$length</b> - is optional, can be used to specify the max file length.<br>';


   echo <<<EOT
        <h3>Fclose Function</h3>
        <p>Used to close a file which has already been opened</p>
        <p>Has the following syntax.</p>
        <code>fclose(\$handle);</code>
        <ul>
            <li>"fclose" - the function for closing an open file.</li>
            <li>"\$handle" - the file pointer resource.</li>
        </ul>
    EOT;

    $fh = fopen("my_setting.txt", "w");
    $text = <<<_END
        localhost;rootlpwd1234;my_database
    _END;

    fwrite($fh, $text);
    fclose($fh);
    echo "File 'my_setting.txt' written successuflly";

    echo <<<EOT
        <h3>Fgets Function</h3>
        <p>Used to read php files line by line. Has the following basic syntax:</p>
        <code>fgets(\$handle);</code>
        <ul>
            <li>"\$fgets" - the function for reading file lines</li>
            <li>"\$handle" - the file pointer resource</li>
        </ul>
    EOT;

$fh = fopen("my_settings.txt", 'w') or die("File does not exist or you lack permission to open it");
$line = fgets($fh);
echo $line; fclose($fh);

echo 'die() is a function that is called when an error occurs.';

    echo <<<EOT
        <h3>Copy Function</h3>
        <p>Used to copy files. Has the following basic syntax:</p>
        <code>copy(\$file,\$copied_file);</code>
        <ul>
            <li>"\$file" - specifies the file path and name of the file to be copied.</li>
            <li>"\$copied_file" - Name of the copied file.</li>
        </ul>
    EOT;

    copy('my_setting.txt', 'my_settings_backup.txt') or die("Could not copy file");
    echo "File successfully copied to 'my_settings_backup.txt'"; 


    echo <<<EOT
        <h3>Deleting a File</h3>
        <p>The 'unlink' function is used to delete files.</p>
    EOT;

    if (!unlink('my_settings.txt')){
        echo "Could not delete file";
    }else{
        echo "File 'my_settings.txt' successfully deleted"; 
    }

    echo <<<EOT
        <h3>Fuke_get_contents Function</h3>
        <p>Used to read the entire file contents.</p>
        <p>The difference between 'file_get_contents' and 'fgets' is that 'file_get_contents' returns the file data as a string while 'fgets' reads the file line by line.</p>
    EOT;

    echo "<pre>"; // Enables display of line feeds
    echo file_get_contents("my_setting.txt");
    echo "</pre>"; // Terminates pre tag