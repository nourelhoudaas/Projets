<?php

namespace App\Http\Controllers;
use Exception;
use Illuminate\Http\Request;
use DB;
use App\Models\Projet;
use App\Models\Operation;
use App\Models\Secteur;
use App\Models\archivage_projet;
use App\Models\archivage_op;
use App\Models\etat_avance;


use Illuminate\Support\Facades\Log;
class ProjetController extends Controller
{
    public function liste_P()
    {
        //$projet = Projet::paginate(10);
       //$projets=Projet::with('operation','Secteur', 'etat_avance')->get();

       // Obtenez la dernière date de changement pour chaque projet
       $projets = Projet::select(
        'projet.*',
        'latest_archive.id_etat',
        'latest_archive.date_chang',
        'etat_avance.nom_etat',
        'secteur.nom_sect',
        DB::raw('GROUP_CONCAT(operation.id_lib_op SEPARATOR ", ") as operations')
    )
    ->leftJoin(DB::raw('(SELECT a.id_projet, a.id_etat, a.date_chang
                     FROM archivage_projet a
                     INNER JOIN (
                         SELECT id_projet, MAX(date_chang) as max_date
                         FROM archivage_projet
                         GROUP BY id_projet
                     ) as max_archive
                     ON a.id_projet = max_archive.id_projet
                     AND a.date_chang = max_archive.max_date) as latest_archive'),
           'projet.id_projet', '=', 'latest_archive.id_projet')
    ->leftJoin('etat_avance', 'latest_archive.id_etat', '=', 'etat_avance.id_etat')
    ->leftJoin('secteur', 'projet.id_sect', '=', 'secteur.id_sect')
    ->leftJoin('operation', 'projet.id_projet', '=', 'operation.id_projet')
    ->groupBy(
        'projet.id_projet',
        'latest_archive.id_etat',
        'latest_archive.date_chang',
        'etat_avance.nom_etat',
        'secteur.nom_sect'
    )
    ->get();

   // dd($projets);

        return view('projets.liste_P', compact('projets'));
    }

    public function add_P()
    {
        return view('projets.add_P');
    }
}
