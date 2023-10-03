<?php

namespace App\Models;

use CodeIgniter\Model;

class LogModel extends Model
{
    protected $table = 'tbl_log'; // Veritabanı tablo adı

    protected $primaryKey = 'LOG_ISLEM_KODU'; // İlgili tablonun anahtar sütunu

    protected $allowedFields = [
        'LOG_TITLE',
        'LOG_DETAIL',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $useTimestamps = true; // Oluşturma ve güncelleme zamanlarını otomatik olarak yönet
    protected $useSoftDeletes = false; // Yumuşak silme etkinleştir

    protected $createdField = 'created_at'; // Oluşturma zamanı sütunu
    protected $updatedField = 'updated_at'; // Güncelleme zamanı sütunu
    protected $deletedField = 'deleted_at'; // Silme zamanı sütunu (soft delete için)

    protected $returnType = 'object'; // Veritabanından dönen veri tipi (object veya array)
}