<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class archivage_op extends Model
{
    use HasFactory;
    protected $table = 'archivage_op';
    protected $primaryKey = 'id_archiv';
    public $incrementing = true;
    protected $keyType = 'integer';

    protected $fillable = [
        'id_archiv','id_lib_op','id_etat','date_chang'
    ];

    
    public function archivageOpetat()
    {
        return $this->belongsTo(Etat_avance::class, 'id_etat','id_etat');
    }

    public function archivageOp()
    {
        return $this->belongsTo(Operation::class, 'id_lib_op', 'id_lib_op');
    }
}
