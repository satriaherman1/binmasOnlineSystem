$(document).ready(function(){
    
    $('#slick').slick({
        dots: true,
        infinite: false,
        speed: 300,
        arrows: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows:false
            }
          }
        ]
    })     
})

$('.iklan').slick({
  autoplay: true,
  slidesToShow: 1,
  arrows : false
});




// for vanila js
const closeSplash = () => {
  const splash = document.querySelector('.splash');
  const penghalang = document.querySelector('.penghalang');

  penghalang.style.display = 'none';
  splash.style.display = 'none';
  

}

