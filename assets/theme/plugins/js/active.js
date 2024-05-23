(function ($) {
  "use strict";
  $(document).on("ready", function () {
    /*==============================================================================
		  Header Sticky JS
	  ===============================================================================*/
    var activeSticky = $("#active-sticky"),
      winDow = $(window);
    winDow.on("scroll", function () {
      var scroll = $(window).scrollTop(),
        isSticky = activeSticky;
      if (scroll < 150) {
        isSticky.removeClass("is-sticky");
      } else {
        isSticky.addClass("is-sticky");
      }
    });

    /*==============================================================================
		 	Mobile Menu JS
	  ===============================================================================*/
    var $offcanvasNav = $("#offcanvas-menu a");
    $offcanvasNav.on("click", function () {
      var link = $(this);
      var closestUl = link.closest("ul");
      var activeLinks = closestUl.find(".active");
      var closestLi = link.closest("li");
      var linkStatus = closestLi.hasClass("active");
      var count = 0;

      closestUl.find("ul").slideUp(function () {
        if (++count == closestUl.find("ul").length)
          activeLinks.removeClass("active");
      });
      if (!linkStatus) {
        closestLi.children("ul").slideDown();
        closestLi.addClass("active");
      }
    });

    /*==============================================================================
			CounterUp JS
		================================================================================*/
    $(".counter").counterUp({
      time: 1500,
    });
    /*=============================================================================
			Nice Select JS
  	===============================================================================*/
    $("select").niceSelect();

    /*==============================================================================
		  Wow JS
	  ================================================================================*/
    var window_width = $(window).width();
    if (window_width > 767) {
      new WOW().init();
    }

    /*=============================================================================
      Video Popup JS
    ===============================================================================*/
    $(".popup-video").magnificPopup({
      type: "iframe",
    });

    /*==============================================================================
		  Hero Slider
	  ================================================================================*/
    $(".blog-slider").owlCarousel({
      items: 3,
      autoplay: true,
      loop: true,
      touchDrag: true,
      mouseDrag: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: false,
      animateOut: "fadeOut",
      animateIn: "fadeIn",
      smartSpeed: 500,
      merge: true,
      nav: true,
      dots: false,
      margin: 30,
      navText: [
        "<i class='fi-rr-arrow-small-left'></i>",
        "<i class='fi-rr-arrow-small-right'></i>",
      ],
      responsive: {
        300: {
          items: 1,
        },
        480: {
          items: 1,
        },
        1024: {
          items: 3,
        },
        768: {
          items: 2,
        },
        1200: {
          items: 3,
        },
      },
    });

    /*==============================================================================
		  Cube Portoflio JS
	  ================================================================================*/
    $("#portfolio-item").cubeportfolio({
      filters: "#portfolio-nav",
      loadMoreAction: "click",
      defaultFilter: "*",
      layoutMode: "grid",
      animationType: "quicksand",
      gridAdjustment: "responsive",
      gapHorizontal: 30,
      gapVertical: 30,
      mediaQueries: [
        {
          width: 1170,
          cols: 3,
        },
        {
          width: 768,
          cols: 2,
        },
        {
          width: 480,
          cols: 2,
        },
        {
          width: 0,
          cols: 1,
        },
      ],
      caption: "overlayBottomPush",
      displayType: "sequentially",
      displayTypeSpeed: 80,
    });

    /*==============================================================================
		  Cube Portoflio JS
	  ================================================================================*/
    $("#portfolio-item-2").cubeportfolio({
      filters: "#portfolio-nav",
      loadMoreAction: "click",
      defaultFilter: "*",
      layoutMode: "grid",
      animationType: "quicksand",
      gridAdjustment: "responsive",
      gapHorizontal: 30,
      gapVertical: 30,
      mediaQueries: [
        {
          width: 1170,
          cols: 2,
        },
        {
          width: 768,
          cols: 2,
        },
        {
          width: 480,
          cols: 2,
        },
        {
          width: 0,
          cols: 1,
        },
      ],
      caption: "overlayBottomPush",
      displayType: "sequentially",
      displayTypeSpeed: 80,
    });
    /*==============================================================================
		  Clients Slider
	  ================================================================================*/
    $(".clients-slider").owlCarousel({
      items: 5,
      autoplay: true,
      loop: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: false,
      smartSpeed: 500,
      merge: true,
      nav: false,
      dots: false,
      margin: 64,
      responsive: {
        300: {
          items: 2,
        },
        480: {
          items: 2,
        },
        1024: {
          items: 3,
        },
        768: {
          items: 3,
        },
        1200: {
          items: 5,
        },
      },
    });

    /*==============================================================================
		  Testimonial Slider
	  ================================================================================*/
    $(".testimonial-slider").owlCarousel({
      items: 1,
      autoplay: false,
      loop: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: false,
      smartSpeed: 500,
      merge: true,
      nav: false,
      dots: true,
      margin: 24,
    });
    /*==============================================================================
		  Testimonial Slider 2
	  ================================================================================*/
    $(".testimonial-slider-2").owlCarousel({
      items: 1,
      autoplay: false,
      loop: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: false,
      smartSpeed: 500,
      merge: true,
      nav: false,
      dots: true,
      margin: 24,
    });
    /*==============================================================================
		  Team Slider
	  ================================================================================*/
    $(".team-slider").owlCarousel({
      items: 4,
      autoplay: false,
      loop: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: false,
      smartSpeed: 500,
      merge: true,
      nav: false,
      dots: true,
      margin: 30,
      responsive: {
        300: {
          items: 1,
        },
        480: {
          items: 1,
        },
        1024: {
          items: 2,
        },
        768: {
          items: 2,
        },
        1200: {
          items: 4,
        },
      },
    });

    /*==============================================================================
		  Service Card Slider JS
	  ================================================================================*/
    $(".service-card-slider").owlCarousel({
      items: 4,
      autoplay: true,
      loop: true,
      margin: 30,
      autoplayTimeout: 4000,
      autoplayHoverPause: false,
      autoWidth: true,
      smartSpeed: 1000,
      merge: true,
      nav: false,
      dots: true,
      responsive: {
        300: {
          items: 1,
        },
        480: {
          items: 1,
        },
        768: {
          items: 3,
        },
        1024: {
          items: 2,
        },
        1170: {
          items: 4,
        },
      },
    });
    /*==============================================================================
		  Service Card Slider JS
	  ================================================================================*/
    $(".portfolio-card-slider").owlCarousel({
      items: 4,
      autoplay: true,
      loop: true,
      margin: 30,
      autoplayTimeout: 4000,
      autoplayHoverPause: false,
      autoWidth: true,
      smartSpeed: 1000,
      merge: true,
      nav: true,
      dots: true,
      responsive: {
        300: {
          items: 1,
        },
        480: {
          items: 1,
        },
        768: {
          items: 3,
        },
        1024: {
          items: 2,
        },
        1170: {
          items: 4,
        },
      },
      navText: [
        "<i class='fi fi-rr-angle-small-left'></i> Previews",
        "Next <i class='fi fi-rr-angle-small-right'></i>",
      ],
    });

    /*==============================================================================
      Brand Slider JS
    ================================================================================*/
    $(".brand-slider").owlCarousel({
      items: 6,
      autoplay: true,
      loop: true,
      margin: 90,
      autoplayTimeout: 4000,
      autoplayHoverPause: false,
      autoWidth: true,
      smartSpeed: 1000,
      merge: true,
      nav: false,
      dots: false,
      responsive: {
        300: {
          items: 1,
        },
        480: {
          items: 2,
        },
        768: {
          items: 3,
        },
        1024: {
          items: 4,
        },
        1170: {
          items: 6,
        },
      },
    });

    /*==============================================================================
		  Service Card Slider JS
	  ================================================================================*/
    $(".portfolio-details-slider").owlCarousel({
      items: 1,
      autoplay: true,
      loop: true,
      margin: 30,
      autoplayTimeout: 4000,
      autoplayHoverPause: false,
      autoWidth: false,
      smartSpeed: 1000,
      merge: true,
      nav: true,
      dots: false,
      responsive: {
        300: {
          items: 1,
        },
        480: {
          items: 1,
        },
        768: {
          items: 1,
        },
        1024: {
          items: 1,
        },
        1170: {
          items: 1,
        },
      },
      navText: [
        "<i class='fi fi-rr-angle-small-left'></i> Previews",
        "Next <i class='fi fi-rr-angle-small-right'></i>",
      ],
    });
  });

  /*==============================================================================
		Progress JS
	================================================================================*/
  // Function to set the progress bar percentage
  function setPercentage(container) {
    const percentage = container.getAttribute("data-percentage") + "%";
    const progressEl = container.querySelector(".progress");
    const percentageEl = container.querySelector(".percentage");

    progressEl.style.width = percentage;
    percentageEl.innerText = percentage;
    percentageEl.style.left = percentage;
  }

  // Function to check if the element is in the viewport
  function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <=
        (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  // Function to handle intersection changes
  function handleIntersection(entries) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        // If the element is in the viewport, set the progress bar
        setPercentage(entry.target);
        // Unobserve the element to avoid unnecessary calls
        observer.unobserve(entry.target);
      }
    });
  }

  // Create an Intersection Observer
  const observer = new IntersectionObserver(handleIntersection, {
    root: null, // Use the viewport as the root
    threshold: 0.3, // When 10% of the element is visible
  });

  // Get all progress containers and observe each one
  const progressContainers = document.querySelectorAll(".progress-container");
  progressContainers.forEach((container) => {
    observer.observe(container);
  });

  /*==============================================================================
		Image Preview JS
	================================================================================*/
  const serviceCards = document.querySelectorAll(".service-single-widget");

  serviceCards.forEach((card) => {
    const imagePreview = card.querySelector(".service-image-preview");
    const image = card.getAttribute("data-image");
    card.addEventListener("mouseover", () =>
      showImagePreview(imagePreview, image)
    );
    card.addEventListener("mouseout", () => hideImagePreview(imagePreview));
  });

  function showImagePreview(imagePreview, image) {
    imagePreview.style.backgroundImage = `url(${image})`;
    imagePreview.style.display = "block";
  }

  function hideImagePreview(imagePreview) {
    imagePreview.style.display = "none";
  }

  /*==============================================================================
		Parallax Images JS
	================================================================================*/
  let image = document.getElementsByClassName("thumbnail-image");
  new simpleParallax(image, {
    scale: 1.2,
    overflow: true,
    orientation: "up",
    delay: 0.6,
    transition: "cubic-bezier(0,0,0,1)",
  });

  /*==============================================================================
		Preloader JS
	================================================================================*/
  $(window).on("load", function (event) {
    $("#preloader").delay(800).fadeOut(500);
  });
})(jQuery);
