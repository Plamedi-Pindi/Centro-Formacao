<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Artigo extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'imagem',
        'pdf',
        'descricao',
        'id_user',
    ];


    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }
}
