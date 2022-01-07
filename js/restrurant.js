/** @format */

var num = [];
function display(id) {
<<<<<<< HEAD
  var quantity = document.getElementById(id);
  if (quantity.innerHTML == 0) {
    quantity.style.transform = "translateY(-200%)";
  } else {
    quantity.style.transform = "translateY(0)";
  }
=======
	var quantity = document.getElementById(id);
	if (quantity.innerHTML == 0){

		quantity.style.transform= ("scale(0)");}
	else{

		quantity.style.transform = ("scale(1)");}
>>>>>>> a1b09079a7ed9130d24dc080c836c767e3dd834f
}

function icr(typ = 0, cost) {
  if (num[typ] == null) {
    num[typ] = 0;
  }
  num[typ]++;
  $("#" + typ).text(num[typ]);
  display(typ);
}

function dcr(typ, cost) {
  if (num[typ] == null) {
    return 0;
  }
  if (num[typ] === 0) {
    return 0;
  }
  num[typ]--;
  $("#" + typ).text(num[typ]);
  display(typ);
}

$(document).ready(showSearchbar);
$(document).ready(currentMode);

function side() {
  $("body").toggleClass("side-open");
  $("#side-menu").toggleClass("side-open");
}

function showForm() {
  $("#signIn").toggle();
  $("#signUp").toggle();
}

function showSearchbar() {
  $(".searchForm").toggle();
}

function currentMode() {
  var theme = localStorage.getItem("theme");
  if (theme === "dark") {
    darkMode();
  }
}

function darkMode() {
  $("body").toggleClass("darkMode");
  $(".fa-adjust").toggleClass("fa-rotate-180");
  if (localStorage.getItem("theme") === "dark") {
    localStorage.setItem("theme", "light");
  } else {
    localStorage.setItem("theme", "dark");
  }
}
