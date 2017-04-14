$(document).ready(function() {

   $('#owl-one').owlCarousel({
    items:1,
    loop: true,
    autoplay:true,
    autoplayTimeout: 7000,
    dots: true,
    smartSpeed: 500
   });

   var owl2 = $('#owl-two');

   owl2.owlCarousel({
    margin:10,
    loop: true,
    nav:false,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        480:{
            items:2
        },
        768:{
            items:3
        },
        1189:{
            items:4
        }
    }
  });

  $('.serv-item_next-btn').click(function(event) {
    $('.owl-next').click();
  });

  $('.serv-item_prev-btn').click(function(event) {
    $('.owl-prev').click();
  });



  var menuToggle = $('.header_mobtoggle'),
      mobMenu    = $('.header_mobmenu');

  menuToggle.click(function(event) {
    event.preventDefault();
    $(this).toggleClass('open');
    mobMenu.slideToggle();
  });

  var lastProjItem = $('.last-projects_item');


  lastProjItem.mouseenter(function(event) {
    lastProjImg = $(this).children('.last-projects_img').children();
    lastProjImg.css('opacity', '0.6');
    $(this).mouseleave(function(event) {
      lastProjImg.css('opacity', '1');
    });
  });

  $('.about-main_faq-question').click(function(event) {
    $(this).next('p').slideToggle(200);
    $(this).toggleClass('collapse-q');
  });

  $('.serv-item_side-item .fa').click(function(event) {
    if ($(this)
      .parent()
      .siblings()
      .children('.serv-item_sublist')
      .is(":visible")) {
      $(this)
      .parent()
      .siblings()
      .children('.serv-item_sublist')
      .slideUp(200);
      $(this)
      .parent()
      .siblings()
      .removeClass('is-active');
      $(this)
      .next('.serv-item_sublist')
      .slideDown(200);
      $(this).parent()
      .toggleClass('is-active');

    } else {
      $(this)
      .next('.serv-item_sublist')
      .slideToggle(200);
      $(this).parent()
      .toggleClass('is-active');
    }
    return false;
  });

  $('.up-arrow').click(function() {
    $('body').animate({"scrollTop":0},400);
    return false;
  });

  $(window).scroll(function () {
    if ($(this).scrollTop() > 150) {
      $('.up-arrow').show();
    } else {
      $('.up-arrow').hide();
    }
  });

  $('[name="NAME"]').on('change', function () {
      if($('[name="NAME"]').val()!='') {
        $('[name="NAME"]').removeClass('failed');
      }
    })
  $('[name="PHONE"]').on('change', function () {
      if($('[name="PHONE"]').val()!='') {
        $('[name="PHONE"]').removeClass('failed');
      }
    })
  $('[name="MESSAGE"]').on('change', function () {
      if($('[name="MESSAGE"]').val()!='') {
        $('[name="MESSAGE"]').removeClass('failed');
      }
    })







});

