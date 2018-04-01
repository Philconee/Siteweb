(function ($) {
  "use strict"; // Start of use strict

  /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
  particlesJS.load('particles-js', 'http://hexagonyc.fr/Istrium/particlesjs-config.json', function () {
    console.log('callback - particles.js config loaded');
  });

  var yolo = false;
  document.getElementById("yolo").onclick = function () {
    yolo = !yolo;
    document.getElementById('particles-js').innerHTML = "";
    if (yolo)
      particlesJS.load('particles-js', '127.0.0.1/particlesjs-config.json', function () {
        console.log('callback - particles.js config loaded');
      });
    else
      particlesJS.load('particles-js', '127.0.0.1/particlesjs-config.json', function () {
        console.log('callback - particles.js config loaded');
      });
  };

  jQuery('.textbox input').attr('value', "")
  jQuery('.textbox input').attr('onkeyup', "this.setAttribute('value', this.value);")

  /* Décompte */
  var deadline = 'Jul 25 2018 18:40:18 GMT-0400';

  function time_remaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
      'total': t,
      'days': days,
      'hours': hours,
      'minutes': minutes,
      'seconds': seconds
    };
  }

  function run_clock(endtime) {

    // get spans where our clock numbers are held
    var days_span = document.getElementById('days');
    var hours_span = document.getElementById('hours');
    var minutes_span = document.getElementById('minutes');
    var secondes_span = document.getElementById('secondes');

    function update_clock() {
      var t = time_remaining(endtime);

      // update the numbers in each part of the clock
      days_span.innerHTML = t.days;
      hours_span.innerHTML = ('0' + t.hours).slice(-2);
      minutes_span.innerHTML = ('0' + t.minutes).slice(-2);
      secondes_span.innerHTML = ('0' + t.seconds).slice(-2);

      if (t.total <= 0) {
        clearInterval(timeinterval);
      }
    }
    update_clock();
    var timeinterval = setInterval(update_clock, 1000);
  }
  run_clock(deadline);


  jQuery('[data-toggle="collapse"]').click(function (e) {
    var this_ = $(this);
    jQuery('.card.active').attr('class', 'card');
    this_.parents('.card').attr('class', 'card active');
  });

  // Smooth scrolling using jQuery easing
  jQuery('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        jQuery('html, body').animate({
          scrollTop: (target.offset().top - 54)
        }, 2000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  jQuery('.js-scroll-trigger').click(function () {
    jQuery('.navbar-collapse').collapse('hide');
  });

  jQuery(window).scroll(function () {
    jQuery('[data-toggle="popover"]').popover('hide');
  });

  //popover
  jQuery(function () {
    jQuery('[data-toggle="popover"]').popover();
    if (document.body.offsetWidth > 992)
      jQuery('[data-toggle="popover"]').popover('toggle');
      else 
        jQuery('[data-toggle="tooltip"]').tooltip();
  });

  //FORM
  jQuery("form").on("submit", function (e) {
    e.preventDefault();
    var form = $(this);
    var button = form.children("button[type='submit']");
    var msg = form.serialize();
    var submitButton = form.children("button[type='submit']").html();
    if (submitButton == undefined) {
      var idForm = form.attr("id");
      var button = jQuery("#" + idForm + " button");
      var submitButton = jQuery("#" + idForm + " button").html();
    }
    jQuery.ajax({
      type: 'POST',
      url: "php/mail.php",
      data: msg,
      success: function (data) {
        if (data != "") {
          var id = jQuery('#email');
          for (var i = 0; i < id.length; i++) {
            id.val('');
            id.attr('value', '');
          }
          var sent_message = jQuery('.sent_message');
          for (var i2 = 0; i2 < sent_message.length; i2++) {
            sent_message.fadeIn();
            sent_message.fadeOut(9000);
          }

        }
      },
      error: function (xhr, str) {
        alert('Error: ' + xhr.responseCode);
      }
    });
  });


})(jQuery); // End of use strict