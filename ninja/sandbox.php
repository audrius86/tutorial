<?php

// superglobals


// $_COOKIE




// $_SESSION

if(isset($_POST['submit'])){

    // cookie for gender
    setcookie('gender', $_POST['gender'], time() + 86400);

    session_start();

    $_SESSION['name'] = $_POST['name'];

    header('Location: index.php');
}

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

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="name">
    <select name="gender">
        <option value="male">male</option>
        <option value="female">female</option>
    </select>
    <input type="submit" name="submit" value="submit">
</form>

</body>
</html>
