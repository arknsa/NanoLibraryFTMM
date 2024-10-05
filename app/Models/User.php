<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'user';        // Specify custom table name
    protected $primaryKey = 'ID_User'; // Specify custom primary key

    protected $fillable = [
        'Role', 'Email', 'Password', 'NIM', 'Nama', 'No_Telp', 'Program_Studi', 'Angkatan',
    ];

    protected $hidden = [
        'Password', // Pastikan konsisten dengan nama field di database
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'Password' => 'hashed',
    ];

    // Menambahkan relasi ke Pemesanan
    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class, 'User_ID_User', 'ID_User');
    }

    // Menambahkan relasi ke Peminjaman
    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'User_ID_User', 'ID_User');
    }

    // Menambahkan relasi ke Pengembalian
    public function pengembalian()
    {
        return $this->hasMany(Pengembalian::class, 'User_ID_User', 'ID_User');
    }
}
