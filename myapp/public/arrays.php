<?php
include './header.php';

echo '<br>' . "<h1>Arrays</h1>";

// $first_array = array("Boop", "Beep", "Bop");

$movie = array(0 => "Shaolin Monk",
            1 => "Drunken Master",
            2 => "American Ninja",
            3 => "<br>Once upon a time in China",
            4 => "Replacement Killers");

echo '<br>' . $movie[0];            
echo $movie[3] .'<br>';
echo $movie[4];


/*  Associateive Arrays

You can use names for id keys
*/
$artist['R & B'] = 'Sade';

echo '<br>' . $artist['R & B'];

$artist = array('metal' => 'White Chapel',
                'Jazz' => 'Lee Ritenour',
                'Rap' => 'Tupac');

echo '<br>' . $artist['Rap'] . ' is a rapper.';


/*  Associateive Arrays are also very useful when retrieving data from a database.
    The field names are used as id keys
*/

/*-----Multi-dimansional Arays-----*/
//These are arrays that contain other nested arrays.
//the advantage is that they allow us to group related data together.

$movies = array(
                "comedy" => array("Pink Panther", "John English", "See no evil hear no evil"),
                "action" => array("Die Hard", "Expendables"),
                "epic" => array("The Lord of the rings"),
                "Romance" => array("Romeo and Juliet")
);
echo '<br>';
print_r($movies);

//Another way to define the same array is as follows
$film=array(

                "comedy" => array(
                                 0 => "Pink Panther",
                                 1 => "john English",
                                 2 => "See no evil hear no evil"
                            ),
                "action" => array(
                                 0 => "Die Hard",
                                 1 => "Expendables"
                            ),
                "epic" => array(
                               0 => "The Lord of the rings"
                          ),
                "Romance" => array(
                                  0 => "Romeo and Juliet"
                             )

);
echo '<br>';
echo $film["comedy"][2];


//  ---PHP Array Operators  --   //
//x + y  --  Name: Union - Combins elements from both arrays 
    $x = array('id' => 1);
    $y = array('value' => 10);
    $z = $x + $y;

echo '<br>';
print_r($z);

//X==y -- Name: Equal - Compares 2 arrays if they are equal and returns true if truthy.
    $x = array("id" => 1);
    $y = array("id" => "1");

    if($x == $y){
        echo '<br>' . "true";
    }
    else{
        echo '<br>' . "false";
    }

//X===y -- Name: Identical - Compares both of the values and data types.
    $x = array("id" => 1);
    $y = array("id" => "1");

    if($x === $y){
        echo '<br>' . "true";
    }
    else{
        echo '<br>' . "false";
    }

//X != y,  x<>y --  Name: Not Equal - Does not check the data type.
    $x = array("id" => 1);
    $y = array("id" => "1");

    if($x != $y){
        echo '<br>' . "true";
    }
    else{
        echo '<br>' . "false";
    }

//X !==y -- Name: Non Identical -  Checks the datatype
        $x = array("id" => 1);
    $y = array("id" => "1");

    if($x !== $y){
        echo '<br>' . "true";
    }
    else{
        echo '<br>' . "false";
    }



//  ---PHP Array Functions  --   //
// Count Function - Used to count the number of elements that an array contains
$lecturers = array("Mr. Jones", "Mr. Banda", "Mrs. Smith");
echo '<br>';
echo count($lecturers);

// is_array function - Used to determine is a variable is an array or not. 
$lecturers = array("Mr. Jones", "Mr. Banda", "Mrs. Smith");
echo '<br>';
echo is_array($lecturers);

// sort function - Used to sort arrays by values. 
$lecturers = array("Mr. Jones", "Mr. Banda", "Mrs. Smith");
echo '<br>';
sort($lecturers);
print_r($lecturers);

// ksort function - Used to sort the array using the key.
$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");
echo '<br>';
ksort($persons);
print_r($persons);

// asort - Used to sort the array using the values.
$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");
echo '<br>';
asort($persons);
print_r($persons);

