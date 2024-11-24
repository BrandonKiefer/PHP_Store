document.addEventListener('DOMContentLoaded', () => {
/*Candle Lantern */

    const candleLanternContainer = document.querySelector('.candle-lantern-container');
    const candleLanternImages = candleLanternContainer.querySelectorAll('.gallery-image');
    const leftArrow = candleLanternContainer.querySelector('.left-arrow');
    const rightArrow = candleLanternContainer.querySelector('.right-arrow');

    let currentCandleImageIndex = 0;

    function updateCandleGallery(index) {
        candleLanternImages.forEach((item, i) => {
            item.style.display = i === index ? 'block' : 'none';
        });
    }

    function toggleCandleImage(direction) {
        currentCandleImageIndex =
            direction === 'left'
                ? (currentCandleImageIndex - 1 + candleLanternImages.length) % candleLanternImages.length
                : (currentCandleImageIndex + 1) % candleLanternImages.length;
        updateCandleGallery(currentCandleImageIndex);
    }

    leftArrow.addEventListener('click', () => toggleCandleImage('left'));
    rightArrow.addEventListener('click', () => toggleCandleImage('right'));

    // Initial display
    updateCandleGallery(currentCandleImageIndex);

    /*Sake bottle*/
    const sakeBottleContainer = document.querySelector('.sake-bottle-container');
    const sakeBottleImages = sakeBottleContainer.querySelectorAll('.gallery-image');
    const leftArrow2 = sakeBottleContainer.querySelector('.left-arrow');
    const rightArrow2 = sakeBottleContainer.querySelector('.right-arrow');

    let currentSakeImageIndex = 0;

    function updateSakeGallery(index) {
        sakeBottleImages.forEach((item, i) => {
            item.style.display = i === index ? 'block' : 'none';
        });
    }

    function toggleSakeImage(direction) {
        currentSakeImageIndex =
            direction === 'left'
                ? (currentSakeImageIndex - 1 + sakeBottleImages.length) % sakeBottleImages.length
                : (currentSakeImageIndex + 1) % sakeBottleImages.length;
        updateSakeGallery(currentSakeImageIndex);
    }

    leftArrow2.addEventListener('click', () => toggleSakeImage('left'));
    rightArrow2.addEventListener('click', () => toggleSakeImage('right'));

    // Initial display
    updateSakeGallery(currentSakeImageIndex);
    
});
