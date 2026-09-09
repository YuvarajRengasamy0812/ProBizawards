<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nomination extends Model
{
    use HasFactory;

    protected $table = 'nominations';

    protected $fillable = [
        'company',
        'contact',
        'jobtitle',
        'email',
        'confirm_email',
        'phone',
        'country',
        'description',
        'statement',
        'category',
        'subcategory',
        'consent1',
        'consent2',
    ];

    protected $casts = [
        'consent1' => 'boolean',
        'consent2' => 'boolean',
    ];
}


