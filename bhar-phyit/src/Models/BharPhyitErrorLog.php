<?php

namespace Tallers\BharPhyit\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Tallers\BharPhyit\Enums\BharPhyitErrorLogStatus;

class BharPhyitErrorLog extends BharPhyitBaseModel
{
    protected $fillable = [
        'hash',
        'title',
        'body',
        'url',
        'method',
        'line',
        'error_code_lines',
        'resolved_at',
        'status',
        'additionals',
        'snooze_until',
        'occurrences',
        'last_occurred_at',
    ];

    protected $hidden = [
        'hash',
    ];

    protected $casts = [
        'body' => 'json',
        'status' => BharPhyitErrorLogStatus::class,
        'resolved_at' => 'datetime',
        'last_occurred_at' => 'datetime',
        'error_code_lines' => 'json',
        'additionals' => 'json',
    ];

    /**
     * Relations
     */
    public function details(): HasMany
    {
        return $this->hasMany(BharPhyitErrorLogDetail::class);
    }

    /**
     * Methods
     */
    public function isSnoozed(): bool
    {
        return (bool) ($this->snooze_until && $this->snooze_until > now());
    }
}
