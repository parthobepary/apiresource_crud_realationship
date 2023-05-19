<?php

namespace App\Models;

use App\Models\City;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    protected $table = 'countries';
    protected $fillable = [
        'name',
        'area',
        'capital',
    ];
    public function cities(){
        return $this->hasMany(Country::class, 'country_id', id);
    }
}
