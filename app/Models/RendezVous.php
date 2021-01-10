<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RendezVous extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'date',
        'medcins_id',
        'users_id',
    ];
    public static $rules = [
        'libelle' => 'required|min:20',
        'date' => 'required|min:4',
        'medcins_id' => 'required|integer',
        'users_id' => 'required|biginteger',

    ];
    public function medecin()
    {
        return $this->belongsTo('App\Medcin');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
