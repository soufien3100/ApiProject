<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circuit extends Model
{
    use HasFactory;
    protected $primaryKey = 'circuitId' ;

    protected $hidden = ['created_at', 'updated_at'];

    public function createCircuit($data) {

        $this->circuitRef = $data['circuitRef'];
        $this->name = $data['name'];
        
        if (isset($data['location'])) {
            $this->location = $data['location'];
        }

        if (isset($data['country'])) {
            $this->location = $data['country'];
        }

        if (isset($data['lat'])) {
            $this->location = $data['lat'];
        }

        if (isset($data['lng'])) {
            $this->location = $data['lng'];
        }

        if (isset($data['alt'])) {
            $this->location = $data['alt'];
        }

        $this->url = $data['url'];

        $this->save();
    }

    public function updateCircuit($data) {
        
        if (isset($data['circuitRef'])) {
            $this->circuitRef = $data['circuitRef'];
        }

        if (isset($data['name'])) {
            $this->name = $data['name'];
        }

        if (array_key_exists('location', $data)) {
            $this->location = $data['location'];
        }

        if (array_key_exists('country', $data)) {
            $this->location = $data['country'];
        }

        if (array_key_exists('lat', $data)) {
            $this->location = $data['lat'];
        }

        if (array_key_exists('lng', $data)) {
            $this->location = $data['lng'];
        }

        if (array_key_exists('alt', $data)) {
            $this->location = $data['alt'];
        }

        if (isset($data['url'])) {
            $this->url = $data['url'];
        }

        $this->save();
    }
}
