<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class);
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

    protected $guarded = [
        'name',
        'email'
    ];

    protected $fillable = [
        'nomor_telepon',
        'provinsi_id',
        'kabupaten_id',
        'kecamatan_id',
        'bank_id',
        'nama_jalan',
        'kode_pos',
        'nomor_rekening',
    ];
}
