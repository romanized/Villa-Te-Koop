  const images = document.querySelectorAll(".slideshow-container img");
  let activeIndex = 0;

  function changeImage() {
    images[activeIndex].classList.remove("active");
    activeIndex = (activeIndex + 1) % images.length;
    images[activeIndex].classList.add("active");
  }

  setInterval(changeImage, 3000); // Change the image every 3 seconds
