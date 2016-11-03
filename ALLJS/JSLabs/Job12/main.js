$(document).ready(function(){

    $("#but1").click(function(){
        $("#demo p").adjust();
    });
    $("#but2").click(function(){
        $("#demo p").adjust({size:"2em"});
    });
    $("#but3").click(function(){
        $("#demo p").adjust({size:"1.7em",color:"green"});
    });

});