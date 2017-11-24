<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ontwerps extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'apperance', 'corporateIdentity', 'website1', 'website2', 'website3', 'mooiWebsite1', 'mooiWebsite2', 'mooiWebsite3'
    ];
}

