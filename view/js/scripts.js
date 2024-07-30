document.addEventListener("DOMContentLoaded", () => {
  const reviewCards = document.querySelectorAll(".review-card");
  const reviewsContainer = document.querySelector(".reviews-container");
  const prevButton = document.createElement("button");
  const nextButton = document.createElement("button");

  prevButton.textContent = "Previous";
  nextButton.textContent = "Next";
  prevButton.classList.add("nav-button", "prev-button");
  nextButton.classList.add("nav-button", "next-button");

  reviewsContainer.parentElement.insertBefore(prevButton, reviewsContainer);
  reviewsContainer.parentElement.appendChild(nextButton);

  let currentIndex = 0;

  function updateSlider() {
    reviewsContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
  }

  prevButton.addEventListener("click", () => {
    if (currentIndex > 0) {
      currentIndex--;
      updateSlider();
    }
  });

  nextButton.addEventListener("click", () => {
    if (currentIndex < reviewCards.length - 1) {
      currentIndex++;
      updateSlider();
    }
  });

  window.addEventListener("resize", updateSlider);
  updateSlider();
});
