<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    protected $table = 'Projet';
    protected $primaryKey = 'id_projet';
    public $incrementing = true;
    protected $keyType = 'integer';

    protected $fillable = [
         'nom_projet', 'etablissement_projet', 'definition_projet','id_projet','id_sect'
    ];

    public function operation()
    {
        return $this->hasMany(operation::class, 'id_projet');
    }

    public function secteur()
    {
        return $this->belongsTo(Secteur::class, 'id_sect');
    }


}
