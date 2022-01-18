$("#submit").on("click",function(){
    $("#submit").animate({opacity:0.5});
});

$("h1")
    .mouseenter(function(){
       $("h1").css("color","red");
     })
     .mouseleave(function(){
        $("h1").css("color","#fe0090");
      })


