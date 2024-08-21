<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pourcentage extends Model
{
    use HasFactory;
    protected $table = 'Pourcentage';
    protected $primaryKey = 'id_pourc';
    public $incrementing = true;
    protected $keyType = 'integer';

    protected $fillable = [
        'id_pourc','id_lib_op','id_etat','date_chang'
    ];
}
