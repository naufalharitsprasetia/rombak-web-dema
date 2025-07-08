<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UKM extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama',
        'deskripsi',
        'kategori',
        'jumlah_anggota',
        'logo',
        'link_sosmed',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $keyType = 'string'; // Atur tipe data primary key sebagai string
    public $incrementing = false; // Nonaktifkan incrementing ID
    public $timestamps = true; // Menonaktifkan fitur timestamps
}