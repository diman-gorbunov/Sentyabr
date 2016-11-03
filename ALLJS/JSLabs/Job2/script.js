var setup = function () {
 alert(1);
 return function () {
 alert(2);
 };
};
var my = setup(); 
my();
///////////////////////////
var mobs = function () {
 alert("Hello mobs!");
 mobs = function () {
 alert("Hello mobs Ivan!");
 };
};
mobs();
mobs();
////////////////////////////
(function () {
 alert("Good!");
}());
////////////////////////////
(function () {
 var days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
 today = new Date(),
 msg = 'Today is ' + days[today.getDay()] + ', ' + today.getDate();
 alert(msg);
}());
