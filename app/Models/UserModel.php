<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'tbl_users'; // Veritabanı tablo adı

    protected $primaryKey = 'USER_ID'; // İlgili tablonun anahtar sütunu

    protected $allowedFields = [
        'USERNAME',
        'PASSWORD',
        'NAME',
        'SURNAME',
        'PHONE',
        'ADDRESS',
        'EMAIL',
        'ACIKLAMA',
        'USER_AUTH',
        'USER_ACTIVE',
        'USER_RANK',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $useTimestamps = true; // Oluşturma ve güncelleme zamanlarını otomatik olarak yönet
    protected $useSoftDeletes = false;
    protected $createdField = 'created_at'; // Oluşturma zamanı sütunu

    protected $updatedField = 'updated_at'; // Güncelleme zamanı sütunu

    protected $deletedField = 'deleted_at'; // Silme zamanı sütunu (soft delete için)

    protected $returnType = 'object'; // Veritabanından dönen veri tipi (object veya array)
}