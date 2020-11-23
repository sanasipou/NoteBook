@extends('layouts/base', ['title' => 'A Propos' ])





@section('content')

            <img src="{{ asset('images/photo2.jpg') }}" alt="NoteBook Top tapi" class="my-12 rounded shadow-md h-60">


           <h1 class="mt-5 text-2xl sm:text-5xl text-center font-semibold text-indigo-600">Bienvenu chez nous dans note site a propos NoteBook <span class="text-pink-500">&hearts;</span></h1>



        <a href="{{ route('accuiel') }}" class="mt-5 text-indigo-500 hover:text-indigo-600 underline">Revenir à la page d'accueil</a>


@endsection



