<?php
    define('ERROR_FILE_CREATE', 'File is create');
    define('ERROR_FILE_NOT_CREATE', 'File is NOT create');
	
	
    function buildFileName($email)
    {
        return ('data/' . $email . '.txt');
    }	
	
    function setPersonDataToFile($personDataArray)
    {   
        $encodePersonDataString = json_encode($personDataArray);
        $fileName = buildFileName(GetParam('email'));
 	
	if ($personDataFile = fopen($fileName, 'w'))
	{ 
	    fwrite($personDataFile, $encodePersonDataString);
	    fclose($personDataFile);	
	
            if (file_exists($fileName))
            {
                $status = ERROR_FILE_CREATE;
            }
	}
	else
        {
            $status = ERROR_FILE_NOT_CREATE;
        }
	return $status;
    }
	
    $personDataArray = array();
    function getPersonDataFromFile($email)
    {   
        $personDataArray = array();
	$fileName = buildFileName($email);
        if (file_exists($fileName))
        {
             $personDataFile = fopen($fileName, 'r');
             $encodePersonDataString = fgets($personDataFile, 900);
             $personDataArray = json_decode($encodePersonDataString, true);
             return($personDataArray);
        }  
        else
        {
             return $personDataArray;
        }
    }
    
    function printPersonData($personDataArray)
    {
        echo 'First Name: ' . $personDataArray['first_name'];
        echo "\n".'Last Name: ' . $personDataArray['last_name'];
        echo "\n".'Email: ' . $personDataArray['email'];
        echo "\n".'Age: ' . $personDataArray['age'];
    }