<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
        //la tabla a concetar a este modelo
        protected $table="regions";
        //la calve primaria de la tabla
        protected $primaryKey = "region_id";
        //omitir campos de auditoria
        public $timestamps = false; 
        use HasFactory;

        public function continente(){
            return $this->belongsTo(Continent::class,
                                    'continent_id');
        }
        public function paises(){
            return $this->hasMany(Country::class,
                                  'region_id');
        }
}
