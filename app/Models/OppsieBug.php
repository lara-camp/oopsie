<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OppsieBug extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "body",
        "url",
        "method",
        "occurrence",
        // "resolved_by",
        "resolved_at",
        "status",
        "additations",
        "snooze_nuit",
        "last_occurence_at",
        'line_number'
    ];
}
