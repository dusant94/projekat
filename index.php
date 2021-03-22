<?php
session_start();
require ('config.php');

require ('classes/messages.php');
require ('classes/Bootstrap.php');
require ('classes/controller.php');
require ('classes/model.php');

require ('controllers/home.php');
require ('controllers/users.php');
require ('controllers/shares.php');

require ('models/home.php');
require ('models/user.php');
require ('models/share.php');

$bootstrap=new Bootstrap($_GET);
$controller=$bootstrap->createController();
if($controller){
$controller->executeAction();
	
}
?>
 