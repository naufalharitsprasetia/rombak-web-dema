<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'nama',
        'deskripsi',
        'urutan',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $keyType = 'string'; // Atur tipe data primary key sebagai string
    public $incrementing = false; // Nonaktifkan incrementing ID
    public $timestamps = true; // Menonaktifkan fitur timestamps
    protected $with = ['departements', 'user'];
    public function departements()
    {
        return $this->hasMany(Departement::class, 'division_id', 'id')->orderBy('urutan', 'asc');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}