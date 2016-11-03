$(document).ready(function(){

    $('#but1').click(function(){$('#par1').css('color','green').css('fontSize','20px');});

    $('#href1').hover(function(){document.getElementById('href1').style.color ='orange';}).mouseout(function(){document.getElementById('href1').style.color = 'blue';});

    $('#text1').select(function(){$(this).css('color','red').css('fontSize','20px');});

    $('#but2').toggle(function(){$('#par2').css('fontFamily','Times New Roman').css('color','red').css('border','none');},function(){$('#par2').css('fontFamily','Arial').css('color','blue');},function(){$('#par2').css('fontWeight','bold').css('fontFamily','Verdana').css('border','1px solid');});

});
