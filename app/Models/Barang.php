<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [ 'nama_barang', 
                            'penyedia_barang', 
                            'deskripsi_barang', 
                            'harga_barang',
                            'stok_barang',
                            'tipe_barang',
                            'photos'];
    
    public function scopeFilter(Builder $query) : void
    {
       $query->where('nama_barang', 'like', '%' . request('search') . '%');
    }
}
