<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';
    protected $primaryKey = 'ID_Peminjaman';
    public $timestamps = false;

    protected $fillable = [
        'User_ID_User',
        'Buku_ID_Buku',
        'Tanggal_Peminjaman',
        'Tenggat_Pengembalian',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'User_ID_User', 'ID_User');
    }

    public function book()
    {
        return $this->belongsTo(Book::class, 'Buku_ID_Buku', 'ID_Buku');
    }
}
