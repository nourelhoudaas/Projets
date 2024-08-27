@extends('Home')


@section('title', 'liste Projets')

@section('content')

        
    <body>
        <div class="container">
            <div class="title">Insertion </div>
            <div class="content">
              <form action="#">
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">Libellé Opération</span>
                    <input type="text" placeholder="Entrer libellé opération" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Numéro d'Individualisation</span>
                    <input type="text" placeholder="Entrer le numéro d'individualisation " required>
                  </div>
                  <div class="input-box">
                    <span class="details">AP actuelle</span>
                    <input type="text" placeholder="Entrer Ap Actuelle" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Dépenses cumulés</span>
                    <input type="text" placeholder="Entrer les dépenses cumulés" required>
                  </div>
                  <div class="input-box">
                    <span class="details">PEC</span>
                    <input type="text" placeholder="Entrer PEC" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Dépenses Previsionnelles</span>
                    <input type="text" placeholder="Entrer les dépenses previsionnelles" required>
                  </div>
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
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id </th>
                                <th>Nom du projet </th>
                                <th>Etablissement du projet </th>
                                <th>Definition du projet</th>
                                {{-- <th>Date de creation de projet</th> --}}
                                <th>Secteur du projet</th>
                                <th>Operations du projet</th>
                                <th>Etat d'avancement</th>
                                <th>Date de modification</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($projets as $index => $projet)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td><a
                                            href="{{ route('app_liste_Op',$projet->id_projet) }}">{{ $projet->nom_projet }}</a>
                                    </td>
                                    <td>{{ $projet->etablissement_projet }}</td>
                                    <td>{{ $projet->definition_projet }}</td>
                                    {{-- <td>{{ $projet->etablissement_projet }}</td> --}}
                                    <td>{{ $projet->nom_sect }}</td>
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
                        </tbody>

                        
                        </tbody>
                    </table>
                    {{-- <nav class="app-pagination">
                        {{ $projets->links() }}

                    </nav> --}}

                        </td>



                </div>
            </main>
        @endsection
