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

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="##ed233c">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="##ed233c">

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

<!-- Header -->
<header id="site-header" class="fixed top-0 inset-x-0 z-50 transition-transform duration-300 bg-[linear-gradient(to_bottom,rgba(255,255,255,0.8),transparent_50%)]">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-3 items-center py-6">
            <!-- Logo -->
            <a href="#top" class="shrink-0 justify-self-start">
                <img src="/logo.png" alt="Habil Kuliev" class="h-14 w-auto">
            </a>

            <!-- Desktop nav (centered) -->
            <nav class="hidden md:block justify-self-center">
                <div class="bg-black rounded-full p-1.5 inline-flex items-center gap-1">
                    <a href="#top" class="nav-link active bg-white text-black rounded-full px-7 py-2.5 text-base font-medium transition-colors">Home</a>
                    <a href="#about" class="nav-link text-gray-300 hover:text-white rounded-full px-7 py-2.5 text-base font-medium transition-colors">About</a>
                    <a href="#projects" class="nav-link text-gray-300 hover:text-white rounded-full px-7 py-2.5 text-base font-medium transition-colors">Projects</a>
                </div>
            </nav>

            <!-- Mobile menu button (right) -->
            <button id="menu-open" aria-label="Open menu" class="md:hidden bg-black text-white w-12 h-12 rounded-full flex items-center justify-center shrink-0 justify-self-end col-start-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
    </div>
</header>

<!-- Mobile menu overlay -->
<div id="mobile-menu" class="fixed inset-0 z-[60] hidden md:hidden items-center justify-center p-4">
    <div id="menu-backdrop" class="absolute inset-0 bg-black/40"></div>
    <div class="menu-panel relative w-[90%] h-[90%] bg-white/90 backdrop-blur-md rounded-[28px] p-6 shadow-2xl flex flex-col">
        <div class="flex items-center justify-between">
            <img src="/logo.png" alt="Habil Kuliev" class="h-12 w-auto">
            <button id="menu-close" aria-label="Close menu" class="bg-black text-white w-12 h-12 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <nav class="flex-1 flex flex-col items-center justify-center gap-2">
            <a href="#top" class="mobile-nav-link text-4xl font-bold py-4">Home</a>
            <a href="#about" class="mobile-nav-link text-4xl font-bold py-4">About</a>
            <a href="#projects" class="mobile-nav-link text-4xl font-bold py-4">Projects</a>
        </nav>
    </div>
</div>

<main id="top" class="bg-white text-black font-sans selection:bg-black selection:text-white">

        <div class="container mx-auto px-6 pt-32 md:pt-40 relative">
            <h1 class="leading-[0.9] tracking-tight font-bold
                 text-[14vw] lg:text-[210px]">
                Show must<br /> go on<sup class="relative align-baseline top-[-1.9em] text-[0.3em] leading-none font-semibold ml-[0.05em]">&copy;</sup>
            </h1>

            <a href="#about"
               class="hidden md:inline-flex absolute right-6 bottom-6 lg:bottom-10 items-center gap-3 bg-gray-100 hover:bg-gray-200 text-black px-8 py-5 rounded-full font-medium tracking-wide transition-colors">
                SCROLL DOWN
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="animate-bounce">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
                </svg>
            </a>
        </div>

        <div id="intro" class="container mx-auto px-6 mt-32">
            <div class="flex flex-col md:flex-row md:justify-between gap-8">
                <div>
                    <h2 class="font-bold text-xl mb-1">Let's Talk</h2>
                    <a href="mailto:info@habilkuliev.com" class="text-lg hover:underline decoration-1 underline-offset-4">
                        info@habilkuliev.com
                    </a>
                </div>

                <div class="text-lg md:text-xl leading-snug font-medium md:text-right md:max-w-[50%]">
                    <p>
                        Experienced Producer & Project Lead specializing in major events, ceremonies, and live productions. 
                        Expertise in creative development, sports events, operational planning, communications, and end-to-end project delivery.
                    </p>
                </div>
            </div>
        </div>

        <?php
        $aboutVideos = [
            [
                "link" => "https://www.youtube.com/watch?v=76OXUTIypCw",
                "image" => "1-minute.webp",
                "title" => "&ldquo; 1 minute&rdquo; about Energy",
                "desc" => "A quick thought on energy, creativity and the mindset behind making things happen",
                "duration" => "01:25"
            ],
            [
                "link" => "https://www.youtube.com/watch?v=6WDvAOhUXvg",
                "image" => "tedx.webp",
                "title" => "TEDx Talk",
                "desc" => "Ideas worth spreading &mdash; on stage, sharing lessons from a life in creative production",
                "duration" => ""
            ],
        ];
        ?>

        <section id="about" class="container mx-auto px-6 mt-32">
            <h2 class="text-[40px] md:text-[64px] font-bold tracking-tight mb-10 text-black">About me</h2>

            <div id="about-carousel" class="bg-white rounded-[32px] shadow-[0_20px_60px_-15px_rgba(0,0,0,0.15)] p-4 md:p-8">
                <div class="overflow-hidden rounded-[20px]">
                    <div id="about-track" class="flex transition-transform duration-500 ease-out">
                        <?php foreach ($aboutVideos as $video): ?>
                            <div class="about-slide w-full shrink-0">
                            <div class="flex flex-col md:flex-row gap-6 md:gap-12 items-center">
                                <a href="<?php echo htmlspecialchars($video['link']); ?>" target="_blank" rel="noopener"
                                   class="group relative block w-full md:w-1/2 shrink-0 overflow-hidden rounded-[20px] aspect-video bg-gray-100">
                                    <img src="about/<?php echo htmlspecialchars($video['image']); ?>"
                                         alt="<?php echo strip_tags($video['title']); ?>"
                                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                    <span class="absolute inset-0 flex items-center justify-center">
                                        <span class="bg-white/90 text-black w-16 h-16 rounded-full flex items-center justify-center transition-transform group-hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                                        </span>
                                    </span>
                                </a>

                                <div class="w-full md:w-1/2">
                                    <h3 class="text-2xl md:text-3xl font-bold text-black mb-3"><?php echo $video['title']; ?></h3>
                                    <p class="text-gray-500 text-base md:text-lg font-medium mb-8 max-w-md"><?php echo $video['desc']; ?></p>

                                    <div class="flex flex-wrap items-center gap-5">
                                        <a href="<?php echo htmlspecialchars($video['link']); ?>" target="_blank" rel="noopener"
                                           class="group bg-black text-white px-7 py-4 rounded-full inline-flex items-center gap-3 font-semibold transition-transform hover:scale-105 active:scale-95">
                                            Watch Now
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="transition-transform group-hover:translate-x-1">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                            </svg>
                                        </a>
                                        <span class="text-gray-400 font-medium border-l border-gray-200 pl-5">
                                            Youtube<?php echo $video['duration'] ? ' &nbsp;|&nbsp; ' . htmlspecialchars($video['duration']) : ''; ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="flex justify-center gap-4 mt-8">
                <button id="about-prev" aria-label="Previous" class="w-14 h-14 rounded-full bg-gray-100 hover:bg-black hover:text-white flex items-center justify-center transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                    </svg>
                </button>
                <button id="about-next" aria-label="Next" class="w-14 h-14 rounded-full bg-gray-100 hover:bg-black hover:text-white flex items-center justify-center transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </button>
            </div>
        </section>

        <div class="container mx-auto px-6 mt-32">
            <div
                data-aos="fade-up"
                class="bg-[#F26A21] rounded-[40px] p-8 md:p-16 min-h-[640px] flex flex-col justify-between overflow-hidden"
            >
                <p class="text-black text-4xl/relaxed md:text-6xl/relaxed lg:text-[64px]/[1.4] font-bold tracking-tight">
                    Simply put, short-term or long-term, I bring the expertise and team support to shape your vision, manage the process, and launch your project successfully
                </p>

                <div class="relative mt-auto pt-12 pb-4">
                    <div id="ticker-container" class="flex whitespace-nowrap overflow-visible">
                        <div id="ticker-content" class="flex shrink-0 items-center gap-12 text-3xl md:text-5xl font-bold text-[#7A3108] pb-2">
                            <span>Show Caller</span>
                            <span>Concerts</span>
                            <span>Producing</span>
                            <span>Opening & Closing Ceremonies</span>
                            <span>Concept Creation</span>
                            <span>Victory Ceremonies</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <section id="projects" class="container mx-auto px-6 py-12">

        <div class="flex md:justify-center mb-16 max-w-full overflow-x-auto no-scrollbar">
            <div class="bg-black rounded-full p-1.5 inline-flex flex-nowrap justify-start gap-1 mx-auto" id="portfolio-filters">
                <button data-filter="*" class="filter-btn active bg-white text-black rounded-full px-6 py-2.5 text-sm font-medium transition-colors shrink-0 whitespace-nowrap">All</button>
                <button data-filter=".Production" class="filter-btn text-gray-300 hover:text-white rounded-full px-6 py-2.5 text-sm font-medium transition-colors shrink-0 whitespace-nowrap">Production</button>
                <button data-filter=".Operations" class="filter-btn text-gray-300 hover:text-white rounded-full px-6 py-2.5 text-sm font-medium transition-colors shrink-0 whitespace-nowrap">Operations</button>
                <button data-filter=".Creative" class="filter-btn text-gray-300 hover:text-white rounded-full px-6 py-2.5 text-sm font-medium transition-colors shrink-0 whitespace-nowrap">Creative / Video Work</button>
            </div>
        </div>

        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12 gap-6">
            <div class="max-w-xl">
                <h2 class="text-[40px] md:text-[50px] font-bold leading-tight tracking-tight text-black">Projects</h2>
            </div>
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

    <section id="contact" class="container mx-auto px-6 mt-32 flex flex-col">
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
                    © Copyright 2026. All rights reserved
                </p>

                <div class="flex gap-8 text-sm md:text-base font-medium">
                    <a href="https://www.facebook.com/habilkuliev" target="_blank" rel="noopener" class="hover:opacity-60 transition-opacity">Facebook</a>
                    <a href="https://www.instagram.com/habilkuliev/" target="_blank" rel="noopener" class="hover:opacity-60 transition-opacity">Instagram</a>
                    <a href="https://www.linkedin.com/in/habilkuliev/" target="_blank" rel="noopener" class="hover:opacity-60 transition-opacity">LinkedIn</a>
                </div>
            </div>
        </section>
</main>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="/js/script.js"></script>
</body>
</html>