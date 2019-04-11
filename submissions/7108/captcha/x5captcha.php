<?php
include("../res/x5engine.php");
$nameList = array("xcu","mjf","hw3","e32","nyv","evl","fly","vj5","742","m83");
$charList = array("C","2","W","P","F","2","A","U","7","3");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
