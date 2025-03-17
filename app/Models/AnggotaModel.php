<?php

namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel extends Model
{
    protected $table      = 'anggota'; // Nama tabel di database
    protected $primaryKey = 'id'; // Primary Key
    protected $allowedFields = ['nama', 'alamat', 'telepon']; // Kolom yang boleh diisi
}
