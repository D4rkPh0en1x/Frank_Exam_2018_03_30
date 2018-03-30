<?php

class ClassWithFunction
{
    private $make;
    private $model;
    private $year;
    private $colour;
    
    
    public function setMake($newMake)
    {
        $this->isajax();
        $this->make = $newMake;
        return $this;
    }
    public function setModel($newModel)
    {
        $this->isajax();
        $this->model = $newModel;
        return $this;
    }
    public function setYear($newYear)
    {
        $this->isajax();
        $this->year = $newYear;
        return $this;
    }
    public function setColour($newColour)
    {
        $this->isajax();
        $this->colour = $colour;
        return $this;
    }
    
    private function isajax(){
        if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
            $output = json_encode(
                array(
                    'type' => 'error',
                    'text' => 'Request must come from Ajax'
                ));
            
            die($output);
        }
    }
    
    private function entrychecker()
    {
        if (!($make && $model && $year && $colour) && is_int($year) && $year == 4){
            echo 'Error in your given data - all fields required - year must be in integer with 4 chars -> example: 2018';
            throw new Exception();
        }
    }
    
    public function addVehicle()
    {
        //add vehicle to DB with the vars $make / $model / $year / $column
        $this->entrychecker();
        if (!addError){
            echo 'Creation successful';
        }
        throw new Exception();
    }
    

}