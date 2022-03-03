<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marchandise extends Model
{
    use HasFactory;
    protected $table = 'marchandise';
    //protected $fillable = ["compte","password","nom","prenom","code_groupe","statut","email"];
    public $timestamps = false;
}
