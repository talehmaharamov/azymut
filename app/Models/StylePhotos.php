<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StylePhotos extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function styles(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Style::class);
    }
}
