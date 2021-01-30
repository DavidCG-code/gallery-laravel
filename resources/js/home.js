var search = document.getElementById('search');


search.onclick = function (){
var input = document.getElementById('searchInput');
input.classList.toggle('none');
input.classList.toggle('container__search--visible');
}