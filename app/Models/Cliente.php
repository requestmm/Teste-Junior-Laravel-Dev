<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;




class Cliente extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['nome', 'sexo', 'cpf', 'localidade_id', 'data_nascimento'];
    protected $dates = ['deleted_at'];

    public function cidade(){
        return $this->belongsTo(Cidade::class,'localidade_id');
    }

    

    
}
