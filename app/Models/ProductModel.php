<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'tbl_product'; // Veritabanı tablo adı
    protected $primaryKey = 'PRD_ID'; // İlgili tablonun anahtar sütunu
    protected $allowedFields = [
        'PRD_NAME',
        'PRD_PRICE',
        'PRD_YEARS_PRICE',
        'PRD_DETAIL',
        'PRD_IMAGE',
        'PRD_TITLE',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $useTimestamps = true; // Oluşturma ve güncelleme zamanlarını otomatik olarak yönet
    protected $useSoftDeletes = false; // Yumuşak silmeyi etkinleştir
    protected $createdField = 'created_at'; // Oluşturma zamanı sütunu
    protected $updatedField = 'updated_at'; // Güncelleme zamanı sütunu
    protected $deletedField = 'deleted_at'; // Silme zamanı sütunu (soft delete için)
    protected $returnType = 'object'; // Veritabanından dönen veri tipi (object veya array)
}