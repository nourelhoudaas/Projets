<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etat_avance extends Model
{
    use HasFactory;
    protected $table = 'etat_avance';
    protected $primaryKey = 'id_etat';
    public $incrementing = true;
    protected $keyType = 'integer';

    protected $fillable = [
        'nom_etat','id_etat','descriptif_etat'
    ];

    public function archivageProjetat()
    {
        return $this->hasMany(archivage_projet::class,'id_etat','id_etat');
    }

    public function archivageOpetat()
    {
        return $this->hasMany(archivage_op::class,'id_etat','id_etat');
    }

}
