<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rental;

class RentalController extends Controller
{
    public function rentBook(Request $request, $bookId) {
        $user = $request->user();
    
        // Record the rental action in the database
        $rental = new Rental();
        $rental->user_id = $user->id;
        $rental->book_id = $bookId;
        $rental->rental_date = now(); // Use the current date and time
        $rental->save();
    
        return response()->json(['message' => 'Book rented successfully']);
    }
}
