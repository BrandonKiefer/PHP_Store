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

    /*Ancient vase --No Justice */
    const justiceContainer = document.querySelector('.justice-container');
    const justiceImages = justiceContainer.querySelectorAll('.gallery-image');
    const leftArrow3 = justiceContainer.querySelector('.left-arrow');
    const rightArrow3 = justiceContainer.querySelector('.right-arrow');

    let currentJusticeImageIndex = 0;

    function updateJusticeGallery(index) {
        justiceImages.forEach((item, i) => {
            item.style.display = i === index ? 'block' : 'none';
        });
    }

    function toggleJusticeImage(direction) {
        currentJusticeImageIndex =
            direction === 'left'
                ? (currentJusticeImageIndex - 1 + justiceImages.length) % justiceImages.length
                : (currentJusticeImageIndex + 1) % justiceImages.length;
        updateJusticeGallery(currentJusticeImageIndex);
    }

    leftArrow3.addEventListener('click', () => toggleJusticeImage('left'));
    rightArrow3.addEventListener('click', () => toggleJusticeImage('right'));

    // Initial display
    updateJusticeGallery(currentJusticeImageIndex);
    
});
