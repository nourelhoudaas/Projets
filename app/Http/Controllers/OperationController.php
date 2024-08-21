<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Projet;
use App\Models\operation;
use App\Models\Secteur;
use App\Models\Etat_projet;

class OperationController extends Controller
{
    public function liste_Op($id_projet)
    {
        // Récupérer le projet avec ses opérations
        $Operations = Projet::with('operation.Etat_projet')->findOrFail($id_projet);



        // Passer les données à la vue
        return view('operations.liste_Op', compact('Operations'));
    }

    public function add_Op()
    {
        return view('operations.add_Op');
    }
}
