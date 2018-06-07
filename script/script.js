/*$(document).ready(function(){
    var a = $(window).height();
var n = $('.about-intro').offset().top;
var e = $(window).outerHeight();
var r = $(window).scrollTop();


function(){
    if(r>=n&&n+e-a>=r)
    $("#about-intro").addClass("title--fixed").css({top:0});
    else{
        var c=r-n;c=Math.max(0,c),c=Math.min(e-a,c);
        $("#about-intro").removeClass("title--fixed").css({top:c})
    }
}
} */
    /*
$(document).ready(function(){
    document.getElementById('about-intro').addEventListener(
    'scroll',
    function()
    {
        var a = $(window).scrollTop();
var b = $("#about-intro").offset().top;
    
    
    if(a >= b){
        $("#about-intro").addClass("title--fixed").css({top:0});
    }else{
        $("#about-intro").removeClass("title--fixed").css({top:a})
    }
    },
        true
)
})




window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}
*/


var startFix = $('.section-about').offset().top;
var stopFix = $('.section-about').offset().top + $('#about-intro').outerHeight() - 625;

$(document).scroll(fixing).scroll();

//$(window).on('resize', fixing});
//$(document).scroll(function(){});
/*
$(window).on('resize', function(){
    
      var win = $(this); //this = window
    var z = win.scrollTop();
    
    if(z >= startFix){
        $('#about-title').addClass('title-fixed');
        
        if(z >= stopFix){
            $('#about-title').removeClass('title-fixed');
            $('#about-title').css('top', 1550);
        }
    }else {
        $('#about-title').removeClass('title-fixed');
    }
});
*/
    
    function fixing(){
    
    var y = $(window).scrollTop();
    
    if(y >= startFix){
        $('#about-title').addClass('title-fixed');
        $('.about-title').css('top', 0);
        if(y >= stopFix){
            $('#about-title').removeClass('title-fixed');
            $('.about-title').css('top', 1000);
        }
    }else {
        $('#about-title').removeClass('title-fixed');
    }
}


var startFixpro = $('.section-projects').offset().top;
var stopFixpro = $('.section-projects').offset().top + $('#projects-intro').outerHeight() - 625;

$(document).scroll(fixingpro).scroll();
    
    function fixingpro(){
    
    var y = $(window).scrollTop();
    
    if(y >= startFixpro){
        $('#projects-title').addClass('title-fixed');
        $('.projects-title').css('top', 0);
        if(y >= stopFixpro){
            $('#projects-title').removeClass('title-fixed');
            $('.projects-title').css('top', 1000);
        }
    }else {
        $('#projects-title').removeClass('title-fixed');
    }
}