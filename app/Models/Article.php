<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

     protected $table = 'articles';

     protected $fillable = [
         'category_id',
         'name',
         'slug',
         'description',
         'yt_iframe',
         'meta_title',
         'meta_description',
         'meta_keywords',
         'status',
         'created_by',
         'image',
     ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getFormattedCreatedAtAttribute()
    {
        return $this->created_at->format('F j, Y');
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = strtolower($value);
    }
}
