<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content=" {{ csrf_token() }}">
    @section('title', 'liste Projets')
    <title> {{ config('app.name') }} - @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">


    <!--========== BOX ICONS ==========-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <link rel="stylesheet" href="  https://cdn.datatables.net/2.1.4/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
</head>

{{-- barre de navigation a gauche --}}
@include('navbar.sidebar')

{{-- le contenu des pages sera afficher ici --}}
@yield('content')

</html>

<body>
    <main>
        <div class="container2">
            <div class="title">Insertion</div>
            <div class="content">
                <form action="{{ route('insrt_proj') }}" method="POST">
                    @csrf
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Libellé Opération</span>
                            <input type="text" name="libelle_op" placeholder="Entrer libellé opération" required>
                        </div>
                        <div class="input-box">
                            <span class="details">PEC</span>
                            <input type="text" name="PEC" placeholder="Entrer PEC" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Numéro d'Individualisation</span>
                            <input type="text" name="N_individualisation"
                                placeholder="Entrer le numéro d'individualisation" required>
                        </div>
                        <div class="input-box">
                            <span class="details">AP actuelle</span>
                            <input type="text" name="AP_actuelle" placeholder="Entrer AP Actuelle" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Dépenses cumulés</span>
                            <input type="text" name="depenses_cumules" placeholder="Entrer les dépenses cumulés"
                                required>
                        </div>
                        <div class="input-box">
                            <span class="details">Dépenses Prévisionnelles</span>
                            <input type="text" name="depenses_previsionnelles"
                                placeholder="Entrer les dépenses prévisionnelles" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="id_sect">Secteur</label>
                        <select id="id_sect" name="id_sect" class="form-control">
                            <option value="">Sélectionner un secteur</option>
                            @foreach ($secteurs as $secteur)
                                <option value="{{ $secteur->id_sect }}">{{ $secteur->nom_sect }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="button">
                        <input type="submit" value="Insérer">
                    </div>
                </form>
            </div>
        </div>

        <div class="recent_order">
            <div class="title">Tableau des projets</div>
            <table class="styled-table" style="width:100%" id="myTable">
                <thead>
                    <tr>
                        <th>N° du projet</th>
                        <th>Libellé du projet </th>
                        {{-- <th>Libellé des Opération </th> --}}
                        <th>Numéro d'Individualisation </th>
                        <th>AP actuelle</th>
                        <th>Dépenses cumulés</th>
                        <th>PEC</th>
                        <th>Secteur du projet</th>
                        <th>Operations du projet</th>
                        <th>Etat d'avancement du projet</th>
                        <th>Mise à jour</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projets as $projet)
                        <tr>
                            <td>{{ $projet->id_projet }}</td>
                            <td><a href="{{ route('app_liste_Op', $projet->id_projet) }}">{{ $projet->id_projet }}</a>
                            </td>
                            <td>{{ $projet->N_individualisation }}</td>
                            <td>{{ $projet->AP_actuelle }}</td>
                            <td>{{ $projet->depenses_cumules }}</td>
                            <td>{{ $projet->PEC }}</td>
                            {{-- <td>{{ $projet->etablissement_projet }}</td> --}}
                            <td>{{ $projet->nom_sect ?? 'Non défini' }}</td>
                            <td>
                                @if (!empty($projet->operations))
                                    {{ $projet->operations }}
                                @else
                                    Non défini
                                @endif
                            </td>
                            <td>{{ $projet->nom_etat ?? 'Non défini' }}</td>
                            <td>{{ $projet->date_chang ?? 'Non défini' }}</td>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.bootstrap5.js"></script>
    <script src="/assets/js/script.js"></script>
