<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $primaryKey ='resultId';
    protected $hidden =['created_at', 'updated_at'];

    public function createDriver($data){
        $result = new Result();
        $this->number = $data['number'];
        $this->grid = $data['grid'];
        $this->position = $data['position'];
        $this->positionText = $data['positionText'];
        $this->positionOrder = $data['positionOrder'];
        $this->points = $data['points'];
        $this->time = $data['time'];
        $this->milliseconds = $data['milliseconds'];
        $this->fastesLap = $data['fastesLap'];
        $this->rank = $data['rank'];
        $this->fastesLapTime = $data['fastesLapTime'];
        $this->fastesLapSpeed = $data['fastesLapSpeed'];

        $this->save();
    }
    public function updateResult($data) {
        $this->resultRef = $data['resultRef'];
        $this->save();
    } 
}


