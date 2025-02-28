<?php

use Illuminate\Support\Facades\Route;
use App\Models\Stock;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::delete('/delete-stock/{id}', function ($id) {
    $stock = Stock::find($id);

    if ($stock) {
        // Delete Image from Storage
        Storage::delete('public/' . $stock->image);

        // Delete Stock Record
        $stock->delete();

        return response()->json(['success' => true]);
    }

    return response()->json(['success' => false, 'message' => 'Stock not found']);
});


