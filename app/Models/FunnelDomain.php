<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FunnelDomain extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['funnel_name', 'domain', 'main_color'];
}
