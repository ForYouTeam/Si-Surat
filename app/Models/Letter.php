<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_jenis_surat',
        'nama_pemohon',
        'tgl_surat',
        'nomor_surat',
    ];

    public function letter_type()
    {
        return $this->belongsTo(LetterType::class, 'id_jenis_surat');
    }
}
