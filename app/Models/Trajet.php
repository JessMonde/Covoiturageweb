<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    protected $fillable=[
        'Nom_trajet',
        'ville_depart',
        'ville_Arrive',
        'Heure_depart',
        'Heure_Arrive',
        'Nbr_Place_dispo',
        'voiture',
        'Date',
        'Prix',
    ];
}
