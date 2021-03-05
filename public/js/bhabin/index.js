


// for vanila js
const closeSplash = () => {
  const splash = document.querySelector('.splash');
  const penghalang = document.querySelector('.penghalang');

  penghalang.style.display = 'none';
  splash.style.display = 'none';
  

}

const openTab = (evt, id) => {
      let i, tabContent, tabLinks

      tabContent = document.querySelectorAll('.container-tab-content')

      for (i = 0; i < tabContent.length; i++) {
        tabContent[i].style.cssText = "display : none !important";
      }

      tabLinks = document.querySelectorAll('.tab-links')
      for (i = 0; i < tabLinks.length; i++) {
        tabLinks[i].className = tabLinks[i].className.replace('active', '');
      }

      document.querySelector(`#${id}`).style.display = 'flex'
      evt.currentTarget.className += ' active'



    }

window.onload = function(){
   const button = document.querySelectorAll('.play')
    let i;
    for (i = 0; i < button.length; i++) {
      console.log(i)




      button[i].addEventListener('click', function () {
        const currentTarget = document.querySelector(`[data-videoid='${this.dataset.videoid}']`)


        const video = document.querySelector(`#${this.dataset.videoid}`)
        if (video.paused === false) {
          video.pause()
          currentTarget.innerHTML = `<i class="fas fa-play text-white"></i>`;
        }
        else {
          video.play()
          currentTarget.innerHTML = `<i class="fas fa-pause text-white"></i>`;
        }
      })
    }

    // function for tab
    
}





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
  arrows : false,
  dots: true

});

// infografis slick
$('.infografis-container-item').slick({
  autoplay : true,
  slidesToShow: 5,
  dots : true,
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

// paparan slick
$('.paparan-container-item').slick({
  autoplay : true,
  slidesToShow: 3,
  dots : true,
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


