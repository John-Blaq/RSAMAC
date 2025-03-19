<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>South African Muslim Council</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <style>
    .fade-in {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }

    .fade-in.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .hidden {
        display: none;
    }

    /* Ensure the images are behind the text and overlay */
    .swiper-slide img {
        z-index: 1;
    }

    /* Ensure the overlay and text are on top */
    .overlay {
        z-index: 2;
    }

    .text-content {
        z-index: 3;
    }
</style>

</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <header class="bg-white shadow-md fixed w-full top-0 z-50">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div>
                <a href="/" class="text-2xl font-bold text-gray-800">South African Muslim Council</a>
            </div>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="#about" class="text-gray-600 hover:text-gray-800">About Us</a></li>
                    <li><a href="#news" class="text-gray-600 hover:text-gray-800">News & Events</a></li>
                    <li><a href="#community" class="text-gray-600 hover:text-gray-800">Community</a></li>
                    <li><a href="#resources" class="text-gray-600 hover:text-gray-800">Resources</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <section class="relative h-screen overflow-hidden">
        <div class="swiper-container h-full bg-black">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('mosque1.jpg') }}" alt="Mosque 1" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('mosque2.jpg') }}" alt="Mosque 2" class="w-full h-full object-cover">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('mosque3.jpg') }}" alt="Mosque 3" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
        <div class="bg-blue-500 bg-opacity-100"></div>
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white text-content">
            <h1 class="text-5xl md:text-7xl font-bold">South African Muslim Council</h1>
            <p class="mt-4 text-lg md:text-2xl">Promoting unity, faith, and community service</p>
            <a href="#about" class="mt-6 bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg text-lg">Learn More</a>
        </div>
    </section>

 
    <section id="about" class="py-16 bg-white text-center mt-16 fade-in">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-4xl font-semibold text-gray-800">About Us</h2>
            <p class="mt-4 text-gray-600">The South African Muslim Council is dedicated to promoting Islamic values, fostering community engagement, and supporting educational initiatives.</p>
            <p class="mt-4 text-gray-600 hidden more-info">We work towards uniting Muslims across South Africa, organizing charity programs, and enhancing interfaith dialogues. Our goal is to create a prosperous and harmonious society.</p>
            <button onclick="toggleInfo()" class="mt-6 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg text-lg">View More</button>
        </div>
    </section>


    <section id="news" class="py-16 bg-gray-100 text-center fade-in">
        <h2 class="text-4xl font-semibold text-gray-800">News & Events</h2>
        <div class="mt-6 flex justify-center gap-6 flex-wrap">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden w-80">
                <img src="https://source.unsplash.com/800x600/?islamic-event" alt="Event" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold">Annual Islamic Conference</h3>
                    <p class="mt-2 text-gray-600">Join us for insightful discussions on Islamic teachings and community development.</p>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden w-80">
                <img src="https://source.unsplash.com/800x600/?charity" alt="Charity Drive" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold">Charity Drive</h3>
                    <p class="mt-2 text-gray-600">Support those in need by contributing to our Ramadan charity campaign.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-6 bg-gray-900 text-white text-center">
        <p>&copy; {{ date('Y') }} South African Muslim Council | All Rights Reserved</p>
    </footer>

    <!-- JavaScript for Animations and Swiper -->
    <script>
        // SwiperJS Initialization
        const swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            effect: 'fade',
        });

        // Scroll Animation
        function revealOnScroll() {
            const elements = document.querySelectorAll('.fade-in');
            elements.forEach(el => {
                if (el.getBoundingClientRect().top < window.innerHeight - 100) {
                    el.classList.add('visible');
                }
            });
        }
        window.addEventListener('scroll', revealOnScroll);
        revealOnScroll();

        // Toggle More Info in About Section
        function toggleInfo() {
            document.querySelector('.more-info').classList.toggle('hidden');
        }
    </script>
</body>
</html>