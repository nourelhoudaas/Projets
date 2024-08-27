@extends('Home')


@section('title', 'liste Projets')

@section('content')


    <body>
    <body>
    <div class="container">
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
                        <span class="details">PEC</span>
                        <input type="text" name="PEC" placeholder="Entrer PEC"  required>
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




        <div class="container2">

            <!-- start section aside -->
            @include('./navbar.sidebar')
            <!-- end section aside -->
            <main>
                <div class="recent_order">

                    <br></br>
                    <table class="table" id="myTable">
                        <thead>
                            <tr>
                                <th>Id projet </th>
                                <th>Libellé Opération </th>
                                <th>Numéro d'Individualisation </th>
                                <th>AP actuelle</th>
                                <th>Dépenses cumulés</th>
                                <th>PEC</th>
                                <th>Dépenses Previsionnelles</th>
                                <th>Secteur </th>
                                <th>Etat d'Avancement du projet </th>


                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($projets as $projet)

        <tr>
            <td>{{ $projet->id_projet }}</td>
            <td>{{ $projet->libelle_op }}</td>
            <td>{{ $projet->N_individualisation }}</td>
            <td>{{ $projet->AP_actuelle }}</td>
            <td>{{ $projet->depenses_cumules }}</td>
            <td>{{ $projet->PEC }}</td>
            <td>{{ $projet->depenses_previsionnelles }}</td>
            <td>{{ $projet->nom_sect }}</td>
            <td>{{ $projet->nom_etat }}</td>
        </tr>

@endforeach

                    </tbody>

                    </table>
                    {{-- <nav class="app-pagination">
                        {{ $projets->links() }}

                    </nav> --}}

                        </td>



                </div>
            </main>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
            <script src="https://cdn.datatables.net/2.1.4/js/dataTables.min.js" ></script>
<script>

   let table = new DataTable('#myTable',{

    language: {
        info: 'Affichage de la page _PAGE_ sur _PAGES_',
        infoEmpty: 'Aucun enregistrement disponible',
        infoFiltered: '',
        lengthMenu: 'Afficher _MENU_ enregistrements par page',
        zeroRecords: 'Rien trouvé - désolé',
        search: 'Recherche: '
    }

   });
</script>
        @endsection
