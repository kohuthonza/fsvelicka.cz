function scrollToAnchor(aid){
    var aTag = $("span[name='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}

$("#aboutus").click(function() {
   scrollToAnchor('aboutus');
});

$("#contact").click(function() {
   scrollToAnchor('contact');
});

$("#gallery").click(function() {
   scrollToAnchor('gallery');
});

$("#events").click(function() {
   scrollToAnchor('events');
});

$("#top").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});
