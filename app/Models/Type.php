<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    // metodo che restituisce tutti i possibili progetti ad esso connessi
    public function projects(){
        return $this->hasMany(Project::class);
    }

}
