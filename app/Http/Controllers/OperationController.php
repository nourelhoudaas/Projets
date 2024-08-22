<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Projet;
use App\Models\operation;
use App\Models\Secteur;
use App\Models\archivage_projet;
use App\Models\archivage_op;
use App\Models\etat_avance;

class OperationController extends Controller
{
    public function liste_Op($id_projet)
    {
        // Récupérer le projet avec ses opérations
        //$Operations = Projet::with('operation.Etat_projet')->findOrFail($id_projet);

        // Requête pour obtenir le dernier état de chaque opération
        $operations = operation::select(
            'operation.*',
            'latest_archive.id_etat as latest_id_etat',
            'etat_avance.nom_etat',
            'latest_archive.date_chang as latest_date_chang'
        )
        ->leftJoin(DB::raw('(SELECT a.id_lib_op, a.id_etat, a.date_chang
                             FROM archivage_op a
                             INNER JOIN (
                                 SELECT id_lib_op, MAX(date_chang) as max_date
                                 FROM archivage_op
                                 GROUP BY id_lib_op
                             ) as max_archive
                             ON a.id_lib_op = max_archive.id_lib_op
                             AND a.date_chang = max_archive.max_date) as latest_archive'),
            'operation.id_lib_op', '=', 'latest_archive.id_lib_op')
        ->leftJoin('etat_avance', 'latest_archive.id_etat', '=', 'etat_avance.id_etat')
        ->where('operation.id_projet', $id_projet)

        ->get();

//dd($operations);
// Vérifier si des opérations ont été trouvées
$hasOperations = $operations->isNotEmpty();

        // Passer les données à la vue
        return view('operations.liste_Op', compact('operations', 'hasOperations'));
    }

    public function add_Op()
    {
        return view('operations.add_Op');
    }
}
