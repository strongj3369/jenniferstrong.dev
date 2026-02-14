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

  // Dynamically calculate card width
  function getCardWidth() {
    return slides[0].offsetWidth;
  }

  // Update slider position
  function updateSlider() {
    const moveAmount = currentIndex * getCardWidth();
    sliderTrack.style.transform = `translateX(-${moveAmount}px)`;
    updateDots();
    updateButtons();
  }
  
  // Update active dot
  function updateDots() {
    if (!dots.length) return;
    dots.forEach((dot, index) => {
      dot.classList.toggle('active', index === currentIndex);
    });
  }
  
  // Update button disabled states
  function updateButtons() {
    prevButton.disabled = currentIndex === 0;
    nextButton.disabled = currentIndex >= totalSlides - 1;
    prevButton.style.opacity = prevButton.disabled ? '0.5' : '1';
    nextButton.style.opacity = nextButton.disabled ? '0.5' : '1';
    prevButton.style.cursor = prevButton.disabled ? 'not-allowed' : 'pointer';
    nextButton.style.cursor = nextButton.disabled ? 'not-allowed' : 'pointer';
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
  
  // Resize listener to recalc widths
  window.addEventListener('resize', updateSlider);
  
  // Initialize slider
  updateSlider();
  console.log('Slider initialized with', totalSlides, 'slides');
  
});

/* -----------------------------------------
   GA4 EVENT TRACKING — PREMIUM, RELIABLE
------------------------------------------*/

// Track CTA clicks (any element with data-cta)
document.querySelectorAll('[data-cta]').forEach(el => {
  el.addEventListener('click', () => {
    gtag('event', 'cta_click', {
      event_category: 'engagement',
      event_label: el.textContent.trim()
    });
  });
});

// Track outbound template previews (Launch Preview buttons)
document.querySelectorAll('[data-template-preview]').forEach(el => {
  el.addEventListener('click', () => {
    gtag('event', 'outbound_click', {
      event_category: 'template',
      event_label: el.getAttribute('data-template-preview')
    });
  });
});

// Track ExtendedCode waitlist CTA
document.querySelectorAll('[data-waitlist]').forEach(el => {
  el.addEventListener('click', () => {
    gtag('event', 'waitlist_click', {
      event_category: 'CTA',
      event_label: 'ExtendedCode Waitlist'
    });
  });
});

// Track scroll depth
let scrollTracked = {};
window.addEventListener('scroll', function () {
  var scrollPercent = Math.round((window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100);
  [25, 50, 75, 90].forEach(function (threshold) {
    if (scrollPercent >= threshold && !scrollTracked[threshold]) {
      scrollTracked[threshold] = true;
      gtag('event', 'scroll_depth', {
        event_category: 'engagement',
        event_label: threshold + '%'
      });
    }
  });
});
