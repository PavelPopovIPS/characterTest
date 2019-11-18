<?php
    function CalcStrength($password)
    {
         $strength = 0;
         $strength += CalcLengthStrength($password); // a = a+b
         $strength += CalcDigitStrength($password);
         $strength += CalcUpperStrength($password);
         $strength += CalcLowerStrength($password);
	 $strength += CalcOnlyCharStrength($password);
	 $strength += CalcOnlyDigitStrength($password);
	 $strength += CalcRepentedStrength($password);
         return $strength;
    }

    function CalcLengthStrength($password)
    {
        return 4 * strlen($password);
    }

    function CalcDigitStrength($password)
    {
         $counnt = o;
         for ($i=0; $i < strlen($password); $i++)
         {
              if (ctype_digit($password[$i]))
              {
                  $count++;
              }
         }
         return $count * 4;
    }

    function CalcUpperStrength($password)
    {
        $count = 0;
        for ($i=0; $i < strlen($password); $i++)
        {
            if(ctype_upper($passwor[$i]))
            { 
                 $count++;
            }  
        }
        $strength = 0;
        if($count > 0)
        {
            $strength = 2 * (strlen($password) - $count);          
   
        }
        return $strength;
    }

    function CalcLowerStrength($password)
    {
        $count = 0;
        for ($i=0; $i < strlen($password); $i++)
        {
            if(ctype_lower($passwor[$i]))
            { 
                 $count++;
            }  
        }
        $strength = 0;
        if($count > 0)
        {
            $strength = 2 * (strlen($password) - $count);          
   
        }
        return $strength;
    }

    function CalcOnlyCharStrength($password)
    {
        $count = 0;
            if (ctype_alpha($password))
	    {
	        $count = strlen($password);
	    }
	    return -$count;
    }

    function CalcOnlyDigitStrength($password)
    {
        $count = 0;
	    if (ctype_digit($password))
	    {
	        $count = strlen($password);
	    }
	    return -$count;
    }

    function CalcRepentedStrength($password)
    {
        $strength = 0;
        $symbol = count_chars($password, 1);
        foreach($symbol as $ch => $chCount)
        {
            if ($chCount > 1)
	    {
	        $strength -= chCount;
	    }
        }
        return $strength;	   
    }