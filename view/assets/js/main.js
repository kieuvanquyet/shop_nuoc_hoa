(function ($) {
  "use strict";

  //  Searching & Expand Menu Popup

  var searchToggle = $(".search-toggle"),
    closeA = $(".scale"),
    closeB = $(".searching button"),
    cBody = $("body"),
    closeScale = closeA.add(closeB);

  if (searchToggle.length > 0) {
    searchToggle.on("click", function () {
      cBody.toggleClass("open");
      return false;
    });
  }

  if (closeScale.length > 0) {
    closeScale.on("click", function () {
      cBody.removeClass("open");
      return false;
    });
  }

  $(".close").on("click", function () {
    $("body").removeClass("open");
  });


  /*---------------------------
          Commons Variables
       ------------------------------ */
  const $window = $(window),
    $body = $("body");

  /*--------------------------
      Sticky Menu
    ---------------------------- */

  $($window).on("scroll", function () {
    var scroll = $($window).scrollTop();
    if (scroll < 150) {
      $("#sticky").removeClass("is-isticky");
    } else {
      $("#sticky").addClass("is-isticky");
    }
  });

  /*---------------------------------
            Off Canvas toggler Function
        -----------------------------------*/
  const $offCanvasToggle = $(".offcanvas-toggle"),
    $offCanvas = $(".offcanvas"),
    $offCanvasOverlay = $(".offcanvas-overlay"),
    $mobileMenuToggle = $(".mobile-menu-toggle");
  $offCanvasToggle.on("click", function (e) {
    e.preventDefault();
    const $this = $(this),
      $target = $this.attr("href");
    $body.addClass("offcanvas-open");
    $($target).addClass("offcanvas-open");
    $offCanvasOverlay.fadeIn();
    if ($this.parent().hasClass("mobile-menu-toggle")) {
      $this.addClass("close");
    }
  });

  $(".offcanvas-close, .offcanvas-overlay").on("click", function (e) {
    e.preventDefault();
    $body.removeClass("offcanvas-open");
    $offCanvas.removeClass("offcanvas-open");
    $offCanvasOverlay.fadeOut();
    $mobileMenuToggle.find("a").removeClass("close");
  });

  /*----------------------------------
           Off Canvas Menu
       -----------------------------------*/
  function mobileOffCanvasMenu() {
    var $offCanvasNav = $(".offcanvas-menu, .overlay-menu"),
      $offCanvasNavSubMenu = $offCanvasNav.find(".offcanvas-submenu");

    /*Add Toggle Button With Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.parent().prepend('<span class="menu-expand"></span>');

    /*Category Sub Menu Toggle*/
    $offCanvasNav.on("click", "li a, .menu-expand", function (e) {
      var $this = $(this);
      if ($this.attr("href") === "#" || $this.hasClass("menu-expand")) {
        e.preventDefault();
        if ($this.siblings("ul:visible").length) {
          $this.parent("li").removeClass("active");
          $this.siblings("ul").slideUp();
          $this.parent("li").find("li").removeClass("active");
          $this.parent("li").find("ul:visible").slideUp();
        } else {
          $this.parent("li").addClass("active");
          $this
            .closest("li")
            .siblings("li")
            .removeClass("active")
            .find("li")
            .removeClass("active");
          $this.closest("li").siblings("li").find("ul:visible").slideUp();
          $this.siblings("ul").slideDown();
        }
      }
    });
  }
  mobileOffCanvasMenu();

  const $offcanvasMenu2 = $("#offcanvas-menu2 li a");
  $offcanvasMenu2.on("click", function (e) {
    // e.preventDefault();
    $(this).closest("li").toggleClass("active");
    $(this).closest("li").siblings().removeClass("active");
    $(this).closest("li").siblings().children(".category-sub-menu").slideUp();
    $(this)
      .closest("li")
      .siblings()
      .children(".category-sub-menu")
      .children("li")
      .toggleClass("active");
    $(this)
      .closest("li")
      .siblings()
      .children(".category-sub-menu")
      .children("li")
      .removeClass("active");
    $(this).parent().children(".category-sub-menu").slideToggle();
  });

  /*-----------------------------
        main slider active
      ---------------------------- */

  const $mainSlider = $(".main-slider");

  $mainSlider
    .slick({
      autoplay: true,
      autoplaySpeed: 6000,
      speed: 800,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      fade: true,
      arrows: true,
      prevArrow:
        '<button class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
      nextArrow:
        '<button class="slick-next"><i class="fas fa-chevron-right"></i></button>',
      responsive: [
        { breakpoint: 767, settings: { dots: true, arrows: false } },
      ],
    })
    .slickAnimation();
  /*--------------------------
         product slider init
        ---------------------------- */
  const $productSliderInit = $(".product-slider-init");

  $productSliderInit.slick({
    autoplay: false,
    autoplaySpeed: 10000,
    dots: false,
    infinite: false,
    arrows: true,
    speed: 1000,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow:
      '<button class="slick-prev"><i class="ion-chevron-left"></i></button>',
    nextArrow:
      '<button class="slick-next"><i class="ion-chevron-right"></i></button>',
    responsive: [
      {
        breakpoint: 1199,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        },
      },
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          arrows: true,
          autoplay: true,
        },
      },

      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          arrows: false,
          autoplay: true,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          autoplay: true,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });

  /*--------------------------
         popular-slider-init
        ---------------------------- */
  const $popularSlider = $(".popular-slider-init");

  $popularSlider.slick({
    autoplay: false,
    autoplaySpeed: 10000,
    dots: true,
    infinite: false,
    arrows: false,
    speed: 1000,
    slidesToShow: 5,
    slidesToScroll: 1,
    prevArrow:
      '<button class="slick-prev"><i class="ion-chevron-left"></i></button>',
    nextArrow:
      '<button class="slick-next"><i class="ion-chevron-right"></i></button>',
    responsive: [
      {
        breakpoint: 1280,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: false,
          dots: true,
        },
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          arrows: false,
          autoplay: true,
        },
      },

      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          arrows: false,
          autoplay: true,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          autoplay: true,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });

  /*--------------------------
        featured-init
  ---------------------------- */
  const $featuredSlider = $(".featured-init");

  $featuredSlider.slick({
    autoplay: false,
    autoplaySpeed: 10000,
    dots: false,
    infinite: false,
    arrows: true,
    speed: 1000,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow:
      '<button class="slick-prev"><i class="ion-chevron-left"></i></button>',
    nextArrow:
      '<button class="slick-next"><i class="ion-chevron-right"></i></button>',
    responsive: [
      {
        breakpoint: 1280,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: false,
          dots: false,
        },
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          arrows: true,
          autoplay: true,
        },
      },

      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          arrows: true,
          autoplay: true,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          autoplay: true,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });

  /*--------------------------
         product ctry slider init
        ---------------------------- */

  const $productCtry = $(".product-ctry-init");
  $productCtry.slick({
    autoplay: false,
    autoplaySpeed: 10000,
    dots: false,
    infinite: false,
    arrows: true,
    speed: 1000,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow:
      '<button class="slick-prev"><i class="ion-chevron-left"></i></button>',
    nextArrow:
      '<button class="slick-next"><i class="ion-chevron-right"></i></button>',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        },
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          arrows: true,
          autoplay: true,
        },
      },

      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          autoplay: true,
        },
      },

      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });

  /*--------------------------
         blog slider init
        ---------------------------- */

  const $blogInit = $(".blog-init");
  $blogInit.slick({
    autoplay: false,
    autoplaySpeed: 10000,
    dots: false,
    infinite: false,
    arrows: true,
    speed: 1000,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow:
      '<button class="slick-prev"><i class="ion-chevron-left"></i></button>',
    nextArrow:
      '<button class="slick-next"><i class="ion-chevron-right"></i></button>',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        },
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          arrows: true,
          autoplay: true,
        },
      },

      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          autoplay: true,
        },
      },
      {
        breakpoint: 575,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          autoplay: true,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });
  /*--------------------------
         brand slider init
        ---------------------------- */

  const $brandInit = $(".brand-init");
  $brandInit.slick({
    autoplay: false,
    autoplaySpeed: 10000,
    dots: false,
    infinite: false,
    arrows: true,
    speed: 1000,
    slidesToShow: 6,
    slidesToScroll: 1,
    prevArrow:
      '<button class="slick-prev"><i class="ion-chevron-left"></i></button>',
    nextArrow:
      '<button class="slick-next"><i class="ion-chevron-right"></i></button>',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        },
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          arrows: true,
          autoplay: true,
        },
      },

      {
        breakpoint: 767,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          arrows: false,
          autoplay: true,
        },
      },
      {
        breakpoint: 575,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          arrows: false,
          autoplay: true,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });

  /*---------------------------
      countdown-syncing
      ---------------------------- */

  $(".countdown-sync-init").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    draggable: false,
    arrows: false,
    dots: false,
    fade: true,
    asNavFor: ".countdown-sync-nav",
  });
  $(".countdown-sync-nav").slick({
    dots: false,
    arrows: false,
    infinite: true,
    prevArrow:
      '<button class="slick-prev"><i class="fas fa-arrow-left"></i></button>',
    nextArrow:
      '<button class="slick-next"><i class="fas fa-arrow-right"></i></button>',
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: ".countdown-sync-init",
    focusOnSelect: true,
    draggable: false,
  });

  /*---------------------------
      product-syncing
      ---------------------------- */

  $(".product-sync-init").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    draggable: false,
    arrows: false,
    dots: false,
    fade: true,
    asNavFor: ".product-sync-nav",
  });
  $(".product-sync-nav").slick({
    dots: false,
    arrows: false,
    infinite: true,
    prevArrow:
      '<button class="slick-prev"><i class="fas fa-arrow-left"></i></button>',
    nextArrow:
      '<button class="slick-next"><i class="fas fa-arrow-right"></i></button>',
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: ".product-sync-init",
    focusOnSelect: true,
    draggable: false,
  });

  /*--------------------------
      tooltip
      ---------------------------- */

      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      })
      

  // slider-range
  $("#slider-range").slider({
    range: true,
    min: 0,
    max: 800,
    values: [200, 600],
    slide: function (event, ui) {
      $("#amount").val("€" + ui.values[0] + " - €" + ui.values[1]);
    },
  });
  $("#amount").val(
    "€" +
      $("#slider-range").slider("values", 0) +
      " - €" +
      $("#slider-range").slider("values", 1)
  );

  // slider-range end
  /*----------------------------------------
      fixed issue in bootstrap tabs problem
      ----------------------------------------- */

  $('a[data-bs-toggle="pill"]').on("shown.bs.tab", function (e) {
    e.target;
    e.relatedTarget;
    $(".slick-slider").slick("setPosition");
  });

  /*-----------------------------------
       fixed issue in bs modal problem
       ---------------------------------- */

  $(".modal").on("shown.bs.modal", function (e) {
    $(".slick-slider").slick("setPosition");
  });

  /*--------------------------
      comment  scroll down 
      ---------------------------- */

  $("#write-comment").on("click", function (e) {
    e.preventDefault();
    $("html, body").animate(
      { scrollTop: $(".btn-dark ").offset().top + 750 },
      500,
      "linear"
    );
  });

  /*--------------------------     
           counter 
         -------------------------- */

  $(".count").each(function () {
    var count = $(this),
      input = count.find('input[type="number"]'),
      increament = count.find(".increment"),
      decreament = count.find(".decrement"),
      minValue = input.attr("min"),
      maxValue = input.attr("max");

    increament.on("click", function () {
      var oldValue = parseFloat(input.val());
      if (oldValue >= maxValue) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue + 1;
      }
      count.find("input").val(newVal);
      count.find("input").trigger("change");
    });

    decreament.on("click", function () {
      var oldValue = parseFloat(input.val());
      if (oldValue <= minValue) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue - 1;
      }
      count.find("input").val(newVal);
      count.find("input").trigger("change");
    });
  });

  /*-------------------------
    Create an account toggle
    --------------------------*/
  $(".checkout-toggle2").on("click", function () {
    $(".open-toggle2").slideToggle(1000);
  });

  $(".checkout-toggle").on("click", function () {
    $(".open-toggle").slideToggle(1000);
  });

  /*--------------------------
      SscrollUp
    ---------------------------- */

  $.scrollUp({
    scrollName: "scrollUp", // Element ID
    scrollDistance: 400, // Distance from top/bottom before showing element (px)
    scrollFrom: "top", // 'top' or 'bottom'
    scrollSpeed: 800, // Speed back to top (ms)
    easingType: "linear", // Scroll to top easing (see http://easings.net/)
    animation: "fade", // Fade, slide, none
    animationSpeed: 400, // Animation speed (ms)
    scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
    scrollTarget: false, // Set a custom target element for scrolling to. Can be element or number
    scrollText: '<i class="fas fa-arrow-up"></i>', // Text for element, can contain HTML
    scrollTitle: false, // Set a custom <a> title if required.
    scrollImg: false, // Set true to use image
    activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
    zIndex: 214, // Z-Index for the overlay
  });
})(jQuery);
