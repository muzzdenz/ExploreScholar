<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    use HasFactory;

    // Nama tabel di database, jika berbeda dengan nama model
    protected $table = 'beasiswa';  // Sesuaikan dengan nama tabel yang ada di database
}
