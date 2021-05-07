// @koala-prepend "bs-touchslider.js"
// @koala-prepend "owl.carousel.min.js"
// @koala-prepend "blueimp-gallery.min.js"
// @koala-prepend "jquery.matchHeight.js"
// @koala-prepend "smooth-scroll.min.js"
// @koala-prepend "lazyload.min.js"
// @koala-prepend "vendor/wow.min.js"
// @koala-prepend "lazyYT.js"

$(function() {
  $(".nav a").on("click", function() {
    if ($(".navbar-toggle").css("display") != "none") {
      $(".navbar-toggle").trigger("click");
    }
  });
});
// echo.render(); is also available for non-scroll callbacks
// wow reveal js
new WOW().init();

//smoth scroll initialisation
smoothScroll.init();

//show more on click o nama

$(document).ready(function() {
  $("#morebtn-hide").click(function() {
    $("#showtext").hide();
  });
  $("#morebtn").click(function() {
    $("#showtext").show();
  });
});
//match heoght group 1
$(function() {
  $(".item").matchHeight(options);
});
//Owl Carousel 2
$(document).ready(function() {
  $("#testimonial-slider").owlCarousel({
    items: 2,
    itemsTablet: [767, 1],
    itemsDesktopSmall: [979, 2],
    responsiveClass: true,
    pagination: false,
    stopOnHover: true,
    transitionStyle: "fade",
    navigation: true,
    navigationText: [
      "<i class='fa fa-chevron-left fa-3x'></i>",
      "<i class='fa fa-chevron-right fa-3x'></i>"
    ],
    autoPlay: true
  });
});

//Owl Carousel 1
$(document).ready(function() {
  $("#testimonial-slider-hr").owlCarousel({
    items: 1,
    itemsTablet: [767, 1],
    itemsDesktopSmall: [979, 2],
    responsiveClass: true,

    pagination: false,
    stopOnHover: true,
    transitionStyle: "fade",
    navigation: true,
    navigationText: [
      "<i class='fa fa-chevron-left fa-3x'></i>",
      "<i class='fa fa-chevron-right fa-3x'></i>"
    ],
    autoPlay: true
  });
});
$(document).ready(function() {
  $("#testimonials").owlCarousel({
    items: 1,
    itemsTablet: [767, 1],
    itemsDesktopSmall: [1199, 1],
    responsiveClass: true,
    pagination: false,
    stopOnHover: true,
    transitionStyle: "fade",
    navigation: true,
    navigationText: [
      "<i class='fa fa-chevron-left fa-3x'></i>",
      "<i class='fa fa-chevron-right fa-3x'></i>"
    ],
    autoPlay: true
  });
});
$(document).ready(function() {
  $("#testimonial-slider-partneri2").owlCarousel({
    items: 5,
    itemsTablet: [767, 2],
    itemsDesktopSmall: [1199, 4],
    responsiveClass: true,
    pagination: false,
    stopOnHover: true,
    transitionStyle: "fade",
    navigation: true,
    navigationText: [
      "<i class='fa fa-chevron-left fa-3x'></i>",
      "<i class='fa fa-chevron-right fa-3x'></i>"
    ],
    autoPlay: true
  });
});

//Navbar Scroll Event
var lastScrollTop = 0;
var navbar = $(".navbar");
$(window).scroll(function(event) {
  var st = $(this).scrollTop();
  if (st > lastScrollTop) {
    navbar.addClass("navbar-scroll-custom");
  } else {
    navbar.removeClass("navbar-scroll-custom");
  }
  lastScrollTop = st;
});

//change logo on scroll
$(function() {
  var nav = $("nav");
  var header = $("#logo1");
  var lang = $("#lang-id");
  var tts = $("#call");

  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 150) {
      nav.addClass("bg-trans");
      header.addClass("smaller");
      lang.addClass("smaller");
      tts.addClass("smaller");
    } else {
      nav.removeClass("bg-trans");
      header.removeClass("smaller");
      lang.removeClass("smaller");
      tts.removeClass("smaller");
    }
  });
});

/*maps unclickable + google map 1*/
$(".maps").click(function() {
  $(".maps iframe").css("pointer-events", "auto");
});

$(".maps").mouseleave(function() {
  $(".maps iframe").css("pointer-events", "none");
});

//GALERIJAAAAAA
document.getElementById("bikes").onclick = function(event) {
  event = event || window.event;
  var target = event.target || event.srcElement,
    link = target.src ? target.parentNode : target,
    options = { index: link, event: event },
    links = this.getElementsByTagName("a");
  blueimp.Gallery(links, options);
};

//kayaking galerija
document.getElementById("kayaking").onclick = function(event) {
  event = event || window.event;
  var target = event.target || event.srcElement,
    link = target.src ? target.parentNode : target,
    options = { index: link, event: event },
    links = this.getElementsByTagName("a");
  blueimp.Gallery(links, options);
};

//back to top icona
$("body").prepend('<a href="#navigation" class="back-to-top"></a>');
var amountScrolled = 300;

$(window).scroll(function() {
  if ($(window).scrollTop() > amountScrolled) {
    $("a.back-to-top").fadeIn("slow");
  } else {
    $("a.back-to-top").fadeOut("slow");
  }
});
$("a.back-to-top").click(function() {
  $("html, body").animate(
    {
      scrollTop: 0
    },
    700
  );
  return false;
});

window.addEventListener(
  "load",
  function() {
    var allimages = document.getElementsByTagName("img");
    for (var i = 0; i < allimages.length; i++) {
      if (allimages[i].getAttribute("data-src")) {
        allimages[i].setAttribute("src", allimages[i].getAttribute("data-src"));
      }
    }
  },
  false
);

//counter section working
$(function() {
  function isScrolledIntoView($elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();
    var elemTop = $elem.offset().top;
    var elemBottom = elemTop + $elem.height();
    return elemBottom <= docViewBottom && elemTop >= docViewTop;
  }

  function count($this) {
    var current = parseInt($this.html(), 10);
    if (
      isScrolledIntoView($this) &&
      !$this.data("isCounting") &&
      current < $this.data("count")
    ) {
      $this.html(++current);
      $this.data("isCounting", true);
      setTimeout(function() {
        $this.data("isCounting", false);
        count($this);
      }, 50);
    }
  }

  $(".count").each(function() {
    $(this).data("count", parseInt($(this).html(), 10));
    $(this).html("0");
    $(this).data("isCounting", false);
  });

  function startCount() {
    $(".count").each(function() {
      count($(this));
    });
  }

  $(window).scroll(function() {
    startCount();
  });

  startCount();
});

$(".js-lazyYT").lazyYT();
document.getElementById("windsurfHr").onclick = function(event) {
  event = event || window.event;
  var targetT = event.targetT || event.srcElement,
    link = targetT.src ? targetT.parentNode : targetT,
    options = { index: link, event: event },
    links = this.getElementsByTagName("a");
  blueimp.Gallery(links, options);
};
document.getElementById("supHr").onclick = function(event) {
  event = event || window.event;
  var targetT = event.targetT || event.srcElement,
    link = targetT.src ? targetT.parentNode : targetT,
    options = { index: link, event: event },
    links = this.getElementsByTagName("a");
  blueimp.Gallery(links, options);
};
document.getElementById("tenrifeHr").onclick = function(event) {
  event = event || window.event;
  var targetT = event.targetT || event.srcElement,
    link = targetT.src ? targetT.parentNode : targetT,
    options = { index: link, event: event },
    links = this.getElementsByTagName("a");
  blueimp.Gallery(links, options);
};
