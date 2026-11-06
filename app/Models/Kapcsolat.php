<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kapcsolat extends Model
{
    protected $table = 'kapcsolat';
    protected $fillable = ['mu_id', 'tipus', 'alkoto_id'];

    public function mu(): BelongsTo
    {
        return $this->belongsTo(Mu::class);
    }

    public function alkoto(): BelongsTo
    {
        return $this->belongsTo(Alkoto::class);
    }
}