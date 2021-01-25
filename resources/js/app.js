require('./bootstrap');




var test = document.getElementById('test');


test.onclick = function (){
  var testing = document.getElementById('testing');
  testing.classList.toggle('none');
  testing.classList.toggle('visible');

}