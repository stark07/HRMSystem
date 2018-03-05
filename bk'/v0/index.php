<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>HRM Systems</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
        <h1><center>Human Resource Management System- Beta Version</center></h1>
        <h6>User Login</h6>
    </head>
    <body>
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?> 
        <form action="includes/process_login.php" method="post" name="login_form">                      
            E-mail or Phone: <input type="text" name="email" /></br>
            Password/Code : <input type="password" 
                             name="password" 
                             id="password"/></br>
           <left> <input type="button" 
                   value="Login" 
                   onclick="formhash(this.form, this.form.password);" /> </left>
        </form>
 
<?php
        if (login_check($mysqli) == true) {
                        echo '<p><br>Status: Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '.</p>';
 
            echo '<p> <a href="includes/logout.php">Click here to Change User/Logout?</a>.</p>';
        } else {
                        echo '<p><br>Status: Currently logged ' . $logged . '.</p>';
                        echo "<p><br>If you don't have a login, please <a href='register.php'>register</a></p>";
                }
?>      
    </body>
</html>