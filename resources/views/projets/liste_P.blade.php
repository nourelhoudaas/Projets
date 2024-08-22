@extends('Home')


@section('title', 'liste Projets')

@section('content')

    <body>

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
                                        @foreach ($projet->operation as $operation)
                                            {{ $operation->id_lib_op ?? 'Non défini'}}<br>
                                        @endforeach
                                    </td>
                                    <td>{{ $projet->nom_etat ?? 'Non défini'}}</td>
                                    <td>{{ $projet->date_chang ?? 'Non défini' }}</td>
                                    @endforeach
                        </tbody>
                    </table>
                    {{-- <nav class="app-pagination">
                        {{ $projets->links() }}

                    </nav> --}}

                        </td>



                </div>
            </main>
        @endsection
