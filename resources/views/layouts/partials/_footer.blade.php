<footer>
    <p class="text-gray-400">&copy; Copyright {{ date('Y') }}


    @if (! Route::is('apropos'))
    <a href="/apropos" class="text-indigo-500 hover:text-indigo-600 underline">A Propos</a>
    @endif

    </p>
</footer>
