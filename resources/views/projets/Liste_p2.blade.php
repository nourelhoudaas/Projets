@extends('Home')


@section('title', 'liste Projets')

@section('content')
    <style>

    .recent_order .title{
    font-size: 25px;
    font-weight: 500;
    position: relative;
  }
  .recent_order .title::before{
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 30px;
    border-radius: 5px;
    background: linear-gradient(135deg,var( --clr-danger), var(--first-color) );
  }
        .styled-table {
            border-collapse: collapse;
            margin-top: 10rem;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            transition: all .3s ease;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .styled-table thead tr {
            background-color: #138827;
            color: #ffffff;
            text-align: left;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        .styled-table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }

        #myTable tbody tr td {
            text-align: center;
        }

        #myTable thead tr th {
            text-align: center;
        }

        /* Conteneur au-dessus du tableau */
        .top {
            display: flex;
            justify-content: flex-end;
            /* Aligner la barre de recherche à droite */
            margin-bottom: 10px;
            /* Optionnel : ajouter un espace sous la barre de recherche */
        }

        /* Conteneur sous le tableau */
        .bottom {
            display: flex;
            justify-content: space-between;
            /* Espace entre le sélecteur et la pagination */
            align-items: center;
            /* Centrer verticalement le contenu */
            margin-top: 10px;
            /* Optionnel : ajouter un espace au-dessus du sélecteur et pagination */
        }

        /* Aligner le sélecteur de lignes à gauche */
        .bottom .dataTables_length {
            text-align: left;
        }

        /* Aligner la pagination à droite */
        .bottom .dataTables_paginate {
            text-align: right;
        }


    </style>

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
                    <table class="styled-table"  id="myTable">
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
                                    <td><a
                                            href="{{ route('app_liste_Op', $projet->id_projet) }}">{{ $projet->id_projet }}</a>
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


                        </tbody>
                    </table>
                    {{-- <nav class="app-pagination">
                        {{ $projets->links() }}

                    </nav> --}}

                </div>


        </main>

        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.1.4/js/dataTables.bootstrap5.js"></script>
        <script>
            new DataTable('#myTable', {
                "dom": '<"top"f>rt<"bottom"lp><"clear">',
                language: {
                    info: '',
                    infoEmpty: 'Aucun enregistrement disponible',
                    infoFiltered: '',
                    lengthMenu: '  _MENU_',
                    zeroRecords: 'Rien trouvé - désolé',
                    search: 'Recherche: ',

                },

            });
            /*layout: {
                    bottomEnd: {
                        paging: {
                            firstLast: false,
                        },

                    },
                    bottomStart:{
                        pageLength: {
                            menu: [ 10, 25, 50, 100 ]
                        }
                    },

                }*/
        </script>

    @endsection
