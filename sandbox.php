<?php

if (isset($_POST['submit'])) {

    //cookie for gender
    setcookie('gender', $_POST['gender'], time() + 86400);

    session_start();

    $_SESSION['name'] = $_POST['name'];

    header('Location: index.php');
}

// FILE SYSTEM 
$file = 'readme.txt';

if (file_exists($file)) {

    // read file
    echo readfile($file) . '<br />';

    // copy file
    copy($file, 'quotes.txt');

    // absolute path
    echo realpath($file) . '<br />';

    // file size
    echo filesize($file) . '<br />';

    // rename the file
    rename($file, 'test.txt');

} else {
    echo 'file does not exist';
}

// make directory
mkdir('quotes');
?>

<?php

$file = 'quotes.txt';

// opening a file for reading
// $handle = fopen($file, 'r');

// read the file
// echo fread($handle, filesize($file));
// echo fread($handle, 112);

// read a single line
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

unlink($file);

?>




<!DOCTYPE html>
<html>
<head>
    <title>php tuts</title>
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