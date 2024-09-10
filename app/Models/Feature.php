<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Feature extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'project_id',
    ];

    // Set the default value of slug attribute
    public static function boot()
    {
        parent::boot();

        static::creating(function ($feature) {
            $feature->slug = Str::slug($feature->name);
        });
    }

    // Define a relationship with the Project model
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
