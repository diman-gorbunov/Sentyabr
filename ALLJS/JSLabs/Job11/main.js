$(document).ready(function(){

    $("#but1").click(function(){$("#par1").load("autumn.txt")});
    $("#but2").click(function(){$("#par1").load("winter.txt")});
    $("#but3").click(function(){$("#par1").load("summer.txt")});
    $("#but4").click(function(){$("#par1").load("spring.txt")});

    $("#but5").click(function(){$("#let1").load("secretword.php", "horse=10")}),
        $("#but5").click(function(){$("#let2").load("secretword.php", "look=5&meadow=23")}),
        $("#but5").click(function(){$("#let3").load("secretword.php", "dew=6&mount=64")}),
        $("#but5").click(function(){$("#let4").load("secretword.php", "bond=24&march=40")}),
        $("#but5").click(function(){$("#let5").load("secretword.php", "wise=43&strong=4&curve=29")}),
        $("#but5").click(function(){$("#let6").load("secretword.php", "fast=31&clever=76&moon=20")});

    $("#but6").click(function(){
        $.ajax({url: "secretword.php", data: "horse=10", success: function(result){
            $("#slet1").html(result);}});
        $.ajax({url: "secretword.php", data: "look=5&meadow=23", success: function(result){
            $("#slet2").html(result);}});
        $.ajax({url: "secretword.php", data: "dew=6&mount=64", success: function(result){
            $("#slet3").html(result);}});
        $.ajax({url: "secretword.php", data: "bond=24&march=40", success: function(result){
            $("#slet4").html(result);}});
        $.ajax({url: "secretword.php", data: "wise=43&strong=4&curve=29", success: function(result){
            $("#slet5").html(result);}});
        $.ajax({url: "secretword.php", data: "fast=31&clever=76&moon=20", success: function(result){
            $("#slet6").html(result);}});});

});