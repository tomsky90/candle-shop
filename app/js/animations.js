const counters = document.querySelectorAll(".counter");
const options = {
  threshold: 0.5,
};

const animateCounter = (counter) => {
  const target = +counter.getAttribute("data-target"); // Get the target number from data attribute
  let current = 0; // Starting value

  const increment = target / 100; // Adjust the speed by dividing by a larger number

  const updateCounter = () => {
    current += increment; // Increment value
    if (current >= target) {
      counter.textContent = target; // Set to the target number
      return; // Stop the animation when target is reached
    }
    counter.textContent = Math.floor(current); // Update the current count
    requestAnimationFrame(updateCounter); // Request next frame for smooth animation
  };

  updateCounter();
};

const counterObserver = new IntersectionObserver(function (
  entries,
  counterObserver
) {
  entries.forEach((entry) => {
    if (!entry.isIntersecting) {
      return;
    } else {
      entry.target.classList.add("show-up");
      animateCounter(entry.target); // Start the counter animation
      counterObserver.unobserve(entry.target); // Stop observing once the animation is triggered
    }
  });
},
options);

counters.forEach((counter) => {
  counterObserver.observe(counter); // Observe each counter element
});
