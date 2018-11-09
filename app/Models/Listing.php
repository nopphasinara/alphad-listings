<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{

    protected $guarded=[];

    // return company information
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    // return listing category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // search listings
    public static function search($conditions) {
        $query = Listing::select();
        foreach($conditions as $column => $value)
        {
            if ($value)
                $query->where($column, '=', $value);
        }
        return $query->get();

    }

}
