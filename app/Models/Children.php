<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Children extends Model
{
    use HasFactory;

    protected $tables = 'childrens';
    protected $guarded = [];

    public function resident(): BelongsTo
    {
        return $this->belongsTo(Resident::class);
    }
}
