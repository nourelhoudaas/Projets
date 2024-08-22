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

                    @if ($hasOperations)
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
                                <th>Contraintes de la réalisation</th>
                                <th>Etat d'avancement</th>
                                <th>Date de modification</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($operations as $index => $operation)
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
                                    <td>{{ $operation->contraint_rea_op }}</td>
                                    <td>{{ $operation->nom_etat ?? 'Non défini'}}</td>
                                    <td>{{ $operation->date_chang ?? 'Non défini'}}</td>

                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <p>Aucune opération trouvée pour ce projet.</p>
                @endif
                </div>
            </main>
        </div>
    </body>
@endsection

