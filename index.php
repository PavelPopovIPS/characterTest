<?php
	require_once('include/common.inc.php');
	
 	$dirDataFolder = ROOT_DIR . "/data/";
    $body = "";

 	for ($i = 1; $i < 1000; $i++) 
	{
		if (file_exists ($dirDataFolder . $i . ".png"))
		{
            $vars = array("i" => $i);
			$body = $body . getView('body.html', $vars);
		}
	}
        $header = getView('header.html', $vars);
        $footer = getView('footer.html', $vars);
		echo $header . $body . $footer;