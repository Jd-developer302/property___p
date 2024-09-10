<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class MasterPlan extends Model
{
    use HasFactory;
    protected $table = 'masterplans';

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'project_id',
    ];

    // Automatically generate a slug when creating or updating a master plan
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($masterPlan) {
            $masterPlan->slug = Str::slug($masterPlan->name);
        });

        static::updating(function ($masterPlan) {
            $masterPlan->slug = Str::slug($masterPlan->name);
        });
    }

    // Define a relationship with the Project model
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
