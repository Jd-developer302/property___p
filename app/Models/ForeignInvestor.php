<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ForeignInvestor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'title',
        'image',
        'description',
        'slug',
    ];
    protected static function booted()
    {
        static::creating(function ($investor) {
            $investor->slug = Str::slug($investor->name);
        });

        static::updating(function ($investor) {
            $investor->slug = Str::slug($investor->name);
        });
    }
}
