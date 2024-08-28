<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta name="csrf-token" content=" {{csrf_token()}}">

        <title> {{ config('app.name') }} - @yield('title')</title>

        <link rel="stylesheet" href="{{ asset('assets/app.css')}}">


        <!--========== BOX ICONS ==========-->
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
       <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


       <link rel="stylesheet" href="  https://cdn.datatables.net/2.1.4/css/dataTables.bootstrap5.css">

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">








        </head>

        {{-- barre de navigation a gauche--}}
            @include('navbar.sidebar')

            {{-- <div class="bg">
                <div class="content">
                    <h1>République Algérienne Démocratique et Populaire</h1>
                    <h2>Ministère de la Communication</h2>

                </div>
            </div> --}}

        {{-- le contenu des pages sera afficher ici--}}
        @yield('content')


         {{-- nos script js--}}


         <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>

         <script src="https://cdn.datatables.net/2.1.4/js/dataTables.min.js" ></script>



</html>
