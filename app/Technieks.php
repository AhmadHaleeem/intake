<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technieks extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'linkTheEmail', 'newEmailAddress', 'offTheWebsite', 'budget', 'selfDo', 'beeldrTakesCMS', 'beeldrOnlineMarketing', 'siteStatistics', 'timeOfSuccess'
    ];
}

