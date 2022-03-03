<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    use HasFactory;

    protected $table = 'fournisseur';
    //protected $fillable = ["compte","password","nom","prenom","code_groupe","statut","email"];
    public $timestamps = false;
    public function groupe(){
        return $this->belongsTo(Groupe::class);
}
}
