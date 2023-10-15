<?php

namespace Tallers\BharPhyit\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;

class BharPhyitErrorLogDetail extends BharPhyitBaseModel
{
    protected $fillable = [
        'bhar_phyit_error_log_id',
        'payload',
        'user_id',
        'user_type',
    ];

    protected $casts = [
        'payload' => 'json',
    ];

    public function user(): MorphTo
    {
        return $this->morphTo('user');
    }
}
