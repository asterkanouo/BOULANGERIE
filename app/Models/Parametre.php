<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parametre extends Model
{
    use HasFactory;
    protected $table = 'parametre';
    public function matiere_p(){
        return $this->belongsTo(Matiere_p::class);
}
}