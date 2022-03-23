<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Utilisateur extends Model
{
    use HasFactory;
    protected $table = 'utilisateur';
    protected $fillable = ["compte","psw","nom","prenom","code_groupe","statut","email"];
    public $timestamps = false;
    public function groupe(){
        return $this->belongsTo(Groupe::class);
            
        }
}

