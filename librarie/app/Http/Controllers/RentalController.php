<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rental;
use App\Models\Book;

class RentalController extends Controller
{
    public $timestamps = false;
    public function rentBook(Request $request, $bookId) {
        
        $book = Book::findOrFail($bookId);

        if ($book->status === 'available') {
            
            $rental = new Rental();
            $rental->user_id = $request->user()->id;
            $rental->book_id = $bookId;
            $rental->rental_date = now(); 
            $rental->save();

            
            $book->update(['status' => 'rented']);

         }
         return Redirect::route('dashboard');
    }

    public function returnBook(Request $request, $bookId){
        $book = Book::findOrFail($bookId);
        $rental = Rental::where('book_id', $bookId);
        if ($book->status === 'rented'){

            $book->update(['status' => 'available']);
            $rental->update(['return_date' => now()]);

            
        }
            return Redirect::route('explore');
    }
}

