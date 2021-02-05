document.addEventListener("DOMContentLoaded", function() {
  var options = document.getElementById('options');

  options.onclick = function (){
    var optionsMenu = document.getElementById('optionsMenu');
    optionsMenu.classList.toggle('none');
    optionsMenu.classList.toggle('visible');
  
  }



  const inputAvatar = document.querySelector('#avatar');
  const imageAvatar = document.querySelector('#preview');

    
  inputAvatar.addEventListener("change", ()=>{
    const file = inputAvatar.files[0];
  
    if(file){
      const reader = new FileReader;
  
      reader.addEventListener("load", ()=>{
        console.log(this);
        imageAvatar.setAttribute("src", reader.result);
      });
  
      reader.readAsDataURL(file);
  
    }
  });

});

