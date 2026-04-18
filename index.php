<?php
include 'portfolio.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habil Kuliev - Creative Producer</title>
    <meta name="description" content="Portfolio of Habil Kuliev, Creative Producer. Exploring creative boundaries.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="/css/style.css">

    <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Manrope', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans antialiased">

<main class="bg-white text-black font-sans selection:bg-black selection:text-white">

        <div class="container mx-auto ">
            <h1 class="leading-[0.9] tracking-tight font-bold
                 text-[14vw] lg:text-[210px]">
                To Infinity &<br /> Beyond
            </h1>
        </div>

        <div class="container mx-auto mt-32">
            <div class="flex flex-col md:flex-row md:justify-between gap-8">
                <div>
                    <h2 class="font-bold text-xl mb-1">Let's Talk</h2>
                    <a href="mailto:info@habilkuliev.com" class="text-lg hover:underline decoration-1 underline-offset-4">
                        info@habilkuliev.com
                    </a>
                </div>

                <div class="text-lg md:text-xl leading-snug font-medium md:text-right md:max-w-[50%]">
                    <p>
                        Experienced creative in project management and major events delivery.
                        Production and Communication specialist skilled in Concepts Creation,
                        Event Management, Sport Events, Public Speaking, Producing,
                        Operational Planning and Delivery.
                    </p>
                </div>
            </div>
        </div>

        <div class="container mx-auto mt-32">
            <div
                data-aos="fade-up"
                class="bg-[#DD2F20] rounded-[40px] p-8 md:p-16 min-h-[640px] flex flex-col justify-between overflow-hidden"
            >
                <p class="text-black text-4xl/relaxed md:text-6xl/relaxed lg:text-[64px]/[1.4] font-bold tracking-tight">
                    Simply put, short-term or long-term, I bring the expertise and team support to shape your vision, manage the process, and launch your project successfully
                </p>

                <div class="relative mt-auto pt-12 pb-4">
                    <div id="ticker-container" class="flex whitespace-nowrap overflow-visible">
                        <div id="ticker-content" class="flex shrink-0 items-center gap-12 text-3xl md:text-5xl font-bold text-[#6D110F] pb-2">
                            <span>Show Caller</span>
                            <span>Advisor</span>
                            <span>Management</span>
                            <span>Coordination</span>
                            <span>Producer</span>
                            <span>Medal Ceremonies</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <section class="container mx-auto px-6 py-12">

        <div class="flex justify-center mb-16">
            <div class="bg-black rounded-full p-1.5 inline-flex flex-wrap justify-center gap-1" id="portfolio-filters">
                <button data-filter="*" class="filter-btn active bg-white text-black rounded-full px-6 py-2.5 text-sm font-medium transition-colors">All</button>
                <button data-filter=".Manager" class="filter-btn text-gray-300 hover:text-white rounded-full px-6 py-2.5 text-sm font-medium transition-colors">Manager</button>
                <button data-filter=".Coordinator" class="filter-btn text-gray-300 hover:text-white rounded-full px-6 py-2.5 text-sm font-medium transition-colors">Coordinator</button>
                <button data-filter=".Show-caller" class="filter-btn text-gray-300 hover:text-white rounded-full px-6 py-2.5 text-sm font-medium transition-colors">Show caller</button>
                <button data-filter=".Producer" class="filter-btn text-gray-300 hover:text-white rounded-full px-6 py-2.5 text-sm font-medium transition-colors">Producer</button>
            </div>
        </div>

        <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
            <div class="max-w-xl">
                <h2 class="text-[40px] md:text-[50px] font-bold leading-tight tracking-tight mb-4 text-black">Projects</h2>
                <p class="text-black/80 text-lg leading-relaxed font-medium">
                    As a seasoned creator of contemporary, user-friendly web designs and digital solutions, I aim to assist you in constructing the brand of your fantasies.
                </p>
            </div>
            <a href="#" class="flex items-center gap-2 text-sm font-semibold uppercase tracking-wider border-b border-black pb-1 hover:opacity-60 transition-opacity whitespace-nowrap shrink-0">
                More of our work
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>

        <div class="flex flex-wrap -mx-4" id="portfolio-grid">
            <?php foreach ($works as $index => $work): ?>
                <?php
                // Format category for CSS class (remove spaces)
                $categoryClass = str_replace(' ', '-', $work['category']);
                ?>

                <div class="portfolio-item <?php echo $categoryClass; ?> w-full md:w-1/2 lg:w-1/3 px-4 mb-10">
                    <a href="<?php echo htmlspecialchars($work['link']); ?>" target="_blank" class="block group">

                        <div class="relative overflow-hidden rounded-[20px] mb-5 bg-gray-50 aspect-[4/3]">
                            <img src="thumb/<?php echo htmlspecialchars($work['image']); ?>"
                                 alt="<?php echo htmlspecialchars($work['title']); ?>"
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                            <div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                                <div class="bg-black text-white text-xs font-bold uppercase tracking-wide px-4 py-3 flex items-center gap-2 rounded-sm transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                    </svg>
                                    View Work
                                </div>
                            </div>
                        </div>

                        <h3 class="font-bold text-xl text-black mb-1"><?php echo htmlspecialchars($work['title']); ?></h3>
                        <p class="text-gray-500 font-medium"><?php echo htmlspecialchars($work['position']); ?></p>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <?php if (count($works) > 0): ?>
            <div id="load-more-container" class="mt-8 flex justify-center w-full" style="display: none;">
                <button id="load-more-btn" class="bg-gray-100 hover:bg-gray-200 text-black px-8 py-3 rounded-full text-sm font-bold uppercase tracking-wider transition-colors">
                    Load More
                </button>
            </div>
            <script>
                // Initial check for button visibility
                (function() {
                    const totalItems = <?php echo count($works); ?>;
                    if (totalItems > 12) {
                        document.getElementById('load-more-container').style.display = 'flex';
                    }
                })();
            </script>
        <?php endif; ?>

    </section>

    <section class="container mx-auto px-6 mt-32 flex flex-col">
        <div class="flex flex-col items-center text-center">
            <h2 class="font-bold tracking-tighter leading-none mb-14
                   text-[60px] md:text-[100px] lg:text-[140px]">
                Let's talk!
            </h2>

            <a href="mailto:info@habilkuliev.com"
                   class="group bg-black text-white px-10 py-6 rounded-full flex items-center gap-3 transition-transform hover:scale-105 active:scale-95">
                    <span class="text-lg md:text-xl font-medium">info@habilkuliev.com</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="transition-transform group-hover:-translate-y-1 group-hover:translate-x-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                    </svg>
                </a>
        </div>

        <div class="mt-24 pb-12 flex flex-col md:flex-row justify-between items-center gap-6 border-t border-transparent">
            <p class="text-sm md:text-base text-gray-700">
                    © Copyright 2025. All rights reserved
                </p>

                <div class="flex gap-8 text-sm md:text-base font-medium">
                    <a href="#" class="hover:opacity-60 transition-opacity">Facebook</a>
                    <a href="#" class="hover:opacity-60 transition-opacity">Instagram</a>
                    <a href="#" class="hover:opacity-60 transition-opacity">LinkedIn</a>
                </div>
            </div>
        </section>
</main>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="/js/script.js"></script>
</body>
</html>