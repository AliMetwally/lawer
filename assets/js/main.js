'use strict'
$(function (){
   var windowHeight = $(window).height(),
       topHeight    = $('.top-bar').innerHeight(),
       navHeight    = $('.navbar').innerHeight();
   $('.slider , .carousel-item').height(windowHeight - ( topHeight + navHeight ));
});