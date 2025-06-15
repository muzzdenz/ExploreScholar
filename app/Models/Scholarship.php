<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'country',
        'description',
        'image_url',
        'official_website_url', // <<< Tambahkan ini
        'degrees',
    ];

    protected $casts = [
        'degrees' => 'array',
    ];
}