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
            <!-- Logo -->
            <div class="flex items-center">
                <img src="{{ asset('logo.jpg') }}" alt="Logo" class="h-15 w-15 mr-4"> <!-- Small logo image -->
                <a href="/" class="text-2xl font-bold text-gray-800">SAMC</a>
            </div>

            <!-- Navigation -->
            <nav class="flex items-center">
    <ul class="flex space-x-4 relative">
        <li class="group relative">
            <a href="#about" class="text-gray-600 hover:text-gray-800">About Us</a>
            <!-- Dropdown Menu -->
            <ul class="absolute left-0 mt-2 w-40 bg-white shadow-lg rounded-lg opacity-0 group-hover:opacity-100 group-hover:translate-y-0 transform translate-y-2 transition-all duration-300">
                <li><a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100">Our Mission</a></li>
                <li><a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100">Our Team</a></li>
                <li><a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100">Contact Us</a></li>
            </ul>
        </li>
        <li class="group relative">
            <a href="#news" class="text-gray-600 hover:text-gray-800">News & Events</a>
            <!-- Dropdown Menu -->
            <ul class="absolute left-0 mt-2 w-40 bg-white shadow-lg rounded-lg opacity-0 group-hover:opacity-100 group-hover:translate-y-0 transform translate-y-2 transition-all duration-300">
                <li><a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100">Latest News</a></li>
                <li><a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100">Upcoming Events</a></li>
                <li><a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100">Past Events</a></li>
            </ul>
        </li>
        <li class="group relative">
            <a href="#community" class="text-gray-600 hover:text-gray-800">Community</a>
            <!-- Dropdown Menu -->
            <ul class="absolute left-0 mt-2 w-40 bg-white shadow-lg rounded-lg opacity-0 group-hover:opacity-100 group-hover:translate-y-0 transform translate-y-2 transition-all duration-300">
                <li><a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100">Programs</a></li>
                <li><a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100">Volunteer</a></li>
                <li><a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100">Donate</a></li>
            </ul>
        </li>
        <li class="group relative">
            <a href="#resources" class="text-gray-600 hover:text-gray-800">Resources</a>
            <!-- Dropdown Menu -->
            <ul class="absolute left-0 mt-2 w-40 bg-white shadow-lg rounded-lg opacity-0 group-hover:opacity-100 group-hover:translate-y-0 transform translate-y-2 transition-all duration-300">
                <li><a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100">Articles</a></li>
                <li><a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100">Downloads</a></li>
                <li><a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100">FAQs</a></li>
            </ul>
        </li>
    </ul>
    <div class="flex space-x-4 ml-6">
        <a href="/signup" class="text-white bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg font-medium">Login</a>
    </div>
</nav>
        </div>
    </header>


    <section class="relative h-screen overflow-hidden">
        <div class="swiper-container h-full">
            <div class="swiper-wrapper">
                <div class="swiper-slide relative">
                    <img src="{{ asset('mosque1.jpg') }}" alt="Mosque 1" class="w-full h-full object-cover z-0">
                    <div class="absolute inset-0 bg-black bg-opacity-40 z-10"></div> <!-- Overlay -->
                </div>
                <div class="swiper-slide relative">
                    <img src="{{ asset('mosque2.jpg') }}" alt="Mosque 2" class="w-full h-full object-cover z-0">
                    <div class="absolute inset-0 bg-black bg-opacity-40 z-10"></div> <!-- Overlay -->
                </div>
                <div class="swiper-slide relative">
                    <img src="{{ asset('mosque3.jpg') }}" alt="Mosque 3" class="w-full h-full object-cover z-0">
                    <div class="absolute inset-0 bg-black bg-opacity-40 z-10"></div> <!-- Overlay -->
                </div>
            </div>
        </div>
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white text-content z-20">
            <h1 class="text-5xl md:text-7xl font-bold">South African Muslim Council</h1>
            <p class="mt-4 text-lg md:text-2xl">Promoting unity, faith, and community service</p>
            <a href="#about" class="mt-6 bg-blue-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg text-lg">Learn More</a>
        </div>
    </section>

 
    <section id="about" class="py-16 bg-white mt-16 fade-in">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center md:items-start">
            <!-- Left Content -->
            <div class="md:w-1/2 text-left">
                <h2 class="text-4xl font-semibold text-gray-800">About Us</h2>
                <p class="mt-4 text-gray-600">The South African Muslim Council is dedicated to promoting Islamic values, fostering community engagement, and supporting educational initiatives.</p>
                <p class="mt-4 text-gray-600">We work towards uniting Muslims across South Africa, organizing charity programs, and enhancing interfaith dialogues. Our goal is to create a prosperous and harmonious society.</p>
                <button onclick="toggleInfo()" class="mt-6 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg text-lg">View More</button>
            </div>

            <!-- Right Card -->
            <div class="md:w-1/2 mt-8 md:mt-0 md:ml-8">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('mosque1.jpg') }}" alt="About Us Image" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">Our Mission</h3>
                        <p class="mt-2 text-gray-600">To foster unity, promote Islamic values, and serve the community through education, charity, and interfaith dialogue.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


    <section id="news" class="py-16 bg-gray-100 text-center fade-in">
    <h2 class="text-4xl font-semibold text-gray-800">News & Events</h2>
    <div class="mt-6 overflow-hidden relative">
        <div class="slider flex justify-center space-x-6">
            <!-- Card 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden w-80">
                <img src="{{ asset('mosque3.jpg') }}" alt="Event" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Annual Islamic Conference</h3>
                    <p class="mt-2 text-gray-600">Join us for insightful discussions on Islamic teachings and community development.</p>
                    <a href="/news/1" class="mt-4 inline-block text-blue-600 hover:text-blue-800 font-medium transition duration-300">
                        Read More <span class="inline-block transform transition-transform duration-300 hover:translate-x-1">→</span>
                    </a>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden w-80">
                <img src="{{ asset('mosque1.jpg') }}" alt="Charity Drive" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Charity Drive</h3>
                    <p class="mt-2 text-gray-600">Support those in need by contributing to our Ramadan charity campaign.</p>
                    <a href="/news/2" class="mt-4 inline-block text-blue-600 hover:text-blue-800 font-medium transition duration-300">
                        Read More <span class="inline-block transform transition-transform duration-300 hover:translate-x-1">→</span>
                    </a>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden w-80">
                <img src="{{ asset('mosque2.jpg') }}" alt="Community Event" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Community Event</h3>
                    <p class="mt-2 text-gray-600">Join us for a community gathering to strengthen our bonds and share ideas.</p>
                    <a href="/news/3" class="mt-4 inline-block text-blue-600 hover:text-blue-800 font-medium transition duration-300">
                        Read More <span class="inline-block transform transition-transform duration-300 hover:translate-x-1">→</span>
                    </a>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden w-80">
                <img src="{{ asset('mosque1.jpg') }}" alt="Education Program" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Education Program</h3>
                    <p class="mt-2 text-gray-600">Learn about our latest educational initiatives and how you can participate.</p>
                    <a href="/news/4" class="mt-4 inline-block text-blue-600 hover:text-blue-800 font-medium transition duration-300">
                        Read More <span class="inline-block transform transition-transform duration-300 hover:translate-x-1">→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

    <section id="community" class="py-16 bg-gray-100 mt-16 fade-in">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center md:items-start">
        <!-- Left Card: Payment Details -->
        <div class="md:w-1/2 mt-8 md:mt-0 md:mr-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Payment Details</h3>
                    <p class="mt-2 text-gray-600">Select your preferred payment method to contribute to our community initiatives.</p>
                    <form class="mt-4">
                        <label for="payment-method" class="block text-gray-700 font-medium">Choose Payment Method:</label>
                        <select id="payment-method" class="w-full mt-2 p-2 border border-gray-300 rounded-lg">
                            <option value="bank">Bank Transfer</option>
                            <option value="mobile">Mobile Money</option>
                            <option value="paypal">PayPal</option>
                        </select>
                        <div class="mt-4">
                            <label for="amount" class="block text-gray-700 font-medium">Enter Amount:</label>
                            <input type="number" id="amount" class="w-full mt-2 p-2 border border-gray-300 rounded-lg" placeholder="Enter amount">
                        </div>
                        <button type="submit" class="mt-6 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg text-lg">Donate Now</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Right Content: Why We Need Your Donation -->
        <div class="md:w-1/2 text-left">
            <h2 class="text-4xl font-semibold text-gray-800">Why We Need Your Donation</h2>
            <p class="mt-4 text-gray-600">Your generous contributions help us fund vital community programs, including:</p>
            <ul class="mt-4 list-disc list-inside text-gray-600">
                <li>Providing food and shelter to those in need.</li>
                <li>Supporting educational initiatives for underprivileged children.</li>
                <li>Organizing interfaith dialogues and community events.</li>
                <li>Maintaining and improving local mosques and community centers.</li>
            </ul>
            <p class="mt-4 text-gray-600">Together, we can make a difference and build a stronger, more united community.</p>
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