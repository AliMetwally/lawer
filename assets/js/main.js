'use strict'
$(function (){
    
   var windowHeight = $(window).innerHeight(),
       topHeight    = $('.top-bar').innerHeight(),
       navHeight    = $('.navbar').innerHeight();
   $('.slider , .carousel-item').height(windowHeight - ( topHeight + navHeight ));
   console.log(windowHeight - ( topHeight + navHeight ));
});