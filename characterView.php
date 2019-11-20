<?php
	require_once('include/common.inc.php');
	
 	$dirDataFolder = ROOT_DIR . "/data/";
    $number = GETParam('number');

	if (file_exists ($dirDataFolder . $number . ".png"))
	{
        $vars = array("number" => $number);
		$characterView = getView('characterView.html', $vars);
		echo $characterView;
	}
	else
	{
		echo "OOPS, picture not exists";
	}