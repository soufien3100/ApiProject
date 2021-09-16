<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;
    protected $primaryKey = 'raceId' ; 

    protected $hidden = ['created_at','update_at'] ; 

    public function createRace($data) {

        $race =new Race();

        $this->raceRef = $data['raceRef'] ; 
        $this->name = $data['name'] ; 
       
       
        $this->save();
    }
   
}
