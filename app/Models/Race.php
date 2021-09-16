<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    protected $primaryKey = 'raceId' ; 
    protected $hidden = ['created_at','update_at'] ; 
    public function createRace($data) {
        $race = new Race();
        $this->year = $data['year'] ; 
        $this->round = $data['round'] ;
        $this->circuitId = $data['name'] ;  
        $this->date = $data['date'] ; 
        $this->save();
    }
    public function updateDriver($data) {
        $this->year = $data['year'];
        $this->save(); 
    }   
}
