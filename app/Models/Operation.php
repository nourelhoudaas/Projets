<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;
    protected $table = 'Operation';
    protected $primaryKey = 'id_lib_op';
    public $incrementing = true;
    protected $keyType = 'integer';

    protected $fillable = [
        'contraint_rea_op','date_chang','id_etat','id_lib_op', 'objet_vis_op', 'date_notifM_op', 'date_indiv_op', 'ap_init_op','ap_actu_op','num_op','id_projet','cumul_ap_eng_op','cumul_pai_reel_op','taux_rea_phy_op'
    ];

    public function projet()
    {
        return $this->belongsTo(Projet::class, 'id_projet');
    }

    public function Etat_avance()
    {
        return $this->belongsToMany(Etat_avance::class, 'archivage_op','id_etat', 'id_lib_op')
                    ->withPivot('date_chang')
                    ->withTimestamps();
    }
}
