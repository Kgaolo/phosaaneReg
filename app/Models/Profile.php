<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id',
        'surname',
        'phone',
        'province',
        'qualification',
        'gender',
        'school_name',
        'age_group',
        'province',
        'tell',
        'career',
        'interested_in'
    ];

    protected $casts = [
        'interested_in' => 'array',
        'career'       => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
