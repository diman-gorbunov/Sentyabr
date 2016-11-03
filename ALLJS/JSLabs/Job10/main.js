$(document).ready(function(){


    $("#but1").click(function(){
        var arr = [];
        for(var i = 1; i <=3; i++){ $("#par"+i).each(function(){arr.push("par" + i + " - " + $(this).css("color")); });}
        alert(arr); });

    $("#but2").click(function(){
        $("#par4").css("color","red"),
            $("#par5").css("font-size","25px"),
            $("#par6").css({"font-family":"Verdana","font-size":"33px"})
        $("#par7").css({"font-weight":"bold","font-family":"Times New Roman","color":"red","font-size":"27px"})
    });
});