<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class archivage_projet extends Model
{
    use HasFactory;
    protected $table = 'archivage_projet';
    protected $primaryKey = 'id_archiv';
    public $incrementing = true;
    protected $keyType = 'integer';

    protected $fillable = [
        'id_archiv','id_projet','id_etat','date_chang'
    ];
}
