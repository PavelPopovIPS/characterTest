<?php
    function GETParam($paramName)
    {
        return(isset($_GET[$paramName]) ? $_GET[$paramName] : '...');
    }