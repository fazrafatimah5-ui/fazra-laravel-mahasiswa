<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    /**
     * Tentukan Primary Key-nya adalah 'nim'
     */
    protected $primaryKey = 'nim';

    /**
     * Matikan auto-increment karena NIM itu string buatan sendiri
     */
    public $incrementing = false;

    /**
     * Tentukan tipe data Primary Key-nya adalah string
     */
    protected $keyType = 'string';

    /**
     * Kolom yang boleh diisi (Mass Assignment)
     */
    protected $fillable = [
        'nim',
        'nama',
        'kelas',
        'matakuliah',
    ];
}