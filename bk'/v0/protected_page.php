<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>HRM Dashboard</title>
        <link rel="stylesheet" href="/crude/bootstrap/docs/dist/css/bootstrap.css"/>
    </head>
    <body>
        <?php if (login_check($mysqli) == true) : ?>
             
            <h5><p>Welcome <?php echo htmlentities($_SESSION['username']); ?> to HRM: Dashboard</p></h5>
            <a href="/includes/logout.php">Click Here to Logout</a>
    
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>
        <?php include('database.php'); ?>
    </body>
</html>