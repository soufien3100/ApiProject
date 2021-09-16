<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected $primaryKey = 'driverId' ; 

    protected $hidden = ['created_at','update_at'] ; 

    public function createDriver($data) {

        $driver =new Driver();

        $this->driverRef = $data['driverRef'] ; 
        $this->forename = $data['forename'] ; 
        $this->surname = $data['surname'];
        $this->url = $data['url'];
       
        $this->save();
    }
    
    public function updateDriver($data) {
        $this->driverRef = $data['driverRef'];
        $this->surname = $data['surname'];
       
       
        $this->save(); 
    }
    
}
