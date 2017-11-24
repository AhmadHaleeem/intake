<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hostings extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'domainName', 'hostingPackage', 'websiteSecure', 'mailSecure',
    ];
}
