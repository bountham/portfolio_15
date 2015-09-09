$("p").hover (
  function(){
    $(this).append( $("<spand> View Site</span>"));
  },function(){
    $(this).find("span:last").remove();
  }
);
$("p.ruskushouse").hover(function(){
  $(this).fadeOut(100);
  $(this).fadeIn(500);
});
