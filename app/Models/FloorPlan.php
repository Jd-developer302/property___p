<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class FloorPlan extends Model
{
    use HasFactory;
    protected $table = 'floorplans';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'project_id',
    ];

    // Automatically generate a slug when creating or updating a floor plan
    public static function boot()
    {
        parent::boot();

        static::creating(function ($floorPlan) {
            $floorPlan->slug = Str::slug($floorPlan->name);
        });

        static::updating(function ($floorPlan) {
            $floorPlan->slug = Str::slug($floorPlan->name);
        });
    }

    // Define a relationship with the Project model
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
