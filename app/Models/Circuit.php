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
        $this->url = $data['url'];

        $this->save();
    }
}
