$(document).ready(function() {  

    sizeitup();

    //nav bar scoll action
    $('').click(function() {
        $("html, body").animate({ scrollTop: $('').offset().top}, 500);
    });//clicked on top
    
});

$(window).resize(function() {
  sizeitup();
});

function sizeitup() {
  var bodyh = $(window).height();
  var bodyw = $(window).width();
  if (bodyw > 650) {
    $(".top").css("height",bodyh);
  }
}

$(window).scroll(function() {
  if ($(window).scrollTop() > 0) {
    $('header').addClass('up');
  } else {
    $('header').removeClass('up');
  }
});

//SMOOTH SCROLLING
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
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

$(".member .member-pic").click(function(e){
  e.stopPropagation();
  var member = $(this).parent(".member");
  member.children(".member-bio").addClass("open");
});

$(".member-out").click(function(e){
  e.stopPropagation();
  $(".member-bio").removeClass("open");
});