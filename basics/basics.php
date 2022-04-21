<?php

$file = 'quotes.txt';

// opening a file for reading
$handle = fopen($file, 'r');

// read the file
// echo fread($handle, filesize($file));
// echo fread($handle, 112);

// read a single line
// echo fgets($handle);
// echo fgets($handle);
// echo fgets($handle);

// read a single character
// echo fgetc($handle);
// echo fgetc($handle);

// $handle = fopen($file, 'r+');
// $handle = fopen($file, 'a+');

// writing to a file
// fwrite($handle, "\nEverything popular is wrong.");

// fclose($file);

//unlink($file);

//-------------------------------------------------

// file system - part 1

// easy way to read file

//$quotes = readfile('readme.txt');
//echo $quotes;

//$file = 'quotes.txt';

//// check if file exist
//if(file_exists($file)){
//    // read file
//    echo readfile($file) . '<br />';
//
//    // copy file
//    copy($file, 'quotes.txt') . '<br />';
//
//    // absolute path
//    echo realpath($file) . '<br />';
//
//    // file size
//    echo filesize($file) . '<br />';
//
//    //rename file
//    rename($file, 'readme2.txt') . '<br />';
//
//} else {
//    echo ' file does not exist';
//}

// make directory
//mkdir('naujas');

// superglobals

// $_SESSION, $_COOKIE

//if(isset($_POST['submit'])){
//
//    session_start();
//
//    $_SESSION['name'] = $_POST['name'];
//
//    header('Location: ');
//}

// $_GET, $_POST

//echo $_SERVER['SERVER_NAME'] . '<br />';
//echo $_SERVER['REQUEST_METHOD'] . '<br />';
//echo $_SERVER['SCRIPT_FILENAME'] . '<br />';
//echo $_SERVER['PHP_SELF'] . '<br />'; // kai po FORM'os submit reikia nukreipti i ta pati puslapi

// -----------------------------------------------------------
// ternary operators

//$score = 30;
//
//$val = $score > 40 ? 'True' : 'False';
//echo $val;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!--<form action="--><?php //echo $_SERVER['PHP_SELF'] ?><!--" method="POST">-->
<!--    <input type="text" name="name">-->
<!--    <input type="submit" name="submit" value="submit">-->
<!--</form>-->

</body>
</html>
