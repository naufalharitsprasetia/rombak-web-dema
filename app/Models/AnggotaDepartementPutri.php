<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnggotaDepartementPutri extends Model
{
    protected $fillable = [
        'id',
        'departement_id',
        'nim',
        'nama',
        'urutan',
        'prodi',
        'asal',
        'image',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $keyType = 'string'; // Atur tipe data primary key sebagai string
    public $incrementing = false; // Nonaktifkan incrementing ID
    public $timestamps = true; // Menonaktifkan fitur timestamps

    public function departement()
    {
        return $this->belongsTo(DepartementPutri::class, 'departement_id', 'id');
    }
}
