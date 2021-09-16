<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected $primaryKey = 'driverId';

    protected $hidden = ['created_at','update_at'];

    public function createDriver($data) {

        $driver =new Driver();

        $this->driverRef = $data['driverRef'];

        if (isset($data['number'])) {
            $this->number = $data['number'];
        }

        if (isset($data['code'])) {
            $this->number = $data['code'];
        }

        $this->forename = $data['forename'];
        $this->surname = $data['surname'];

        if (isset($data['dob'])) {
            $this->number = $data['dob'];
        }

        if (isset($data['nationality'])) {
            $this->number = $data['nationality'];
        }

        $this->url = $data['url'];
       
        $this->save();
    }
    
    public function updateDriver($data) {

        if (isset($data['driverRef'])) {
            $this->driverRef = $data['driverRef'];
        }

        if (array_key_exists('number', $data)) {
            $this->number = $data['number'];
        }

        if (array_key_exists('code', $data)) {
            $this->code = $data['code'];
        }

        if (isset($data['forename'])) {
            $this->forename = $data['forname'];
        }
       
        if (isset($data['surname'])) {
            $this->surname = $data['surname'];
        }

        if (array_key_exists('dob', $data)) {
            $this->dob = $data['dob'];
        }

        if (array_key_exists('nationality', $data)) {
            $this->nationality = $data['nationality'];
        }

        if (isset($data['url'])) {
            $this->url = $data['url'];
        }

        $this->save(); 
    }
    
}
