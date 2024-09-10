<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class SpecialOffer extends Model
{
    use HasFactory;
    protected $table = 'special_offers';


    protected $fillable = [
        'name',
        'slug',
        'description',
        'project_id',
    ];

    // Automatically generate a slug when creating or updating a special offer
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($specialOffer) {
            $specialOffer->slug = Str::slug($specialOffer->name);
        });

        static::updating(function ($specialOffer) {
            $specialOffer->slug = Str::slug($specialOffer->name);
        });
    }

    // Define a relationship with the Project model
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
