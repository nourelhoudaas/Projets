@extends('Home')


@section('title', 'liste Projets')

@section('content')

    <body>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>
  <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>

        {{-- <div class="container" id="exampleModal">
            <div class="title">Registration</div>
            <div class="content">
              <form action="#">
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" placeholder="Enter your name" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" placeholder="Enter your username" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" placeholder="Enter your email" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" placeholder="Enter your number" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Password</span>
                    <input type="text" placeholder="Enter your password" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="text" placeholder="Confirm your password" required>
                  </div>
                </div>
                <div class="gender-details">
                  <input type="radio" name="gender" id="dot-1">
                  <input type="radio" name="gender" id="dot-2">
                  <input type="radio" name="gender" id="dot-3">
                  <span class="gender-title">Gender</span>
                  <div class="category">
                    <label for="dot-1">
                    <span class="dot one"></span>
                    <span class="gender">Male</span>
                  </label>
                  <label for="dot-2">
                    <span class="dot two"></span>
                    <span class="gender">Female</span>
                  </label>
                  <label for="dot-3">
                    <span class="dot three"></span>
                    <span class="gender">Prefer not to say</span>
                    </label>
                  </div>
                </div>
                <div class="button">
                  <input type="submit" value="Register">
                </div>
              </form>
            </div>
          </div>
        </div> --}}


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
                    </table>
                    {{-- <nav class="app-pagination">
                        {{ $projets->links() }}

                    </nav> --}}

                        </td>



                </div>
            </main>


       {{--
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>

            --}}
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
