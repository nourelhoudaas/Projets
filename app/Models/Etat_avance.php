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

    public function operation()
    {
        return $this->belongsToMany(operation::class, 'archivage_op','id_etat', 'id_lib_op')
                    ->withPivot('date_chang')
                    ->withTimestamps();
    }

    public function projet()
    {
        return $this->belongsToMany(operation::class, 'archivage_projet','id_etat', 'id_projet')
                    ->withPivot('date_chang')
                    ->withTimestamps();
    }


}
