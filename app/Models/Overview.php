<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Overview extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo1',
        'logo2',
        'description',
        'project_id',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
