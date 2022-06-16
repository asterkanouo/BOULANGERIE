<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    use HasFactory;
    //protected $table = 'stock_mp';
    //protected $fillable = ["compte","password","nom","prenom","code_groupe","statut","email"];
    public $timestamps = false;
    public function depot(){
        return $this->belongsTo(Depot::class);
            
    }
    public function marchandise(){
        return $this->belongsTo(Marchandise::class);
            
        }
    public function matiere_pproduit(){
        return $this->belongsTo(Matiere_p::class);
            
        }
}
