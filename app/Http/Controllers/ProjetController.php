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
        'latest_archive.date_chang_proj',
        'etat_avance.nom_etat',
        'secteur.nom_sect',
        DB::raw('GROUP_CONCAT(DISTINCT operation.id_lib_op SEPARATOR ",\n ") as operations')
    )
    ->leftJoin(DB::raw('(SELECT a.id_projet, a.id_etat, a.date_chang_proj
                     FROM archivage_projet a
                     INNER JOIN (
                         SELECT id_projet, MAX(date_chang_proj) as max_date
                         FROM archivage_projet
                         GROUP BY id_projet
                     ) as max_archive
                     ON a.id_projet = max_archive.id_projet
                     AND a.date_chang_proj = max_archive.max_date) as latest_archive'),
           'projet.id_projet', '=', 'latest_archive.id_projet')
    ->leftJoin('etat_avance', 'latest_archive.id_etat', '=', 'etat_avance.id_etat')
    ->leftJoin('secteur', 'projet.id_sect', '=', 'secteur.id_sect')
    ->leftJoin('operation', 'projet.id_projet', '=', 'operation.id_projet')
    ->groupBy(
        'projet.id_projet',
        'latest_archive.id_etat',
        'latest_archive.date_chang_proj',
        'etat_avance.nom_etat',
        'secteur.nom_sect'
    )
    ->get();

    $secteurs = Secteur::all();

        return view('projets.liste_P', compact('projets','secteurs'));
    }


    /*******************************insertion proojet ******************/
    public function add_P()
    {
           // Passer les projets pour affichage initial
   // $projets = Projet::with(['secteur', 'archivageProj.archivageProjetat'])->get();
    //dd($projets);
    $projets = DB::table('projet as p')
    ->leftJoin('secteur as s', 's.id_sect', '=', 'p.id_sect')
    ->leftJoin('archivage_projet as ap', 'ap.id_projet', '=', 'p.id_projet')
    ->leftJoin('etat_avance as e', 'e.id_etat', '=', 'ap.id_etat')
    ->select('p.*', 's.*', 'e.*')
    ->get();
//dd($projets);
$secteurs = Secteur::all();
$etats=Etat_avance::all();

//dd($secteurs);
//dd($etats);
    return view('projets.add_P', compact('projets','secteurs','etats'));
    }

    public function insertProj(Request $request)
    {
       
      //valider les champs 
        $validerData= $request->validate([
            'id_projet'=> 'required|numeric',
            'libelle_op' => 'required|string|max:255',
            'N_individualisation' => 'required|string|max:255',
            'AP_actuelle' => 'required|numeric',
            'depenses_cumules' => 'required|numeric',
            'PEC' => 'required|numeric',
            'depenses_previsionnelles' => 'required|numeric',
            //'nom_sect' => 'nullable|string|exists:secteur,nom_sect' 
            'id_sect' => 'nullable|exists:secteur,id_sect',
            'id_etat' => 'nullable|exists:etat_avance,id_etat',
            'date_chang_proj' => 'date',
           
        ]);

      // dd($validerData);

      // Projet::create($validerData);

        /*$projets = Projet::with([
            'secteur',
            'archivageProj.etatproj'
        ])
        ->get(); */
         // Insertion du projet
    $projet = Projet::create([
        'id_projet'=>$validerData['id_projet'],
        'libelle_op' => $validerData['libelle_op'],
        'N_individualisation' => $validerData['N_individualisation'],
        'AP_actuelle' => $validerData['AP_actuelle'],
        'depenses_cumules' => $validerData['depenses_cumules'],
        'PEC' => $validerData['PEC'],
        'depenses_previsionnelles' => $validerData['depenses_previsionnelles'],
        'id_sect' => $validerData['id_sect'] 
    ]);
//dd($projet);
   // $nomSecteur = $projet->secteur->nom_sect;

    // Si un secteur est sélectionné, le lier au projet
    /*if (!empty($validerData['id_sect'])) {
        $secteur = Secteur::find($validerData['id_sect']);
        $secteur->id_projet = $projet->id_projet;
        $secteur->save();
    }*/
   // Insertion de l'état d'avancement dans la table archivage_projet
  if (!empty($validerData['id_etat'])) {
    DB::table('archivage_projet')->insert([
        'id_projet' =>$validerData['id_projet'],
        'id_etat' => $validerData['id_etat'],
        'date_chang_proj'=>$validerData['date_chang_proj'],
        
    ]);
}
        $projets = DB::table('projet as p')
    ->leftJoin('secteur as s', 's.id_sect', '=', 'p.id_sect')
    ->leftJoin('archivage_projet as ap', 'ap.id_projet', '=', 'p.id_projet')
    ->leftJoin('etat_avance as e', 'e.id_etat', '=', 'ap.id_etat')
    ->select('p.*', 's.*', 'e.*')
    ->get();
//dd($projets);
//$secteurs = Secteur::all();

// dd($secteurs);
       //return view ('projets.add_P',compact('projets','secteurs'));
        return redirect()->route('app_add_P')->with('success', 'Projet inséré avec succès');
    }

    /*************************select projet *****************************************/
    public function updateEtat()
    {
    
  
    }

}
