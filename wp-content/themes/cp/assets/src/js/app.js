$(".nav-tools__search").on("click", function () {
  $(".nav-tools__search-block_click").toggleClass(
    "nav-tools__search-block_click-show"
  );
  $(".nav-tools__search").toggleClass("nav-tools-close");

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
  if ($("body").hasClass("home")) {
    $(window).scroll(function () {
      if ($(document).scrollTop() > 500) {
        $(".header").addClass("black-header");
      } else {
        $(".header").removeClass("black-header");
      }
    });
  }
});


$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,    
    fade: true,
    vertical: false,
    centerMode: true,
    asNavFor: '.slider-nav'
  });
  $('.slider-nav').slick({
    slidesToShow: 4,
    centerPadding: '0px',
    slidesToScroll: 1, 
    asNavFor: '.slider-for',
    dots: true,
    centerMode: true,
    vertical: true,
    focusOnSelect: true
  });

// var $ua = $(".language-ua"),
//   $ru = $(".language-ru"),
//   $en = $(".language-en"),
//   $changeUaRu = $(".ua-ru"),
//   $changeRuEn = $(".ru-en");

// $($ua).on("click", function () {
//   $ua.addClass("language-active");
//   $ru.removeClass("language-active");
//   $changeRuEn.removeClass("change-active");
// });

// $($ru).on("click", function () {
//   $ru.addClass("language-active");
//   $en.removeClass("language-active");
//   $ua.removeClass("language-active");
//   $changeUaRu.addClass("change-active");
//   $changeRuEn.addClass("change-active");
// });

// $($changeUaRu).on("click", function () {
//   if ($ua.hasClass("language-active")) {
//     $ua.removeClass("language-active");
//     $ru.addClass("language-active");
//     $changeRuEn.addClass("change-active");
//   } else if (!$ua.hasClass("language-active")) {
//     $ua.addClass("language-active");
//     $changeRuEn.addClass("change-active");
//     $ru.removeClass("language-active");
//     $en.removeClass("language-active");
//     $changeRuEn.removeClass("change-active");
//   }

// });
