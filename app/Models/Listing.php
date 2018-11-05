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

}
