$(".nav-tools__search").on("click", function () {
  $(".nav-tools__search-block_click").toggleClass(
    "nav-tools__search-block_click-show"
  );
  $(".nav-tools__search").toggleClass("nav-tools-close");
  // $('.header').toggleClass('header-onclick-search_and_burg');

  if ($(".nav-tools__search-block_click-show")) {
    $(".nav-tools__burger").removeClass("nav-tools__burger-open");
    $(".burger-menu__block").removeClass("burger-menu__block-show");
  }
  
});

$(".nav-tools__burger").on("click", function () {
  $(".nav-tools__burger").toggleClass("nav-tools__burger-open");
  $(".burger-menu__block").toggleClass("burger-menu__block-show");
  
  if ($(".burger-menu__block-show")) {
    $(".nav-tools__search-block_click").removeClass(
      "nav-tools__search-block_click-show"
    );
    $(".nav-tools__search").removeClass("nav-tools-close");
  }

});

var p = $(".popup__overlay");
$(".popup__toggle").click(function () {
  p.addClass("popup_open");
});
p.click(function (event) {
  e = event || window.event;
  if (e.target == this) {
    $(p).removeClass("popup_open");
  }
});
$(".popup__close").click(function () {
  p.removeClass("popup_open");
});
$(function () {
  $(".popup__toggle").bind("click", function (e) {
    e.preventDefault();
  });
});

$("#textArea-connect").on("keydown keyup", function () {
  this.style.height = "1px";
  this.style.height = this.scrollHeight + "px";
  this.style.transition = "height .3s ease";
});



$(document).ready(function () {

  var searchBlock =  $(".nav-tools__search-block_click");
  var menuBlock = $(".burger-menu__block");
  
  if ($("body").hasClass("home")) {
    $(window).scroll(function () {
      
      
      if ($(document).scrollTop() > 70 && $(document).scrollTop() <= 600) {
        if(searchBlock.hasClass(
          "nav-tools__search-block_click-show"
        ) || menuBlock.hasClass("burger-menu__block-show")) {
          $(".header").css({'display' : 'flex'});
        } else {
          $(".header").addClass('header-visibility-none')
        };
      } else {
        $(".header").removeClass('header-visibility-none');
      }
      if ($(document).scrollTop() >= 600) {
     
          $(".header").addClass("black-header");
        
      } else {
        $(".header").removeClass("black-header");
      }
    });
  }  
});

$(".slider-nav__block").click(function() {  
  $(".slider-for__container").hide().eq( $(this).index()).fadeIn();  
  $('.slider-nav__block').removeClass('active-block');
  $(this).addClass('active-block');  
  });

  $(".hidden-block__open").on("click", function() {
    $(".text-block__half-hidden").css("max-height", "800px");
    $(".hidden-block__open").hide(1500);
    $(".text-block__half-hidden").css("box-shadow" , "none");
    $(".hidden-block__about-link").animate();
  })
  


    $('.sliderMain').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.sliderSidebar',
      centerMode: true,
      autoplay: false,    
    });
    $('.sliderSidebar').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      asNavFor: '.sliderMain',
      dots: false,
      centerMode: false,
      focusOnSelect: true,
      vertical: true,
      arrows: false
    });
    
    // $('.sliderMain').on('afterChange', function(event, slick, currentSlide){
    //   if (currentSlide == 12) {
    //   $('.sliderMain').slick('slickPause');
    //   $('#slide-video').play();
    //   }
    // });
    // document.getElementById('slide-video').addEventListener('ended',myHandler,false);
    // function myHandler(e) {
    // $('.sliderMain').slick('slickPlay');
    // }
