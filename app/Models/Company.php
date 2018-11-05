<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table='companies';

    protected $guarded=['manger_id'];

    // return company manger information
    public function manger()
    {
        return $this->belongsTo(User::class, 'manger_id');
    }

    // return company's listings
    public function listings()
    {
        return $this->hasMany(Listing::class);
    }

    // get companies byLocation
    public function scopeLocation($query, $location)
    {
        return $query->where('location', $location);
    }

}
