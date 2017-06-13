<?php
// set up to execute on XAMPP or at topcat.cs.umb.edu:

if (gethostname() === 'topcat') {
    $username = '......';  // REPLACE THIS with your cs.umb.edu username
    $password = '......';  // pw for mysql DB on topcat (or change this too)
    $dsn = 'mysql:host=localhost;dbname='. $username . 'db';
} else {  // dev machine, can create pizzadb
    $dsn = 'mysql:host=localhost;dbname=pizzadb';
    $username = 'pizza_user';
    $password = '......';  // or your choice
}

try {
    // specify that DB errors cause exceptions, so we can see
    // more about them
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('../errors/database_error.php');
    exit();
}
?>