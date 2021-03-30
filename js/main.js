$(document).ready(function(){

$("#scroll-knap").click(function () {
    $('html').animate({
      scrollTop: $("#erfaring-titel-forside").offset().top
    }, 200);
  });




var menu = document.getElementById('mobile-menu-container');


$('#mobile-menu-button').click( function(){
    menu.style.display = "flex";

})
$('#mobile-close').click(function(){
    menu.style.display = "none";
})

  
// FAQ
    $('.faq-input-header').toggleClass('inactive-header');

    var contentwidth = $('.faq-input-header').width();
    $('.faq-input-content').css({'width' : contentwidth });

    $('.faq-input-header').click(function () {
        if($(this).is('.inactive-header')) {
            $('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
            $(this).toggleClass('active-header').toggleClass('inactive-header');
            $(this).next().slideToggle().toggleClass('open-content');
        }

        else {
            $(this).toggleClass('active-header').toggleClass('inactive-header');
            $(this).next().slideToggle().toggleClass('open-content');
        }
    });


    return false;
    
});





 