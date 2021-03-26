<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    // use HasFactory;
    protected $fillable=[
        'nom',
        'email',
        'telephone',
        'password',
        'Id_Role',
    ];
    public function trajet(){
        return $this->BelongsTo('App\Models\Trajet');
    }

    public function role(){
        return $this->BelongsTo('App\Models\Role');
    }
    public function reservation(){
        return $this->BelongsTo('App\Models\Reservation');
    }
    public function Payements(){
        return $this->HasMany('App\models\Payement');
    }

}
