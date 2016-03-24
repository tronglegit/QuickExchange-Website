<?php

// start session
session_start();


// Include Config
require('config.php');
require('classes/Messages.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');

require('controllers/home.php');
require('controllers/posts.php');
require('controllers/users.php');
require('controllers/socialevents.php');
require('controllers/questionsandanswers.php');
require('controllers/findroommates.php');
require('controllers/findtutors.php');




require('models/home.php');
require('models/post.php');
require('models/user.php');
require('models/socialevent.php');
require('models/questionandanswer.php');
require('models/findroommate.php');
require('models/findtutor.php');


$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
	$controller->executeAction();
}