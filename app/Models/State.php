<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $table = 'country_states';
    protected $fillable = [
        'country_id',
        'name',
        'slug',
        'status',
    ];

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $keyType = 'int';

    public $timestamps = true;

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
