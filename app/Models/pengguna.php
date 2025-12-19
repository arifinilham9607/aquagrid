<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    // WAJIB: Tentukan nama tabel yang sebenarnya (pengguna, bukan penggunas)
    protected $table = 'pengguna'; 
    protected $fillable = ['nama', 'email', 'password'];
}