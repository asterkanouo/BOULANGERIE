<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;
    protected $table = 'equipe';
    //protected $fillable = ["compte","password","nom","prenom","code_groupe","statut","email"];
    public $timestamps = false;
    public function depot(){
        return $this->belongsTo(Depot::class);
    }
    public function produit(){
        return $this->belongsTo(Produit::class);
    }
    public function matiere_p(){
        return $this->belongsTo(Matiere_p::class);
    }
}
