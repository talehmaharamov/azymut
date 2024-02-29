<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Style extends Model implements TranslatableContract
{
    use Translatable, LogsActivity;

    public array $translatedAttributes = ['name'];
    protected $guarded = [];

//    public function style(): \Illuminate\Database\Eloquent\Relations\HasMany
//    {
//        return $this->hasMany(Style::class, 'style_id');
//    }
//
//    public function subStyle(): \Illuminate\Database\Eloquent\Relations\BelongsTo
//    {
//        return $this->belongsTo(Style::class, 'style_id');
//    }

    public function photos(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(StylePhotos::class);
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logAll();
    }
}
