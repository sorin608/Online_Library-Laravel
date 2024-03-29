<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Rental;
use App\Models\Book;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\RentalController;

Route::post('/rent-book/{bookId}', [RentalController::class, 'rentBook'])
    ->middleware(['auth']);

Route::post('/return-book/{bookId}', [RentalController::class, 'returnBook'])
    ->middleware(['auth']);

Route::get('/', function () {
    return view('librarie');
});

Route::get('/explore', function () {
    $rentals = Rental::where('user_id', auth()->id())->get();
        $books = Book::all();
    $rentedBookIds = Rental::where('user_id', auth()->id())->pluck('book_id')->toArray();
    return view('explore', [
        'rentals' => $rentals,
        'books' => $books,
        'rentedBookIds' => $rentedBookIds
    ]);
})->name('explore');

Route::get('/dashboard', function () {
    // Retrieve the latest rental record for the logged-in user (adjust the query as needed)
    $rentals = Rental::where('user_id', auth()->id())->latest('rental_date')->get();
    return view('dashboard', ['rentals' => $rentals]);
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
