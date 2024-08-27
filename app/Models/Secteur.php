<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secteur extends Model
{
    use HasFactory;
    protected $table = 'secteur';
    protected $primaryKey = 'id_sect';
    public $incrementing = true;
    protected $keyType = 'integer';
    public $timestamps = false;
    protected $fillable = [
        'id_sect','nom_sect'
    ];

    public function projet()
    {
        return $this->hasMany(Projet::class, 'id_sect','id_sect');
    }
}
