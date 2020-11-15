<?php
namespace App\Models;

use  Illuminate\Database\Eloquent\Model;

class Job extends Model implements Printable{

    protected $table ="jobs";

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