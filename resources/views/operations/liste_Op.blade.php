@extends('base')


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
                                <th>Date de creation de projet</th>
                                <th>Secteur du projet</th>
                                <th>Operations du projet</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($projets as $index => $projet)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td><a
                                            href="{{ route('app_liste_op', $projet->id_projet) }}">{{ $projet->nom_projet }}</a>
                                    </td>
                                    <td>{{ $projet->etablissement_projet }}</td>
                                    <td>{{ $projet->definition_projet }}</td>
                                    <td>{{ $projet->etablissement_projet }}</td>
                                    <td>{{ $projet->etablissement_projet }}</td>
                                    <td>
                                        @foreach ($projet->operation as $operation)
                                            {{ $operation->id_lib_op }}<br>
                                        @endforeach
                                    </td>

                                    <td>

                                        <a href="{{ route('departement.editer', $projet->id_depart) }}"><i
                                                class="fa fa-edit"></i></a>

                                        {{-- <form action="#" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')

                                            <a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet direction ?')"
                                                href="{{ route('department.delete', $departement->id_depart) }}"> <i
                                                    class="fa fa-trash" aria-hidden="true"></i></a>
                                        </form> --}}



                                    </td>
                            @endforeach
                        </tbody>
                    </table>
                    <nav class="app-pagination">
                        {{ $departements->links() }}



                        </td>


                        <script type="text/javascript">
                            function confirmation(ev) {
                                evpreventDefault();
                                var urlToRedirect = ev.currentTarget.getAttribute('href');
                                console.log(urlToRedirect);
                                swal({
                                        title: "voulez-vous supprimé cette direction?",
                                        title: "etes vous sure ?",
                                        icon: "warning",
                                        buttons: true,
                                        dangerMode: true,
                                    })
                                    .then((willCancel) => {
                                        if (willCancel) {
                                            window.location.href = urlToRedirect;
                                        }
                                    })
                            }
                        </script>

                </div>
            </main>
        @endsection
