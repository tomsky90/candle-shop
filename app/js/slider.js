document.addEventListener("DOMContentLoaded", function () {
  const slidesContainer = document.querySelector(".portfolio__slides");
  const slides = document.querySelectorAll(".portfolio__slide");
  const prevButton = document.querySelector(".portfolio__prev");
  const nextButton = document.querySelector(".portfolio__next");

  let currentIndex = 0;
  const totalSlides = slides.length;
  let autoSlideInterval;

  function updateSlidePosition() {
    slidesContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateSlidePosition();
    resetAutoSlide();
  }

  function prevSlide() {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    updateSlidePosition();
    resetAutoSlide();
  }

  function resetAutoSlide() {
    clearInterval(autoSlideInterval);
    autoSlideInterval = setInterval(nextSlide, 3000); // Restart auto-slide
  }

  nextButton.addEventListener("click", nextSlide);
  prevButton.addEventListener("click", prevSlide);

  // Start Auto Slide
  autoSlideInterval = setInterval(nextSlide, 3000);
});
