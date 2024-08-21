<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtatProjet extends Model
{
    use HasFactory;
    protected $table = 'EtatProjet';
    protected $primaryKey = 'id_etat';
    public $incrementing = true;
    protected $keyType = 'integer';

    protected $fillable = [
        'nom_etat','id_etat','descriptif_etat'
    ];

    public function operation()
    {
        return $this->hasMany(etat::class, 'id_etat','id_etat');
    }
}
