<?php

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Financial extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $guarded;

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images');
    }
}

