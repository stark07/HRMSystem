<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Secure Login: Protected Page:- </title>
        <link rel="stylesheet" href="/crude/bootstrap/docs/dist/css/bootstrap.css"/>
    </head>
    <body>
        <?php if (login_check($mysqli) == true) : ?>
            <p><h1> People Information Systems </h1></p>
             <a href="/crude/includes/logout.php">Logout</a>
            <p>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p>
            
            <p>1. Click Here to View <a href="database.php">Database </a></p>
            
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>
    </body>
</html>