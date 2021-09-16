<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circuit extends Model
{
    use HasFactory;
    protected $primaryKey = 'circuitId' ;

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

        if (isset($data['location'])) {
            $this->location = $data['location'];
        } else if (is_null($data['location'])) {
            $this->location = $data['location'];
        }

        if (isset($data['country'])) {
            $this->country = $data['country'];
        } else if (is_null($data['country'])) {
            $this->location = $data['country'];
        }

        if (isset($data['lat'])) {
            $this->lat = $data['lat'];
        } else if (is_null($data['lat'])) {
            $this->location = $data['lat'];
        }

        if (isset($data['lng'])) {
            $this->lng = $data['lng'];
        } else if (is_null($data['lng'])) {
            $this->location = $data['lng'];
        }

        if (isset($data['alt'])) {
            $this->alt = $data['alt'];
        } else if (is_null($data['alt'])) {
            $this->location = $data['alt'];
        }

        if (isset($data['url'])) {
            $this->url = $data['url'];
        }

        $this->save();
    }
}
