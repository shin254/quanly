<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChiTieu extends Model
{
    protected $table='chitieu';
    protected $primaryKey='id';
    protected $fillable = [
        'id',
        'ten',
        'tien_chi',
        'tien_thu',
        'tien_cho_muon',
        'tien_du',
        'loai_tien',
        'ghi_chu',
        'created_at',
        'updated_at'
    ];

}
