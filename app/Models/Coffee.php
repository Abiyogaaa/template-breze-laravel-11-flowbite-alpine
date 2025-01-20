<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coffee extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'kopi';

    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'gambar',
        'kategori',
        'stok',
        'is_available',
        'created_by',
        'updated_by',
    ];

    /**
     * Relasi ke tabel Users untuk pembuat data.
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Relasi ke tabel Users untuk pengedit terakhir.
     */
    public function editor()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
