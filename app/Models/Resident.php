<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Resident extends Model
{
    use HasFactory;

    protected $tables = 'residents';
    protected $guarded = [];

    public function wife(): HasOne
    {
        return $this->hasOne(Wife::class);
    }

    public function children(): HasMany
    {
        return $this->hasMany(Children::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
