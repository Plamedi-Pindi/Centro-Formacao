<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
    ];

    public function user(){
        return $this->hasMany('App\Models\User');
    }

    public function curso(){
        return $this->hasMany('App\Models\Curso');
    }
}
