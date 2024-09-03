<?php
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

//all
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listing',
        'listings'=>Listing::all()
    ]);
});

//single
Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'listing' => Listing::find($id)

    ] );
});
