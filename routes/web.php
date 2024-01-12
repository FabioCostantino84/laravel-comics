<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Questo è il file in cui è possibile registrare le rotte web per l'applicazione.
| Queste rotte vengono caricate dal RouteServiceProvider e tutte verranno
| assegnate al gruppo di middleware "web". Fai qualcosa di grande!
|
*/

// Rotta per visualizzare la pagina dei personaggi
Route::get('/characters', function () {
    return view('characters');
})->name('characters');

// Rotta principale per la visualizzazione della lista di fumetti
Route::get('/', function () {

    // Recupera l'elenco dei fumetti dalla configurazione
    $comics = config('comics');

    // Passa l'elenco dei fumetti alla vista 'comics'
    return view('comics', compact('comics'));
})->name('comics');

// Rotta per visualizzare i dettagli di un fumetto specifico
Route::get('/comic_details{id}', function ($id) {

    // Recupera l'elenco dei fumetti dalla configurazione
    $comics = config('comics');

    // Verifica se l'ID fornito esiste nell'array dei fumetti
    if (array_key_exists($id, $comics)) {
        // Se esiste, recupera il fumetto corrispondente
        $comic = $comics[$id];

        // Passa i dettagli del fumetto alla vista 'comic_details'
        return view('comic_details', compact('comic'));
    } else {
        // Se l'ID non esiste, reindirizza alla pagina principale dei fumetti
        return redirect()->route('comics');
    }
})->name('comic_details');

// Altre rotte per le sezioni del sito
Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');
