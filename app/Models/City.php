<?php

namespace App\Models;

use App\Models\Country;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    protected $table = 'cities';
    protected $fillable = [
        'country_id',
        'name',
        'population'
    ];

    public function countries(){
        return $this->belongsTo(City::class);
    }
}
