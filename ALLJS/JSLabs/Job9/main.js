$(document).ready(function(){

    $("#but1").click(function(){
        var t=$("#par1").html();
        $("#par2").html(t);
    });

    $("#but2").click(function(){
        $("#par3").append("HTML");
        $("#par4").prepend("CSS");
        $("#par5").prepend("Java Script");
        $("#par6").prepend("JQery");
    });
    $("#but3").click(function(){
        $("#href1").html($("#href1").attr("href"));
    });

    $("#but4").click(function(){

        $("#par8").attr("id","style2");
        $("#par9").attr("id","style3");
        $("#par10").attr("id","style1");
        $("#par11").attr("id","style4");
    });
});