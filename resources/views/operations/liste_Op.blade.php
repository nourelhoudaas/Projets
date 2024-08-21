@extends('Home')


@section('title', 'liste Opérations')

@section('content')

    <body>
        <div class="container2">
            <!-- start section aside -->
            @include('./navbar.sidebar')
            <!-- end section aside -->
            <main>
                <div class="recent_order">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id </th>
                                <th>N°</th>
                                <th>Numéro et libellé d'individualisation de l'opération </th>
                                <th>Objectif visé de l'operation </th>
                                <th>Année de notification par le MF</th>
                                <th>Année d'individualisation</th>
                                <th>AP initial</th>
                                <th>AP actuel</th>
                                <th>Cumul des AP engagées au 30-09-2023</th>
                                <th>Cumul des paiements réelle au 30-09-2023</th>
                                <th>Taux de réalisation physique de l'opération au 30-09-2023</th>
                                <th>Etat d'avancement</th>
                                <th>Contraintes de la réalisation</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Operations->operation as $index => $operation)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $operation->num_op }}</td>
                                    <td>{{ $operation->id_lib_op }}</td>
                                    <td>{{ $operation->objet_vis_op }}</td>
                                    <td>{{ $operation->date_notifM_op }}</td>
                                    <td>{{ $operation->date_indiv_op }}</td>
                                    <td>{{ $operation->ap_init_op }}</td>
                                    <td>{{ $operation->ap_actu_op }}</td>
                                    <td>{{ $operation->cumul_ap_eng_op }}</td>
                                    <td>{{ $operation->cumul_ap_pai_reel_op }}</td>
                                    <td>{{ $operation->taux_rea_phy_op }}</td>
                                    <td>{{ $operation->etat_projet->nom_etat }}</td>
                                    <td>{{ $operation->contraint_rea_op }}</td>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </body>
@endsection

