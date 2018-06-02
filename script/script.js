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


*/

window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}