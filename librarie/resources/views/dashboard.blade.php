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
    @foreach($user->rentals as $rental)
    <!-- Display rented book information -->
    <div class="rented-book">
        <img src="{{ $rental->book->image }}" alt="{{ $rental->book->title }}">
        <form method="POST" action="{{ url('/return-book/' . $rental->id) }}">
            @csrf
            <button type="submit" class="return-button">Return</button>
        </form>
    </div>
@endforeach
</x-app-layout>
