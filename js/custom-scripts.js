/**
 * Back To Top function
**/

jQuery(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.btt-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});
});

/**
 * Smooth Scrolling
**/

jQuery(document).ready(function ($) {
   // Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .not('.panel a')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
});

/**
 * Global smart resize function
**/

(function($,sr){

  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function (func, threshold, execAsap) {
      var timeout;

      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null; 
          };

          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);

          timeout = setTimeout(delayed, threshold || 100); 
      };
  }
    // smartresize 
    jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');

/**
 * Controls the mobile navigation
**/

jQuery(document).ready(function(){
    $('.navbar-toggle').on('click', function(){
        $(this).toggleClass('collapsed');
        $('.mobile-navbar').slideToggle();
        $('body').toggleClass('no-scroll');
        $('.navbar-toggle .icon-bar').toggleClass('white');
    });
})

/**
 * Prevents menu scroll on iOS devices
**/

jQuery(document).ready(function() {
    $('.navbar-toggle').on('click', function(){
      if($('body').hasClass('no-scroll')) {
        document.ontouchmove = function (e) {
          e.preventDefault();
        }
      } else {
        document.ontouchmove = function (e) {
          return true;
        }
      }
    });
});

/**
 * Allows same height columns
**/

jQuery(document).ready(function($){
    $(function() {
        $('.box').matchHeight();
    });
});

jQuery(document).ready(function($){
    $(".slider-section .right .services .icons .icon-1").mouseenter(function () {
      $(this).find('img').attr("src","/wp-content/uploads/2019/02/victim-icon-hover.png");
    });
    $(".slider-section .right .services .icons .icon-1").mouseleave(function () {
      $(this).find('img').attr("src","/wp-content/uploads/2019/02/victim-icon.png");
    });

    $(".slider-section .right .services .icons .icon-2").mouseenter(function () {
      $(this).find('img').attr("src","/wp-content/uploads/2019/02/marsys-icon-hover.png");
    });
    $(".slider-section .right .services .icons .icon-2").mouseleave(function () {
      $(this).find('img').attr("src","/wp-content/uploads/2019/02/marsys-icon.png");
    });

    $(".slider-section .right .services .icons .icon-3").mouseenter(function () {
      $(this).find('img').attr("src","/wp-content/uploads/2019/02/domestic-icon-hover.png");
    });
    $(".slider-section .right .services .icons .icon-3").mouseleave(function () {
      $(this).find('img').attr("src","/wp-content/uploads/2019/02/domestic-icon.png");
    });

    $(".slider-section .right .services .icons .icon-4").mouseenter(function () {
      $(this).find('img').attr("src","/wp-content/uploads/2019/02/public-icon-hover.png");
    });
    $(".slider-section .right .services .icons .icon-4").mouseleave(function () {
      $(this).find('img').attr("src","/wp-content/uploads/2019/02/public-icon.png");
    });

    $(".slider-section .right .services .icons .icon-5").mouseenter(function () {
      $(this).find('img').attr("src","/wp-content/uploads/2019/02/economic-icon-hover.png");
    });
    $(".slider-section .right .services .icons .icon-5").mouseleave(function () {
      $(this).find('img').attr("src","/wp-content/uploads/2019/02/economic-icon.png");
    });

    $(".slider-section .right .services .icons .icon-6").mouseenter(function () {
      $(this).find('img').attr("src","/wp-content/uploads/2019/02/speical-icon-hover.png");
    });
    $(".slider-section .right .services .icons .icon-6").mouseleave(function () {
      $(this).find('img').attr("src","/wp-content/uploads/2019/02/speical-icon.png");
    });
});


// document.getElementById('case-update-other').style.display = 'none';
// document.getElementById('case-update').addEventListener('click', displayTextField);
// function displayTextField() {
//   // Get the value of the currently selected radio button. 'select-a-size' is the name of the radio buttons you specify in the form builder
//   var radioText = document.querySelector('input[name="case-update"]:checked').value;
//   if (radioText == 'Other') {
//     document.getElementById('case-update-other').style.display = 'block';
//   }
// }

jQuery(document).ready(function($){
    $('#case-update-other').css('display', 'none');
    $('#case-update').on('click', function(){
      var radioText = $('input[name="case-update"]:checked').val();
      if (radioText == 'Other') {
        $('#case-update-other').css('display', 'block');
      } else {
        $('#case-update-other').css('display', 'none');
      }
    });

    $('#prompt-call-other').css('display', 'none');
    $('#prompt-call').on('click', function(){
      var radioText = $('input[name="prompt-call"]:checked').val();
      if (radioText == 'Other') {
        $('#prompt-call-other').css('display', 'block');
      } else {
        $('#prompt-call-other').css('display', 'none');
      }
    });

    $('#community-service-other').css('display', 'none');
    $('#community-service').on('click', function(){
      var radioText = $('input[name="community-service"]:checked').val();
      if (radioText == 'Other') {
        $('#community-service-other').css('display', 'block');
      } else {
        $('#community-service-other').css('display', 'none');
      }
    });

    $('#victims-services-other').css('display', 'none');
    $('#victims-services').on('click', function(){
      var radioText = $('input[name="victims-services"]:checked').val();
      if (radioText == 'Other') {
        $('#victims-services-other').css('display', 'block');
      } else {
        $('#victims-services-other').css('display', 'none');
      }
    });
});

jQuery(document).ready(function($){
    $('#case-update-other').css('display', 'none');
    $('#case-update').on('click', function(){
      var radioText = $('input[name="es-case-update"]:checked').val();
      if (radioText == 'Other') {
        $('#case-update-other').css('display', 'block');
      } else {
        $('#case-update-other').css('display', 'none');
      }
    });

    $('#prompt-call-other').css('display', 'none');
    $('#prompt-call').on('click', function(){
      var radioText = $('input[name="es-prompt-call"]:checked').val();
      if (radioText == 'Other') {
        $('#prompt-call-other').css('display', 'block');
      } else {
        $('#prompt-call-other').css('display', 'none');
      }
    });

    $('#community-service-other').css('display', 'none');
    $('#community-service').on('click', function(){
      var radioText = $('input[name="es-community-service"]:checked').val();
      if (radioText == 'Other') {
        $('#community-service-other').css('display', 'block');
      } else {
        $('#community-service-other').css('display', 'none');
      }
    });

    $('#victims-services-other').css('display', 'none');
    $('#victims-services').on('click', function(){
      var radioText = $('input[name="es-victims-services"]:checked').val();
      if (radioText == 'Other') {
        $('#victims-services-other').css('display', 'block');
      } else {
        $('#victims-services-other').css('display', 'none');
      }
    });
});