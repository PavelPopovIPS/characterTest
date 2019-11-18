<?php
    function insert_to_database($survey_info)
    {
        $survey_info = dbQuote($survey_info);
        $query = "INSERT INTO survey SET
                      first_name = '%{$survey_info['']}%'
                         
                      ";
    }



    function findDvd($title)
    {
        $title = dbQuote($title);
        $query = "SELECT * FROM dvd
                  WHERE title LIKE '%{$title}%'";
        return dbQuery($query);
    }