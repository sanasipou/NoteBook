@extends('base')

@section('title' , 'A Propos | ' . config('app.name'))



@section('content')

<img src="images/photo2.jpg" alt="NoteBook Top tapi">
<h1>Bienvenu chez nous dans note site a propos NoteBook &hearts;</h1>



        <a href="{{ route('accuiel')}}">Revenir à la page d'accueil</a>


@endsection



