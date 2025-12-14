// Premium Template Slider Functionality
document.addEventListener('DOMContentLoaded', function() {
  
  // Slider elements
  const sliderTrack = document.querySelector('.slider-track');
  const slides = document.querySelectorAll('.slider-card');
  const dots = document.querySelectorAll('.slider-dot');
  const prevButton = document.querySelector('.slider-arrow-left');
  const nextButton = document.querySelector('.slider-arrow-right');
  
  // Exit if no slider found
  if (!sliderTrack || !slides.length || !prevButton || !nextButton) {
    console.warn('Slider elements not found');
    return;
  }
  
  // Slider state
  let currentIndex = 0;
  const totalSlides = slides.length;
  const cardWidth = 450; // Match the CSS width exactly
  
  // Update slider position
  function updateSlider() {
    const moveAmount = currentIndex * cardWidth;
    
    console.log('Current index:', currentIndex, '| Moving:', moveAmount + 'px');
    
    sliderTrack.style.transform = `translateX(-${moveAmount}px)`;
    
    updateDots();
    updateButtons();
  }
  
  // Update active dot
  function updateDots() {
    if (!dots.length) return;
    
    dots.forEach((dot, index) => {
      if (index === currentIndex) {
        dot.classList.add('active');
      } else {
        dot.classList.remove('active');
      }
    });
  }
  
  // Update button disabled states
  function updateButtons() {
    // Disable prev button at start
    if (currentIndex === 0) {
      prevButton.style.opacity = '0.5';
      prevButton.style.cursor = 'not-allowed';
      prevButton.disabled = true;
    } else {
      prevButton.style.opacity = '1';
      prevButton.style.cursor = 'pointer';
      prevButton.disabled = false;
    }
    
    // Disable next button at end
    if (currentIndex >= totalSlides - 1) {
      nextButton.style.opacity = '0.5';
      nextButton.style.cursor = 'not-allowed';
      nextButton.disabled = true;
    } else {
      nextButton.style.opacity = '1';
      nextButton.style.cursor = 'pointer';
      nextButton.disabled = false;
    }
  }
  
  // Go to next slide
  function nextSlide() {
    if (currentIndex < totalSlides - 1) {
      currentIndex++;
      updateSlider();
    }
  }
  
  // Go to previous slide
  function prevSlide() {
    if (currentIndex > 0) {
      currentIndex--;
      updateSlider();
    }
  }
  
  // Go to specific slide
  function goToSlide(index) {
    currentIndex = Math.min(Math.max(0, index), totalSlides - 1);
    updateSlider();
  }
  
  // Event listeners for arrows
  prevButton.addEventListener('click', function(e) {
    e.preventDefault();
    prevSlide();
  });
  
  nextButton.addEventListener('click', function(e) {
    e.preventDefault();
    nextSlide();
  });
  
  // Event listeners for dots
  dots.forEach((dot, index) => {
    dot.addEventListener('click', function() {
      goToSlide(index);
    });
  });
  
  // Keyboard navigation
  document.addEventListener('keydown', function(e) {
    if (e.key === 'ArrowLeft') {
      e.preventDefault();
      prevSlide();
    } else if (e.key === 'ArrowRight') {
      e.preventDefault();
      nextSlide();
    }
  });
  
  // Touch/Swipe support
  let touchStartX = 0;
  let touchEndX = 0;
  
  sliderTrack.addEventListener('touchstart', function(e) {
    touchStartX = e.changedTouches[0].screenX;
  }, { passive: true });
  
  sliderTrack.addEventListener('touchend', function(e) {
    touchEndX = e.changedTouches[0].screenX;
    handleSwipe();
  }, { passive: true });
  
  function handleSwipe() {
    const swipeThreshold = 50;
    const swipeDistance = touchStartX - touchEndX;
    
    if (Math.abs(swipeDistance) > swipeThreshold) {
      if (swipeDistance > 0) {
        nextSlide();
      } else {
        prevSlide();
      }
    }
  }
  
  // Initialize slider
  updateSlider();
  
  console.log('Slider initialized with', totalSlides, 'slides');
  
});