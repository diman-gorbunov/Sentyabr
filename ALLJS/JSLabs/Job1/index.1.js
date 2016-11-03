var per = [1, -1, 2, -2, 3];
var positiveArr = per.filter(function(number) {
  return number > 0;
});
alert( positiveArr );
//Массив map//
var names = ['a', 's', 'd'];
var nameLengths = names.map(function(name) {
  return name.length;
});
alert( nameLengths );
//Массив join//
  var a = ["Земля","Вода","Огонь"];
  var myVar1 = a.join();
  var myVar2 = a.join(", ");  
  var myVar3 = a.join(" + "); 
alert(a);
//Массив reverse//
res = [1,2,3]
a = res.reverse() 
for(var i=0; i<a.length; i++) {
  alert(a[i]) 
}
//Массив Sort//
var recrut = [ 1, 2, 15 ];
recrut.sort();
alert( recrut );
//Массив concat//
var str1 = "Hello ";
var str2 = "My!";
var str3 = "Friends";
var res = str1.concat(str2,str3); 
alert( res);
//Массив splice//
var cobula = ["Яблоко", "Груша", "Дыня", "Арбуз"];
cobula.splice(0, 3, "Банан", "Абрикос")
alert( cobula )
//Массив clice//
var arr = ["Работа", "полностью", "готова", "!"];
alert( arr.slice(1) );
//Массив forEach//
var flib = ["Яблоко", "Апельсин", "Груша"];
flib.forEach(function(item, i, arr) { 
  alert( i + ": " + item + " (Массив:" + flib + ")" );
});
///////////////////////////////////////////////////////
