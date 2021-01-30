var inputAvatar = document.getElementById('avatar').value;

var boxAvatar = document.getElementById('viewAvatar');


if(inputAvatar.value === null){
  boxAvatar.innerHTML = 'Hola';
}else{
  boxAvatar.innerHTML = 'Adios'; 
} 