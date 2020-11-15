<?php
namespace App\Models;


class BaseElement implements Printable {
    private $title;
    public $description;
    public $visible;
    public $months;

    public function __construct($title,$description) {
        $this->title = $title;
        $this->description = $description;
    }
    public function getTitle(){
        return $this->title;
    }

    function getDurationAsString(){

        $years = floor($this->months/12);
                    
        if($years < 1)
        
            return "$this->months months";
            
        else if($this->months < 1)
        
            return "$years years";
            
        else 
        
            return "$years years $this->months months";
        
    }

    function getDescription(){
        return $this->description;
    }

    
}