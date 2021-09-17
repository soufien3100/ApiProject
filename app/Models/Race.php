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
        $this->year = $data['year'];
        $this->round = $data['round'];
        $this->circuitId = $data['circuitId'];
        $this->name = $data['name'];
        $this->date = $data['date'];

        if (isset($data['time'])) {
            $this->time = $data['time'];
        }

        if (isset($data['url'])) {
            $this->url = $data['url'];
        }

        $this->save();
    }

    public function updateRace($data) {
        
        if (isset($data['year'])) {
            $this->year = $data['year'];
        }

        if (isset($data['round'])) {
            $this->round = $data['round'];
        }

        if (isset($data['circuitId'])) {
            $this->circuitId = $data['circuitId'];
        }

        if (isset($data['name'])) {
            $this->name = $data['name'];
        }

        if (isset($data['date'])) {
            $this->date = $data['date'];
        }

        if (array_key_exists('time', $data)) {
            $this->time = $data['time'];
        }

        if (array_key_exists('url', $data)) {
            $this->url = $data['url'];
        }

        $this->save();
    }
}
