<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'division_id',
        'nama',
        'urutan',
        'deskripsi',
        'singkatan',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $keyType = 'string'; // Atur tipe data primary key sebagai string
    public $incrementing = false; // Nonaktifkan incrementing ID
    public $timestamps = true; // Menonaktifkan fitur timestamps

    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id', 'id');
    }
    public function members()
    {
        return $this->hasMany(AnggotaDepartement::class, 'departement_id', 'id')->orderBy('urutan', 'asc');
    }
}