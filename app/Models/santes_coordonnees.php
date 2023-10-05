<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\santes_infos;
use App\Models\santes_profiles;

class santes_coordonnees extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=['civilite','name','prenom','ville','codepostale','email','telephone'];


    public function infossante()
    {
        return $this->hasOne(santes_infos::class, 'coordonnees_id');
    }
    public function profile()
    {
        return $this->hasOne(santes_profiles::class, 'coordonnees_id');
    }
 
}
