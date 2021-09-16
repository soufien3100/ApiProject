<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Constructor extends Model
{
    use HasFactory;
    protected $primaryKey ='constructorId';
    protected $hidden =['created_at', 'updated_at'];

    public function createConstructor($data){
        $driver = new Constructor();
        $this->constructorRef = $data['construtorRef'];
        $this->name = $data['name'];
        $this->nationality = $data['nationality'];
        $this->url = $data['url'];

        $this->save();
    }
    public function updateConstructor($data) {
        $this->constructorRef = $data['constructorRef'];
        $this->save();
    } 
    
}
