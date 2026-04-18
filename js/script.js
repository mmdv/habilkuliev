document.addEventListener('DOMContentLoaded', () => {
    // Initialize AOS (Animate on Scroll)
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });

    const container = document.getElementById('ticker-container');
    const content = document.getElementById('ticker-content');

    // Clone content for infinite loop
    const clone = content.cloneNode(true);
    container.appendChild(clone);

    // Add gap between original and clone sets
    content.style.paddingRight = '3rem';
    clone.style.paddingRight = '3rem';

    // Apply the animation class
    content.classList.add('animate-marquee');
    clone.classList.add('animate-marquee');

    // Optional: Pause on hover
    container.addEventListener('mouseenter', () => {
        content.style.animationPlayState = 'paused';
        clone.style.animationPlayState = 'paused';
    });

    container.addEventListener('mouseleave', () => {
        content.style.animationPlayState = 'running';
        clone.style.animationPlayState = 'running';
    });

    const grid = document.querySelector('#portfolio-grid');
    const filters = document.querySelectorAll('.filter-btn');
    const loadMoreBtn = document.getElementById('load-more-btn');

    let currentFilter = '*';
    let isShowingAll = false;

    // Helper to generate the correct Isotope filter string
    function getFilterString() {
        let filterStr = currentFilter;
        // If we are not showing all, we only want to show the first 12 items of the selected category
        // Isotope's filter function can take a function for complex logic
        if (!isShowingAll) {
            return function(itemElem) {
                // Check if the item matches the current category filter
                const matchesCategory = currentFilter === '*' || itemElem.classList.contains(currentFilter.substring(1));
                if (!matchesCategory) return false;

                // For items that match the category, we only show the first 12
                // We can't easily use index here because Isotope doesn't provide it in the filter function
                // as a global filtered index. 
                // However, we can pre-calculate which items should be shown.
                return !itemElem.classList.contains('over-limit-dynamic');
            };
        }
        return filterStr;
    }

    function applyDynamicLimit() {
        // Reset dynamic limit class on all items
        const allItems = grid.querySelectorAll('.portfolio-item');
        allItems.forEach(item => item.classList.remove('over-limit-dynamic'));

        if (!isShowingAll) {
            // Find all items that match the current category
            const selector = currentFilter === '*' ? '.portfolio-item' : `.portfolio-item${currentFilter}`;
            const matchingItems = grid.querySelectorAll(selector);
            
            // Mark items beyond the 12th as over-limit-dynamic
            matchingItems.forEach((item, index) => {
                if (index >= 12) {
                    item.classList.add('over-limit-dynamic');
                }
            });
        }
    }

    // Initialize Isotope after images are loaded
    imagesLoaded(grid, function() {
        applyDynamicLimit();
        window.iso = new Isotope(grid, {
            itemSelector: '.portfolio-item',
            layoutMode: 'fitRows',
            filter: getFilterString(),
            transitionDuration: '0.6s'
        });
    });

    // Handle Filter Clicks
    filters.forEach(button => {
        button.addEventListener('click', function() {
            // Update active styling
            filters.forEach(btn => {
                btn.classList.remove('bg-white', 'text-black', 'active');
                btn.classList.add('text-gray-300');
            });
            this.classList.remove('text-gray-300');
            this.classList.add('bg-white', 'text-black', 'active');

            // Set filter and apply
            currentFilter = this.getAttribute('data-filter');
            
            // Reset "Show All" state when switching filters
            isShowingAll = false;
            
            updateGallery();
        });
    });

    function updateGallery() {
        if (!window.iso) return;

        applyDynamicLimit();

        // 1. First, we need to know how many items MATCH the current category filter
        const selector = currentFilter === '*' ? '.portfolio-item' : `.portfolio-item${currentFilter}`;
        const allMatchingItems = grid.querySelectorAll(selector);
        const totalMatching = allMatchingItems.length;

        // 2. Arrange with the basic filter to see what we have
        window.iso.arrange({ filter: getFilterString() });

        // 3. Update Load More button visibility
        const container = document.getElementById('load-more-container');
        if (loadMoreBtn) {
            if (totalMatching > 12 && !isShowingAll) {
                if (container) container.style.display = 'flex';
                loadMoreBtn.style.display = 'block';
            } else {
                if (container) container.style.display = 'none';
                loadMoreBtn.style.display = 'none';
            }
        }
    }

    // Handle Load More
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', function() {
            isShowingAll = true; // Lift the restriction
            updateGallery();
        });
    }
});