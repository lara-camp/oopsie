<?php

namespace Tallers\BharPhyit\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BharPhyitBaseModel extends Model
{
    use HasUlids,SoftDeletes;
}
