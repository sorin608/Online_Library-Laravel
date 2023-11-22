<section id="explore">
    <h2>Explore Our Collection</h2>
    <p>Discover a wide range of materials to enhance your learning experience.</p>

    <div class="carousel-container">
        <button class="carousel-arrow" id="prev">&lt;</button>
        <div class="carousel">
            <img src="/images/1163390-1.jpg" alt="Book 1">
            <img src="/images/10895315-1.jpg" alt="Book 2">
            <img src="/images/28155022-1.jpg" alt="Book 3">
            <!-- Add more book images as needed -->
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
        width: 100%;
        height: auto;
        scroll-snap-align: start;
    }

    .carousel-arrow {
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
