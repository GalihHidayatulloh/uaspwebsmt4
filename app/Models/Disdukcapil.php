<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disdukcapil extends Model
{
    protected $table = 'disdukcapil'; // Sesuaikan dengan nama tabel di database
    protected $fillable = ['nik', 'namalengkap', 'alamat', 'nomorhp'];
}
