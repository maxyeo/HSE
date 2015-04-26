$(document).ready(function() {  

    sizeitup();

    //nav bar scoll action
    $('#logo').click(function() {
        $("html, body").animate({ scrollTop: $('').offset().top}, 500);
    });//clicked on top

    $('.mem').click(function() {
      $('#bios').addClass('active');
      var image = $(this).attr("data-image");
      var name = $(this).attr("data-name");
      var position = $(this).attr("data-position");
      var bio = $(this).attr("data-bio");
      $('#bios-pic').css('background-image', 'url(' + image + ')');
      $("#bios h4").html(name);
      $("#bios h5").html(position);
      $("#bios-bio").html(bio);
      $('body').addClass("noscroll");
    });

    $('#bios-wrapper').click(function(e){
      e.stopPropagation();
    });

    $('#bios, #bios-out').click(function(){
      $('#bios').removeClass('active');
      $('body').removeClass("noscroll");
      setTimeout(function () {
        $('#bios-pic').css('background-image', 'url()');
        $("#bios h4").html("");
        $("#bios h5").html("");
        $("#bios-bio").html("");
      }, 300);
    });
    
});

$(window).resize(function() {
  sizeitup();
});

function sizeitup() {
  var bodyh = $(window).height();
  var bodyw = $(window).width();
  if (bodyw > 650) {
    $(".top").css("height",bodyh);
    // $("#ent-menu").css("height",bodyh);
    // $("#ent-right").css("border-top-width",bodyh);
  }
  $("#left").css("border-right-width",bodyw/2);
  $("#right").css("border-left-width",bodyw/2);
}

$(window).scroll(function() {
  var bodyh = $(window).height();
  var pos = $(window).scrollTop();
  var ent = $("#enterprises").offset().top + 185;
  var tea = $("#team").offset().top - 140;
  if (pos > 0) {
    $('header').addClass('up');
  } else {
    $('header').removeClass('up');
  }
  if (pos < ent) {
    $("#ent-menu").removeClass().addClass("top");
  } else if (pos > ent && pos < tea) {
    $("#ent-menu").removeClass().addClass("move");
  } else if (pos > tea) {
    $("#ent-menu").removeClass().addClass("bot");
  }
  console.log();
});

//SMOOTH SCROLLING
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 70
        }, 500);
        return false;
      }
    }
  });
});

$(".navicon-button").click(function(){
  $("nav").toggleClass("open");
  $(this).toggleClass("open");
});