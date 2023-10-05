<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\autos_personnels;
use App\Models\autos_vehicules;
use App\Models\autos_antecedants;

class donnees_personnels extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=['civilitee','name','prenom','adresse','villee','email','tel'];

    public function infospersonnel()
    {
        return $this->hasOne(autos_personnels::class);
    }
    public function infosvehicule()
    {
        return $this->hasOne(autos_vehicules::class);
    }
    public function infoantecedants()
    {
        return $this->hasOne(autos_antecedants::class , 'donnees_personnels_id');
    }

}
