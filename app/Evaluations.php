<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluations extends Model
{

    public function user() {
        return $this->belongsTo(User::class);
    }


    protected $fillable = [
      'products', 'goals', 'competitors', 'makeCompanyBeter', 'reasonMakeWebsite', 'oldBadWebsites', 'visitor'
    ];
}


