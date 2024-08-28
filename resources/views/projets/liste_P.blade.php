@extends('Home')


@section('title', 'liste Projets')

@section('content')


    <body>

            <!-- start section aside -->
            @include('./navbar.sidebar')
            <!-- end section aside -->
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
                    <input type="text" name="PEC" placeholder="Entrer PEC"  required>
                </div>
                <div class="input-box">
                    <span class="details">Numéro d'Individualisation</span>
                    <input type="text" name="N_individualisation" placeholder="Entrer le numéro d'individualisation"  required>
                </div>
                <div class="input-box">
                    <span class="details">AP actuelle</span>
                    <input type="text" name="AP_actuelle" placeholder="Entrer AP Actuelle"  required>
                </div>
                <div class="input-box">
                    <span class="details">Dépenses cumulés</span>
                    <input type="text" name="depenses_cumules" placeholder="Entrer les dépenses cumulés"   required>
                </div>

                <div class="input-box">
                    <span class="details">Dépenses Prévisionnelles</span>
                    <input type="text" name="depenses_previsionnelles" placeholder="Entrer les dépenses prévisionnelles" required>
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

                    <br></br>
                    <table class="table table-striped" style="width:50%" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">N° du projet</th>
                                <th scope="col">Libellé du projet </th>
                                {{-- <th>Libellé des Opération </th> --}}
                                <th scope="col">Numéro d'Individualisation </th>
                                <th scope="col">AP actuelle</th>
                                <th scope="col">Dépenses cumulés</th>
                                <th scope="col">PEC</th>
                                <th scope="col">Secteur du projet</th>
                                <th scope="col">Operations du projet</th>
                                <th scope="col">Etat d'avancement du projet</th>
                                <th scope="col">Mise à jour</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($projets as  $projet)
                                <tr>
                                    <td>{{ $projet->id_projet }}</td>
                                    <td><a
                                            href="{{ route('app_liste_Op',$projet->id_projet) }}">{{ $projet->id_projet }}</a>
                                    </td>
                                    <td>{{ $projet->N_individualisation }}</td>
                                    <td>{{ $projet->AP_actuelle }}</td>
                                    <td>{{ $projet->depenses_cumules }}</td>
                                    <td>{{ $projet->PEC }}</td>
                                    {{-- <td>{{ $projet->etablissement_projet }}</td> --}}
                                    <td>{{ $projet->nom_sect ?? 'Non défini'}}</td>
                                    <td>
                                        @if (!empty($projet->operations))
                                        {{ $projet->operations }}
                                    @else
                                        Non défini
                                    @endif

                                    </td>
                                    <td>{{ $projet->nom_etat ?? 'Non défini'}}</td>
                                    <td>{{ $projet->date_chang ?? 'Non défini' }}</td>
                                    @endforeach
                                </tr>
                        </tbody>


                        </tbody>
                    </table>
                    {{-- <nav class="app-pagination">
                        {{ $projets->links() }}

                    </nav> --}}

                        </td>



                </div>
            </main>

            <script src="https://code.jquery.com/jquery-3.7.1.js" ></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js" ></script>
            <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js" ></script>
            <script src="https://cdn.datatables.net/2.1.4/js/dataTables.bootstrap5.js" ></script>
<script>
let table = new DataTable('#myTable',{

language: {
    info: ' Affichage de la page _PAGE_ sur _PAGES_',
    infoEmpty: 'Aucun enregistrement disponible',
    infoFiltered: '',
    lengthMenu: '  _MENU_',
    zeroRecords: 'Rien trouvé - désolé',
    search: 'Recherche: '
}


});
</script>
@endsection
