$(document).ready(function(){

    $("#but1").click(function(){$("#par1").fadeOut(2000);});
    $("#but2").click(function(){$("#par1").fadeIn(2000);})

    $("#par2").mouseover(function(){$("#par2").fadeTo(3000, 0.2);});
    $("#par2").mouseout(function(){$("#par2").fadeTo(1, 1);});

    $("#but3").click(function(){$("#wrap1").slideUp(5000);});
    $("#but4").click(function(){$("#wrap1").slideDown(7000);});

    $("#but5").click(function(){
        $("#redsquare").animate({left:205},1000);
        $("#redsquare").animate({top:15},1000);
        $("#redsquare").animate({left:405},1000);
        $("#redsquare").animate({top:105},1000);
        $("#redsquare").animate({left:505},1000);
        $("#redsquare").animate({top:305},1000);
        $("#redsquare").animate({left:205},1000);
        $("#redsquare").animate({top:305},1000);
        $("#redsquare").animate({left:55},1000);
        $("#redsquare").animate({top:105},1000);
    });
});