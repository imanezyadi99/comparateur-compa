<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\santes_coordonnees;

class santes_infos extends Model
{
    use HasFactory;

    public function coordonnees(){
        return $this->belongsTo(santes_coordonnees::class, 'id');
    }
}
