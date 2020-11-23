@extends('layouts/base')






@section('content')

            <img src="{{ asset('images/photo2.jpg') }}" alt="NoteBook Top" class="my-12 rounded shadow-md h-60">

            <h1 class="mt-5 text-2xl sm:text-5xl text-center font-semibold text-indigo-600"> Bienvenu chez nous dans note site NoteBook</h1>

            <p class="mt-5 text-lg text-gray-800">NoteBook {{ date('d/m/Y') }}</p>



   @endsection
