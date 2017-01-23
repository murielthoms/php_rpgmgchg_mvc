<?php
// bootstrap
require 'Controllers/UserController.php';
if(!isset($_GET['page'])) {
	(new UserController())->home();
}



