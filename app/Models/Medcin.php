<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medcin extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
    ];
    public static $rules = [
        'nom' => 'required|min:2',
        'prenom' => 'required|min:3',
        'telephone' => 'required|min:9',
    ];
    public function rendezVous()
    {
        return $this->hasMany('App\RendezVous');
    }
}
