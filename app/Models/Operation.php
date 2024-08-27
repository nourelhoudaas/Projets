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
    public $timestamps = false;
    

    protected $fillable = [        
        'id_lib_op','num_op','objet_vis_op','contraint_rea_op','date_notifM_op','date_indiv_op','ap_init_op','ap_actu_op',
        'cumul_ap_eng_op','cumul_ap_pai_reel_op','taux_rea_phy_op','id_projet','date_creat_op'
   ];

    public function projet()
    {
        return $this->belongsTo(Projet::class, 'id_projet','id_projet');
    }

    public function archivageOp()
    {
        return $this->hasMany(archivage_op::class,'id_lib_op','id_lib_op');
    }
    
}
