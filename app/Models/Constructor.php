<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Constructor extends Model
{
    use HasFactory;
    protected $primaryKey = 'constructorId' ;

    protected $hidden = ['created_at', 'updated_at'];

    public function createConstructor($data) {

        $this->constructorRef = $data['constructorRef'];
        $this->name = $data['name'];
        
        if (isset($data['nationality'])) {
            $this->nationality = $data['nationality'];
        }

        $this->url = $data['url'];

        $this->save();
    }

    public function updateConstructor($data) {
        
        if (isset($data['constructorRef'])) {
            $this->constructorRef = $data['constructorRef'];
        }

        if (isset($data['name'])) {
            $this->name = $data['name'];
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
