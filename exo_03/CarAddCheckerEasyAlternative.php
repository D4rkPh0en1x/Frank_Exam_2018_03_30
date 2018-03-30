<?php


if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
    $output = json_encode(
        array(
            'type' => 'error',
            'text' => 'Request must come from Ajax'
        ));
    
    die($output);
}


function entrychecker()
    {
        if (!($make && $model && $year && $colour) && is_int($year) && $year == 4){
            echo 'Error in your given data - all fields required - year must be in integer with 4 chars -> example: 2018';
            throw new Exception();
        }
    }
    
function addVehicle($make, $model, $year, $column)
    {
        //add vehicle to DB with the vars $make / $model / $year / $column
        $this->entrychecker();
        if (!addError){
            echo 'Creation successful';
        }
        echo 'Error while inserting to the database';
        throw new Exception();
    }
    