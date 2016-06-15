// JavaScript Document
$(document).ready(function () {
  
  

    //baner internas
  $(".nav-main .ico-menu").click(function() {
    $(".nav-main ul").toggleClass('active');
  });

  $('.bxslider').bxSlider({
    mode: 'fade',
    speed: 3000,
    pagerCustom: '#bx-pager',
    controls:true,
    auto:true,
    pause: 7000
  });

  $(".content-list-fleets li.fleets:first-child").addClass('active');

  $('.nav-list-flets li').click(function(){
    $('.content-list-fleets li.fleets').removeClass('active');
    $('.nav-list-flets li').removeClass('active');
    $(this).addClass('active');
    var indice = $(this).index();
    indice++;
    //alert(indice);
    $(".content-list-fleets li.fleets:nth-child("+indice+")").addClass('active');
  });

  $(".widget-imgs figure img:first-child").addClass('active');
  $(".single-fleet .thumbs img:first-child").addClass('active');

  $('.single-fleet .thumbs img').click(function(){
    $(this).siblings().removeClass('active');
    $(this).parent('.thumbs').siblings('figure').find('img').removeClass('active');
    
    $(this).addClass('active');
    var indice = $(this).index();
    indice++;
    //alert(indice);
    $(this).parent('.thumbs').siblings('figure').find("img:nth-child("+indice+")").addClass('active');
  });


});

