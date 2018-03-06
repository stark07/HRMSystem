<?php

//BOOTSTRAP

define('BOOTSTRAP_VERSION', 3);


//WEBSITE

define('WEBSITE_NAME', "HRM Systems");

define('WEBSITE_DOMAIN', "http://hrmdb.mysql.database.azure.com");


//DATABASE CONFIGURATION

define('DB_HOST', "hrmdb.mysql.database.azure.com"); 

define('DB_TYPE', "mysql"); 

define('DB_USER', "rooter@hrmdb"); 

define('DB_PASS', "Test1234"); 

define('DB_NAME', "AHRM"); 


//SESSION CONFIGURATION

define('SESSION_SECURE', false);   

define('SESSION_HTTP_ONLY', true);

define('SESSION_REGENERATE_ID', true);   

define('SESSION_USE_ONLY_COOKIES', 1);


//LOGIN CONFIGURATION

define('LOGIN_MAX_LOGIN_ATTEMPTS', 1000); 

define('LOGIN_FINGERPRINT', true); 

define('SUCCESS_LOGIN_REDIRECT', "/site/database.php"); 


//PASSWORD CONFIGURATION

define('PASSWORD_ENCRYPTION', "sha512"); //available values: "sha512", "bcrypt"

define('PASSWORD_BCRYPT_COST', "13"); 

define('PASSWORD_SHA512_ITERATIONS', 55000); 

define('PASSWORD_SALT', "BQvvLCbHUKzqWHBBYWcpDT"); //22 characters to be appended on first 7 characters that will be generated using PASSWORD_ info above

define('PASSWORD_RESET_KEY_LIFE', 100); 


//REGISTRATION CONFIGURATION

define('MAIL_CONFIRMATION_REQUIRED', true); 

define('REGISTER_CONFIRM', "http://hrmdb.mysql.database.azure.com//confirm.php"); 

define('REGISTER_PASSWORD_RESET', "http://hrmdb.mysql.database.azure.com//passwordreset.php"); 


//EMAIL SENDING CONFIGURATION

define('MAILER', "mail"); 

define('SMTP_HOST', ""); 

define('SMTP_PORT', 0); 

define('SMTP_USERNAME', ""); 

define('SMTP_PASSWORD', ""); 

define('SMTP_ENCRYPTION', ""); 


//SOCIAL LOGIN CONFIGURATION

define('SOCIAL_CALLBACK_URI', "http://hrmdb.mysql.database.azure.com//vendor/hybridauth/"); 


// GOOGLE

define('GOOGLE_ENABLED', false); 

define('GOOGLE_ID', ""); 

define('GOOGLE_SECRET', ""); 


// FACEBOOK

define('FACEBOOK_ENABLED', false); 

define('FACEBOOK_ID', ""); 

define('FACEBOOK_SECRET', ""); 


// TWITTER

// NOTE: Twitter api for authentication doesn't provide users email address!
// So, if you email address is strictly required for all users, consider disabling twitter login option.

define('TWITTER_ENABLED', false); 

define('TWITTER_KEY', ""); 

define('TWITTER_SECRET', ""); 


// TRANSLATION

define('DEFAULT_LANGUAGE', 'en'); 


