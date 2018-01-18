
var figure=document.querySelector("figure"),
    img=figure.querySelector("img"),
    timer;
img.addEventListener("mousemove",function(){
    clearTimeout(timer);
    figure.classList.remove("paused");
    setTimeout(function(){
        figure.classList.add("paused");
    },300);
},0);

$('.model').mousemove(function(e){
  
  var offs = $(this).offset(),
      p    = {x:offs.left, y:offs.top},
      mPos = {x:e.pageX, y:e.pageY},
      x    = mPos.x - p.x - 50,
      y    = mPos.y - p.y - 50;
      
  $('.gray', this).css({left:x, top:y, backgroundPosition: -x+'px '+-y+'px'});
    
    $(document).ready(function() {
        $('.hover').bind('touchstart touchend', function(e) {
            e.preventDefault();
            $(this).toggleClass('hover_effect');
        });
    });
});