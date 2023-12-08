<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Content extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
