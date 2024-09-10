<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ProjectLocation extends Model
{
    use HasFactory;
    protected $table = 'project_locations';

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'project_id',
    ];

    // Automatically generate a slug when creating or updating a project location
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($projectLocation) {
            $projectLocation->slug = Str::slug($projectLocation->name);
        });

        static::updating(function ($projectLocation) {
            $projectLocation->slug = Str::slug($projectLocation->name);
        });
    }

    // Define a relationship with the Project model
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
