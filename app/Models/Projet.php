<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{

    use HasFactory;
    protected $table = 'projet';
    protected $primaryKey = 'id_projet';
    public $incrementing = true;
    protected $keyType = 'integer';
    public $timestamps = false;

    protected $fillable = [
         'id_projet', 'libelle_op', 'N_individualisation','AP_actuelle','depenses_cumules'
         ,'PEC','depenses_previsionnelles','id_sect'
    ];

    public function operation()
    {
        return $this->hasMany(operation::class, 'id_projet','id_projet');
    }

    public function archivageProj()
    {
        return $this->hasMany(archivage_projet::class,'id_projet','id_projet');
    }

    public function secteur()
    {
        return $this->belongsTo(Secteur::class, 'id_sect','id_sect');
    }

   

}
