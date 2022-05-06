<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as basicAuthenticatable;


class Utilisateur extends Model implements Authenticatable
{
    use basicAuthenticatable;
    use HasFactory;
    protected $table = 'utilisateur';
    protected $fillable = ["compte","password","nom","prenom","code_groupe","statut","email"];
    public $timestamps = false;
    public function groupe(){
        return $this->belongsTo(Groupe::class);
            
        }
}

