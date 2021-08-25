// // var slideIndex = 1;
// // showSlides(slideIndex);

// // // Next/previous controls
// // function plusSlides(n) {
// //   showSlides(slideIndex += n);
// // }

// // // Thumbnail image controls
// // function currentSlide(n) {
// //   showSlides(slideIndex = n);
// // }

// // function showSlides(n) {
// //   var i;
// //   var slides = document.getElementsByClassName("mySlides");
// //   var dots = document.getElementsByClassName("dot");
// //   if (n > slides.length) {slideIndex = 1}
// //   if (n < 1) {slideIndex = slides.length}
// //   for (i = 0; i < slides.length; i++) {
// //       slides[i].style.display = "none";
// //   }
// //   for (i = 0; i < dots.length; i++) {
// //       dots[i].className = dots[i].className.replace(" active", "");
// //   }
// //   slides[slideIndex-1].style.display = "block";
// //   dots[slideIndex-1].className += " active";
// // }

// // var slideIndex = 0;
// // showSlides();

// // function showSlides() {
// //   var i;
// //   var slides = document.getElementsByClassName("mySlides");
// //   for (i = 0; i < slides.length; i++) {
// //     slides[i].style.display = "none";
// //   }
// //   slideIndex++;
// //   if (slideIndex > slides.length) {slideIndex = 1}
// //   slides[slideIndex-1].style.display = "block";
// //   setTimeout(showSlides, 2000); // Change image every 2 seconds
// // }

// const carouselImages = document.querySelector('.carousel__images');
// const carouselButtons = document.querySelectorAll('.carousel__button');
// const numberOfImages = document.querySelectorAll('.carousel__images img').length;
// let imageIndex = 1;
// let translateX = 0;

// carouselButtons.forEach(button => {
//   button.addEventListener('click', (event) => {
//     if (event.target.id === 'previous') {
//       if (imageIndex !== 1) {
//         imageIndex--;
//         translateX += 300;
//       }
//     } else {
//       if (imageIndex !== numberOfImages) {
//         imageIndex++;
//         translateX -= 300;
//       }
//     }
    
//     carouselImages.style.transform = `translateX(${translateX}px)`;
//   });
// });