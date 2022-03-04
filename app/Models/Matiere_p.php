<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere_p extends Model
{
    use HasFactory;
    protected $table = 'matiere_premiere';
    //protected $fillable = ["compte","password","nom","prenom","code_groupe","statut","email"];
    public $timestamps = false;
    public function depot(){
        return $this->belongsTo(Depot::class);
    }
}
