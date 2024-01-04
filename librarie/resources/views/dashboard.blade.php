<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
   
    <div class="rented-books-container">
    @foreach ($rentals as $rental)
        @if ($rental->return_date === NULL)
            <!-- Display rented book information -->
            <div class="rented-book">
                <img src="{{ $rental->book->image }}" alt="{{ $rental->book->title }}" class="book-image">
                <form method="POST" action="{{ url('/return-book/' . $rental->book->id) }}">
                    @csrf
                    <button type="submit" class="return-button">Return</button>
                </form>
            </div>
        @endif
    @endforeach
    </div>
 

</x-app-layout>

<style>
    .rented-books-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }

    .rented-book {
        text-align: center;
    }

    .book-image {
        width: 150px; /* Adjust as needed */
        height: 200px; /* Adjust as needed */
        margin-bottom: 10px;
    }

    .return-button {
        background-color: #007BFF;
        color: #fff;
        border: none;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .return-button:hover {
        background-color: #0056b3;
    }
</style>
