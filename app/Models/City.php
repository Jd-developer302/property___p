<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class City extends Model
{
    use HasFactory;
    protected $fillable = [
        'country_state_id',
        'title',
        'name',
        'slug',
        'status',
        'total_area',
        'density',
        'population',
        'description',
        'image',
    ];
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    public function state()
    {
        return $this->belongsTo(State::class, 'country_state_id');
    }
}
