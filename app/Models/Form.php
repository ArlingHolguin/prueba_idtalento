<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'second_name',
        'surname',
        'second_surname',
        'document_type',
        'document_number',
        'user_id'
        
    ];

    //Relacion uno a uno inversa /user
    public function user(){
        return $this->belongsTo(User::class);
    }
}
