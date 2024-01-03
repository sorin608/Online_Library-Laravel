<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rental;
use App\Models\Book;

class RentalController extends Controller
{
    public function rentBook(Request $request, $bookId) {
        // Check if the book is available for rent
        $book = Book::findOrFail($bookId);

        if ($book->status === 'available') {
            // Record the rental action in the database
            $rental = new Rental();
            $rental->user_id = $request->user()->id;
            $rental->book_id = $bookId;
            $rental->rental_date = now(); // Use the current date and time
            $rental->save();

            // Update the book's status to 'rented'
            $book->update(['status' => 'rented']);

            return redirect()->route('dashboard')->with('success', 'Book rented successfully.');
        } else {
            return redirect()->route('dashboard')->with('error', 'Book is not available for rent.');
        }
    }
}

