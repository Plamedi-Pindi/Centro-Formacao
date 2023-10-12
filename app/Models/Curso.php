<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;


    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }

    public function categoria(){
        return $this->belongsTo(Area::class, 'id_area');
    }


}
