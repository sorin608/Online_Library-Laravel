<section id="explore">
    <h2>Explore Our Collection</h2>
    <p>Discover a wide range of materials to enhance your learning experience.</p>

    <div class="carousel-container">
        <button class="carousel-arrow" id="prev">&lt;</button>
        <div class="carousel">
        @foreach ($books as $book)
                <div class="book">
                    <img src="{{ $book->image }}" alt="{{ $book->title }}">
                    @if ($book->status === 'available')
                        <form method="POST" action="{{ url('/rent-book/' . $book->id) }}">
                            @csrf
                            <button type="submit" class="rent-button">Rent</button>
                        </form>
                    @else
                        <div class="overlay">
                            <div class="status-label">Rented</div>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
        </div>
        <button class="carousel-arrow" id="next">&gt;</button>
    </div>

    <p>Start exploring now and unlock a wealth of knowledge!</p>
    <a href="#join" class="cta-button">Join the Library</a>
</section>

<style>
    .carousel-container {
        position: relative;
        margin: 2em 0;
    }

    .carousel {
        display: flex;
        overflow: hidden;
        width: 100%;
        scroll-snap-type: x mandatory;
        scrollbar-width: none; /* Firefox */
        -ms-overflow-style: none; /* IE 10+ */
        overflow-y: hidden;
    }

    .carousel img {
        width: 350px;
        height: 500px;
        scroll-snap-align: start;
    }

    .carousel-arrow {
        z-index: 200;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        font-size: 1.5em;
        background-color: #007BFF;
        color: #fff;
        border: none;
        padding: 0.5em;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .carousel-arrow:hover {
        background-color: #0056b3;
    }

    #prev {
        left: 1em;
    }

    #next {
        right: 1em;
    }

    .book {
    position: relative;
    margin-right: 20px; /* Adjust as needed */
    transition: opacity 0.3s ease;
    }

    .book:hover {
    opacity: 0.7;
    z-index: 100;
    }

    .rent-button {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0);
    padding: 10px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 5px;
    opacity: 0;
    transition: transform 0.3s ease, opacity 0.3s ease;
    z-index: 300;
    }

    .book:hover .rent-button {
    transform: translate(-50%, -50%) scale(1);
    opacity: 1;
    transition: transform 0.3s ease, opacity 0.3s ease;
    z-index: 300;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 500px;
        background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent black overlay */
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 1;
        transition: opacity 0.3s ease;
    }

    .overlay .status-label {
        color: #fff;
        font-size: 1.5em;
        font-weight: bold;
    }

   
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const carousel = document.querySelector('.carousel');
        const nextButton = document.getElementById('next');
        const prevButton = document.getElementById('prev');

        nextButton.addEventListener('click', function () {
            carousel.scrollBy({ left: 300, behavior: 'smooth' });
        });

        prevButton.addEventListener('click', function () {
            carousel.scrollBy({ left: -300, behavior: 'smooth' });
        });
    });
</script>
