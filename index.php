<?php
require_once('_lib/mysqlclass.php');
require_once('settings.php');
$uri=str_replace('/'.APPLICATION_NAME.'/','',$_SERVER['REQUEST_URI']);
$path=preg_split('/\//',$uri);

require_once('themes/'.THEME.'/header.php');
foreach($routes as $key=>$value){
	if($path[0]==$key){
		require_once($value);
		die();
	}
}
echo '404 - file not found';
require_once('themes/'.THEME.'/footer.php');