<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kelas',
        'jenis_kelamin',
        'agama',
        'saudara',
        'tanggal_lahir',
        'no_telepon',
        'nisn',
        'nis',
        'alamat'
    ];
}
