<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluations extends Model
{

    public function user() {
        return $this->belongsTo(User::class);
    }


    protected $fillable = [
      'user_id','products', 'goals', 'competitors', 'makeCompanyBeter', 'reasonMakeWebsite', 'oldBadWebsites', 'visitor'
    ];
}


