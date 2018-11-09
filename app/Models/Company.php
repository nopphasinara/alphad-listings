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

    // return company's category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // search companies
    public static function search($conditions) {
        $query = Company::select();
        foreach($conditions as $column => $value)
        {
            if ($value)
                $query->where($column, '=', $value);
        }
        return $query->get();
    }

    // get companies byLocation
    public function scopeLocation($query, $location)
    {
        return $query->where('location', $location);
    }

}
