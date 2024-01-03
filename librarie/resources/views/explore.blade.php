<section id="explore">
    <h2>Explore Our Collection</h2>
    <p>Discover a wide range of materials to enhance your learning experience.</p>

    <div class="carousel-container">
        <button class="carousel-arrow" id="prev">&lt;</button>
        <div class="carousel">
            <div class="book">
                <img src="/images/1163390-1.jpg" alt="Book 1">
                <form method="POST" action="{{ url('/rent-book/1') }}">
                @csrf
               <button type="submit" class="rent-button">Rent</button>
                </form>
            </div>   
            <div class="book">
                <img src="/images/10895315-1.jpg" alt="Book 2">
                <form method="POST" action="{{ url('/rent-book/2') }}">
                @csrf
               <button type="submit" class="rent-button">Rent</button>
                </form>
            </div>
            <div class="book">
                <img src="/images/28155022-1.jpg" alt="Book 3">
                <form method="POST" action="{{ url('/rent-book/3') }}">
                @csrf
               <button type="submit" class="rent-button">Rent</button>
                </form>
            </div>
            <div class="book">
                <img src="/images/35646765-1.jpg" alt="Book 4">
                <button class="rent-button">Rent</button>
            </div>
            <div class="book">
                <img src="/images/35646807-1.jpg" alt="Book 5">
                <button class="rent-button">Rent</button>
            </div>
            <div class="book">
                <img src="/images/35646884-1.jpg" alt="Book 6">
                <button class="rent-button">Rent</button>
            </div>
            <div class="book">
                <img src="/images/35646898-1.jpg" alt="Book 7">
                <button class="rent-button">Rent</button>
            </div>
            <div class="book">
                <img src="/images/35646933-1.jpg" alt="Book 8">
                <button class="rent-button">Rent</button>
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
    }

    .rent-button {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 10px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 5px;
    opacity: 0;
    transition: opacity 0.3s ease;
    }

    .book:hover .rent-button {
    opacity: 1;
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
