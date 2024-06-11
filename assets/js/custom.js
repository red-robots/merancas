"use strict";

/**
 *	Custom jQuery Scripts
 *	Date Modified: 09.03.2021
 *	Developed by: Lisa DeBona
 */

jQuery(document).ready(function ($) {
  window.addEventListener('scroll', function () {
    var header = document.getElementById('masthead');
    if (window.scrollY > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });

  /*
    FAQ dropdowns
  __________________________________________
  */
  $('.question').click(function () {
    $(this).next('.answer').slideToggle(500);
    $(this).parent('.faqrow').toggleClass('active');
    $(this).toggleClass('close');
  });

  // Show the first tab and hide the rest
  $('#tabs-nav li:first-child').addClass('active');
  $('.tab-content').hide();
  $('.tab-content:first').show();

  // Click function
  $('#tabs-nav li').click(function () {
    $('#tabs-nav li').removeClass('active');
    $(this).addClass('active');
    $('.tab-content').hide();
    var activeTab = $(this).find('a').attr('href');
    $(activeTab).fadeIn();
    return false;
  });

  /*
  *
  *   Mobile Nav
  *
  ------------------------------------*/
  $('.burger, .overlay').click(function () {
    $('.burger').toggleClass('clicked');
    $('.overlay').toggleClass('show');
    $('nav').toggleClass('show');
    $('body').toggleClass('overflow');
  });
  $('nav.mobilemenu li').click(function () {
    $('nav.mobilemenu ul.dropdown').removeClass('active');
    $(this).find('ul.dropdown').toggleClass('active');
  });
  $('#menutoggle').on('click', function (e) {
    e.preventDefault();
    $('body').addClass('mobile-menu-open');
    $('#site-navigation').addClass('show');
  });
  $('#closeMobileNav').on('click', function (e) {
    e.preventDefault();
    $('body').removeClass('mobile-menu-open');
    $('#site-navigation').removeClass('show');
  });

  /* Slideshow */
  var swiper = new Swiper('#slideshow', {
    effect: 'fade',
    /* "slide", "fade", "cube", "coverflow" or "flip" */
    loop: true,
    noSwiping: false,
    simulateTouch: false,
    speed: 1000,
    autoplay: {
      delay: 4000
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    }
  });
  swiper.on('slideChangeTransitionStart', function () {
    // var slideNum = $(".swiper-slide-active").attr("data-slide");
    // $(".slideCaption").removeClass('active');
    // $(".slideCaption."+slideNum).addClass('active');
  });
});