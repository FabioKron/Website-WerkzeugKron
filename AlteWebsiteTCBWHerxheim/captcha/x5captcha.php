<?php
include("../res/x5engine.php");
$nameList = array("3rs","sac","enu","27j","a7t","l7n","a46","jrf","jce","wek");
$charList = array("T","5","5","7","A","P","Z","V","P","J");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
