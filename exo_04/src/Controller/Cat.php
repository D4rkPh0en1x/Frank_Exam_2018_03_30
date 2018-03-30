<?php
namespace src\Controller;

use Exception;


class Cat
{
    private $firstname;
    private $age;
    private $color;
    private $sex;
    private $race;
    
    public function __construct($newFirstName, $newAge, $newColor, $newSex, $newRace)
    {
        $this->setFirstname($newFirstName);
        $this->setAge($newAge);
        $this->setColor($newColor);
        $this->setSex($newSex);
        $this->setRace($newRace);
    }
    
    public function getFirstname()
    {
        return $this->firstname;
        if ($this->firstname >= '3' && $this->firstname <= '20' && is_string($this->firstname)){
            return $this->firstname;
        }
        echo 'The given firstname does not meet the fixed criteria - (3-20 chars and only letters)';
        throw new Exception();
    }
    
    public function getAge()
    {
        if (is_int($this->age)){
            return $this->age;
        }
        echo 'The given age does not meet the fixed criteria - (must be a number)';
        throw new Exception();
        
    }
    
    public function getColor()
    {
        if ($this->color > '3' && $this->color <= 10 && is_string($this->color)){
            return $this->color;
        }
        echo 'The given color does not meet the fixed criteria - (3-10 chars and only letters)';
        throw new Exception();
        
    }
    
    public function getSex()
    {

        if (($this->sex == "male" && is_string($this->sex)) || ($this->sex == "female" && is_string($this->sex))){
            return $this->sex;
        }
        echo 'The given sex does not meet the fixed criteria - (only male or female is accepted)';
        throw new Exception();
        
    }
    
    public function getRace()
    {
        if ($this->race >= '3' && $this->race <= 20 && is_string($this->race)){
            return $this->race;
        }
        echo 'The given race does not meet the fixed criteria - (3-20 chars and only letters)';
        throw new Exception();
        
    }
  
    
    
    
    
    public function setFirstname($newFirstName)
    {
        $this->firstname = $newFirstName;
    }
    
    public function setAge($newAge)
    {
        $this->age = $newAge;
    }
    
    public function setColor($newColor)
    {
        $this->color = $newColor;
    }
    
    public function setSex($newSex)
    {
        $this->sex = $newSex;
    }
    
    public function setRace($newRace)
    {
        $this->race = $newRace;
    }
    
    
    

    
    public function getInfo()
    {
        
        $infoArray = ['First Name' => $this->getFirstname(), 'Age' => $this->getAge(), 'Color' => $this->getColor(), 'Sex' => $this->getSex(), 'Race' => $this->getRace()];

        $infoList = '<ul>';
        foreach ($infoArray as $key => $value){
            // how to display a list in HTML with keys and values
            
            // echo '<li>' . $key . ': ' . $value . '</li>';
            // does the same as the line below
            $infoList .= "<li>$key: $value</li>";
        }
        $infoList .= '</ul>';
        return $infoList;
    }
}

