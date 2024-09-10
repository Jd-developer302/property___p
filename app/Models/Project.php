<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'community_id',
        'developer_id',
        'name',
        'slug',
        'apartments',
        'payment_plan',
        'down_payment',
        'handover',
        'starting_price',
        'image',
    ];
    public static function boot()
    {
        parent::boot();

        static::saving(function ($project) {
            $project->slug = Str::slug($project->name);
        });
    }
    public function community()
    {
        return $this->belongsTo(Community::class);
    }

    public function developer()
    {
        return $this->belongsTo(Developer::class);
    }
    public function overviews()
    {
        return $this->hasMany(Overview::class, 'project_id');
    }
}
