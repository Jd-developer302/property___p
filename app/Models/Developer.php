<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Developer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'logo',
    ];
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    public function setLogoAttribute($value)
    {
        
        $this->attributes['logo'] = $value ? 'logos/' . $value : null;
    }
    public function projects()
    {
        return $this->hasMany(Project::class, 'developer_id');
    }
}
