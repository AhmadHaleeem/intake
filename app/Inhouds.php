<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inhouds extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'advices', 'newRegular', 'socialMedia', 'anders' ,'pages', 'seoSearch', 'functions', 'vElement'
    ];
}

