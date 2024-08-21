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
       $projets=Projet::with('operation','Secteur', 'etat_avance')->get();


        return view('projets.liste_P', compact('projets'));
    }

    public function add_P()
    {
        return view('projets.add_P');
    }
}
