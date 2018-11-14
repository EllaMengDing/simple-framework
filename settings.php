<?php
define('APPLICATION_NAME','the-cool-app');
define('APPLICATION_TITLE','The coolest application ever');
define('THEME','b2');

$db=[
'user'=>'root',
'password'=>'',
'dbname'=>'coolappdb',
'host'=>'localhost'
];
$routes=[
	'books'=>'books/books.php',
	'movies'=>'movies/movies.php',
	'auth'=>'auth/auth.php',
	'users'=>'users/users.php',
];