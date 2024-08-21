<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secteur extends Model
{
    use HasFactory;
    protected $table = 'Secteur';
    protected $primaryKey = 'id_sect';
    public $incrementing = true;
    protected $keyType = 'integer';

    protected $fillable = [
        'id_sect','nom_sect'
    ];

    public function projet()
    {
        return $this->hasMany(projet::class, 'id_sect','id_sect');
    }
}
